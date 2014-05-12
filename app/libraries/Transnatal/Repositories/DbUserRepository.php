<?php
namespace Transnatal\Repositories;

use Transnatal\Interfaces\UserRepositoryInterface;
use Hash;
use User;

class DbUserRepository implements UserRepositoryInterface {

	public function find($id)
	{
		return User::findOrFail($id);
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
		$user =new User();

		$user->username = $input['username'];
		$user->password = Hash::make($input['password']);
		$user->email = $input['email'];
		$user->employee_id = $input['employee_id'];

		$user->save();

		return $user;
	}

	public function update($id, $input)
	{

	}

	public function delete($id)
	{
		
	}
}