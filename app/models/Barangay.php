<?php

class Barangay extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table 	= 'barangay';
	protected $fillable = array('name');
}