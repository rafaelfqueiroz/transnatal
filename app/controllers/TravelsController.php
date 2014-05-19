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

	public function store()
	{
		if (!$this->validator->validate(Input::all()))
		{
			//return Redirect::route('travels.index')->with('messages', 'Viagem registrada com sucesso.');
			return Response::json($this->validator->getErrors());
		}
		else
		{
			if ($this->travelRepository->save(Input::all()))
			{
				return Reponse::json('Viagem registrada com sucesso.');
			}
			else
			{
				return Redirect::route('travels.index')->with('messages', 'Viagem registrada com sucesso.');
				//return Redirect::back()->with('errors', 'Erro ao tentar registrar viagem, por favor tente novamente.')->withInput();
			}
		}
	}

	public function create() 
	{
		$vehicles_bd = $this->vehicleRepository->all();
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

	public function index()
	{
		return View::make('pages.travels.list')->with('travels', $this->travelRepository->all());
	}

}
