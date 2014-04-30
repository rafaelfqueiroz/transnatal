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
