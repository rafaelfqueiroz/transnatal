<?php
namespace Transnatal\Services\Validation;

class EmployeeValidator extends Validator {

	public function __construct()
	{
		$this->rules = [
		 'name' => 'required',
		 'admission_date' => 'required',
		 'rg' => 'required',
		 'cpf' => 'required',
		 'birthday' => 'required',
		 'home_phone' => 'required',
		 'cel_phone' => 'required'
		];

		$this->messages = [
		 'name.required' => 'O campo nome é necessário.',
		 'admission_date.required' => 'O campo data de admissão é necessário.',
		 'rg.required' => 'O campo rg é necessário.',
		 'cpf.required' => 'O campo cpf é necessário.',
		 'birthday.required' => 'O campo data de nascimento é necessário.',
		 'home_phone.required' => 'O campo telefone fixo é necessário.',
		 'cel_phone.required' => 'O campo telefone celular é necessário.'
		];
	}
}