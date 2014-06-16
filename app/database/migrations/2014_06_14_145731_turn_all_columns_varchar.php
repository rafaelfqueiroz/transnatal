<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TurnAllColumnsVarchar extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('ALTER TABLE vehicles MODIFY manufacture_year varchar(255), MODIFY model_year varchar(255)');

		DB::statement('ALTER TABLE travels_routes MODIFY from_km varchar(255), MODIFY from_date varchar(255), MODIFY to_km varchar(255),
			MODIFY to_date varchar(255)');

		DB::statement('ALTER TABLE travels_rented_car MODIFY travel_price varchar(255), MODIFY price_paid varchar(255), MODIFY price_to_pay varchar(255)');

		DB::statement('ALTER TABLE travels_costs MODIFY cost_date varchar(255), MODIFY invoice_number varchar(255), MODIFY cost_value varchar(255), 
			MODIFY mileage varchar(255), MODIFY liters varchar(255), MODIFY km_point_to_point varchar(255)');

		DB::statement('ALTER TABLE travels_advances MODIFY advance_date varchar(255), MODIFY advance_value varchar(255)');

		DB::statement('ALTER TABLE travels MODIFY manifest_number varchar(255), MODIFY issue_date varchar(255), MODIFY seal_number_from varchar(255),
		 MODIFY seal_number_to varchar(255), MODIFY out_km varchar(255), MODIFY arrival_km varchar(255), MODIFY general_informations_date varchar(255), 
		 MODIFY control_ordinance_from_mileage varchar(255), MODIFY control_ordinance_from_date varchar(255), MODIFY control_ordinance_to_mileage varchar(255), 
		 MODIFY control_ordinance_to_date varchar(255)');

		DB::statement('ALTER TABLE services_order_travel MODIFY so_number varchar(255)');

		DB::statement('ALTER TABLE employees MODIFY admission_date varchar(255), MODIFY birthday varchar(255), MODIFY license_validity varchar(255)');

		DB::statement('ALTER TABLE clients MODIFY birthday varchar(255)');

		DB::statement('ALTER TABLE addresses MODIFY number varchar(255)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('ALTER TABLE vehicles MODIFY manufacture_year int(11), MODIFY model_year int(11)');

		DB::statement('ALTER TABLE travels_routes MODIFY from_km int(11), MODIFY from_date date, MODIFY to_km int(11),
			MODIFY to_date date');

		DB::statement('ALTER TABLE travels_rented_car MODIFY travel_price float(8,2), MODIFY price_paid float(8,2), MODIFY price_to_pay float(8,2)');

		DB::statement('ALTER TABLE travels_costs MODIFY cost_date date, MODIFY invoice_number int(11), MODIFY cost_value float(8,2), 
			MODIFY mileage int(11), MODIFY liters int(11), MODIFY km_point_to_point int(11)');

		DB::statement('ALTER TABLE travels_advances MODIFY advance_date date, MODIFY advance_value float(8,2)');

		DB::statement('ALTER TABLE travels MODIFY manifest_number int(11), MODIFY issue_date date, MODIFY seal_number_from int(11),
		 MODIFY seal_number_to int(11), MODIFY out_km int(11), MODIFY arrival_km int(11), MODIFY general_informations_date date, 
		 MODIFY control_ordinance_from_mileage int(11), MODIFY control_ordinance_from_date date, MODIFY control_ordinance_to_mileage int(11), 
		 MODIFY control_ordinance_to_date date');

		DB::statement('ALTER TABLE services_order_travel MODIFY so_number int(11)');

		DB::statement('ALTER TABLE employees MODIFY admission_date date, MODIFY birthday date, MODIFY license_validity date');

		DB::statement('ALTER TABLE clients MODIFY birthday date');

		DB::statement('ALTER TABLE addresses MODIFY number int(11)');
	}

}
