<?php
namespace Transnatal\Validation;
use Validator;

abstract class Validator{

	protected $messages = [
	'required' => 'Preencha o campo :atribute.',
	'size' => 'O campo :atribute deve ter menos que :size caracteres.',
	'numeric' => 'O campo :atribute deve conter apenas números.'
	'min' => 'O campo :atribute deve conter no mínimo :min caracteres.',
	'max' => 'O campo :atribute deve conter no máximo :min caracteres.',
	'email' => 'Preencha o email no formato correto',
	'confirmed' => 'A senha e a confirmação devem ser iguais.'
	];

	protected $rules;

	protected $errors;

	public function getRules()
	{
		return $this->rules;
	}

	public function validate($input)
	{
		$valodator = Validator::make($input, $rules);
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
}