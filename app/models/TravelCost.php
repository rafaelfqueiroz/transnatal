<?php 
	class TravelCost extends Eloquent {
		protected $table =  "travels_costs";

		public function travel()
		{
			return $this->belongsTo('Travel');
		}

	}	
?>