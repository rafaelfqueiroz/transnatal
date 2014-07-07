<?php
namespace Transnatal\Repositories;

use Transnatal\Interfaces\ClientRepositoryInterface;

use Client;
use Address;

class DbClientRepository implements ClientRepositoryInterface {

	public function find($id)
	{
		$client = Client::findOrFail($id);
		if ($client)
		{
			$client->birthday = format_date($client->birthday);
		}
		return $client;
	}

	public function get_first()
	{
		$client = Client::first();
		if ($client)
		{
			$client->birthday = format_date($client->birthday);
		}

		return $client;
	}

	public function all()
	{
		return Client::all();
	}

	public function save($input)
	{
		$client = new Client();
		$client->name = $input['name'];
		$client->email = $input['email'];
		$client->rg = $input['rg'];
		$client->cpf = $input['cpf'];
		$client->birthday = format_date($input['birthday'], true);
		$client->home_phone = $input['home_phone'];
		$client->cel_phone = $input['cel_phone'];
		$client->type_entity = $input['type_entity'];
		$client->corporate_name = $input['corporate_name'];
		$client->state_registration = $input['state_registration'];
		$client->cnpj = $input['cnpj'];

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
		$bd_client = $this->find($id);

		$bd_client->name = $input['name'];
		$bd_client->email = $input['email'];
		$bd_client->rg = $input['rg'];
		$bd_client->cpf = $input['cpf'];
		$bd_client->birthday = format_date($input['birthday'], true);
		$bd_client->home_phone = $input['home_phone'];
		$bd_client->cel_phone = $input['cel_phone'];
		$bd_client->type_entity = $input['type_entity'];
		$bd_client->corporate_name = $input['corporate_name'];
		$bd_client->state_registration = $input['state_registration'];
		$bd_client->cnpj = $input['cnpj'];

		$bd_client->address->street = $input['street'];
		$bd_client->address->number = $input['number'];
		$bd_client->address->zip_code = $input['zip_code'];
		$bd_client->address->neighborhood = $input['neighborhood'];
		$bd_client->address->city = $input['city'];
		$bd_client->address->state = $input['state'];
		$bd_client->address->complement = $input['complement'];
		$bd_client->address->reference = $input['reference'];

		$bd_client->address->save();
		$bd_client->address->touch();
		
		$bd_client->save();
		$bd_client->touch();

		return $bd_client;
	}

	public function delete($id)
	{
		Client::destroy($id);
	}
}