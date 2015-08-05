<?php

class CitiesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Get all cities
		return Response::json(Cities::all()->toArray());
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id_city)
	{
		$zipcodes = ZipCodes::where('id_city', $id_city)->get();
		
		return Response::json($zipcodes);

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function showProvince($id_city)
	{
		$province = Cities::where('id', $id_city)->select('province_id')->first();

		$data = Provinces::find($province->province_id);

		return Response::json($data);
	}

	public function showCitiesByName($city)
	{
		$cities = Cities::where('name', $city)->get()->toArray();

		if(count($cities) > 0) {
			return Response::json();
		}

		return Response::json(array('status' => 'error', 'message' => 'Province and City combination mismatch or No result found.'));
	}

	public function showCitiesAndBarangays($city)
	{
		//GET THE CITY ID
		$city = DB::table('cities')
				->select('id', 'name')
				->where('name', urldecode($city))
				->get();

		if(count($city) == 0) {
			return Response::json(array('status' => 'error', 'message' => 'Province and City combination mismatch or No result found.'));
		}

		$barangays  = DB::table('barangay')
					->select('id', 'name')
					->where('id_city', $city[0]->id)
					->get();

		if(count($barangays) > 0) {
			//Get all provinces
			return Response::json($barangays);
		}

		return Response::json(array('status' => 'error', 'message' => 'Province and City combination mismatch or No result found.'));
	}
}
