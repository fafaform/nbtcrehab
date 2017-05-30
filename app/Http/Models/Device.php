<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
	protected $table = 'device';
	protected $primaryKey = 'Device_ID';

	public $timestamps = false;
}