<?php

  $authenticationCheck = function($required) use ($app) {
    return function() use($required, $app) {
      if((!$app->auth && $required) || ($app->auth && !$required)) //check comments below
      {
        $app->redirect($app->urlFor('home'));
      }
    };
  };


//Auth levels
$authinticated = function() use($authenticationCheck) {
  return $authenticationCheck(true);
};

$guest = function() use($authenticationCheck) {
  return $authenticationCheck(false);
};

$admin = function() use($app) {
  return function() use ($app) {
      if (!$app->auth || !$app->auth->isAdmin()){
        $app->redirect($app->urlFor('home'));
      }
  };
};

//User is not authinticated and tring to access auth required data
//User is authinticated but he's not supposed to access that data "access levels, access of reg when he's logged in, etc.."
