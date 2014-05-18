<?php 
	class Vehicle extends Eloquent {
		protected $table =  "vehicles";

		public function employee()
		{
			return $this->belongsTo('Employee');
		}
	}
?>