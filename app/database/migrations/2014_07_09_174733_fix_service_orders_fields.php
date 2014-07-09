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
		DB::statement('ALTER TABLE service_orders MODIFY so_number varchar(11), MODIFY so_date date, MODIFY so_hour time, MODIFY service_type varchar(255), MODIFY start_at time, MODIFY interval time, MODIFY restart_at time, MODIFY ends_at time, MODIFY fees_price float(8,2), MODIFY over_fees_price float(8,2), MODIFY tota_price float(8,2), MODIFY payament_method varchar(255), MODIFY box_number_held varchar(11), MODIFY box_number_delivered varchar(11), MODIFY seller_id int(11), MODIFY employee_id int(11), MODIFY address_id_from int(11), MODIFY address_id_to int(11)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('ALTER TABLE service_orders MODIFY so_number int(11) NOT NULL, MODIFY so_date date NOT NULL, MODIFY so_hour time, MODIFY service_type varchar(255) NOT NULL, MODIFY start_at time NOT NULL, MODIFY interval time NOT NULL, MODIFY restart_at time NOT NULL, MODIFY ends_at time NOT NULL, MODIFY fees_price float(8,2) NOT NULL, MODIFY over_fees_price float(8,2) NOT NULL, MODIFY tota_price float(8,2) NOT NULL, MODIFY payament_method varchar(255) NOT NULL, MODIFY box_number_held int(11) NOT NULL, MODIFY box_number_delivered int(11) NOT NULL, MODIFY seller_id int(11) NOT NULL, MODIFY employee_id int(11) NOT NULL, MODIFY address_id_from int(11) NOT NULL, MODIFY address_id_to int(11) NOT NULL');
	}

}
