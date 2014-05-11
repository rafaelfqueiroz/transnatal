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
		 'cel_phone' => 'required',
		 'bank_account' => 'required',
		 'bank_agency' => 'required',
		 'bank_op' => 'required',
		 'bank_name' => 'required',
		 'license_number' => 'required',
		 'license_category' => 'required',
		 'license_pamcard' => 'required'
		];

		$this->messages = [
		 'name.required' => 'O campo nome é necessário.',
		 'admission_date.required' => 'O campo data de admissão é necessário.',
		 'rg.required' => 'O campo rg é necessário.',
		 'cpf.required' => 'O campo cpf é necessário.',
		 'birthday.required' => 'O campo data de nascimento é necessário.',
		 'home_phone.required' => 'O campo telefone fixo é necessário.',
		 'cel_phone.required' => 'O campo telefone celular é necessário.',
		 'bank_account.required' => 'O campo conta do banco é necessário.',
		 'bank_agency.required' => 'O campo agência do banco é necessário.',
		 'bank_op.required' => 'O campo operação é necessário.',
		 'bank_name.required' => 'O campo nome do banco é necessário.',
		 'license_number.required' => 'O campo número da carteira é necessário.',
		 'license_category.required' => 'O campo categoria é necessário.',
		 'license_pamcard.required' => 'O campo pamcard é necessário'
		];
	}
}