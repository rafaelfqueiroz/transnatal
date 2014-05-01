<?php
namespace Transnatal\Repositories

use Client;

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
		$client->address->street = $input['street'];
		$client->address->number = $input['number'];
		$client->address->zip_code = $input['zip_code'];
		$client->address->neighborhood = $input['neighborhood'];
		$client->address->city = $input['city'];
		$client->address->state = $input['state'];
		$client->address->complement = $input['complement'];
		$client->address->reference = $input['reference'];

		$client->address->save()
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