<?php
namespace Transnatal\Services\Validation;

class VehicleValidator extends Validator {

	public function __construct()
	{
		$this->rules = [
		 'manufacture_year' => 'required',
		 'model_year' => 'required',
		 'vehicle_plate' => 'required',
		 'plate_uf' => 'required',
		 'vehicle_chassis' => 'required',
		 'owner' => 'required',
		 'owner_address' => 'required',
		 'document_number' => 'required',
		 'renavam' => 'required',
		 'vehicle_type' => 'required',
		 'brand_model' => 'required',
		 'color' => 'required'
		];

		$this->messages = [
		 'manufacture_year.required' => 'O campo Fabricação é necessário.',
		 'model_year.required' => 'O campo Ano Modelo é necessário.',
		 'vehicle_plate.required' => 'O campo Placa é necessário.',
		 'plate_uf.required' => 'O campo UF da Placa é necessário.',
		 'vehicle_chassis.required' => 'O campo Chassi é necessário.',
		 'owner.required' => 'O campo Proprietário é necessário.',
		 'owner_address.required' => 'O campo Endereço do Proprietário é necessário.',
		 'document_number.required' => 'O campo Nº do Documento é necessário.',
		 'renavam.required' => 'O campo Código do RENAVAM é necessário.',
		 'vehicle_type.required' => 'O campo Tipo do Veículo é necessário.',
		 'brand_model.required' => 'O campo Marca/Modelo é necessário.',
		 'color.required' => 'O campo Cor é necessário.'
		];
	}
}