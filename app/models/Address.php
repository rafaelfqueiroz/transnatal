<?php 
	class Address extends Eloquent {
		protected $table =  "addresses";

		protected $fillable = array('id', 'street', 'number', 'neighborhood', 'city',	'state', 'zip_code', 'reference', 'complement');

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