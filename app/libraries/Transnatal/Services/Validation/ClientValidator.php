<?php
namespace Transnatal\Services\Validation;

class ClientValidator extends Validator {

	public function __construct()
	{
		$this->rules = [
		 'name' => 'required',
		 'rg' => 'required',
		 'cic' => 'required',
		 'birthday' => 'required',
		 'home_phone' => 'required',
		 'cel_phone' => 'required'
		];		
	}
}