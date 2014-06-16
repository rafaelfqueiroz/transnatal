<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveTravelsSuplyLiters extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('ALTER TABLE travels DROP out_suply_liters, DROP arrival_suply_liters');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('ALTER TABLE travels ADD out_suply_liters float(8,2) NOT NULL, ADD arrival_suply_liters float(8,2) NOT NULL');
	}

}
