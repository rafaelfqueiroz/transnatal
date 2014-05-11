<?php
namespace Transnatal\Repositories;

use Transnatal\Interfaces\VehicleRepositoryInterface;
use Vehicle;

class DbVehicleRepository implements VehicleRepositoryInterface {

	public function find($id)
	{
		return Vehicle::where('id', $id)->get();
	}

	public function get_first()
	{
		return Vehicle::first();
	}

	public function all()
	{
		return Vehicle::all();
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

		$vehicle->save();

		return $vehicle;
	}

	public function update($id, $input)
	{

	}

	public function delete($id)
	{
		
	}
}