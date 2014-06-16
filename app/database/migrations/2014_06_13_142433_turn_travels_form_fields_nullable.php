<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TurnTravelsFormFieldsNullable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('ALTER TABLE travels MODIFY control_ordinance_to_mileage int(11),  
			MODIFY control_ordinance_to_date date, MODIFY travel_performace varchar(255), 
			MODIFY travel_performace_reason varchar(255)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('ALTER TABLE travels MODIFY control_ordinance_to_mileage int(11) NOT NULL,
			MODIFY control_ordinance_to_date date NOT NULL, MODIFY travel_performace varchar(255) NOT NULL,
			MODIFY travel_performace_reason varchar(255) NOT NULL');
	}

}
