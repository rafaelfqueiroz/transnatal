<?php 
	class Employee extends Eloquent {
		protected $table =  "employees";

		public function address()
		{
			return $this->hasOne('Address');
		}
	}	
?>