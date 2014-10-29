<?php

class Room extends Eloquent {

	protected $fillable = array('name', 'description', 'address', 'total_places', 'cost', 'image');


	public function thalamos() {
		return $this->hasMany('Thalamos');
	}
}