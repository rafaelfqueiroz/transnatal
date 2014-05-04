<?php
namespace Transnatal\Repositories;

use Transnatal\Interfaces\EmployeeRepositoryInterface;
use Employee;
use Address;

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
		$employee->address_id = $address->id;

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