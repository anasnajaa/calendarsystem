<?php

namespace paaetsystem\Validation;

use Violin\Violin;

use paaetsystem\User\User;
use paaetsystem\Helpers\Hash;

class Validator extends Violin
{

	protected $user;

	protected $hash;

	protected $auth;

	public function __construct(User $user, Hash $hash, $auth = null)
	{
		$this->user = $user;
		$this->hash = $hash;
		$this->auth = $auth;

		$this->addFieldMessages([
			'email' => [
				'uniqueEmail' => 'Email is already in use.'
				],
			'username' => [
				'uniqueUsername' => 'Username is already in use.'
				]
		]);

		$this->addRuleMessages([
				'matchesCurrentPassword' => 'That does not match your current password.'
			]);
	}

	//custom method for violin prepended by "validate_"
	public function validate_uniqueEmail($value, $input,$args)
	{
		$user = $this->user->where('email', $value);
		//var_dump($user);
		//echo $user->count();
		//return ! (bool) $user->count();
		return ! (bool) $user->count();
	}

	public function validate_matchesCurrentPassword($value,$input,$args)
	{
		//is user signed in and hash is identical to current password, allow the user to change password
		if ($this->auth && $this->hash->passwordCheck($value,$this->auth->password)) {
			return true;
		}
		return false;
	}

	public function validate_uniqueUsername($value, $input,$args)
	{
		$user = $this->user->where('username', $value);
		return ! (bool) $user->count();
	}
}
