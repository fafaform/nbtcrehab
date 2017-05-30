<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
	protected $table = 'feedback';
	protected $primaryKey = 'Feedback_ID';

	public $timestamps = false;

}