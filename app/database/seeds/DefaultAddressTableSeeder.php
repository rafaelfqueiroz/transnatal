<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DefaultAddressTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('addresses')->delete();
		Address::create(array(
			'street' => 'None',
			'number' => '0000',
			'neighborhood' => 'None',
			'city' => 'None',
			'state' => 'RN',
			'zip_code' => '00000-00',
			'reference' => 'None',
			'complement' => 'None'
		));
	}

}