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

		public function index()
		{
			return View::make('pages.employees.index')->with('employees', $this->employeeRepository->all());
		}

		/** 
			@return page with form to register an Employee
		**/
		public function create()
		{
			return View::make('pages.employees.create');
		}

		public function edit($id)
		{
			$bd_employee = $this->employeeRepository->find($id);
			return View::make('pages.employees.edit')->with('employee', $bd_employee);
		}

		public function show($id)
		{
			return View::make('pages.employees.index');
		}

		public function store()
		{
			if (!$this->validator->validate(Input::all()) && !$this->addressValidator->validate(Input::all()))
			{
				$errors = $this->validator->getErrors();
				$addressErrors = $this->addressValidator->getErrors();
				$errors->merge($addressErrors);
				return Redirect::back()->with('errors', $errors)->withInput();
			}
			else
			{
				if ($this->employeeRepository->save(Input::all()))
				{
					return Redirect::route('employees.create')->with('messages', 'Funcionário cadastrado com sucesso.');
				}
				else
				{
					return Redirect::back()->with('errors', 'Erro ao tentar cadastrar funcionário, por favor tente novamente.')->withInput();
				}
			}
		}
		

		public function update($id)
		{
			if (!$this->validator->validate(Input::all()) && !$this->addressValidator->validate(Input::all()))
			{
				$errors = $this->validator->getErrors();
				$addressErrors = $this->addressValidator->getErrors();
				$errors->merge($addressErrors);
				return Redirect::back()->with('errors', $errors)->withInput();
			}
			else
			{
				if ($this->employeeRepository->update($id, Input::all()))
				{
					return Redirect::route('employees.index')->with('messages', 'Informações do funcionários alteradas com sucesso.');
				}
				else
				{
					return Redirect::back()->with('errors', 'Erro ao tentar alterar as informações do funcionário, por favor tente novamente.')->withInput();
				}
			}
		}

		public function delete($id)
		{
			$this->employeeRepository->delete($id);
			return Redirect::route('employees.index')->with('messages', 'Funcionário removido com sucesso.');
		}

	}
?>