<?php
namespace Transnatal\Providers;

use Illuminate\Support\ServiceProvider;

class NewsServiceProvider extends ServiceProvider {

  public function register() {

    $this->app->bind('Transnatal\Services\NewsService\Subjects\SubjectInterface', 
      'Transnatal\Services\NewsService\Subjects\NewsSubject');

  }
}