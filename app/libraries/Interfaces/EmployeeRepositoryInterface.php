<?php 
	namespace Transnatal\Interfaces;

	interface EmployeeRepositoryInterface {

		public function find($id);
		public function get_last();
		public function all();
		public function save($input);
		public function update($id, $input);
		public function delete($id);
	}
?>