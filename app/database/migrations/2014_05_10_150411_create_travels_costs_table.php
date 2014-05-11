<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelsCostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('travels_costs', function(Blueprint $t) {
            $t->increments('id');
            $t->date('cost_date');
            $t->string('cost_local');
            $t->string('cost_description');
            $t->integer('invoice_number');
            $t->float('cost_value');
            $t->integer('mileage');
            $t->integer('liters');
            $t->integer('km_point_to_point');
            $t->integer('travel_id')->unsigned();
			$t->foreign('travel_id')->references('id')->on('travels')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('travels_costs');
	}

}
