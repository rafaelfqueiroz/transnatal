<?php
namespace Transnatal\Services\Validation\TravelValidator;

abstract class BaseValidation {
  abstract public function validate($input);

  public $errors = [];

  public function get_rules() {
    return $this->rules;
  }

  public function get_messages() {
    return $this->messages;
  }
}

?>