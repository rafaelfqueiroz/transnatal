<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVehicleDataFields extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('ALTER TABLE vehicles ADD capacity varchar(255), ADD truck_plate varchar(255),
			ADD truck_plate_uf varchar(255),  ADD container_number varchar(255), ADD container_size varchar(255), 
			ADD container_type varchar(255)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('ALTER TABLE vehicles DROP capacity, DROP truck_plate, DROP truck_plate_uf, 
			DROP container_number, DROP container_size, DROP container_type');
	}

}
