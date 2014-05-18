<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddServicesOrderTravelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('services_order_travel', function(Blueprint $t) {
			$t->integer('so_number');
			$t->integer('travel_rented_car_id')->unsigned();
			$t->foreign('travel_rented_car_id')->references('id')->on('travels_rented_car')->onDelete('cascade')->onUpdate('cascade');
			$t->timestamps();
			/*
			 * Futuramente terá o relacionamento com a tabela de ordem de serviço:
			$t->integer('service_order_id')->unsigned();
			$t->foreign('service_order_id')->references('id')->on('service_orders')->onDelete('cascade')->onUpdate('cascade');
			*/
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('services_order_travel');
	}

}
