<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $table = 'events';
	protected $primaryKey = 'id';
	protected $connection = 'mango';

	public $timestamps = false;

}