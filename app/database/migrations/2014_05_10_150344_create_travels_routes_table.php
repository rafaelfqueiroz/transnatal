<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelsRoutesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('travels_routes', function(Blueprint $t) {
            $t->increments('id');
            $t->string('from');
            $t->string('to');
            $t->integer('from_km');
            $t->date('from_date');
            $t->integer('to_km');
            $t->date('to_date');
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
		Schema::drop('travels_routes');
	}

}
