<?php 
	class Employee extends Eloquent {
		
		protected $table =  "employees";

		protected $fillable = array(
			'id','name','admission_date','resignation_date','rg','cpf','birthday','home_phone','cel_phone','bank_account','bank_agency',
			'bank_op','bank_name','license_number','license_category','license_pamcard','address_id');

		public function address()
		{
			return $this->belongsTo('Address');
		}

		public function users()
		{
			return $this->hasOne('User');
		}

		public function travels()
		{
			return $this->hasMany('Travel');
		}

		public function delete()
		{
			$this->address->delete();
			return parent::delete();
		}
	}	
?>