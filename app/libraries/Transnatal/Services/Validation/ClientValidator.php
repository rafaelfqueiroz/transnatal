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

		$this->messages = [
		 'name.required' => 'O campo nome é necessário.',
		 'rg.required' => 'O campo rg é necessário.',
		 'cic.required' => 'O campo cic é necessário.',
		 'birthday.required' => 'O campo data de nascimento é necessário.',
		 'home_phone.required' => 'O campo telefone fixo é necessário.',
		 'cel_phone.required' => 'O campo telefone celular é necessário.'
		];
	}
}