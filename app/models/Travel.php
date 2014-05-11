<?php 
	class Travel extends Eloquent {
		protected $table =  "travels";

		public function vehicle()
		{
			return $this->hasOne('Vehicle');
		}

		public function employee()
		{
			return $this->hasOne('Employee');
		}

		public function travelAdvances()
		{
			return $this->hasMany('TravelAdvance');
		}

		public function travelCost()
		{
			return $this->hasMany('TravelCost');
		}

		public function travelRoutes()
		{
			return $this->hasMany('TravelRoute');
		}

	}
?>