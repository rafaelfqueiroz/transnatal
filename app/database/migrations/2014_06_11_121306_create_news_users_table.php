<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('news_users', function (Blueprint $t) {
			$t->increments('id');
			$t->integer('news_id')->unsigned();
			$t->foreign('news_id')->references('id')->on('news');
			$t->integer('employee_id')->unsigned();
			$t->foreign('employee_id')->references('id')->on('employees');
			$t->boolean('flag_read');
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
		Schema::drop('news_users');
	}

}
