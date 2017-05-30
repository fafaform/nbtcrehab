<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class PointValue extends Model
{
	protected $table = 'pointvalues';
	protected $primaryKey = 'id';
	protected $connection = 'mango';

	public $timestamps = false;

}