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
		 'zip_code' => 'required'
		];

		$this->messages = [
		 'street.required' => 'O campo logradouro é necessário.',
		 'number.required' => 'O campo número é necessário.',
		 'neighborhood.required' => 'O campo bairro é necessário.',
		 'city.required' => 'O campo cidade é necessário.',
		 'state.required' => 'O campo estado é necessário.',
		 'zip_code.required' => 'O campo CEP é necessário.'
		];
	}
}