<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicles', function(Blueprint $t) {
            $t->increments('id');
            $t->integer('manufacture_year');
            $t->integer('model_year');
            $t->string('vehicle_plate', 8);
            $t->string('vehicle_chassis');
            $t->string('owner');
            $t->date('license_plate');
            $t->string('renavam');
            $t->string('vehicle_type');
            $t->string('brand_model');
            $t->string('color');
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
		Schema::drop('vehicles');
	}

}
