<?php
namespace Transnatal\Providers;

use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider {

  public function register() {

    $this->app->bind('Transnatal\Services\Validation\TravelValidator\BaseValidation', 
      'Transnatal\Services\Validation\TravelValidator\ComplexValidation');

  }
}