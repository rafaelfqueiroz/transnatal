<?php
namespace Transnatal\Interfaces;

interface ServiceOrderTravelRentedCarRepositoryInterface {
	public function find($id);
	public function get_first();
	public function all();
	public function save($input);
	public function update($id, $input);
	public function delete($id);
}

?>