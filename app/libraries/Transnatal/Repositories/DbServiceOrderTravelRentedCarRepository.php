<?php
namespace Transnatal\Repositories;

use ServiceOrderTravelRentedCar;

class DbServiceOrderTravelRentedCarRepository implements ServiceOrderTravelRentedCarRepositoryInterface {

	public function find($id)
	{
		return ServiceOrderTravelRentedCar::where('id', $id)->get();
	}

	public function get_first()
	{
		return ServiceOrderTravelRentedCar::first();
	}

	public function all()
	{
		return ServiceOrderTravelRentedCar::all();
	}

	public function save($input)
	{
		$serviceOrderTravelRentedCar = new ServiceOrderTravelRentedCar();
		$serviceOrderTravelRentedCar->so_number = $input['so_number'];
		$serviceOrderTravelRentedCar->travel_rented_car_id = $input['travel_rented_car_id'];

		$serviceOrderTravelRentedCar->save();

		$seturn $serviceOrderTravelRentedCar;
	}

	public function update($id, $input)
	{

	}

	public function delete($id)
	{
		
	}
}