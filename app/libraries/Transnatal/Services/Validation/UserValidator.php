<?php
namespace Transnatal\Services\Validation;

class UserValidator extends Validator {

	public function __construct()
	{
		$this->rules = [
		 'username' => 'required',
		 'password' => 'required',
		 'email' => 'required',
		 'employee_id' => 'required'
		];

		$this->messages = [
		'username.required' => 'O campo nome de usuário é necessário.',
		'password.required' => 'O campo senha é necessário.',
		'email.required' => 'O campo email é necessário.'
		];	
	}
}