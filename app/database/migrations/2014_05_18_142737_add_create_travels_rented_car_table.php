<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCreateTravelsRentedCarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('travels_rented_car', function(Blueprint $t) {
            $t->increments('id');
            $t->float('travel_price');
            $t->float('price_paid');
            $t->float('price_to_pay');
            $t->integer('vehicle_id')->unsigned();
			$t->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade')->onUpdate('cascade');
			$t->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('travels_rented_car');
	}

}
