<?php 
	class Client extends Eloquent {
		protected $table =  "clients";

		public function address()
		{
			return $this->belongsTo('Address');
		}

		public function delete()
		{
			$this->address->delete();
			return parent::delete();
		}
	}
?>