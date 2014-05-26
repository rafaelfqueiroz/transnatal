<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SealNumbersToIntType extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('ALTER TABLE travels MODIFY seal_number_from int(11) NOT NULL');
		DB::statement('ALTER TABLE travels MODIFY seal_number_to int(11) NOT NULL');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('ALTER TABLE travels MODIFY seal_number_from date NOT NULL');
		DB::statement('ALTER TABLE travels MODIFY seal_number_to date NOT NULL');
	}

}
