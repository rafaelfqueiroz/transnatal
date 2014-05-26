<?php
namespace Transnatal\Repositories;

use Transnatal\Interfaces\TravelRentedCarRepositoryInterface;
use TravelRentedCar;
use ServiceOrderTravelRentedCar;

class DbTravelRentedCarRepository implements TravelRentedCarRepositoryInterface {

	public function find($id)
	{
		return TravelRentedCar::findOrFail($id);
	}

	public function get_first()
	{
		return TravelRentedCar::first();
	}

	public function all()
	{
		return TravelRentedCar::all();
	}

	public function save($input)
	{
		if ($input['service_orders']) {
			$travelRentedCar = new TravelRentedCar();
			$travelRentedCar->travel_price = $input['travel_price'];
	        $travelRentedCar->price_paid = $input['price_paid'];
	        $travelRentedCar->price_to_pay = $input['price_to_pay'];
	        $travelRentedCar->vehicle_id = $input['vehicle_id'];

			$travelRentedCar->save();

			//$travelServiceOrders = array();
			foreach ($input['service_orders'] as $key => $value) {
				$serviceOrderTravelRentedCar = new ServiceOrderTravelRentedCar();
				$serviceOrderTravelRentedCar->so_number = $value['so_number'];
				$serviceOrderTravelRentedCar->travel_rented_car_id = $travelRentedCar->id;
				$serviceOrderTravelRentedCar->save();
			}
			//ServiceOrderTravelRentedCar::insert($travelServiceOrders);
		}

		return $travelRentedCar;
	}

	public function update($id, $input)
	{
		$bd_travelRentedCar = $this->find($id);
		$bd_travelRentedCar->travel_price = $input['travel_price'];
        $bd_travelRentedCar->price_paid = $input['price_paid'];
        $bd_travelRentedCar->price_to_pay = $input['price_to_pay'];
        $bd_travelRentedCar->vehicle_id = $input['vehicle_id'];

        $bd_travelRentedCar->save();

        ServiceOrderTravelRentedCar::where('travel_rented_car_id', $bd_travelRentedCar->id)->delete();
        foreach ($input['service_orders'] as $key => $value) {
			$serviceOrderTravelRentedCar = new ServiceOrderTravelRentedCar();
			$serviceOrderTravelRentedCar->so_number = $value['so_number'];
			$serviceOrderTravelRentedCar->travel_rented_car_id = $bd_travelRentedCar->id;
			$serviceOrderTravelRentedCar->save();
		}

		return $bd_travelRentedCar;
	}

	public function delete($id)
	{
		TravelRentedCar::destroy($id);
	}
}