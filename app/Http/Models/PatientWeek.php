<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class PatientWeek extends Model
{
	protected $table = 'patient_week';
	protected $primaryKey = 'Patient_Week_ID';

	public $timestamps = false;
}