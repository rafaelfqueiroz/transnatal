<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $t) {
            $t->increments('id');
			$t->string('name');
			$t->string('rg', 11);
			$t->string('cic', 35);
			$t->date('birthday');
			$t->string('home_phone');
			$t->string('cel_phone');
			$t->integer('address_id')->unsigned();
			$t->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('clients');
	}

}
