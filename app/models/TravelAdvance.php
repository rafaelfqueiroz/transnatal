<?php 
	class TravelAdvance extends Eloquent {
		protected $table =  "travels_advances";

		public function travel()
		{
			return $this->belongsTo('Travel');
		}

	}	
?>