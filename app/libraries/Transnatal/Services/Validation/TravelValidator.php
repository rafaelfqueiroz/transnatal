<?php
namespace Transnatal\Services\Validation;

use Transnatal\Services\Validation\TravelValidator\BaseValidation;

class TravelValidator extends Validator {

	public function __construct(BaseValidation $validator)
	{
		$this->validator = $validator;
	}

	public function validate($input)
	{
		$this->rules = $this->validator->get_rules();
		$this->messages = $this->validator->get_messages();

		$result 	= parent::validate($input);
		$specific	= $this->validator->validate($input);

		if ($result && $specific) {
			return true;
		}

		$this->errors = [];
		if (!$result) $this->errors = $this->errors->toArray();
		$this->errors = array_merge_recursive($this->errors, $this->validator->errors);
		return false;
	}
}