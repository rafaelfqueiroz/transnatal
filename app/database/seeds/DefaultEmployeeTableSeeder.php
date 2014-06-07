<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DefaultEmployeeTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('employees')->delete();
		Employee::create(array(
			'name' => 'Administrador',
			'admission_date' => '0000-00-00',
			'resignation_date' => '0000-00-00',
			'rg' => '000.000.000',
			'cpf' => '000.000.000-00',
			'birthday' => '0000-00-00',
			'home_phone' => '(00) 0000-0000',
			'cel_phone' => '(00) 0000-0000',
			'bank_account' => '00000',
			'bank_agency' => '0000',
			'bank_op' => '000',
			'bank_name' => 'none',
			'license_number' => '00000',
			'license_category' => 'A',
			'license_pamcard' => '00000',
			'address_id' => '1'
		));
	}

}