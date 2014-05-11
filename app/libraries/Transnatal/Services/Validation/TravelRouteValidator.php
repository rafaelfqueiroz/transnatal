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
		 'to_date' => 'required',
		 'travel_id' => 'required'
		];		
	}
}