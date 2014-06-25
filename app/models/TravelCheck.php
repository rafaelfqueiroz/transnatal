<?php
	class TravelCheck extends Eloquent {
		protected $table = "travels_checks";

		public function travel() {
			return $this->belongsTo('Travel');
		}
	}
?>