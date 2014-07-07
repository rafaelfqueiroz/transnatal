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
			return $this->has_one('Address', 'address_id_from');
		}

		public function address_to()
		{
			return $this->belongsTo('Address', 'address_id_to', 'id');
		}

		public function payment_address()
		{
			return $this->belongsTo('Address', 'payament_local', 'id');
		}

		public function delete()
		{
			return parent::delete();
		}
	}
?>