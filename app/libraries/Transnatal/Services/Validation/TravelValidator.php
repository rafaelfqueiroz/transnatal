<?php
namespace Transnatal\Services\Validation;

class TravelValidator extends Validator {

	public function __construct()
	{
		$this->rules = [
		 'manifest_number' => 'required',
		 'issue_date' => 'required',
		 'travel_to' => 'required',
		 'control_ordinance_from_mileage' => 'required',
		 'control_ordinance_from_date' => 'required',
		 // 'control_ordinance_to_mileage' => 'required',
		 // 'control_ordinance_to_date' => 'required',
		 'out_km' => 'required',
		 'arrival_km' => 'required'
		 // 'travel_performace' => 'required',
		 // 'travel_performace_reason' => 'required'
		];

		$this->messages = [
		 'manifest_number.required' => 'O campo manifesto é necessário',
		 'issue_date.required' => 'O campo data de emissão é necessário',
		 'travel_to.required' => 'O campo destino é necessário',
		 'control_ordinance_from_mileage.required' => 'O campo quilometragem de saída do controle de portaria é necessário',
		 'control_ordinance_from_date.required' => 'O campo data de saída do controle de portaria é necessário',
		 // 'control_ordinance_to_mileage.required' => 'O campo quilometragem de chegada do controle de portaria é necessário',
		 // 'control_ordinance_to_date.required' => 'O campo data de chegada do controle de portaria é necessário',
		 'out_km.required' => 'O campo quilometragem de saída é necessário',
		 'arrival_km.required' => 'O campo quilometragem de chegada é necessário'
		 // 'travel_performace.required' => 'O campo desempenho global é necessário',
		 // 'travel_performace_reason.required' => 'O campo motivo do desempenho global é necessário'
		];
	}
}