<?php

use Transnatal\Interfaces\VehicleRepositoryInterface;
use Transnatal\Interfaces\TravelRentedCarRepositoryInterface;
use Transnatal\Services\Validation\TravelRentedCarValidator;
use Transnatal\Services\Validation\ServiceOrderTravelRentedCarValidator;

class TravelsRentedCarController extends BaseController {

	private $validator;
	private $travelRentedCarRepository;
	private $vehicleRepository;
	private $serviceOrderTravelRentedCarValidator;

	public function __construct(TravelRentedCarValidator $validator, TravelRentedCarRepositoryInterface $travelRentedCarRepository, VehicleRepositoryInterface $vehicleRepository, ServiceOrderTravelRentedCarValidator $serviceOrderTravelRentedCarValidator)
	{
		$this->validator = $validator;
		$this->travelRentedCarRepository = $travelRentedCarRepository;
		$this->vehicleRepository = $vehicleRepository;
		$this->serviceOrderTravelRentedCarValidator = $serviceOrderTravelRentedCarValidator;
	}

	public function index()
	{
		return View::make('pages.travels_rented_car.index')->with('travels_rented_car', $this->travelRentedCarRepository->all());
	}

	public function create()
	{
		$vehicles_bd = $this->vehicleRepository->allRented();
		$vehicles = array();

		foreach ($vehicles_bd as $key => $vehicle) {
			$vehicles[$vehicle->id] = $vehicle->vehicle_plate;
		}
		return View::make('pages.travels_rented_car.create')->with('vehicles', $vehicles);
	}
	
	public function edit($id)
	{
		$bd_travel_rented_car = $this->travelRentedCarRepository->find($id);
		$vehicles_bd = $this->vehicleRepository->allRented();
		$vehicles = array();

		foreach ($vehicles_bd as $key => $vehicle) {
			$vehicles[$vehicle->id] = $vehicle->vehicle_plate;
		}
		return View::make('pages.travels_rented_car.edit')->with('travel_rented_car', $bd_travel_rented_car)->with('vehicles', $vehicles);
	}

	public function show($id)
	{
		return Redirect::back();
	}

	public function store()
	{
		$this->validator->validate(Input::all());
		$this->serviceOrderTravelRentedCarValidator->validate(Input::all());

		$validation = $this->validator->getErrors();
		$serviceOrderTravelRentedCarErrors = $this->serviceOrderTravelRentedCarValidator->getErrors();

		$errors = array();

		if (! is_null($validation)) $errors = array_merge_recursive($errors, $validation->getMessages());
		if (! is_null($serviceOrderTravelRentedCarErrors)) $errors = array_merge_recursive($errors, $serviceOrderTravelRentedCarErrors->getMessages());
		
		if ($errors)
		{
			return Response::json(['errors' => $errors]);
		}
		else
		{
			if ($this->travelRentedCarRepository->save(Input::all()))
			{
				return Response::json(['messages' => 'Viagem cadastrada com sucesso.']);
			}
			else
			{
				return Response::json(['errors' => 'Erro ao tentar cadastrar a viagem, por favor tente novamente.']);
			}
		}
	}

	public function update($id)
	{
		$this->validator->validate(Input::all());
		$this->serviceOrderTravelRentedCarValidator->validate(Input::all());

		$validation = $this->validator->getErrors();
		$serviceOrderTravelRentedCarErrors = $this->serviceOrderTravelRentedCarValidator->getErrors();

		$errors = array();

		if (! is_null($validation)) $errors = array_merge_recursive($errors, $validation->getMessages());
		if (! is_null($serviceOrderTravelRentedCarErrors)) $errors = array_merge_recursive($errors, $serviceOrderTravelRentedCarErrors->getMessages());
		
		if ($errors)
		{
			return Response::json(['errors' => $errors]);
		}
		else
		{
			if ($this->travelRentedCarRepository->update($id, Input::all()))
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
		$this->travelRentedCarRepository->delete($id);
		return Redirect::route('travels-rented-car.index')->with('messages', 'Viagem removida com sucesso.');
	}
}
