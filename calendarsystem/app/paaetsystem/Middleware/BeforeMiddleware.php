<?php

namespace paaetsystem\Middleware;

use Slim\Middleware;

class BeforeMiddleware extends Middleware
{
	public function call()
	{
		$this->app->hook('slim.before', [$this, 'run']);

		$this->next->call();
	}

	public function run()
	{
		if (isset($_SESSION[$this->app->config->get('auth.session')])) {
			// user is authenticated
			$this->app->auth = $this->app->user->where('id', $_SESSION[$this->app->config->get('auth.session')])->first();
		}
			//var_dump($this->app->auth);
			//echo $_SESSION[$this->app->config->get('auth.session')];
			$this->checkRememberMe();
			//remember, the following are status holder, they are not particular to a login case
			$this->app->view()->appendData([
				'auth' => $this->app->auth,
				'baseUrl' => $this->app->config->get('app.url')
			]);
	}

	public function checkRememberMe()
	{
		if($this->app->getCookie($this->app->config->get('auth.remember')) && !$this->app->auth) {
			//echo 'attemept login';
			$data = $this->app->getCookie($this->app->config->get('auth.remember'));
			$credentials = explode('___', $data);
			//var_dump($credentials); Remove && !$this->app->auth before attempting to debug
			//User trying to request our app, check if the cookies are legit
			$trimmed_data = trim($data);
			if (empty($trimmed_data) || count($credentials) !== 2){
				//todo Flash a message indicating an illegal transaction.
				$this->app->response->redirect($this->app->urlFor('home'));
			} else {
				$identifier = $credentials[0];
				$token = $this->app->hash->hash($credentials[1]);

				$user = $this->app->user
					->where('remember_identifier', $identifier)
					->first();
				//if the user had previously marked the remember me check box
				if ($user) {
					echo 'ok!';
					if ($this->app->hash->hashCheck($token, $user->remember_token)) {
						$_SESSION[$this->app->config->get('auth.session')] = $user->id;
						$this->app->auth = $this->app->user->where('id', $user->id)->first();
					} else {
						$user->removeRememberCredentials();
					}
				}
			}
		}
	}

}
