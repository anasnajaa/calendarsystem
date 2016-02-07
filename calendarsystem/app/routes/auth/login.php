<?php

use Carbon\Carbon;

$app->get('/login', $guest(), function () use($app) {

	$app->render('/auth/login.php');

})->name('login');

$app->post('/login', $guest(), function() use($app) {
	//echo 'Form Posted';

	$request = $app->request;


	$identifier = $request->post('identifier');
	$password = $request->post('password');
	$remember = $request->post('remember');
	$valid = $app->validation;

	$valid->validate([
		'identifier' => [$identifier, 'required'],
		'password' => [$password, 'required']
	]);

	if ($valid->passes()) {
		//Expermintal query for elequent
		/*$user = $app->user
		->where('username', $identifier)
		->orWhere('email', $identifier)
		->where('active', true)
		->first();*/

		$user = $app->user
    ->where(function ($app) use ($identifier){ $app
			->where('username', '=', $identifier)
      ->orWhere('email', '=', $identifier);
    })
		->where('active', 1)
		->first();

		if ($user && $app->hash->passwordCheck($password, $user->password)) {

			$_SESSION[$app->config->get('auth.session')] = $user->id;

			//Remember me functionality implemintation//
			//Notes:Using carbon for date time
			//			Using cookies to store token and ID rand strings
			if ($remember === 'on') {
				$rememberIdentifier = $app->randomlib->generateString(128,7);
				$rememberToken = $app->randomlib->generateString(128,7);

				$user->updateRememberCredentials(
					$rememberIdentifier,
					$app->hash->hash($rememberToken)
				);

				$app->setCookie(
					$app->config->get('auth.remember'),
					"{$rememberIdentifier}___{$rememberToken}",
					Carbon::parse('+1 week')->timestamp
				);
			}

			$app->flash('signedin', 'تم تسجيل الدخول بنجاح');
			$app->response->redirect($app->urlFor('home'));

		} else {
			$app->flash('failedsignin', 'خطأ في اسم المستخدم أو كلمة المرور');
			$app->response->redirect($app->urlFor('login'));
		}
	}
	$app->render('auth/login.php' , [
		'errors' => $valid->errors(),
		'request' => $request
	]);
})->name('login.post');
