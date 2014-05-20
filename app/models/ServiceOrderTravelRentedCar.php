<?php 
	class ServiceOrderTravelRentedCar extends Eloquent {
		protected $table =  "services_order_travel";

		public function travelRentedCar()
		{
			return $this->hasOne('TravelRentedCar');
		}
	}
?>