<?php
namespace Transnatal\Repositories

use User;

class DbUserRepository implements UserRepositoryInterface {

	public function find($id)
	{
		return User::where('id', $id)->get();
	}

	public function get_first()
	{
		return User::first();
	}

	public function all()
	{
		return User::all();
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