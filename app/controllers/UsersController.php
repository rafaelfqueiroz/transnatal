<?php

use Transnatal\Interfaces\UserRepositoryInterface;
use Transnatal\Interfaces\EmployeeRepositoryInterface;
use Transnatal\Services\Validation\UserValidator;

class UsersController extends BaseController {

	private $validator;
	private $userRepository;
	private $employeeRepository;

	public function __construct(UserValidator $validator, UserRepositoryInterface $userRepository, EmployeeRepositoryInterface $employeeRepository)
	{
		$this->validator = $validator;
		$this->userRepository = $userRepository;
		$this->employeeRepository = $employeeRepository;
	}

	public function index()
	{
		return View::make('pages.users.index')->with('users', $this->userRepository->all());
	}

	public function create() 
	{
		$employees_bd = $this->employeeRepository->all();

		$employees = array();

		foreach ($employees_bd as $key => $employee) {
			$employees[$employee->id] = $employee->name;
		}
		return View::make('pages.users.create')->with('employees', $employees);
	}

	public function store()
	{
		if (!$this->validator->validate(Input::all()))
		{
			return Redirect::back()->with('errors', $this->validator->getErrors())->withInput();
		}
		else
		{
			if ($this->userRepository->save(Input::all()))
			{
				return Redirect::route('users.create')->with('messages', 'Usuário criado com sucesso.');
			}
			else
			{
				return Redirect::back()->with('errors', 'Erro ao tentar criar usuário, por favor tente novamente.')->withInput();
			}
		}
	}

	public function getProfile()
	{
		return View::make('pages.users.profile');
	}

	public function postProfile()
	{
		return Redirect::to('index');
	}
}
