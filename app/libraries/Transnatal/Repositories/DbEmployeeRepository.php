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
		$employee = new Employee();

		$employee->name = $input['name'];
		$employee->admission_date = $input['admission_date'];
		$employee->resignation_date = $input['resignation_date'];
		$employee->rg = $input['rg'];
		$employee->cpf = $input['cpf'];
		$employee->birthday = $input['birthday'];
		$employee->home_phone = $input['home_phone'];
		$employee->cel_phone = $input['cel_phone'];
		$employee->bank_account = $input['bank_account'];
		$employee->bank_agency = $input['bank_agency'];
		$employee->bank_op = $input['bank_op'];
		$employee->bank_name = $input['bank_name'];
		$employee->license_number = $input['license_number'];
		$employee->license_category = $input['license_category'];
		$employee->license_pamcard = $input['license_pamcard'];
		$employee->address->street = $input['street'];
		$employee->address->number = $input['number'];
		$employee->address->zip_code = $input['zip_code'];
		$employee->address->neighborhood = $input['neighborhood'];
		$employee->address->city = $input['city'];
		$employee->address->state = $input['state'];
		$employee->address->complement = $input['complement'];
		$employee->address->reference = $input['reference'];

		$employee->address->save();
		$employee->save();

		return $employee;
	}

	public function update($id, $input)
	{

	}

	public function delete($id)
	{
		
	}
}