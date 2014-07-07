<?php
namespace Transnatal\Repositories;

use Transnatal\Interfaces\VehicleRepositoryInterface;
use Vehicle;

class DbVehicleRepository implements VehicleRepositoryInterface {

	public function find($id)
	{
		$vehicle = Vehicle::findOrFail($id);
		return $vehicle;
	}

	public function get_first()
	{
		$vehicle = Vehicle::first();
		return $vehicle;
	}

	public function all()
	{
		$vehicles = Vehicle::all();
		return $vehicles;
	}

	public function allOwner()
	{
		$vehicles = Vehicle::where('driver', '>', 0)->get();
		return $vehicles;
	}

	public function allRented()
	{
		$vehicles = Vehicle::where('driver', null)->get();
		return $vehicles;
	}

	public function save($input)
	{
		$vehicle = new Vehicle();
		$vehicle->manufacture_year = $input['manufacture_year'];
        $vehicle->model_year = $input['model_year'];
        $vehicle->vehicle_plate = $input['vehicle_plate'];
        $vehicle->plate_uf = $input['plate_uf'];
        $vehicle->document_number = $input['document_number'];
        $vehicle->vehicle_chassis = $input['vehicle_chassis'];
        $vehicle->owner = $input['owner'];
        $vehicle->owner_address = $input['owner_address'];
        $vehicle->renavam = $input['renavam'];
        $vehicle->vehicle_type = $input['vehicle_type'];
        $vehicle->brand_model = $input['brand_model'];
        $vehicle->capacity = $input['capacity'];
        $vehicle->truck_plate = $input['truck_plate'];
        $vehicle->truck_plate_uf = $input['truck_plate_uf'];
        $vehicle->container_number = $input['container_number'];
        $vehicle->container_size = $input['container_size'];
        $vehicle->container_type = $input['container_type'];
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
        $bd_vehicle->plate_uf = $input['plate_uf'];
        $bd_vehicle->document_number = $input['document_number'];
        $bd_vehicle->vehicle_chassis = $input['vehicle_chassis'];
        $bd_vehicle->owner = $input['owner'];
        $bd_vehicle->owner_address = $input['owner_address'];
        $bd_vehicle->renavam = $input['renavam'];
        $bd_vehicle->vehicle_type = $input['vehicle_type'];
        $bd_vehicle->brand_model = $input['brand_model'];
        $bd_vehicle->capacity = $input['capacity'];
        $bd_vehicle->truck_plate = $input['truck_plate'];
        $bd_vehicle->truck_plate_uf = $input['truck_plate_uf'];
        $bd_vehicle->container_number = $input['container_number'];
        $bd_vehicle->container_size = $input['container_size'];
        $bd_vehicle->container_type = $input['container_type'];
        $bd_vehicle->color = $input['color'];
        if($input['driver'] == 0)
        	$bd_vehicle->driver = null;
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