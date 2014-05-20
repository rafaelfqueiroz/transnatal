<?php 
	class TravelRentedCar extends Eloquent {
		protected $table =  "travels_rented_car";

		public function vehicle()
		{
			return $this->belongsTo('Vehicle');
		}

		public function serviceOrder()
		{
			return $this->hasMany('ServiceOrderTravelRentedCar');
		}

		public function delete()
		{
			return parent::delete();
		}
	}
?>