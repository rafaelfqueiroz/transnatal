<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCreateServiceOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('service_orders', function(Blueprint $t) {
            $t->increments('id');
            $t->integer('so_number');
            $t->date('so_date');
            $t->time('so_hour');
            $t->string('service_type');
            $t->time('start_at');
            $t->time('interval');
            $t->time('restart_at');
            $t->time('ends_at');
            $t->float('fees_price');
            $t->float('over_fees_price');
            $t->float('total_price');
            $t->string('payament_method');
            $t->integer('box_number_held');
            $t->integer('box_number_delivered');
            $t->integer('seller_id')->unsigned();
			$t->foreign('seller_id')->references('id')->on('employees')->onDelete('cascade')->onUpdate('cascade');
            $t->integer('employee_id')->unsigned();
			$t->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade')->onUpdate('cascade');
            $t->integer('address_id_from')->unsigned();
			$t->foreign('address_id_from')->references('id')->on('addresses')->onDelete('cascade')->onUpdate('cascade');
			$t->integer('address_id_to')->unsigned();
			$t->foreign('address_id_to')->references('id')->on('addresses')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('service_orders');
	}
}
