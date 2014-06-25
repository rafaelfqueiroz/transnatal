<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveTravelsCheckFields extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('ALTER TABLE travels DROP check_number, DROP check_value, DROP bank, DROP bank_conference');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('ALTER TABLE travels ADD check_number varchar(255), ADD check_value varchar(255), ADD bank varchar(255), ADD bank_conference tinyint(1)');
	}

}
