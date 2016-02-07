<?php
return [
	'app' => [
		'url' => 'http://192.168.1.121',
		'hash' => [
			'algo' => 'PASSWORD_BCRYPT',
			'cost' => 10
		]
	],
	'db' => [
		'driver' => 'mysql',
		'host' => '127.0.0.1',
		'name' => 'paaet_db',
		'username' => 'xxx-xxx',
		'password' => 'xxx-xxx',
		'charset' => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix' => ''
	],
	'auth' => [
		'session' => 'user_id',
		'remember' => 'user_r'
	],
	'mail' => [
		'smtp_auth' => true,
		'smtp_secure' => 'ssl',
		'host' => 'smtp.gmail.com',
		'username' => 'xxx',
		'password' => 'xxx',
		'port' => '465',
		'html' => true
	],
	'twig' => [
		'debug' => true
	],
	'csrf' => [
		'key' => 'csrf_token'
	]
]
?>
