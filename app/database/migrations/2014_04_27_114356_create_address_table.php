<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addresses', function(Blueprint $t) {
            $t->increments('id');
			$t->string('street');
			$t->integer('number');
			$t->string('neighborhood');
			$t->string('city');
			$t->string('state');
			$t->string('zip_code');
			$t->string('reference');
			$t->string('complement');
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
		Schema::drop('addresses');
	}

}
