<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Models\PatientWeek as PatientWeek;
use App\Http\Models\Device as Device;

use Illuminate\Support\Facades\DB;

class PatientWeekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PatientWeek::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patientWeek = new PatientWeek;
        $patientWeek->Patient_ID = $request->Patient_ID;
        $patientWeek->Device_ID = $request->Device_ID;
        $patientWeek->Device_NO = $request->Device_NO;
        $patientWeek->Action_ID = $request->Action_ID;
        $patientWeek->Start_DateTime = $request->Start_DateTime;
        $patientWeek->End_DateTime = $request->End_DateTime;
        $patientWeek->Week_NO = $request->Week_NO;
        $patientWeek->Day_NO = $request->Day_NO;
        $patientWeek->Set_NO = $request->Set_NO;
        $patientWeek->Time_NO = $request->Time_NO;
        $patientWeek->Measured_Value_1 = $request->Measured_Value_1;
        $patientWeek->Measured_Value_2 = $request->Measured_Value_2;
        $patientWeek->Measured_Value_3 = $request->Measured_Value_3;
        $patientWeek->Measured_Value_4 = $request->Measured_Value_4;
        $patientWeek->Measured_Value_5 = $request->Measured_Value_5;
        $patientWeek->Measured_Value_6 = $request->Measured_Value_6;
        $patientWeek->Measured_Value_7 = $request->Measured_Value_7;
        $patientWeek->Measured_Value_8 = $request->Measured_Value_8;
        $patientWeek->Measured_Value_9 = $request->Measured_Value_9;
        $patientWeek->Measured_Value_10 = $request->Measured_Value_10;
        $patientWeek->Threshold_1 = $request->Threshold_1;
        $patientWeek->Threshold_2 = $request->Threshold_2;
        $patientWeek->Threshold_3 = $request->Threshold_3;
        $patientWeek->Threshold_4 = $request->Threshold_5;
        $patientWeek->Threshold_5 = $request->Threshold_5;
        $patientWeek->Threshold_6 = $request->Threshold_6;
        $patientWeek->Threshold_7 = $request->Threshold_7;
        $patientWeek->Threshold_8 = $request->Threshold_8;
        $patientWeek->Threshold_9 = $request->Threshold_9;
        $patientWeek->Threshold_10 = $request->Threshold_10;

        $patientWeek->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return PatientWeek::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patientWeek = PatientWeek::find($id);
        $patientWeek->Patient_ID = $request->Patient_ID;
        $patientWeek->Device_ID = $request->Device_ID;
        $patientWeek->Device_NO = $request->Device_NO;
        $patientWeek->Action_ID = $request->Action_ID;
        $patientWeek->Start_DateTime = $request->Start_DateTime;
        $patientWeek->End_DateTime = $request->End_DateTime;
        $patientWeek->Week_NO = $request->Week_NO;
        $patientWeek->Day_NO = $request->Day_NO;
        $patientWeek->Set_NO = $request->Set_NO;
        $patientWeek->Time_NO = $request->Time_NO;
        $patientWeek->Measured_Value_1 = $request->Measured_Value_1;
        $patientWeek->Measured_Value_2 = $request->Measured_Value_2;
        $patientWeek->Measured_Value_3 = $request->Measured_Value_3;
        $patientWeek->Measured_Value_4 = $request->Measured_Value_4;
        $patientWeek->Measured_Value_5 = $request->Measured_Value_5;
        $patientWeek->Measured_Value_6 = $request->Measured_Value_6;
        $patientWeek->Measured_Value_7 = $request->Measured_Value_7;
        $patientWeek->Measured_Value_8 = $request->Measured_Value_8;
        $patientWeek->Measured_Value_9 = $request->Measured_Value_9;
        $patientWeek->Measured_Value_10 = $request->Measured_Value_10;
        $patientWeek->Threshold_1 = $request->Threshold_1;
        $patientWeek->Threshold_2 = $request->Threshold_2;
        $patientWeek->Threshold_3 = $request->Threshold_3;
        $patientWeek->Threshold_4 = $request->Threshold_5;
        $patientWeek->Threshold_5 = $request->Threshold_5;
        $patientWeek->Threshold_6 = $request->Threshold_6;
        $patientWeek->Threshold_7 = $request->Threshold_7;
        $patientWeek->Threshold_8 = $request->Threshold_8;
        $patientWeek->Threshold_9 = $request->Threshold_9;
        $patientWeek->Threshold_10 = $request->Threshold_10;

        $patientWeek->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	PatientWeek::destroy($id);
    }

    /**
     *
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function patients($Patient_ID)
    {
        return DB::table('patient_week')
            ->join('patient', 'patient_week.Patient_ID', '=', 'patient.Patient_ID')
            ->where('patient_week.Patient_ID', '=', $Patient_ID)
            ->get();
    }

    /**
     *
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function devices($Patient_ID)
    {
        return DB::table('device')
            ->join('patient_week', 'device.Device_ID', '=', 'patient_week.Device_ID')
            //->groupby('device.Device_ID')
            ->groupby('device.Device_Group')
            ->where('patient_week.Patient_ID', '=', $Patient_ID)
            ->get();
    }

    /**
     *
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function actions($Patient_ID, $Device_Group)
    {
        return DB::table('device')
            ->join('patient_week', 'device.Device_ID', '=', 'patient_week.Device_ID')
            ->groupby('device.Device_Group')
            ->where('patient_week.Patient_ID', '=', $Patient_ID)
            ->where('device.Device_Group', '=', $Device_Group)
            ->get();
    }

    /**
     *
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function patient_device($Patient_ID, $Device_ID)
    {
        return DB::table('patient_week')
            // ->join('patient_week', 'device.Device_ID', '=', 'patient_week.Device_ID')
            // ->groupby('device.Device_Group')
            ->where('patient_week.Patient_ID', '=', $Patient_ID)
            ->where('patient_week.Device_ID', '=', $Device_ID)
            ->orderBy('patient_week.Patient_Week_ID', 'desc')
            ->orderBy('patient_week.Set_NO', 'desc')
            ->get();
    }

    /**
     *
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function patient_device_set($Patient_ID, $Device_ID, $Day_NO, $Set_NO)
    {
        return DB::table('patient_week')
            // ->join('patient_week', 'device.Device_ID', '=', 'patient_week.Device_ID')
            // ->groupby('device.Device_Group')
            ->where('patient_week.Patient_ID', '=', $Patient_ID)
            ->where('patient_week.Device_ID', '=', $Device_ID)
            ->where('patient_week.Day_NO', '=', $Day_NO)
            ->where('patient_week.Set_NO', '=', $Set_NO)
            ->orderBy('patient_week.Time_NO', 'asc')
            ->get();
    }

  public function summary($Patient_ID, $Device_ID)
  {
    $pws =  DB::table('patient_week')
      ->where('patient_week.Patient_ID', '=', decrypt($Patient_ID))
      ->where('patient_week.Device_ID', '=', decrypt($Device_ID))
      ->orderBy('patient_week.Patient_Week_ID', 'desc')
      ->orderBy('patient_week.Set_NO', 'desc')
      ->get();

    return view('monitor_summary')
      ->with('pws', $pws)
      ->with('Patient_ID', decrypt($Patient_ID))
      ->with('Device_ID', decrypt($Device_ID));    
  }
}
