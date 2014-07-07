<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixServiceOrdersFields extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('service_orders', function($t)
		{
		    $t->string('local')->nullable();
		    $t->date('arrive_date')->nullable();
		    $t->date('survey_date')->nullable();
		    $t->time('survey_hour')->nullable();
		    $t->string('length')->nullable();
		    $t->string('payament_responsible')->nullable();
		    $t->string('cic')->nullable();
		    $t->string('phone_number')->nullable();
		    $t->string('fax')->nullable();
		    $t->integer('payament_local')->unsigned()->nullable();
			$t->foreign('payament_local')->references('id')->on('addresses')->onDelete('cascade')->onUpdate('cascade');
			$t->integer('client_id')->unsigned()->nullable();
			$t->foreign('client_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
			$t->integer('driver_id')->unsigned()->nullable();
			$t->foreign('driver_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
			$t->integer('vehicle_id')->unsigned()->nullable();
			$t->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('service_orders', function($t)
		{
		    $t->dropColumn('local');
		    $t->dropColumn('arrive_date');
		    $t->dropColumn('survey_date');
		    $t->dropColumn('survey_hour');
		    $t->dropColumn('length');
		    $t->dropColumn('payament_responsible');
		    $t->dropColumn('cic');
		    $t->dropColumn('phone_number');
		    $t->dropColumn('fax')->nullable();
		    $t->dropColumn('payament_local');
		    $t->dropColumn('client_id');
		    $t->dropColumn('driver_id');
		    $t->dropColumn('vehicle_id');
		});
	}

}
