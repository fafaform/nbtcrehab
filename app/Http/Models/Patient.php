<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	protected $table = 'patient';
	protected $primaryKey = 'id';

	public $timestamps = false;
}