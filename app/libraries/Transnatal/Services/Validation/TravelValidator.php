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

		$errors = [];
		if (!$result) $errors = $this->errors->toArray();
		$errors = array_merge_recursive($errors, $this->validator->errors);

		$this->errors = $errors;
		return false;
	}
}