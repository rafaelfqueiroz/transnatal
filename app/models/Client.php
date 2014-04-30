<?php 
	class Client extends Eloquent {
		protected $table =  "clients";

		public function address()
		{
			return $this->hasOne('Address');
		}
	}
?>