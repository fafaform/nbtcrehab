<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Http\Models\Threshold as Threshold;

class ThresholdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Threshold::all();
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
        $threshold = new Threshold;
        $threshold->Patient_ID = $request->Patient_ID;
        $threshold->Staff_ID = $request->Staff_ID;
        $threshold->Device_ID = $request->Device_ID;
        $threshold->Week_NO = $request->Week_NO;
        $threshold->Threshold_DateTime = $request->Threshold_DateTime;
        $threshold->Threshold_1 = $request->Threshold_1;
        $threshold->Threshold_2 = $request->Threshold_2;
        $threshold->Threshold_3 = $request->Threshold_3;
        $threshold->Threshold_4 = $request->Threshold_5;
        $threshold->Threshold_5 = $request->Threshold_5;
        $threshold->Threshold_6 = $request->Threshold_6;
        $threshold->Threshold_7 = $request->Threshold_7;
        $threshold->Threshold_8 = $request->Threshold_8;
        $threshold->Threshold_9 = $request->Threshold_9;
        $threshold->Threshold_10 = $request->Threshold_10;
        $threshold->NoDayinWeek = $request->NoDayinWeek;
        $threshold->NoSetinDay = $request->NoSetinDay;
        $threshold->NoTimeinSet = $request->NoTimeinSet;

        $threshold->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Threshold::find($id);
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
        $threshold = Threshold::find($id);
        $threshold->Patient_ID = $request->Patient_ID;
        $threshold->Staff_ID = $request->Staff_ID;
        $threshold->Device_ID = $request->Device_ID;
        $threshold->Week_NO = $request->Week_NO;
        $threshold->Threshold_Datetime = $request->Threshold_Datetime;
        $threshold->Threshold_1 = $request->Threshold_1;
        $threshold->Threshold_2 = $request->Threshold_2;
        $threshold->Threshold_3 = $request->Threshold_3;
        $threshold->Threshold_4 = $request->Threshold_5;
        $threshold->Threshold_5 = $request->Threshold_5;
        $threshold->Threshold_6 = $request->Threshold_6;
        $threshold->Threshold_7 = $request->Threshold_7;
        $threshold->Threshold_8 = $request->Threshold_8;
        $threshold->Threshold_9 = $request->Threshold_9;
        $threshold->Threshold_10 = $request->Threshold_10;
        $threshold->NoDayinWeek = $request->NoDayinWeek;
        $threshold->NoSetinDay = $request->NoSetinDay;
        $threshold->NoTimeinSet = $request->NoTimeinSet;

        $threshold->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Threshold::destroy($id);
    }

    /**
     *
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function devices($Device_Group, $Action_ID)
    {
        return DB::table('threshold')
            ->join('device', 'threshold.Device_ID', '=', 'device.Device_ID')
            //->groupby('device.Device_Group')
            ->where('device.Device_Group', '=', $Device_Group)
            ->where('device.Action_ID', '=', $Action_ID)
            ->get();
    }

    /**
     *
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function patients($Patient_ID, $Device_ID)
    {
        return DB::table('threshold')
            ->where('threshold.Patient_ID', '=', $Patient_ID)
            ->where('threshold.Device_ID', '=', $Device_ID)
            ->orderBy('threshold.Threshold_ID', 'desc')
            ->get();
    }
}
