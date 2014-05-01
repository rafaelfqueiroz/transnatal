<?php
namespace Transnatal\Services\Validation;
use Validator as V;

abstract class Validator {

	protected $messages = [
	'required' => 'Preencha o campo :atribute.',
	'size' => 'O campo :atribute deve ter menos que :size caracteres.',
	'numeric' => 'O campo :atribute deve conter apenas números.',
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
		$valodator = V::make($input, $rules);
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

	/**
	Substitui as mensagens padrão com as que estão na varável $new_messages.
	**/
	public function setMessages($new_messages)
	{
		$this->messages = $new_messages;
	}

	/**
	Altera o valor de $messages na posição de $key
	ou adiciona caso não exista.
	**/
	public function addORChangeMessages($key, $message)
	{
		$this->messages[$key] = $message;
	}
}