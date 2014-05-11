<?php
namespace Transnatal\Services\Validation;

class TravelCostValidator extends Validator {

	public function __construct()
	{
		$this->rules = [
		 'cost_date' => 'required',
		 'cost_local' => 'required',
		 'costDescription' => 'required',
		 'invoice_number' => 'required',
		 'cost_value' => 'required',
		 'travel_id' => 'required'
		 ];		
	}
}