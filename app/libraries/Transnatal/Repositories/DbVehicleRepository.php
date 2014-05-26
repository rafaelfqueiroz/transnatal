<?php
namespace Transnatal\Repositories;

use Transnatal\Interfaces\VehicleRepositoryInterface;
use Vehicle;

class DbVehicleRepository implements VehicleRepositoryInterface {

	public function find($id)
	{
		$vehicle = Vehicle::findOrFail($id);
		$vehicle->license_plate = format_date($vehicle->license_plate);
		return $vehicle;
	}

	public function get_first()
	{
		$vehicle = Vehicle::first();
		$vehicle->license_plate = format_date($vehicle->license_plate);
		return $vehicle;
	}

	public function all()
	{
		$vehicles = $this->convert_data_from_list(Vehicle::all());
		return $vehicles;
	}

	public function allOwner()
	{
		$vehicles = $this->convert_data_from_list(Vehicle::where('driver', '>', 0)->get());
		return $vehicles;
	}

	public function allRented()
	{
		$vehicles = $this->convert_data_from_list(Vehicle::where('driver', null)->get());
		return $vehicles;
	}

	public function save($input)
	{
		$vehicle = new Vehicle();
		$vehicle->manufacture_year = $input['manufacture_year'];
        $vehicle->model_year = $input['model_year'];
        $vehicle->vehicle_plate = $input['vehicle_plate'];
        $vehicle->vehicle_chassis = $input['vehicle_chassis'];
        $vehicle->owner = $input['owner'];
        $vehicle->license_plate = format_date($input['license_plate'], true);
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
        $bd_vehicle->license_plate = format_date($input['license_plate'], true);
        $bd_vehicle->renavam = $input['renavam'];
        $bd_vehicle->vehicle_type = $input['vehicle_type'];
        $bd_vehicle->brand_model = $input['brand_model'];
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

	private function convert_data_from_list($vehicles)
	{
		foreach ($vehicles as $key => $vehicle) {
			$vehicle->license_plate = format_date($vehicle->license_plate);
		}
		return $vehicles;
	}
}