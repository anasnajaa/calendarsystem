<?php

namespace paaetsystem\Helpers;

class Hash {

	protected $config;

	public function __construct($config){
		$this->config = $config;
		/*for debugging*/
		//var_dump($this->config);
	}

	public function password($password)
	{
		return password_hash($password,
		$this->config->get('app.hash.algo'),
		['cost' => $this->config->get('app.hash.cost')]);
	}

	public function passwordCheck($password, $hash)
	{
		/*if(function_exists('password_verify')){
			return password_verify($password, $hash);
		} else {
			return($password === $hash);
		}*/
		//return($password === $hash);
		//return crypt($hash,$password);
		
		return password_verify($password, $hash);
	}

	public function hash($input)
	{
		return hash('sha256', $input);
	}

	public function hashCheck($know, $user)
	{
		//careful when using with older version of php (< 5.6) otherwis, you can use
		
			if(function_exists('hash_equals'))
			{
				return hash_equals($know,$user);
			} else {
				return($know === $user);
			}
		
		//return hash_equals($know,$user);
	}
}
