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
		$travel->vehicle_id = $input['vehicle_id'];
		$travel->employee_id = $input['employee_id'];

		$travel->save();
		
		$travelAdvance = new TravelAdvance();
		$travelAdvance->advance_local = $input['advance_local'];
		$travelAdvance->advance_date = $input['advance_date'];
		$travelAdvance->voucher_number = $input['voucher_number'];
		$travelAdvance->from_date = $input['from_date'];
		$travelAdvance->advance_value = $input['advance_value'];
		$travelAdvance->travel_id = $travel->travel_id;

		$travelAdvance->save();

		$travelCost = new TravelCost();
		$travelCost->cost_date = $input['cost_date'];
		$travelCost->cost_local = $input['cost_local'];
		$travelCost->cost_descption = $input['cost_descption'];
		$travelCost->cost_value = $input['cost_value'];
		$travelCost->mileage = $input['mileage'];
		$travelCost->liters = $input['liters'];
		$travelCost->km_point_to_point = $input['km_point_to_point'];
		$travelAdvance->travel_id = $travel->travel_id;

		$travelCost->save();

		$travelRoute = new TravelRoute();
		$travelRoute->from = $input['from'];
		$travelRoute->to = $input['to'];
		$travelRoute->from_km = $input['from_km'];
		$travelRoute->from_date = $input['from_date'];
		$travelRoute->to_km = $input['to_km'];
		$travelRoute->to_date = $input['to_date'];
		$travelAdvance->travel_id = $travel->travel_id;

		$travelRoute->save();

		return $travel;
	}

	public function update($id, $input)
	{

	}

	public function delete($id)
	{
		
	}
}