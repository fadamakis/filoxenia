<?php

class ThalamoiController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($ksenwnas_id)
	{
		$thalamoi = Thalamos::all();
		return View::make('thalamoi.index')->with('thalamoi', $thalamoi);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($ksenwnas_id)
	{
		return View::make('thalamoi.create')->with('ksenwnas_id', $ksenwnas_id);

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($ksenwnas_id)
	{
        // store
		$data = Input::all();
        $thalamos = new Thalamos($data);
        $thalamos->available_places = Input::get('total_places');
        $thalamos->ksenwnas_id = $ksenwnas_id;

        $thalamos->save();

        return Redirect::to('rooms');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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


}
