<?php

use Transnatal\Interfaces\TravelRepositoryInterface;
use Transnatal\Interfaces\VehicleRepositoryInterface;
use Transnatal\Interfaces\EmployeeRepositoryInterface;
use Transnatal\Services\Validation\TravelValidator;
use Transnatal\Services\Validation\TravelRouteValidator;
use Transnatal\Services\Validation\TravelAdvanceValidator;
use Transnatal\Services\Validation\TravelCostValidator;

class TravelsController extends BaseController {

	private $validator;
	private $travelRouteValidator;
	private $travelAdvanceValidator;
	private $travelCostValidator;
	private $travelRepository;
	private $vehicleRepository;
	private $employeeRepository;

	public function __construct(TravelValidator $validator, TravelRepositoryInterface $travelRepository, TravelRouteValidator $travelRouteValidator, TravelAdvanceValidator $travelAdvanceValidator, TravelCostValidator $travelCostValidator, VehicleRepositoryInterface $vehicleRepository, EmployeeRepositoryInterface $employeeRepository)
	{
		$this->validator = $validator;
		$this->travelRouteValidator = $travelRouteValidator;
		$this->travelAdvanceValidator = $travelAdvanceValidator;
		$this->travelCostValidator = $travelCostValidator;
		$this->travelRepository = $travelRepository;
		$this->vehicleRepository = $vehicleRepository;
		$this->employeeRepository = $employeeRepository;
	}

	public function index()
	{
		return View::make('pages.travels.index')->with('travels', $this->travelRepository->all());
	}

	public function create() 
	{
		$vehicles_bd = $this->vehicleRepository->allOwner();
		$employees_bd = $this->employeeRepository->all();

		$vehicles = array();
		$employees = array();

		foreach ($employees_bd as $key => $employee) {
			$employees[$employee->id] = $employee->name;
		}
		foreach ($vehicles_bd as $key => $vehicle) {
			$vehicles[$vehicle->id] = $vehicle->brand_model;
		}
		return View::make('pages.travels.create')->with('employees', $employees)->with('vehicles', $vehicles);
	}

	public function edit($id)
	{
		$bd_travel = $this->travelRepository->find($id);
		$vehicles_bd = $this->vehicleRepository->allOwner();
		$employees_bd = $this->employeeRepository->all();
		$vehicles = array();
		$employees = array();

		foreach ($employees_bd as $key => $employee) {
			$employees[$employee->id] = $employee->name;
		}
		foreach ($vehicles_bd as $key => $vehicle) {
			$vehicles[$vehicle->id] = $vehicle->brand_model;
		}
		return View::make('pages.travels.edit')->with('travel', $bd_travel)->with('employees', $employees)->with('vehicles', $vehicles);
	}

	public function show($id)
	{
		return Redirect::back();
	}

	public function store()
	{
		$this->validator->validate(Input::all());
		// $this->travelRouteValidator->validate(Input::all());
		// $this->travelAdvanceValidator->validate(Input::all());
		// $this->travelCostValidator->validate(Input::all());

		$validation = $this->validator->getErrors();
		// $routeValidation = $this->travelRouteValidator->getErrors();
		// $advanceValidation = $this->travelAdvanceValidator->getErrors();
		// $costsValidation = $this->travelCostValidator->getErrors();

		$errors = array();

		if(! is_null($validation)) $errors = array_merge_recursive($errors, $validation->getMessages());
		// if(! is_null($routeValidation)) $errors = array_merge_recursive($errors, $routeValidation->getMessages());
		// if(! is_null($advanceValidation)) $errors = array_merge_recursive($errors, $advanceValidation->getMessages());
		// if(! is_null($costsValidation)) $errors = array_merge_recursive($errors, $costsValidation->getMessages());

		if ($errors)
		{
			return Response::json(['errors' => $errors]);
		}
		else
		{
			if ($this->travelRepository->save(Input::all()))
			{
				return Response::json(['messages' => 'Viagem registrada com sucesso.']);
			}
			else
			{
				return Response::json(['errors' => 'Erro ao tentar inserir viagem.']);
			}
		}
	}

	public function update($id)
	{
		$this->validator->validate(Input::all());
		$validation = $this->validator->getErrors();

		$errors = array();
		if(! is_null($validation)) $errors = array_merge_recursive($errors, $validation->getMessages());
		
		if ($errors)
		{
			return Response::json(['errors' => $errors]);
		}
		else
		{
			if ($this->travelRepository->update($id, Input::all()))
			{
				return Response::json(['messages' => 'Informações da viagem alteradas com sucesso.']);
			}
			else
			{
				return Response::json(['errors' => 'Erro ao tentar alterar informações da viagem, por favor tente novamente']);
			}
		}
	}

	public function destroy($id)
	{
		$this->travelRepository->delete($id);
		return Redirect::route('travels.index')->with('messages', 'Viagem removida com sucesso.');
	}
}
