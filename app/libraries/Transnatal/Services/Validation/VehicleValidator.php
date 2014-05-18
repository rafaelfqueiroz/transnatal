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
		 'color' => 'required'
		];

		$this->messages = [
		 'manufacture_year.required' => 'O campo Fabricação é necessário.',
		 'model_year.required' => 'O campo Ano Modelo é necessário.',
		 'vehicle_plate.required' => 'O campo Placa é necessário.',
		 'vehicle_chassis.required' => 'O campo Chassi é necessário.',
		 'owner.required' => 'O campo Proprietário é necessário.',
		 'license_plate.required' => 'O campo Data de Emplacamento é necessário.',
		 'renavam.required' => 'O campo Código do RENAVAM é necessário.',
		 'vehicle_type.required' => 'O campo Tipo do Veículo é necessário.',
		 'brand_model.required' => 'O campo Marca/Modelo é necessário.',
		 'color.required' => 'O campo Cor é necessário.'
		];
	}
}