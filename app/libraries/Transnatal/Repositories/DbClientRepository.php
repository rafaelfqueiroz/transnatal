<?php
namespace Transnatal\Repositories;

use Transnatal\Interfaces\ClientRepositoryInterface;

use Client;
use Address;

class DbClientRepository implements ClientRepositoryInterface {

	public function find($id)
	{
		return Client::where('id', $id)->get();
	}

	public function get_first()
	{
		return Client::first();
	}

	public function all()
	{
		return Client::all();
	}

	public function save($input)
	{
		$client = new Client();
		$client->name = $input['name'];
		$client->rg = $input['rg'];
		$client->cic = $input['cic'];
		$client->birthday = $input['birthday'];
		$client->home_phone = $input['home_phone'];
		$client->cel_phone = $input['cel_phone'];

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

		$client->address_id = $address->id;
		$client->save();
		
		return $client;
	}

	public function update($id, $input)
	{

	}

	public function delete($id)
	{
		
	}
}