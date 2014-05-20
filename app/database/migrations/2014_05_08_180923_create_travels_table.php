<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('travels', function(Blueprint $t) {
            $t->increments('id');
            $t->integer('manifest_number');
            $t->date('issue_date');
            $t->string('to');
            $t->date('seal_number_from');
            $t->date('seal_number_to');
            $t->float('out_suply_liters');
            $t->integer('out_km');
			$t->float('arrival_suply_liters');
            $t->integer('arrival_km');
            $t->string('travel_performace');
            $t->string('travel_performace_reason');
            $t->string('general_informations');
            $t->date('general_informations_date');
            $t->string('observation');
            $t->integer('control_ordinance_from_mileage');
            $t->date('control_ordinance_from_date');
            $t->integer('control_ordinance_to_mileage');
            $t->date('control_ordinance_to_date');
            $t->boolean('document_receipt_arrive');
            $t->boolean('all_documents_right');
            $t->boolean('tachograph_right');
            $t->integer('vehicle_id')->unsigned();
			$t->integer('employee_id')->unsigned();
			$t->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade')->onUpdate('cascade');
			$t->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('travels');
	}

}
