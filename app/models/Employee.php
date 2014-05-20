<?php 
	class Employee extends Eloquent {
		
		protected $table =  "employees";

		public function address()
		{
			return $this->belongsTo('Address');
		}

		public function users()
		{
			return $this->hasOne('User');
		}

		public function delete()
		{
			$this->address->delete();
			return parent::delete();
		}
	}	
?>