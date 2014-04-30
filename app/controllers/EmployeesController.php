<?php

use Transnatal\Interfaces\EmployeeRepositoryInterface;
use Transnatal\Services\Validation\EmployeeValidation;

	class EmployeesController extends BaseController {
	
		private $validator;
		private $employeeRepository;
		private $addressValidator;

		public function __construct($validator, $employeeRepository, $addressValidator)
		{
			$this->validator = $validator;
			$this->addressValidator = $addressValidator;
			$this->employeeRepository = $employeeRepository;
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