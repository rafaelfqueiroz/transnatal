<?php
namespace Transnatal\Services\Validation;

class TravelRentedCarValidator extends Validator {

	public function __construct()
	{
		$this->rules = [
		 'travel_price' => 'required',
		 'price_paid' => 'required',
		 'price_to_pay' => 'required',
		 'vehicle_id' => 'required'
		];

		$this->messages = [
		'travel_price.required' => 'O campo valor da viagem é necessário',
		 'price_paid.required' => 'O campo valor pago é necessário',
		 'price_to_pay.required' => 'O campo valor a pagar é necessário',
		 'vehicle_id.required' => 'O campo veículo é necessário é necessário'
		];
	}
}