<?php

use Transnatal\Interfaces\VehicleRepositoryInterface;
use Transnatal\Services\Validation\VehicleValidator;
use Transnatal\Interfaces\EmployeeRepositoryInterface;

class VehiclesController extends BaseController {

	private $validator;
	private $vehicleRepository;
	private $employeeRepository;

	public function __construct(VehicleValidator $validator, VehicleRepositoryInterface $vehicleRepository, EmployeeRepositoryInterface $employeeRepository)
	{
		$this->validator = $validator;
		$this->vehicleRepository = $vehicleRepository;
		$this->employeeRepository = $employeeRepository;
	}

	public function index()
	{
		return View::make('pages.vehicles.index')->with('vehicles', $this->vehicleRepository->all());
	}

	public function create()
	{
		$employees_bd = $this->employeeRepository->all();

		$employees = array(null);
		foreach ($employees_bd as $key => $employee) {
			$employees[$employee->id] = $employee->name;
		}
		return View::make('pages.vehicles.create')->with('employees', $employees);
	}
	
	public function edit($id)
	{
		$bd_vehicle = $this->vehicleRepository->find($id);
		$employees_bd = $this->employeeRepository->all();

		$employees = array(null);

		foreach ($employees_bd as $key => $employee) {
			$employees[$employee->id] = $employee->name;
		}

		return View::make('pages.vehicles.edit')->with('vehicle', $bd_vehicle)->with('employees', $employees);
	}

	public function show($id)
	{
		return Redirect::back();
	}

	public function store()
	{
		// if (!$this->validator->validate(Input::all()))
		// {
		// 	$errors = $this->validator->getErrors();

		// 	return Redirect::back()->with('errors', $errors)->withInput();
		// }
		// else
		// {
			//if ($this->vehicleRepository->save(Input::all()))
			//{
				$this->vehicleRepository->save(Input::all());
				return Redirect::route('vehicles.create')->with('messages', 'Veículo cadastrado com sucesso.');
		// 	}
		// 	else
		// 	{
		// 		return Redirect::back()->with('errors', 'Erro ao tentar cadastrar o veículo, por favor tente novamente.')->withInput();
		// 	}
		// }
	}


	public function update($id)
	{
		// if (!$this->validator->validate(Input::all()))
		// {
		// 	$errors = $this->validator->getErrors();
			
		// 	return Redirect::back()->with('errors', $errors)->withInput();
		// }
		// else
		// {
			//if ($this->vehicleRepository->update($id, Input::all()))
			//{
				$this->vehicleRepository->update($id, Input::all());
				return Redirect::route('vehicles.index')->with('messages', 'Informações do veículo alteradas com sucesso.');
		// 	}
		// 	else
		// 	{
		// 		return Redirect::back()->with('errors', 'Erro ao tentar alterar informações do veículo, por favor tente novamente')->withInput();
		// 	}
		// }
	}

	public function destroy($id)
	{
		$this->vehicleRepository->delete($id);
		return Redirect::route('vehicles.index')->with('messages', 'Veículo removido com sucesso.');
	}
}
