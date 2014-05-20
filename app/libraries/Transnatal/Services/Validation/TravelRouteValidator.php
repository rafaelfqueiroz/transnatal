<?php
namespace Transnatal\Services\Validation;

class TravelRouteValidator extends Validator {

	public function __construct()
	{
		$this->rules = [
		 'from' => 'required',
		 'to' => 'required',
		 'from_km' => 'required',
		 'from_date' => 'required',
		 'to_km' => 'required',
		 'to_date' => 'required'
		];

		$this->messages = [
		 'from.required' => 'O campo origem da rota é necessário',
		 'to.required' => 'O campo destino da rota é necessário',
		 'from_km.required' => 'O campo quilometragem de saída da rota é necessário',
		 'from_date.required' => 'O campo data de saída da rota é necessário',
		 'to_km.required' => 'O campo quilometragem de chegada da rota é necessário',
		 'to_date.required' => 'O campo data de saída da rota é necessário'
		];
	}
}