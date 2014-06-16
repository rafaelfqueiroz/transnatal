<?php
namespace Transnatal\Repositories;

use Transnatal\Interfaces\ServiceOrderRepositoryInterface;
use ServiceOrder;
use ServiceOrderTravelRentedCar;

class DbServiceOrderRepository implements ServiceOrderRepositoryInterface {

	public function find($id)
	{
		return OrderService::findOrFail($id);
	}

	public function get_first()
	{
		return OrderService::first();
	}

	public function all()
	{
		return OrderService::all();
	}

	public function save($input)
	{
		$order_service = new OrderService();
		$order_service->so_number = $input['so_number'];
                $order_service->so_date = $input['so_date'];
                $order_service->so_hour = $input['so_hour'];
                $order_service->service_type = $input['service_type'];
                $order_service->start_at = $input['start_at'];
                $order_service->interval = $input['interval'];
                $order_service->restart_at = $input['restart_at'];
                $order_service->ends_at = $input['ends_at'];
                $order_service->total_price = $input['total_price'];
                $order_service->box_number_held = $input['box_number_held'];
                $order_service->box_number_delivered = $input['box_number_delivered'];
                $order_service->payament_method = $input['payament_method'];
                $order_service->seller_id = $input['seller_id'];
                $order_service->employee_id = $input['employee_id'];

                $address = new Address();
                $address->street = $input['street_from'];
                $address->number = $input['number_from'];
                $address->zip_code = $input['zip_code_from'];
                $address->neighborhood = $input['neighborhood_from'];
                $address->city = $input['city_from'];
                $address->state = $input['state_from'];
                $address->complement = $input['complement_from'];
                $address->reference = $input['reference_from'];

                $address->save();

                $order_service->address_id_from = $address->id;

                $address = new Address();
                $address->street = $input['street_to'];
                $address->number = $input['number_to'];
                $address->zip_code = $input['zip_code_to'];
                $address->neighborhood = $input['neighborhood_to'];
                $address->city = $input['city_to'];
                $address->state = $input['state_to'];
                $address->complement = $input['complement_to'];
                $address->reference = $input['reference_to'];

                $address->save();

                $order_service->address_id_to = $address->id;

                $order_service->local = $input['local'];
                $order_service->arrival_date = $input['arrival_date'];
                $order_service->survey_date = $input['survey_date'];
                $order_service->survey_hour = $input['survey_hour'];
                $order_service->length = $input['length'];
                $order_service->cic = $input['cic'];
                $order_service->phone_number = $input['phone_number'];
                $order_service->fax = $input['fax'];
                $order_service->client_id = $input['client_id'];
                $order_service->driver_id = $input['driver_id'];
                $order_service->vehicle_id = $input['vehicle_id'];
                $order_service->fax = $input['fax'];

                $address = new Address();
                $address->street = $input['street'];
                $address->number = $input['number'];
                $address->zip_code = $input['zip_code'];
                $address->neighborhood = $input['neighborhood'];
                $address->city = $input['city'];
                $address->state = $input['state'];
                $address->complement = $input['complement'];
                $address->reference = $input['reference'];

                $address->save();

                $order_service->payament_local = $address->id;

		$order_service->save();

		return $order_service;
	}

	public function update($id, $input)
	{
		$bd_order_service = $this->find($id);
		$bd_order_service->so_number = $input['so_number'];
                $bd_order_service->so_date = $input['so_date'];
                $bd_order_service->so_hour = $input['so_hour'];
                $bd_order_service->service_type = $input['service_type'];
                $bd_order_service->start_at = $input['start_at'];
                $bd_order_service->interval = $input['interval'];
                $bd_order_service->restart_at = $input['restart_at'];
                $bd_order_service->ends_at = $input['ends_at'];
                $bd_order_service->total_price = $input['total_price'];
                $bd_order_service->box_number_held = $input['box_number_held'];
                $bd_order_service->box_number_delivered = $input['box_number_delivered'];
                $bd_order_service->payament_method = $input['payament_method'];
                $bd_order_service->seller_id = $input['seller_id'];
                $bd_order_service->employee_id = $input['employee_id'];
                $bd_order_service->address_id_from = $input['address_id_from'];
                $bd_order_service->address_id_to = $input['address_id_to'];
                $bd_order_service->local = $input['local'];
                $bd_order_service->arrival_date = $input['arrival_date'];
                $bd_order_service->survey_date = $input['survey_date'];
                $bd_order_service->survey_hour = $input['survey_hour'];
                $bd_order_service->length = $input['length'];
                $bd_order_service->cic = $input['cic'];
                $bd_order_service->phone_number = $input['phone_number'];
                $bd_order_service->fax = $input['fax'];
                $bd_order_service->client_id = $input['client_id'];
                $bd_order_service->driver_id = $input['driver_id'];
                $bd_order_service->vehicle_id = $input['vehicle_id'];
                $bd_order_service->fax = $input['fax'];
                $bd_order_service->payament_local = $input['payament_local'];

		$bd_order_service->save();

		return $bd_order_service;
	}

	public function delete($id)
	{
		OrderService::destroy($id);
	}
}