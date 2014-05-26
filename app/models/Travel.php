<?php 
	class Travel extends Eloquent {
		protected $table =  "travels";

		public function vehicle()
		{
			return $this->belongsTo('Vehicle');
		}

		public function employee()
		{
			return $this->belongsTo('Employee');
		}

		public function advances()
		{
			return $this->hasMany('TravelAdvance');
		}

		public function costs()
		{
			return $this->hasMany('TravelCost');
		}

		public function routes()
		{
			return $this->hasMany('TravelRoute');
		}

		public function delete()
		{
			$this->costs()->delete();
			$this->advances()->delete();
			$this->routes()->delete();
			return parent::delete();
		}
	}
?>