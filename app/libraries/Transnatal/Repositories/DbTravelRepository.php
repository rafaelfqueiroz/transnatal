<?php
namespace Transnatal\Repositories;

use Transnatal\Interfaces\TravelRepositoryInterface;

use Travel;
use TravelAdvance;
use TravelCost;
use TravelRoute;

class DbTravelRepository implements TravelRepositoryInterface {

	public function find($id)
	{
		return Travel::where('id', $id)->get();
	}

	public function get_first()
	{
		return Travel::first();
	}

	public function all()
	{
		return Travel::all();
	}

	public function save($input)
	{
		$travel = new Travel();
		$travel->manifest_number = $input['manifest_number'];
		$travel->issue_date = $input['issue_date'];
		$travel->to = $input['to'];
		$travel->control_ordinance_from_mileage = $input['control_ordinance_from_mileage'];
		$travel->control_ordinance_from_date = $input['control_ordinance_from_date'];
		$travel->control_ordinance_to_mileage = $input['control_ordinance_to_mileage'];
		$travel->control_ordinance_to_date = $input['control_ordinance_to_date'];
		$travel->seal_number_from = $input['seal_number_from'];
		$travel->seal_number_to = $input['seal_number_to'];
		$travel->observation = $input['observation'];
		$travel->general_informations = $input['general_informations'];
		$travel->general_informations_date = $input['general_informations_date'];
		$travel->out_suply_liters = $input['out_suply_liters'];
		$travel->out_km = $input['out_km'];
		$travel->arrival_suply_liters = $input['arrival_suply_liters'];
		$travel->arrival_km = $input['arrival_km'];
		$travel->travel_performace = $input['travel_performace'];
		$travel->travel_performace_reason = $input['travel_performace_reason'];
		$travel->document_receipt_arrive = $input['document_receipt_arrive'];
		$travel->all_documents_right = $input['all_documents_right'];
		$travel->tachograph_right = $input['tachograph_right'];
		$travel->vehicle_id = $input['vehicle_id'];
		$travel->employee_id = $input['employee_id'];

		$travel->save();

		if ($input['costs'])
		{
			$travelCosts = array();
			foreach ($input['costs'] as $key => $value) {

				$costArray = array(
					'cost_date' => $value['cost_date'],
					'cost_local' =>  $value['cost_local'],
					'cost_description' =>  $value['cost_description'],
					'invoice_number' =>  $value['invoice_number'],
					'cost_value' =>  $value['cost_value'],
					'mileage' =>  $value['mileage'],
					'liters' =>  $value['liters'],
					'km_point_to_point' =>  $value['km_point_to_point'],
					'travel_id' =>  $travel->id
				);
				// $travelCost = new TravelCost();
				// $travelCost->cost_date = $value['cost_date'];
				// $travelCost->cost_local = $value['cost_local'];
				// $travelCost->cost_descption = $value['cost_descption'];
				// $travelCost->invoice_number = $value['invoice_number'];
				// $travelCost->cost_value = $value['cost_value'];
				// $travelCost->mileage = $value['mileage'];
				// $travelCost->liters = $value['liters'];
				// $travelCost->km_point_to_point = $value['km_point_to_point'];
				// $travelAdvance->travel_id = $travel->travel_id;
				array_push($travelCosts, $costArray);
			}
			TravelCost::insert($travelCosts);
		}

		if ($input['advances'])
		{
			$travelAdvances = array();
			foreach ($input['advances'] as $key => $value) {
				$advanceArray = array(
				 'advance_local' => $value['advance_local'],
				 'advance_date' => $value['advance_date'],
				 'voucher_number' => $value['voucher_number'],
				 'advance_value' => $value['advance_value'],
				 'travel_id' => $travel->id
				);
				// $travelAdvance->advance_local = $value['advance_local'];
				// $travelAdvance->advance_date = $value['advance_date'];
				// $travelAdvance->voucher_number = $value['voucher_number'];
				// $travelAdvance->advance_value = $value['advance_value'];
				// $travelAdvance->travel_id = $travel->travel_id;
				array_push($travelAdvances, $advanceArray);
			}
			TravelAdvance::insert($travelAdvances);
		}
		
		

		if ($input['routes'])
		{
			$travelRoutes = array();
			foreach ($input['routes'] as $key => $value) {
				$routeArray = array(
				 'from' => $value['from'],
				 'to' => $value['to'],
				 'from_km' => $value['from_km'],
				 'from_date' => $value['from_date'],
				 'to_km' => $value['to_km'],
				 'to_date' => $value['to_date'],
				 'travel_id' => $travel->id
				);
				// $travelRoute->from = $value['from'];
				// $travelRoute->to = $value['to'];
				// $travelRoute->from_km = $value['from_km'];
				// $travelRoute->from_date = $value['from_date'];
				// $travelRoute->to_km = $value['to_km'];
				// $travelRoute->to_date = $value['to_date'];
				// $travelAdvance->travel_id = $travel->travel_id;
				array_push($travelRoutes, $routeArray);
			}
			TravelRoute::insert($travelRoutes);
		}

		return $travel;
	}

	public function update($id, $input)
	{

	}

	public function delete($id)
	{
		Travel::destroy($id);
	}
}