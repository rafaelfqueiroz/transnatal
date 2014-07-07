<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClientFields extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('ALTER TABLE clients ADD type_entity tinyint(1), ADD corporate_name varchar(255), ADD state_registration varchar(255), ADD cnpj varchar(255)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('ALTER TABLE clients DROP type_entity tinyint(1), DROP corporate_name varchar(255), DROP state_registration varchar(255), DROP cnpj varchar(255)');
	}

}
