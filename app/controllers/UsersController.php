<?php

use Transnatal\Interfaces\UsersRepositoryInterface;
use Transnatal\Services\Validation\UserValidator;

class UsersController extends BaseController {

	private $validator;
	private $employeeValidator;
	private $userRepository;

	public function __construct($validator, $userRepository, $employeeValidator)
	{
		$this->validator = $validator;
		$this->userRepository = $userRepository;
		$this->employeeValidator = $employeeValidator;
	}

	public function store()
	{
		if (!$this->validator->validate(Input::all()) && !$this->employeeValidator->validate(Input::all()))
		{
			return Redirect::back()->with('errors', $this->validate->getErrors()->withInput());
		}
		else
		{
			if ($this->userRepository->save(Input::all()))
			{
				return Redirect::to('users/register')->with('messages', 'Usuário criado com sucesso.');
			}
			else
			{
				return Redirect::back()->('errors', 'Erro ao tentar criar usuário, por favor tente novamente.')->withInput();
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

	public function register() 
	{
		return View::make('pages.users.register');
	}
}
