<?php
namespace Transnatal\Services\Validation\TravelValidator;

class ComplexValidation extends BaseValidation {

  public function __construct()
  {
    $this->rules = [
      'travel_to' => 'required',
      'out_km' => 'required',
      'arrival_km' => 'required'
    ];

    $this->messages = [
      'travel_to.required' => 'O campo destino é necessário.',
      'out_km.required' => 'O campo quilometragem de saída é necessário.',
      'arrival_km.required' => 'O campo quilometragem de chegada é necessário.'
    ];
  }

  public function validate($input) {
    $saida_km   = $input["out_km"];
    $chegada_km = $input["arrival_km"];

    $distancia = $chegada_km - $saida_km;

    if ($distancia == 0) return false;

    $cheques = (isset($input["checks"])) ? $input["checks"] : array();
    $valor = 0;

    foreach ($cheques as $cheque) {
      $valor += $cheque["check_value"];
    }

    $por_km = $valor / $distancia;

    if ($por_km < 1) {
      $this->errors[] = 'O preço por km foi: R$' . number_format($por_km, 2) . '. O mínimo é R$1.00.';
      return false;
    }

    return true;
  }
}