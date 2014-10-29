<?php
namespace Transnatal\Services\Validation\TravelValidator;

class SimpleValidation extends BaseValidation {

  public function __construct()
  {
    $this->rules = [
      'travel_to' => 'required'
    ];

    $this->messages = [
      'travel_to.required' => 'O campo destino é necessário.',
    ];
  }

  public function validate($input) {
    return true;
  }
}