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

		public function addressOrigin()
		{
			return $this->belongsTo('Address', 'address_id_from');
		}

		public function addressDestiny()
		{
			return $this->belongsTo('Address', 'address_id_to');
		}

		public function addressPayment()
		{
			return $this->belongsTo('Address', 'payament_local');
		}

		public function delete()
		{
			return parent::delete();
		}
	}
?>