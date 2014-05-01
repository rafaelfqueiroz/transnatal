<?php
namespace Transnatal\Repositories;

use Transnatal\Interfaces\UserRepositoryInterface;
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
		$user =new User();

		$user->username = $input['username'];
		$user->password = $input['password'];
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