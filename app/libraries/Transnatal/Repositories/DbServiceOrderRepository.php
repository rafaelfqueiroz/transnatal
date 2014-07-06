<?php
namespace Transnatal\Repositories;

use Transnatal\Interfaces\ServiceOrderRepositoryInterface;
use ServiceOrder;
use Address;
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
                $service_order = new ServiceOrder();
		$service_order->so_number = 12;
                $service_order->so_date = $input['so_date'];
                $service_order->so_hour = $input['so_hour'];
                $service_order->service_type = $input['service_type'];
                $service_order->start_at = $input['start_at'];
                $service_order->interval = $input['interval'];
                $service_order->restart_at = $input['restart_at'];
                $service_order->ends_at = $input['ends_at'];
                $service_order->total_price = $input['total_price'];
                //$service_order->box_number_held = $input['box_number_held'];
                //$service_order->box_number_delivered = $input['box_number_delivered'];
                $service_order->payament_method = $input['payament_method'];
                $service_order->seller_id = $input['seller_id'];
                $service_order->employee_id = $input['employee_id'];
                
                $address = new Address();
                $address->street = $input['clientAddressStreetFrom'];
                $address->number = $input['clientAddressNumberFrom'];
                $address->zip_code = $input['clientAddressZipCodeFrom'];
                $address->neighborhood = $input['clientAddressNeighborhoodFrom'];
                $address->city = $input['clientAddressCityFrom'];
                $address->state = $input['clientAddressStateFrom'];
                $address->complement = $input['clientAddressComplementFrom'];
                $address->reference = $input['clientAddressReferenceFrom'];

                $address->save();

                $service_order->address_id_from = $address->id;

                $address = new Address();
                $address->street = $input['clientAddressStreetTo'];
                $address->number = $input['clientAddressNumberTo'];
                $address->zip_code = $input['clientAddressZipCodeTo'];
                $address->neighborhood = $input['clientAddressNeighborhoodTo'];
                $address->city = $input['clientAddressCityTo'];
                $address->state = $input['clientAddressStateTo'];
                $address->complement = $input['clientAddressComplementTo'];
                $address->reference = $input['clientAddressReferenceTo'];
                
                $address->save();

                $service_order->address_id_to = $address->id;

                $service_order->local = $input['local'];
                $service_order->arrive_date = $input['arrive_date'];
                $service_order->survey_date = $input['survey_date'];
                $service_order->survey_hour = $input['survey_hour'];
                $service_order->length = $input['length'];
                $service_order->cic = $input['cic'];
                $service_order->phone_number = $input['phone_number'];
                $service_order->fax = $input['fax'];
                $service_order->client_id = $input['client_id'];
                $service_order->driver_id = $input['driver_id'];
                $service_order->vehicle_id = $input['vehicle_id'];
                $service_order->fax = $input['fax'];

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

                $service_order->payament_local = $address->id;

		$service_order->save();
                
		return $service_order;
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