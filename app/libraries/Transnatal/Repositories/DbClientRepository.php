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

	}

	public function update($id, $input)
	{

	}

	public function delete($id)
	{
		
	}
}