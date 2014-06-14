<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeVoucherNumberToAdvanceDescription extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('ALTER TABLE travels_advances DROP voucher_number');
		DB::statement('ALTER TABLE travels_advances ADD advance_description varchar(255)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('ALTER TABLE travels_advances DROP advance_description');
		DB::statement('ALTER TABLE travels_advances ADD voucher_number int(11) NOT NULL');
	}

}
