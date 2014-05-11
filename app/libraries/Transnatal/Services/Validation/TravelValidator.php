<?php
namespace Transnatal\Services\Validation;

class TravelValidator extends Validator {

	public function __construct()
	{
		$this->rules = [
		 'manifest_number' => 'required',
		 'issue_date' => 'required',
		 'to' => 'required',
		 'control_ordinance_from_mileage' => 'required',
		 'control_ordinance_from_date' => 'required',
		 'control_ordinance_to_mileage' => 'required',
		 'control_ordinance_to_date' => 'required',
		 'out_suply_liters' => 'required',
		 'out_km' => 'required',
		 'arrival_suply_liters' => 'required',
		 'arrival_km' => 'required',
		 'travel_performace' => 'required',
		 'travel_performace_reason' => 'required',
		 'vehicle_id' => 'required',
		 'employee_id' => 'required'
		];		
	}
}