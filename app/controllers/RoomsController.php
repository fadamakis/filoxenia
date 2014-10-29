<?php

class RoomsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$rooms = Room::all();
		return View::make('rooms.rooms')->with('rooms', $rooms);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('rooms.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        // store
		$data = Input::all();
        $room = new Room($data);

        $room->save();


        $destinationPath = public_path(). '/uploads/rooms/';
		$fileName = 'room'.$room->id. Input::file('image')->getClientOriginalExtension();
    	Input::file('image')->move($destinationPath, $fileName);
    	$room->image = $fileName;


        $room->update(Input::except('image'));

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
		$room = Room::find($id);
		return View::make('rooms.room')->with('room', $room);

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	 	$room = Room::find($id);
        return View::make('rooms.edit', compact('room'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
	  	$input = Input::all();
        $room = Room::find($id);
        if(Input::hasFile('image')){
	        $destinationPath = public_path(). '/uploads/rooms/';
			$fileName = 'room'.$room->id. Input::file('image')->getClientOriginalExtension();
	    	Input::file('image')->move($destinationPath, $fileName);
	    	$room->image = $fileName;
        }

        $room->update(Input::except('image'));
        return Redirect::route('rooms.show', $id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Room::find($id)->delete();
        return Redirect::route('rooms.index');
	}


}
