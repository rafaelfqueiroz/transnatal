<?php
namespace Transnatal\Repositories;

use Transnatal\Interfaces\TravelCostRepositoryInterface;
use TravelCost;

class DbTravelCostRepository implements DbTravelCostRepositoryInterface {

	public function find($id)
	{
		return TravelCost::where('id', $id)->get();
	}

	public function get_first()
	{
		return TravelCost::first();
	}

	public function all()
	{
		return TravelCost::all();
	}

	public function save($input)
	{
		$travelCost = new TravelCost();
		$travelCost->cost_date = $input['cost_date'];
		$travelCost->cost_local = $input['cost_local'];
		$travelCost->cost_descption = $input['cost_descption'];
		$travelCost->cost_value = $input['cost_value'];
		$travelCost->mileage = $input['mileage'];
		$travelCost->liters = $input['liters'];
		$travelCost->km_point_to_point = $input['km_point_to_point'];
		$travelCost->travel_id = $input['travel_id'];

		$travelCost->save();

		return $travelCost;
	}

	public function update($id, $input)
	{

	}

	public function delete($id)
	{
		
	}
}