<?php 
	class News extends Eloquent {
		protected $table =  "news";
		
		public function user()
		{
			return $this->belongsTo('User');
		}

		// public function delete()
		// {
		// 	return parent::delete();
		// }
	}	
?>