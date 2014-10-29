<?php

class Thalamos extends Eloquent {

	protected $table = 'thalamoi';

	protected $fillable = array('name', 'ksenwnas_id', 'available_places', 'total_places');


	public function room()
	{
	    return $this->belongsTo('Room');
	}
}