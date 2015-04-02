<?php

class Provinces extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table 		= 'provinces';
	protected $fillable 	= array('name');
}