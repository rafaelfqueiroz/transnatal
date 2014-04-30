<?php

use Transnatal\Interfaces\EmployeeRepositoryInterface;
use Transnatal\Services\Validation\EmployeeValidation;

	class EmployeesController extends BaseController {
	
		private $validator;
		private $employeeRepository;
		private $addressRepository;

		public function __constructor($validator, $employeeRepository, $addressRepository)
		{
			$this->validator = $validator;
			$this->employeeRepository = $employeeRepository;
			$this->addressRepository = $addressRepository;
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