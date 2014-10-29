<?php

class TransactionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$transactions = Transaction::all();

		foreach($transactions as $transaction){
            $room = Room::find($transaction->ksenwnas_id);
            $aitisi = Aitisi::find($transaction->aitisi_id);
            $transaction->room = $room;
            $transaction->aitisi = $aitisi;
		}
		return View::make('transactions.index')->with('transactions', $transactions);
	}

}
