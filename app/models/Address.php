<?php 
	class Address extends Eloquent {
		protected $table =  "addresses";

		public function clients()
		{
			return $this->hasOne('Client');
		}

		public function employees()
		{
			return $this->hasOne('Emplyees');
		}
	}	
?>