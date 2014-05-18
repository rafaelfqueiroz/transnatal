<?php
namespace Transnatal\Services\Validation;

class ServiceOrderTravelRentedCarValidator extends Validator {

	public function __construct()
	{
		$this->rules = [
		 'so_number' => 'required'
		];

		$this->messages = [
		 'so_number.required' => 'O campo Ordem de Serviço é necessário.'
		];
	}
}