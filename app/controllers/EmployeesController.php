<?php

use Transnatal\Interfaces\EmployeeRepositoryInterface;
use Transnatal\Services\Validation\EmployeeValidator;
use Transnatal\Services\Validation\AddressValidator;

	class EmployeesController extends BaseController {
	
		private $validator;
		private $employeeRepository;
		private $addressValidator;

		public function __construct(EmployeeValidator $validator, EmployeeRepositoryInterface $employeeRepository, AddressValidator $addressValidator)
		{
			$this->validator = $validator;
			$this->addressValidator = $addressValidator;
			$this->employeeRepository = $employeeRepository;
		}

		public function store()
		{
			if ($this->validator->validate(Input::all()) && $this->addressValidator->validate(Input::all()))
			{
				return Redirect::back()->with('errors', $this->validator->getErrors())->withInput();
			}
			else
			{
				if ($this->employeeRepository->save(Input::all()))
				{
					return Redirect::to('employees/register')->with('messages', 'Funcionário cadastrado com sucesso.');
				}
				else
				{
					return Redirect::back()->with('errors', 'Erro ao tentar cadastrar funcionário, por favor tente novamente.')->withInput();
				}
			}
		}

		/** 
			@return page with form to register an Employee
		**/
		public function register()
		{
			return View::make('pages.employees.register');
		}

	}
?>