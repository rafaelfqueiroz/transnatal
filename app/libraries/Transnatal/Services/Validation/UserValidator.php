<?php
namespace Transnatal\Validation;

class UserValidator extends Validator {

	public function __construct()
	{
		$this->rules = [
		 'username' => 'required',
		 'password' => 'required',
		 'email' => 'required',
		 'email' => 'required',
		 'home_phone' => 'required',
		 'employee_id' => 'required'
		];		
	}
}