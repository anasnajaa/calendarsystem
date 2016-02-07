<?php
define('ROOT', dirname(__DIR__));
require ROOT .'/app/start.php';
$app->run();


//var_dump($app->auth->username);