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

		public function travels()
		{
			return $this->hasMany('Travel');
		}

		public function delete()
		{
			$this->address->delete();
			return parent::delete();
		}
	}	
?>