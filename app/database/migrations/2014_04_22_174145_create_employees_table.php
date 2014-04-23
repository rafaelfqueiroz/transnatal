<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('employees', function(Blueprint $t) {
            $t->increments('id');
			$t->string('name');
			$t->dateTime('admission_date');
			$t->dateTime('resignation_date');
			$t->string('rg', 11);
			$t->string('cpf', 14);
			$t->date('birthday');
			$t->string('home_phone');
			$t->string('cel_phone');
			$t->string('bank_account');
			$t->string('bank_agency');
			$t->string('bank_op');
			$t->string('bank_name');
			$t->string('license_number');
			$t->string('license_category');
			$t->string('license_pamcard');
			$t->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
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
	    Schema::drop('employees');
	}

}
