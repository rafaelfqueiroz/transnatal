<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => "O :attribute deve ser aceito.",
	"active_url"           => "O :attribute não é uma URL válida.",
	"after"                => "O :attribute deve ser uma data após :date.",
	"alpha"                => "O :attribute deve apenas conter letras.",
	"alpha_dash"           => "O :attribute deve apenas conter letras, numeros, e traços.",
	"alpha_num"            => "O :attribute deve apenas conter letras e números.",
	"array"                => "O :attribute deve ser um array.",
	"before"               => "O :attribute deve ser uma data antes de :date.",
	"between"              => array(
		"numeric" => "O :attribute deve estar entre :min e :max.",
		"file"    => "O :attribute deve estar entre :min e :max kilobytes.",
		"string"  => "O :attribute deve estar entre :min e :max caracteres.",
		"array"   => "O :attribute deve ter entre :min e :max itens.",
	),
	"confirmed"            => "O :attribute de confirmação não confere.",
	"date"                 => "O :attribute não é uma data válida.",
	"date_format"          => "O :attribute não confere com o formato :format.",
	"different"            => "O :attribute e :other devem ser diferentes.",
	"digits"               => "O :attribute deve ter :digits digitos.",
	"digits_between"       => "O :attribute deve estar entre :min e :max digitos.",
	"email"                => "O :attribute deve ser um endereço de e-mail válido.",
	"exists"               => "O :attribute selecionado é inválido.",
	"image"                => "O :attribute deve ser uma imagem.",
	"in"                   => "O :attribute selecionado é invalido.",
	"integer"              => "O :attribute deve ser um inteiro.",
	"ip"                   => "O :attribute deve ser um endereço de IP válido.",
	"max"                  => array(
		"numeric" => "O :attribute não pode ser maior que :max.",
		"file"    => "O :attribute não pode ser maior que :max kilobytes.",
		"string"  => "O :attribute não pode ter mais que :max caracteres.",
		"array"   => "O :attribute não pode ter mais que :max itens.",
	),
	"mimes"                => "O :attribute deve ter um arquivo do tipo: :values.",
	"min"                  => array(
		"numeric" => "O :attribute deve ter pelo menos :min.",
		"file"    => "O :attribute deve ter pelo menos :min kilobytes.",
		"string"  => "O :attribute deve ter pelo menos :min caracteres.",
		"array"   => "O :attribute deve ter pelo menos :min itens.",
	),
	"not_in"               => "O selected :attribute is invalid.",
	"numeric"              => "O :attribute must be a number.",
	"regex"                => "O :attribute format is invalid.",
	"required"             => "O campo :attribute é necessário.",
	"required_if"          => "O campo :attribute é necessário quando :oOr é :value.",
	"required_with"        => "O campo :attribute é necessário quando :values está presente.",
	"required_with_all"    => "O campo :attribute é necessário quando :values está presente.",
	"required_without"     => "O campo :attribute é necessário quando :values não está presente.",
	"required_without_all" => "O campo :attribute é necessário quando nenhum dos :values estão presentes.",
	"same"                 => "O :attribute e :other devem conferir.",
	"size"                 => array(
		"numeric" => "O :attribute deve ser :size.",
		"file"    => "O :attribute deve ter :size kilobytes.",
		"string"  => "O :attribute deve ter :size caracteres.",
		"array"   => "O :attribute deve conter :size itens.",
	),
	"unique"               => "O :attribute já foi usado.",
	"url"                  => "O formato de :attribute é inválido.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(
		'attribute-name' => array(
			'rule-name' => 'custom-message',
		),
	),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
