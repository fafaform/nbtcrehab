<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class DataSource extends Model
{
	protected $table = 'datasources';
	protected $primaryKey = 'id';
	protected $connection = 'mango';

	public $timestamps = false;

}