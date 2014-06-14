<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeAllColumnsToNullable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('ALTER TABLE travels MODIFY manifest_number int(11), MODIFY issue_date date, MODIFY travels.to varchar(255), MODIFY seal_number_from int(11),
			MODIFY seal_number_to int(11), MODIFY out_km int(11), MODIFY arrival_km int(11), MODIFY general_informations varchar(255), MODIFY general_informations_date date,
			MODIFY observation varchar(255), MODIFY control_ordinance_from_mileage int(11), MODIFY control_ordinance_from_date date, MODIFY document_receipt_arrive tinyint(1),
			MODIFY all_documents_right tinyint(1), MODIFY tachograph_right tinyint(1)');
		
		DB::statement('ALTER TABLE travels_advances MODIFY advance_local varchar(255), MODIFY advance_date date, MODIFY advance_value float(8,2)');
		
		DB::statement('ALTER TABLE travels_costs MODIFY cost_date date, MODIFY cost_local varchar(255), MODIFY cost_description varchar(255), MODIFY invoice_number int(11),
			MODIFY cost_value float(8,2), MODIFY mileage int(11), MODIFY liters int(11), MODIFY km_point_to_point int(11)');
		
		DB::statement('ALTER TABLE travels_routes MODIFY travels_routes.from varchar(255), MODIFY travels_routes.to varchar(255), MODIFY from_km int(11), MODIFY from_date date,
			MODIFY to_km int(11), MODIFY to_date date');
		
		DB::statement('ALTER TABLE vehicles MODIFY manufacture_year int(11), MODIFY model_year int(11), MODIFY vehicle_plate varchar(8), MODIFY vehicle_chassis varchar(255), 
			MODIFY owner varchar(255), MODIFY renavam varchar(255), MODIFY vehicle_type varchar(255), MODIFY brand_model varchar(255), MODIFY color varchar(255),
			MODIFY plate_uf varchar(255), MODIFY owner_address varchar(255), MODIFY document_number varchar(255)');

		DB::statement('ALTER TABLE clients MODIFY name varchar(255), MODIFY rg varchar(11), MODIFY cic varchar(35), MODIFY birthday date, MODIFY home_phone varchar(255),
			MODIFY cel_phone varchar(255)');

		DB::statement('ALTER TABLE employees MODIFY name varchar(255), MODIFY rg varchar(11), MODIFY cpf varchar(14), MODIFY birthday date, 
			MODIFY home_phone varchar(255), MODIFY cel_phone varchar(255)');

		DB::statement('ALTER TABLE travels_rented_car MODIFY travel_price float(8,2), MODIFY price_paid float(8,2), MODIFY price_to_pay float(8,2)');

		DB::statement('ALTER TABLE addresses MODIFY street varchar(255), MODIFY number int(11), MODIFY neighborhood varchar(255), MODIFY city varchar(255), 
			MODIFY state varchar(255), MODIFY zip_code varchar(255), MODIFY reference varchar(255), MODIFY complement varchar(255)');

		DB::statement('ALTER TABLE services_order_travel MODIFY so_number int(11)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('ALTER TABLE travels MODIFY manifest_number int(11) NOT NULL, MODIFY issue_date date NOT NULL, MODIFY travels.to varchar(255) NOT NULL, MODIFY seal_number_from int(11) NOT NULL,
			MODIFY seal_number_to int(11) NOT NULL, MODIFY out_km int(11) NOT NULL, MODIFY arrival_km int(11) NOT NULL, MODIFY general_informations varchar(255) NOT NULL, MODIFY general_informations_date date NOT NULL,
			MODIFY observation varchar(255) NOT NULL, MODIFY control_ordinance_from_mileage int(11) NOT NULL, MODIFY control_ordinance_from_date date NOT NULL, MODIFY document_receipt_arrive tinyint(1) NOT NULL,
			MODIFY all_documents_right tinyint(1) NOT NULL, MODIFY tachograph_right tinyint(1) NOT NULL');
		
		DB::statement('ALTER TABLE travels_advances MODIFY advance_local varchar(255) NOT NULL, MODIFY advance_date date, MODIFY advance_value float(8,2) NOT NULL');
		
		DB::statement('ALTER TABLE travels_costs MODIFY cost_date date NOT NULL, MODIFY cost_local varchar(255) NOT NULL, MODIFY cost_description varchar(255) NOT NULL, MODIFY invoice_number int(11) NOT NULL,
			MODIFY cost_value float(8,2) NOT NULL, MODIFY mileage int(11) NOT NULL, MODIFY liters int(11) NOT NULL, MODIFY km_point_to_point int(11) NOT NULL');
		
		DB::statement('ALTER TABLE travels_routes MODIFY travels_routes.from varchar(255) NOT NULL, MODIFY travels_routes.to varchar(255) NOT NULL, MODIFY from_km int(11) NOT NULL, MODIFY from_date date NOT NULL,
			MODIFY to_km int(11) NOT NULL, MODIFY to_date date NOT NULL');
		
		DB::statement('ALTER TABLE vehicles MODIFY manufacture_year int(11) NOT NULL, MODIFY model_year int(11) NOT NULL, MODIFY vehicle_plate varchar(8) NOT NULL, MODIFY vehicle_chassis varchar(255) NOT NULL, 
			MODIFY owner varchar(255) NOT NULL, MODIFY renavam varchar(255) NOT NULL, MODIFY vehicle_type varchar(255) NOT NULL, MODIFY brand_model varchar(255) NOT NULL, MODIFY color varchar(255) NOT NULL,
			MODIFY plate_uf varchar(255) NOT NULL, MODIFY owner_address varchar(255) NOT NULL, MODIFY document_number varchar(255) NOT NULL');

		DB::statement('ALTER TABLE clients MODIFY name varchar(255) NOT NULL, MODIFY rg varchar(11) NOT NULL, MODIFY cic varchar(35) NOT NULL, MODIFY birthday date NOT NULL, MODIFY home_phone varchar(255) NOT NULL,
			MODIFY cel_phone varchar(255) NOT NULL');

		DB::statement('ALTER TABLE employees MODIFY name varchar(255) NOT NULL, MODIFY rg varchar(11) NOT NULL, MODIFY cpf varchar(14) NOT NULL, MODIFY birthday date NOT NULL, 
			MODIFY home_phone varchar(255) NOT NULL, MODIFY cel_phone varchar(255) NOT NULL');

		DB::statement('ALTER TABLE travels_rented_car MODIFY travel_price float(8,2) NOT NULL, MODIFY price_paid float(8,2) NOT NULL, MODIFY price_to_pay float(8,2) NOT NULL');

		DB::statement('ALTER TABLE addresses MODIFY street varchar(255) NOT NULL, MODIFY number int(11) NOT NULL, MODIFY neighborhood varchar(255) NOT NULL, MODIFY city varchar(255) NOT NULL, 
			MODIFY state varchar(255) NOT NULL, MODIFY zip_code varchar(255) NOT NULL, MODIFY reference varchar(255) NOT NULL, MODIFY complement varchar(255) NOT NULL');

		DB::statement('ALTER TABLE services_order_travel MODIFY so_number int(11) NOT NULL');
	}

}
