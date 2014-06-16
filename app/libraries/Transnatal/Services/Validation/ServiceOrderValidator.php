<?php
namespace Transnatal\Services\Validation;

class ServiceOrderValidator extends Validator {

	public function __construct()
	{
		$this->rules = [
			'so_number' => 'required',
        	'so_date' => 'required',
            'so_hour' => 'required',
            'service_type' => 'required',
            'total_price' => 'required',
            'payament_method' => 'required',
            'seller_id' => 'required',
			'employee_id' => 'required',
            'address_id_from' => 'required',
            'address_id_to' => 'required',
            'local' => 'required',
            'cic' => 'required',
            'phone_number' => 'required',
            'client_id' => 'required',
            'driver_id' => 'required',
            'vehicle_id' => 'required'
           ];

		$this->messages = [
			'so_number.required' => 'O campo número da Ordem de Serviço é necessário',
        	'so_date.required' => 'O campo data da Ordem de Serviço é necessário',
            'so_hour.required' => 'O campo hora da Ordem de Serviço é necessário',
            'service_type.required' => 'O campo tipo de serviço da Ordem de Serviço é necessário',
            'total_price.required' => 'O campo valor total da Ordem de Serviço é necessário',
            'payament_method.required' => 'O campo método de pagamento da Ordem de Serviço é necessário',
            'seller_id.required' => 'O campo vendedor da Ordem de Serviço é necessário',
			'employee_id.required' => 'O campo responsável pela Equipe da Ordem de Serviço é necessário',
            'address_id_from.required' => 'O campo Endereço de Origem da Ordem de Serviço é necessário',
            'address_id_to.required' => 'O campo Endereço de Destino da Ordem de Serviço é necessário',
            'local.required' => 'O campo Local da Ordem de Serviço é necessário',
            'cic.required' => 'O campo CIC da Ordem de Serviço é necessário',
            'phone_number.required' => 'O campo Telefone da Ordem de Serviço é necessário',
            'client_id.required' => 'O campo Cliente da Ordem de Serviço é necessário',
            'driver_id.required' => 'O campo Motorista da Ordem de Serviço é necessário',
            'vehicle_id.required' => 'O campo Veículo da Ordem de Serviço é necessário',
		 ];
	}
}