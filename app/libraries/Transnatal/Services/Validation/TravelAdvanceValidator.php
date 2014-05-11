<?php
namespace Transnatal\Services\Validation;

class TravelAdvanceValidator extends Validator {

	public function __construct()
	{
		$this->rules = [
		 'advance_local' => 'required',
		 'advance_date' => 'required',
		 'voucher_number' => 'required',
		 'advance_value' => 'required',
		 'travel_id' => 'required'
		];		
	}
}