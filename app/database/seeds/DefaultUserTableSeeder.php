<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DefaultUserTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('users')->delete();
		User::create(array(
			'username' => 'admin',
			'password' => 'admin',
			'email' => 'admin@transnatal.com.br',
			'employee_id' => '1'
		));
	}

}