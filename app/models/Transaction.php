<?php

class Transaction extends Eloquent {

	protected $fillable = array('date_approved', 'paid');

	// DEFINE RELATIONSHIPS --------------------------------------------------
	public function aitisi() {
		return $this->hasOne('Aitisi');
	}

	public function room() {
		return $this->hasMany('Room');
	}
}