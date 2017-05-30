<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class DataPoint extends Model
{
	protected $table = 'datapoints';
	protected $primaryKey = 'id';

	public $timestamps = false;

}