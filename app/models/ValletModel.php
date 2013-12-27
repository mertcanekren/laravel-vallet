<?php

class ValletModel extends Eloquent {

	protected $table = 'vallet';

	protected $fillable = array('content','amount','remaining','status');

}