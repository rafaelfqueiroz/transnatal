<?php
namespace Transnatal\Services\Validation;

class TravelAdvanceValidator extends Validator {

	public function __construct()
	{
		$this->rules = [
		 'advance_local' => 'required',
		 'advance_date' => 'required',
		 'voucher_number' => 'required',
		 'advance_value' => 'required'
		];

		$this->messages = [
		 'advance_local.required' => 'O campo local do adiantamento é necessário',
		 'advance_date.required' => 'O campo data do adiantamento é necessário',
		 'voucher_number.required' => 'O campo número do vale do adiantamento é necessário',
		 'advance_value.required' => 'O campo valor do vale do adiantamento é necessário'
		];
	}
}