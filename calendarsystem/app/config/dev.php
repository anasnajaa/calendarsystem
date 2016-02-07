<?php
return [
	'app' => [
		'url' => 'https://localhost',
		'hash' => [
			'algo' => 1,
			'cost' => 10
		]
	],
	'db' => [
		'driver' => 'mysql',
		'host' => '172.27.27.29',
		'name' => 'paaet_as',
		'username' => 'xxx-xxx',
		'password' => 'xxx-xxx',
		'charset' => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix' => ''
	],
	'auth' => [
		'session' => 'cal_user_id',
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
