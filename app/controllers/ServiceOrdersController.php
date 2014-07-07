<?php
use Transnatal\Interfaces\ServiceOrderRepositoryInterface;
use Transnatal\Interfaces\ClientRepositoryInterface;
use Transnatal\Interfaces\EmployeeRepositoryInterface;
use Transnatal\Interfaces\VehicleRepositoryInterface;
use Transnatal\Services\Validation\ServiceOrderValidator;
use Transnatal\Services\Validation\AddressValidator;
use Transnatal\Services\Validation\EmployeeValidator;

class ServiceOrdersController extends BaseController {

	protected $validator;
	protected $addressValidator;
	protected $employeeValidator;
	protected $serviceOrdersRepository;
	protected $clientRepository;
	protected $employeeRepository;
	protected $vehicleRepository;

	public function __construct(ServiceOrderValidator $validator, ServiceOrderRepositoryInterface $serviceOrdersRepository, AddressValidator $addressValidator, EmployeeValidator $employeeValidator, ClientRepositoryInterface $clientRepository, EmployeeRepositoryInterface $employeeRepository, VehicleRepositoryInterface $vehicleRepository)
	{
		$this->validator = $validator;
		$this->addressValidator = $addressValidator;
		$this->employeeValidator = $employeeValidator;
		$this->serviceOrdersRepository = $serviceOrdersRepository;
		$this->clientRepository = $clientRepository;
		$this->employeeRepository = $employeeRepository;
		$this->vehicleRepository = $vehicleRepository;
	}

	public function index()
	{
		return View::make('pages.service_orders.index')->with('service_orders', $this->serviceOrdersRepository->all());
	}

	public function create()
	{
		$clients_bd = $this->clientRepository->all();
		$employees_bd = $this->employeeRepository->all();
		$vehicles_bd = $this->vehicleRepository->all();

		$clients = array();
		$employees = array();
		$vehicles = array();

		foreach ($clients_bd as $key => $client) {
			$clients[$client->id] = $client->name;
		}
		foreach ($employees_bd as $key => $employee) {
			$employees[$employee->id] = $employee->name;
		}
		foreach ($vehicles_bd as $key => $vehicle) {
			$vehicles[$vehicle->id] = $vehicle->vehicle_plate;
		}
		return View::make('pages.service_orders.create')->with('clients', $clients)->with('employees', $employees)->with('vehicles', $vehicles);
	}

	public function edit($id)
	{
		$bd_client = $this->serviceOrdersRepository->find($id);
		return View::make('pages.service_orders.edit')->with('service_order', $bd_client);
	}

	public function show($id)
	{
		return Redirect::back();
	}

	public function store()
	{
		//$this->validator->validate(Input::all());
		//$this->addressValidator->validate(Input::all());
		//$this->employeeValidator->validate(Input::all());
		
		$validation = $this->validator->getErrors();
		$addressErrors = $this->addressValidator->getErrors();
		$employeeErrors = $this->employeeValidator->getErrors();

		$errors = array();

		if (! is_null($validation)) $errors = array_merge_recursive($errors, $validation->getMessages());
		if (! is_null($addressErrors)) $errors = array_merge_recursive($errors, $addressErrors->getMessages());
		if (! is_null($employeeErrors)) $errors = array_merge_recursive($errors, $employeeErrors->getMessages());
		
		if ($errors)
		{
			return Response::json(['errors' => $errors]);
		}
		else
		{
			if ($this->serviceOrdersRepository->save(Input::all()))
			{
				return Response::json(['messages' => 'Ordem de Serviço cadastrada com sucesso.']);
			}
			else
			{
				return Response::json(['errors' => 'Erro ao tentar cadastrar a a Ordem de Serviço, por favor tente novamente.']);
			}
		}
	}

	public function update($id)
	{
		//$this->validator->validate(Input::all());
		//$this->addressValidator->validate(Input::all());
		//$this->employeeValidator->validate(Input::all());

		$validation = $this->validator->getErrors();
		$addressErrors = $this->addressValidator->getErrors();
		$employeeErrors = $this->employeeValidator->getErrors();

		$errors = array();

		if (! is_null($validation)) $errors = array_merge_recursive($errors, $validation->getMessages());
		if (! is_null($addressErrors)) $errors = array_merge_recursive($errors, $addressErrors->getMessages());
		if (! is_null($employeeErrors)) $errors = array_merge_recursive($errors, $employeeErrors->getMessages());
		
		if ($errors)
		{
			return Response::json(['errors' => $errors]);
		}
		else
		{
			if ($this->serviceOrdersRepository->update(Input::all()))
			{
				return Response::json(['messages' => 'Ordem de Serviço atualizada com sucesso.']);
			}
			else
			{
				return Response::json(['errors' => 'Erro ao tentar atualizar a a Ordem de Serviço, por favor tente novamente.']);
			}
		}
	}

	public function destroy($id)
	{
		$this->serviceOrdersRepository->delete($id);
		return Redirect::route('service-order.index')->with('messages', 'Ordem de Serviço removida com sucesso.');
	}
}