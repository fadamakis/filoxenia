<?php

class RequestsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$requests = Aitisi::where('pending', '=', true)->get();
		return View::make('requests.requests')->with('requests', $requests);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('requests.create');
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
        $request = new Aitisi($data);
        $request->save();

        return Redirect::to('requests');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$request = Aitisi::find($id);
		return View::make('requests.request')->with('request', $request);

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	 	$request = Aitisi::find($id);
        return View::make('requests.edit', compact('request'));
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
        $request = Aitisi::find($id);
        $request->update($input);
        return Redirect::route('requests.show', $id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Aitisi::find($id)->delete();
        return Redirect::route('requests.index');
	}

	/**
	 * Review the request.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function review($id)
	{
		$request = Aitisi::find($id);
		$rooms = Room::all();
		return View::make('requests.review')->with('request', $request)->with('rooms', $rooms);
	}


	/**
	 * Approve the request.
	 *
	 * @param  int  $aitisiId
	 * @param  int  $ksenwnasId
	 * @return Response
	 */
	public function approve($ksenwnasId,$aitisiId)
	{
		$request = Aitisi::find($aitisiId);
		$rooms = Room::find($ksenwnasId);

        $transaction = new Transaction();
        $transaction->aitisi_id = $aitisiId;
        $transaction->ksenwnas_id = $ksenwnasId;
        $transaction->paid = false;
        $request->pending = false;

        $transaction->save();
        $request->save();

		return Redirect::route('requests.index');
	}


}
