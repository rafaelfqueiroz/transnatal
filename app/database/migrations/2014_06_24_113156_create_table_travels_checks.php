<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTravelsChecks extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('travels_checks', function(Blueprint $t) {
			$t->increments('id');
			$t->string('check_number')->nullable();
			$t->string('check_value')->nullable();
			$t->string('bank')->nullable();
			$t->boolean('bank_conference')->nullable();
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
		Schema::drop('travels_checks');
	}

}
