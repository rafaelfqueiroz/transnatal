<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $t) {
            $t->increments('id');
			$t->string('username');
			$t->string('password');
			$t->string('email');
			$t->integer('employee_id')->unsigned();
			$t->foreign('employee_id')->references('id')->on('employees');
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
		Schema::drop('users');
	}

}
