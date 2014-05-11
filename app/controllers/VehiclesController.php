<?php

use Transnatal\Interfaces\VehicleRepositoryInterface;
use Transnatal\Services\Validation\VehicleValidator;

class VehiclesController extends BaseController {

	private $validator;
	private $vehicleRepository;

	public function __construct(VehicleValidator $validator, VehicleRepositoryInterface $vehicleRepository)
	{
		$this->validator = $validator;
		$this->vehicleRepository = $vehicleRepository;
	}

	public function store()
	{
		if (!$this->validator->validate(Input::all()))
		{
			return Redirect::back()->with('errors', $this->validator->getErrors())->withInput();
		}
		else
		{
			if ($this->vehicleRepository->save(Input::all()))
			{
				return Redirect::route('vehicles.create')->with('messages', 'Veículo cadastrado com sucesso.');
			}
			else
			{
				return Redirect::back()->with('errors', 'Erro ao tentar cadastrar o veículo, por favor tente novamente.')->withInput();
			}
		}
	}

	public function create()
	{
		return View::make('pages.vehicles.register');
	}

	public function index()
	{
		return View::make('pages.vehicles.list')->with('vehicles', $this->vehicleRepository->all());
	}

}
