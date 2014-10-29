<?php
namespace Transnatal\Providers;

use Illuminate\Support\ServiceProvider;
use Config;

class ValidatorServiceProvider extends ServiceProvider {

  public function register() {

    $this->app->bind('Transnatal\Services\Validation\TravelValidator\BaseValidation', 
      'Transnatal\Services\Validation\TravelValidator\\' . Config::get('validation.travel_type'));

  }
}