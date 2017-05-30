<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
	protected $table = 'staff';
	protected $primaryKey = 'Staff_ID';

	public $timestamps = false;
}