<?php

$app->get('/activate', $guest(), function() use($app) {

  $request = $app->request;
  $email = $request->get('email');
  $identifier = $request->get('identifier');

  $hashedidentifier = $app->hash->hash('identifier');

  $user = $app->user->where('email', $email)
  ->where('active', false)
  ->first();

  if(!$user || $app->hash->hashCheck($user->active_hash, $hashedidentifier))
  {
    $app->flash('identityerror', 'Identity error.');
    $app->response->redirect($app->urlFor('home'));
  } else {
    $user->activateAccount();
    $app->flash('activationsuccess', 'Your account is active.');
    $app->response->redirect($app->urlFor('home'));
  }
})->name('activate');
