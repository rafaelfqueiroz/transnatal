<?php
namespace Transnatal\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

	public function register() {

		$this->app->bind('Transnatal\Interfaces\AddressRepositoryInterface', 
			'Transnatal\Repositories\DbAddressRepository');

		$this->app->bind('Transnatal\Interfaces\ClientRepositoryInterface',
			'Transnatal\Repositories\DbClientRepository');

		$this->app->bind('Transnatal\Interfaces\EmployeeRepositoryInterface',
			'Transnatal\Repositories\DbEmployeeRepository');

		$this->app->bind('Transnatal\Interfaces\UserRepositoryInterface',
			'Transnatal\Repositories\DbUserRepository');
	}
}