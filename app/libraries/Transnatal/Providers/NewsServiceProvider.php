<?php
namespace Transnatal\Providers;

use Config;
use Event;
use Illuminate\Support\ServiceProvider;

class NewsServiceProvider extends ServiceProvider {

  public function register() {

    $observers = Config::get('alerts.news_types');
    foreach ($observers as $observer) {
      Event::listen('eloquent.saved: News', 'Transnatal\\Services\\NewsService\\Observers\\' . $observer);
    }

  }
}