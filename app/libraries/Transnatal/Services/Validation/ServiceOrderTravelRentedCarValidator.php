<?php
namespace Transnatal\Services\Validation;

class ServiceOrderTravelRentedCarValidator extends Validator {

	public function __construct()
	{
		$this->rules = [
		 'service_orders' => 'required'
		];

		$this->messages = [
		 'service_orders.required' => 'O campo Ordem de Serviço é necessário.'
		];
	}
}