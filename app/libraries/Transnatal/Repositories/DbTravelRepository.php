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
		$travel = Travel::findOrFail($id);

		$travel->issue_date = format_date($travel->issue_date);
		$travel->control_ordinance_from_date = format_date($travel->control_ordinance_from_date);
		$travel->control_ordinance_to_date = format_date($travel->control_ordinance_to_date);
		$travel->general_informations_date = format_date($travel->general_informations_date);

		$qtd_costs = count($travel->costs);
		$qtd_routes = count($travel->routes);
		$qtd_advances = count($travel->advances);
		$advances_ended = false;
		$routes_ended = false;
		$costs_ended = false;
		$higher = max([$qtd_costs, $qtd_routes, $qtd_advances]);
		for ($i=0; $i < $higher; $i++) { 
			if ($i < $qtd_advances ){$travel->advances[$i]->advance_date = format_date($travel->advances[$i]->advance_date);}
			else{$advances_ended = true;}

			if ($i < $qtd_routes)
			{

				$travel->routes[$i]->from_date = format_date($travel->routes[$i]->from_date);
				$travel->routes[$i]->to_date = format_date($travel->routes[$i]->to_date);
			}
			else{$routes_ended = true;}

			if ($i < $qtd_costs){$travel->costs[$i]->cost_date = format_date($travel->costs[$i]->cost_date);}
			else{$costs_ended = true;}

			if ($advances_ended && $costs_ended && $routes_ended) {break;}
		}
		$travel->out_suply_liters = number_format($travel->out_suply_liters, 2);
		$travel->arrival_suply_liters = number_format($travel->arrival_suply_liters, 2);
		return $travel;
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
		$travel = $this->set_travel_with_input_data($input, $travel);
		$travel->save();

		if (isset($input['costs']))
		{
			$travelCosts = array();
			$travelCosts = $this->set_travel_costs_with_input_data($input['costs'], $travelCosts, $travel);
			TravelCost::insert($travelCosts);
		}

		if (isset($input['advances']))
		{
			$travelAdvances = array();
			$travelAdvances = $this->set_travel_advances_with_input_data($input['advances'], $travelAdvances, $travel);
			TravelAdvance::insert($travelAdvances);
		}

		if (isset($input['routes']))
		{
			$travelRoutes = array();
			$travelRoutes = $this->set_travel_routes_with_input_data($input['routes'], $travelRoutes, $travel);
			TravelRoute::insert($travelRoutes);
		}

		return $travel;
	}

	public function update($id, $input)
	{
		$travel = $this->find($id);
		$travel = $this->set_travel_with_input_data($input, $travel);
		$travel->save();

		if (isset($input['costs']))
		{
			$travelCosts = array();
			TravelCost::where('travel_id', $travel->id)->delete();
			$travelCosts = $this->set_travel_costs_with_input_data($input['costs'], $travelCosts, $travel);
			TravelCost::insert($travelCosts);
		}

		if (isset($input['advances']))
		{
			$travelAdvances = array();
			TravelAdvance::where('travel_id', $travel->id)->delete();
			$travelAdvances = $this->set_travel_advances_with_input_data($input['advances'], $travelAdvances, $travel);
			TravelAdvance::insert($travelAdvances);
		}

		if (isset($input['routes']))
		{
			$travelRoutes = array();
			TravelRoute::where('travel_id', $travel->id)->delete();
			$travelRoutes = $this->set_travel_routes_with_input_data($input['routes'], $travelRoutes, $travel);
			TravelRoute::insert($travelRoutes);
		}
		return $travel;
	}

	public function delete($id)
	{
		Travel::destroy($id);
	}

	private function set_travel_with_input_data($input, $travel)
	{
		$travel->manifest_number = $input['manifest_number'];
		$travel->issue_date = format_date($input['issue_date'], true);
		$travel->to = $input['travel_to'];
		$travel->control_ordinance_from_mileage = $input['control_ordinance_from_mileage'];
		$travel->control_ordinance_from_date = format_date($input['control_ordinance_from_date'], true);
		$travel->control_ordinance_to_mileage = $input['control_ordinance_to_mileage'];
		$travel->control_ordinance_to_date = format_date($input['control_ordinance_to_date'], true);
		$travel->seal_number_from = $input['seal_number_from'];
		$travel->seal_number_to = $input['seal_number_to'];
		$travel->observation = $input['observation'];
		$travel->general_informations = $input['general_informations'];
		$travel->general_informations_date = format_date($input['general_informations_date'], true);
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

		return $travel;
	}

	private function set_travel_advances_with_input_data($advances, $travelAdvances, $travel)
	{
		foreach ($advances as $key => $value) {
			$advanceArray = array(
			 'advance_local' => $value['advance_local'],
			 'advance_date' => format_date($value['advance_date'], true),
			 'voucher_number' => $value['voucher_number'],
			 'advance_value' => $value['advance_value'],
			 'travel_id' => $travel->id
			);
			array_push($travelAdvances, $advanceArray);
		}
		return $travelAdvances;
	}

	private function set_travel_routes_with_input_data($routes, $travelRoutes, $travel)
	{
		foreach ($routes as $key => $value) {
			$routeArray = array(
			 'from' => $value['from'],
			 'to' => $value['to'],
			 'from_km' => $value['from_km'],
			 'from_date' => format_date($value['from_date'], true),
			 'to_km' => $value['to_km'],
			 'to_date' => format_date($value['to_date'], true),
			 'travel_id' => $travel->id
			);
			array_push($travelRoutes, $routeArray);
		}
		return $travelRoutes;
	}

	private function set_travel_costs_with_input_data($costs, $travelCosts, $travel)
	{
		foreach ($costs as $key => $value) {
			$costArray = array(
				'cost_date' => format_date($value['cost_date'], true),
				'cost_local' =>  $value['cost_local'],
				'cost_description' =>  $value['cost_description'],
				'invoice_number' =>  $value['invoice_number'],
				'cost_value' =>  $value['cost_value'],
				'mileage' =>  $value['mileage'],
				'liters' =>  $value['liters'],
				'km_point_to_point' =>  $value['km_point_to_point'],
				'travel_id' =>  $travel->id
			);
			array_push($travelCosts, $costArray);
		}
		return $travelCosts;
	}
}