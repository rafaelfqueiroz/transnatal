<?php
namespace Transnatal\Services\Validation;

class VehicleValidator extends Validator {

	public function __construct()
	{
		$this->rules = [
		 'manufacture_year' => 'required',
		 'model_year' => 'required',
		 'vehicle_plate' => 'required',
		 'vehicle_chassis' => 'required',
		 'owner' => 'required',
		 'license_plate' => 'required',
		 'renavam' => 'required',
		 'vehicle_type' => 'required',
		 'brand_model' => 'required',
		 'color' => 'required',
		];

		$this->messages = [
		 'manufacture_year.required' => 'O campo ano de fabricação é necessário.',
		 'model_year.required' => 'O campo ano modelo é necessário.',
		 'vehicle_plate.required' => 'O campo Placa é necessário.',
		 'vehicle_chassis.required' => 'O campo chassi é necessário.',
		 'owner.required' => 'O campo proprietário é necessário.',
		 'license_plate.required' => 'O campo emplacamento é necessário.',
		 'renavam.required' => 'O campo renavam é necessário.',
		 'vehicle_type.required' => 'O campo tipo do veículo é necessário.',
		 'brand_model.required' => 'O campo marca/modelo é necessário.',
		 'color.required' => 'O campo cor é necessário.'
		];
	}
}