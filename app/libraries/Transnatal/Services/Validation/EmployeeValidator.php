<?php
namespace Transnatal\Services\Validation;

class EmployeeValidator extends Validator {

	public function __construct()
	{
		$this->rules = [
		 'name' => 'required',
		 'admission_date' => 'required',
		 'resignation_date' => 'required',
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
		 'license_pamcard' => 'required',
		 'address_id' => 'required'
		];		
	}
}