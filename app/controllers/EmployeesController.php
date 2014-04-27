<?php 
	class EmployeesController extends BaseController {
	
		public function __constructor()
		{
			//to do
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