<?php
namespace Transnatal\Services\Validation;

class TravelCostValidator extends Validator {

	public function __construct()
	{
		$this->rules = [
		 'cost_date' => 'required',
		 'cost_local' => 'required',
		 'cost_description' => 'required',
		 'invoice_number' => 'required',
		 'cost_value' => 'required'
		 ];

		 $this->messages = [
		 'cost_date.required' => 'O campo data do consumo é necessário',
		 'cost_local.required' => 'O campo local do consumo é necessário',
		 'cost_description.required' => 'O campo descrição do consumo é necessário',
		 'invoice_number.required' => 'O campo nota fiscal é necessário',
		 'cost_value.required' => 'O campo valor do consumo é necessário'
		];
	}
}