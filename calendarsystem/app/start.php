<?php

use Slim\Slim;
use Slim\Views\Twig; //for html
use Slim\Views\TwigExtension;


use Noodlehaus\Config;
use RandomLib\Factory as RandomLib;

use paaetsystem\User\User;
use paaetsystem\Event\Event;
use paaetsystem\Mail\Mailer;
use paaetsystem\Helpers\Hash;
use paaetsystem\Validation\Validator;

use paaetsystem\Middleware\BeforeMiddleware;
use paaetsystem\Middleware\CsrfMiddleware;

session_cache_limiter(false);
session_start(); //Starts an PHPSSID (check devtools->resources

/* debugging mode on */
ini_set('display_errors', 'On');
define('INC_ROOT', dirname(__DIR__));

/* load all libraries */
require INC_ROOT . '/vendor/autoload.php';
//Password_verify not compatible with php < 5.5, had to use external library
//Ref: https://github.com/ircmaxell/password_compat
//Todo: add to composer
require INC_ROOT . '/vendor/password/password.php';
//echo INC_ROOT;

/*Set mode of the enviroment*/
$app = new Slim([
	'mode' => file_get_contents(INC_ROOT . '/mode.php'),
	'view' => new Twig(),
	'templates.path' => INC_ROOT . '/app/views',
	]);
//echo $app->config('mode');

/*attach MiddleWare functions*/
$app->add(new BeforeMiddleware);
$app->add(new CsrfMiddleware);

/*Pull configurations from /app/config which then can be used inside of that scope*/
$app->configureMode($app->config('mode'), function() use ($app) {
	$app->config = Config::load(INC_ROOT . "/app/config/{$app->mode}.php");
});
//var_dump($app->config);//Verify configurations
//echo $app->config->get('db.driver');

/*Load Database Configurations/routes after defining $app*/
require INC_ROOT . '/app/config/database.php';
require INC_ROOT . '/app/filters.php'; //muse be included before routes
require INC_ROOT . '/app/routes.php';

//$user = new \paaetsystem\User\User;

$app->auth = false;

 /*adding models  to the container while refrencing main app*/
$app->container->set('user', function() {
	return new User;
});

$app->container->set('event', function() {
	return new Event;
});
 //var_dump($app->user);//Verify user model
 /*singlton method does not change throught the application, have a static state*/
 $app->container->singleton('hash', function() use ($app){
	return new Hash($app->config);
 });

 $app->container->singleton('validation', function() use ($app){
	 return new Validator($app->user, $app->hash, $app->auth);
 });

 //mailer
 $app->container->singleton('mail', function() use ($app) {
	 $mailer = new PHPMailer;
	 $mailer->IsSMTP();
	 $mailer->Host= $app->config->get('mail.host');
	 $mailer->SMTPAuth = $app->config->get('mail.smtp_auth');
	 $mailer->SMTPSecure = $app->config->get('mail.smtp_secure');
	 $mailer->Port = $app->config->get('mail.port');
	 $mailer->Username = $app->config->get('mail.username');
	 $mailer->Password = $app->config->get('mail.password');
	 $mailer->IsHTML($app->config->get('mail.html'));
	 //$mailer->SMTPDebug = 1;
	 return new Mailer($app->view, $mailer);
	 // return mailer object
 });

$app->container->singleton('randomlib', function() {
	$factory = new RandomLib;
	return $factory->getMediumStrengthGenerator();
});

 $view = $app->view();

 $view->parserOptions = [
	'debug' => $app->config->get('twig.debug')
 ];

 $view->parserExtensions = [
	new TwigExtension
 ];

$app->get('/', function() use ($app){
  $app->render('home.php');
});



//echo $app->hash->password('test');

//$test_pass = 'test';
//var_dump($app->hash->passwordCheck('test1','$2y$10$yvpfYsu5FDiKiKRMah07HulhGuvY6B3JfzJomIalegJ3zC54m0agK'));
