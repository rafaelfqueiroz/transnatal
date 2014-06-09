<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TurnEmployeeLicenseBankNullable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('ALTER TABLE employees MODIFY license_number varchar(255), MODIFY license_category varchar(255),
			MODIFY license_pamcard varchar(255), MODIFY bank_account varchar(255), MODIFY bank_agency varchar(255), 
			MODIFY bank_op varchar(255), MODIFY	bank_name varchar(255)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('ALTER TABLE employees MODIFY license_number varchar(255) NOT NULL, MODIFY license_category varchar(255) NOT NULL,
			MODIFY license_pamcard varchar(255) NOT NULL, MODIFY bank_account varchar(255) NOT NULL, MODIFY bank_agency varchar(255) NOT NULL,
			MODIFY bank_op varchar(255) NOT NULL, MODIFY bank_name varchar(255) NOT NULL');
	}

}
