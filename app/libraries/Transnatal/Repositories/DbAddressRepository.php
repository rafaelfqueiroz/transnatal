<?php
namespace Transnatal\Repositories

use Address;

class DbAddressRepository implements AddressRepositoryInterface {

	public function find($id)
	{
		return Address::where('id', $id)->get();
	}

	public function get_first()
	{
		return Address::first();
	}

	public function all()
	{
		return Address::all();
	}

	public function save($input)
	{
		$address = new Address();
		$address->street = $input['street'];
		$address->number = $input['number'];
		$address->zip_code = $input['zip_code'];
		$address->neighborhood = $input['neighborhood'];
		$address->city = $input['city'];
		$address->state = $input['state'];
		$address->complement = $input['complement'];
		$address->reference = $input['reference'];

		$address->save();

		return $address;
	}

	public function update($id, $input)
	{

	}

	public function delete($id)
	{
		
	}
}