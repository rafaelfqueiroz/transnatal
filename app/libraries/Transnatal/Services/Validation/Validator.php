<?php
namespace Transnatal\Services\Validation;
use Validator as V;

abstract class Validator {

	protected $rules;

	protected $errors;

	protected $messages;

	public function getRules()
	{
		return $this->rules;
	}

	public function validate($input)
	{
		$validator = V::make($input, $this->rules, $this->messages);
		if ($validator->fails())
		{
			$this->errors = $validator->messages();
			return false;
		}
		return true;
	}

	public function getErrors()
	{
		return $this->errors;
	}

	/**
	Substitui as regreas padrão com as que estão na varável $new_rules.
	**/
	public function setRules($new_rules)
	{
		$this->rules = $new_rules;
	}

	/**
	Altera o valor de $rules na posição de $key
	ou adiciona caso não exista.
	**/
	public function addORChangeRule($key, $rule)
	{
		$this->rules[$key] = $rule;
	}
}