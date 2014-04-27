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

	}

	public function update($id, $input)
	{

	}

	public function delete($id)
	{
		
	}
}