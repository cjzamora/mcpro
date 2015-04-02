<?php

class Cities extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table 	= 'cities';
	protected $fillable = array('name');
}