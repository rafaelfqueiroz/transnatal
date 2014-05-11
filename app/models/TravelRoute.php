<?php 
	class TravelRoute extends Eloquent {
		protected $table =  "travels_routes";

		public function travel()
		{
			return $this->belongsTo('Travel');
		}
	}	
?>