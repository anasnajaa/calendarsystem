<?php

namespace paaetsystem\Middleware;

use Exception;
use Slim\Middleware;

class CsrfMiddleware extends Middleware
{
  protected $key;
  public function call()
  {

    $this->key = $this->app->config->get('csrf.key');

    $this->app->hook('slim.before', [$this, 'check']);

    $this->next->call();
  }

  public function check()
  {
      //echo 'CSRF protected.';

      if (!isset($_SESSION[$this->key])) {
        $_SESSION[$this->key] = $this->app->hash->hash(
        $this->app->randomlib->generateString(128,7)
        );
      }
      $token = $_SESSION[$this->key];
      //echo $_SESSION[$this->key];

      if (in_array($this->app->request()->getMethod(), ['POST', 'PUT', 'DELETE'])){
        $submittedToken = $this->app->request()->post($this->key) ?: '';
        //echo $submittedToken;

        //TODO: Repair CSRF tokkens as it breaks after uploading files larger than 10 MB
        if (!$this->app->hash->hashCheck($token, $submittedToken)) {
          throw new Exception("CSRF token mismatch", 1);
        }
      }

      $this->app->view()->appendData([
        'csrf_key' => $this->key,
        'csrf_token' => $token
      ]);
  }
}
