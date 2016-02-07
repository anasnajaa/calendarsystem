<?php

$app->get('/', function() use ($app){
	//Testing randomLib
	//echo $app->randomlib->generateString(128);
	$app->render('home.php');
})->name('home');
