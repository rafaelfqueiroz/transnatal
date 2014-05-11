<?php
namespace Transnatal\Repositories;

use Transnatal\Interfaces\TravelAdvanceRepositoryInterface;
use TravelAdvance;

class DbTravelAdvanceRepository implements TravelAdvanceRepositoryInterface {

	public function find($id)
	{
		return TravelAdvance::where('id', $id)->get();
	}

	public function get_first()
	{
		return TravelAdvance::first();
	}

	public function all()
	{
		return TravelAdvance::all();
	}

	public function save($input)
	{
		$travelAdvance = new TravelAdvance();
		$travelAdvance->advance_local = $input['advance_local'];
		$travelAdvance->advance_date = $input['advance_date'];
		$travelAdvance->voucher_number = $input['voucher_number'];
		$travelAdvance->from_date = $input['from_date'];
		$travelAdvance->advance_value = $input['advance_value'];
		$travelAdvance->travel_id = $input['travel_id'];

		$travelAdvance->save();

		return $travelAdvance;
	}

	public function update($id, $input)
	{

	}

	public function delete($id)
	{
		
	}
}