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
	}
}