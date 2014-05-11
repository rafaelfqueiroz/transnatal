<?php
namespace Transnatal\Repositories;

use Transnatal\Interfaces\TravelRouteRepositoryInterface;
use TravelRoute;

class DbTravelRouteRepository implements TravelRouteRepositoryInterface {

	public function find($id)
	{
		return TravelRoute::where('id', $id)->get();
	}

	public function get_first()
	{
		return TravelRoute::first();
	}

	public function all()
	{
		return TravelRoute::all();
	}

	public function save($input)
	{
		$travelRoute = new TravelRoute();
		$travelRoute->from = $input['from'];
		$travelRoute->to = $input['to'];
		$travelRoute->from_km = $input['from_km'];
		$travelRoute->from_date = $input['from_date'];
		$travelRoute->to_km = $input['to_km'];
		$travelRoute->to_date = $input['to_date'];
		$travelRoute->travel_id = $input['travel_id'];

		$travelRoute->save();

		return $travelRoute;
	}

	public function update($id, $input)
	{

	}

	public function delete($id)
	{
		
	}
}