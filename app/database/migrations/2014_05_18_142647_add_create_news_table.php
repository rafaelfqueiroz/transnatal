<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCreateNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('news', function(Blueprint $t) {
			$t->increments('id');
			$t->date('news_date');
			$t->longText('news_message');
			$t->integer('user_id')->unsigned();
			$t->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('news');
	}

}
