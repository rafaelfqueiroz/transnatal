<?php
namespace Transnatal\Services\Validation;

class AddressValidator extends Validator {

	public function __construct()
	{
		$this->rules = [
		 'street' => 'required',
		 'number' => 'required',
		 'neighborhood' => 'required',
		 'city' => 'required',
		 'state' => 'required',
		 'zip_code' => 'required',
		 'reference' => 'required',
		 'complement' => 'required'
		];		
	}
}