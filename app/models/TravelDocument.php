<?php 
	class TravelDocument extends Eloquent {
		protected $table =  "travels_documents";

		public function travel()
		{
			return $this->belongsTo('Travel');
		}

	}	
?>