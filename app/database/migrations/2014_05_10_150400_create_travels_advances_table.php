<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelsAdvancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('travels_advances', function(Blueprint $t) {
            $t->increments('id');
            $t->string('advance_local');
            $t->date('advance_date');
            $t->integer('voucher_number');
            $t->float('advance_value');
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
		Schema::drop('travels_advances');
	}

}
