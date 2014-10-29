<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('rooms/{ksenwnas_id}/thalamoi', 'ThalamoiController');
Route::resource('rooms', 'RoomsController');
Route::resource('requests', 'RequestsController');

Route::get('requests/{id}/review', 'RequestsController@review');

Route::get('requests/approve/{aitisiId}/{ksenwnasId}/', 'RequestsController@approve');

Route::get('transactions/', 'TransactionsController@index');



