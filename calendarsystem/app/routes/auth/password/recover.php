<?php

$app->get('/recover-password', $guest(), function() use ($app) {
  $app->render('auth/password/recover.php');
})->name('password.recover');
