<?php
namespace Transnatal\Repositories

use Employee;

class DbEmployeeRepository implements EmployeeRepositoryInterface {

	public function find($id)
	{
		return Employee::where('id', $id)->get();
	}

	public function get_first()
	{
		return Employee::first();
	}

	public function all()
	{
		return Employee::all();
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