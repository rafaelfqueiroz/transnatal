<?php
namespace Transnatal\Repositories;

use Transnatal\Interfaces\VehicleRepositoryInterface;
use Vehicle;

class DbVehicleRepository implements VehicleRepositoryInterface {

	public function find($id)
	{
		return Vehicle::findOrFail($id);
	}

	public function get_first()
	{
		return Vehicle::first();
	}

	public function all()
	{
		return Vehicle::where('driver', '>', 0)->get();
	}

	public function allRented()
	{
		return Vehicle::where('driver', null)->get();
	}

	public function save($input)
	{
		$vehicle = new Vehicle();
		$vehicle->manufacture_year = $input['manufacture_year'];
        $vehicle->model_year = $input['model_year'];
        $vehicle->vehicle_plate = $input['vehicle_plate'];
        $vehicle->vehicle_chassis = $input['vehicle_chassis'];
        $vehicle->owner = $input['owner'];
        $vehicle->license_plate = $input['license_plate'];
        $vehicle->renavam = $input['renavam'];
        $vehicle->vehicle_type = $input['vehicle_type'];
        $vehicle->brand_model = $input['brand_model'];
        $vehicle->color = $input['color'];
        if($input['driver'] > 0)
        	$vehicle->driver = $input['driver'];

		$vehicle->save();

		return $vehicle;
	}

	public function update($id, $input)
	{
		$bd_vehicle = $this->find($id);

		$bd_vehicle->manufacture_year = $input['manufacture_year'];
        $bd_vehicle->model_year = $input['model_year'];
        $bd_vehicle->vehicle_plate = $input['vehicle_plate'];
        $bd_vehicle->vehicle_chassis = $input['vehicle_chassis'];
        $bd_vehicle->owner = $input['owner'];
        $bd_vehicle->license_plate = $input['license_plate'];
        $bd_vehicle->renavam = $input['renavam'];
        $bd_vehicle->vehicle_type = $input['vehicle_type'];
        $bd_vehicle->brand_model = $input['brand_model'];
        $bd_vehicle->color = $input['color'];
        if($input['driver'] > 0)
        	$bd_vehicle->driver = $input['driver'];
		
		$bd_vehicle->save();

		return $bd_vehicle;
	}

	public function delete($id)
	{
		Vehicle::destroy($id);
	}
}