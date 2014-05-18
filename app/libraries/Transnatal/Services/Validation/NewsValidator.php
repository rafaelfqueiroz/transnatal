<?php
namespace Transnatal\Services\Validation;

class NewsValidator extends Validator {

	public function __construct()
	{
		$this->rules = [
		 'news_date' => 'required',
		 'news_message' => 'required'
		];

		$this->messages = [
		 'news_date.required' => 'O campo data é necessário.',
		 'news_message.required' => 'O campo mensagem é necessário.'
		];
	}
}