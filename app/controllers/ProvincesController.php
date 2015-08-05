<?php

class ProvincesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id_provice)
	{
		//GET THE PROVINCE ID
		$province = 	DB::table('provinces')
						->select('id')
						->where('id', urldecode($id_provice))
						->get();

		$cities = 	DB::table('cities')
					->select('id', 'name')
					->where('province_id', $province[0]->id)
					->get();

		//Get all provinces
		return Response::json($cities);
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
	public function show($id_prov, $id_city)
	{
		//show specific city and its province
		$barangay = DB::table('barangay')
					->select('barangay.id', 'barangay.name')
			        ->join('cities', function($join)
			        {
			            $join->on('cities.id', '=', 'barangay.id_city');
			        })
			        ->join('provinces', function($join)
			        {
			            $join->on('provinces.id', '=', 'cities.province_id');
			        })			        
					->where('barangay.id_city', urldecode($id_city))
					->where('provinces.id', urldecode($id_prov))
					->get();

		if(count($barangay) > 0):
			return Response::json($barangay);
		else:
			return Response::json(array('status' => 'error', 'message' => 'Province and City combination mismatch or No result found.'));
		endif;
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

	public function showProvince()
	{
		return Response::json(Provinces::all()->toArray());
	}

	public function showProvinceByName($province)
	{
		return Response::json(Provinces::where('name', $name)->get()->toArray());
	}

	public function showProvinceAndCities($province)
	{
		//GET THE PROVINCE ID
		$province = DB::table('provinces')
					->select('id', 'name')
					->where('name', urldecode($province))
					->get();

		$cities   = DB::table('cities')
					->select('id', 'name')
					->where('province_id', $province[0]->id)
					->get();

		//Get all provinces
		return Response::json($cities);
	}
}
