<?php
namespace Transnatal\Services\Validation\TravelValidator;

class NoValidation extends BaseValidation {

  public function __construct()
  {
    $this->rules = [
    ];

    $this->messages = [
    ];
  }

  public function validate($input) {
    return true;
  }
}