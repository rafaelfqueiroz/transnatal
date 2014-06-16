<?php 
	class ServiceOrder extends Eloquent {
		protected $table =  "service_orders";

		public function seller()
		{
			return $this->belongsTo('Employee');
		}

		public function driver()
		{
			return $this->belongsTo('Employee');
		}

		public function address_from()
		{
			return $this->belongsTo('Address');
		}

		public function address_to()
		{
			return $this->belongsTo('Address');
		}

		public function payment_address()
		{
			return $this->belongsTo('Address');
		}

		public function delete()
		{
			return parent::delete();
		}
	}
?>