<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Models\Device;

class DeviceController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  } 
  
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $devices = array();

    $devices = DB::table('device')->get();

    return view('devices.index')->with('devices', $devices);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('devices.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $device = new Device;
    $device->Device_Group = $request->Device_Group;
    $device->Device_NO = $request->Device_NO;
    $device->Action_ID = $request->Action_ID;
    $device->Device_Desc = $request->Device_Desc;
    $device->Action_Desc = $request->Action_Desc;
    $device->Measured_Counter = $request->Measured_Counter;
    $device->Threshold_Counter = $request->Threshold_Counter;
    $device->Measured1_Name = $request->Measured1_Name;
    $device->Measured1_Desc = $request->Measured1_Desc;
    $device->Measured2_Name = $request->Measured2_Name;
    $device->Measured2_Desc = $request->Measured2_Desc;
    $device->Measured3_Name = $request->Measured3_Name;
    $device->Measured3_Desc = $request->Measured3_Desc;
    $device->Measured4_Name = $request->Measured4_Name;
    $device->Measured4_Desc = $request->Measured4_Desc;
    $device->Measured5_Name = $request->Measured5_Name;
    $device->Measured5_Desc = $request->Measured5_Desc;
    $device->Measured6_Name = $request->Measured6_Name;
    $device->Measured6_Desc = $request->Measured6_Desc;
    $device->Measured7_Name = $request->Measured7_Name;
    $device->Measured7_Desc = $request->Measured7_Desc;
    $device->Measured8_Name = $request->Measured8_Name;
    $device->Measured8_Desc = $request->Measured8_Desc;
    $device->Measured9_Name = $request->Measured9_Name;
    $device->Measured9_Desc = $request->Measured9_Desc;
    $device->Measured10_Name = $request->Measured10_Name;
    $device->Measured10_Desc = $request->Measured10_Desc;
    $device->Threshold1_Name = $request->Threshold1_Name;
    $device->Threshold1_Desc = $request->Threshold1_Desc;
    $device->Threshold2_Name = $request->Threshold2_Name;
    $device->Threshold2_Desc = $request->Threshold2_Desc;
    $device->Threshold3_Name = $request->Threshold3_Name;
    $device->Threshold3_Desc = $request->Threshold3_Desc;
    $device->Threshold4_Name = $request->Threshold4_Name;
    $device->Threshold4_Desc = $request->Threshold4_Desc;
    $device->Threshold5_Name = $request->Threshold5_Name;
    $device->Threshold5_Desc = $request->Threshold5_Desc;
    $device->Threshold6_Name = $request->Threshold6_Name;
    $device->Threshold6_Desc = $request->Threshold6_Desc;
    $device->Threshold7_Name = $request->Threshold7_Name;
    $device->Threshold7_Desc = $request->Threshold7_Desc;
    $device->Threshold8_Name = $request->Threshold8_Name;
    $device->Threshold8_Desc = $request->Threshold8_Desc;
    $device->Threshold9_Name = $request->Threshold9_Name;
    $device->Threshold9_Desc = $request->Threshold9_Desc;
    $device->Threshold10_Name = $request->Threshold10_Name;
    $device->Threshold10_Desc = $request->Threshold10_Desc;

    $device->save();
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    return Device::find($id);
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
    $device = Device::find($id);
    $device->Device_Group = $request->Device_Group;
    $device->Device_NO = $request->Device_NO;
    $device->Action_ID = $request->Action_ID;
    $device->Device_Desc = $request->Device_Desc;
    $device->Action_Desc = $request->Action_Desc;
    $device->Measured_Counter = $request->Measured_Counter;
    $device->Threshold_Counter = $request->Threshold_Counter;
    $device->Measured1_Name = $request->Measured1_Name;
    $device->Measured1_Desc = $request->Measured1_Desc;
    $device->Measured2_Name = $request->Measured2_Name;
    $device->Measured2_Desc = $request->Measured2_Desc;
    $device->Measured3_Name = $request->Measured3_Name;
    $device->Measured3_Desc = $request->Measured3_Desc;
    $device->Measured4_Name = $request->Measured4_Name;
    $device->Measured4_Desc = $request->Measured4_Desc;
    $device->Measured5_Name = $request->Measured5_Name;
    $device->Measured5_Desc = $request->Measured5_Desc;
    $device->Measured6_Name = $request->Measured6_Name;
    $device->Measured6_Desc = $request->Measured6_Desc;
    $device->Measured7_Name = $request->Measured7_Name;
    $device->Measured7_Desc = $request->Measured7_Desc;
    $device->Measured8_Name = $request->Measured8_Name;
    $device->Measured8_Desc = $request->Measured8_Desc;
    $device->Measured9_Name = $request->Measured9_Name;
    $device->Measured9_Desc = $request->Measured9_Desc;
    $device->Measured10_Name = $request->Measured10_Name;
    $device->Measured10_Desc = $request->Measured10_Desc;
    $device->Threshold1_Name = $request->Threshold1_Name;
    $device->Threshold1_Desc = $request->Threshold1_Desc;
    $device->Threshold2_Name = $request->Threshold2_Name;
    $device->Threshold2_Desc = $request->Threshold2_Desc;
    $device->Threshold3_Name = $request->Threshold3_Name;
    $device->Threshold3_Desc = $request->Threshold3_Desc;
    $device->Threshold4_Name = $request->Threshold4_Name;
    $device->Threshold4_Desc = $request->Threshold4_Desc;
    $device->Threshold5_Name = $request->Threshold5_Name;
    $device->Threshold5_Desc = $request->Threshold5_Desc;
    $device->Threshold6_Name = $request->Threshold6_Name;
    $device->Threshold6_Desc = $request->Threshold6_Desc;
    $device->Threshold7_Name = $request->Threshold7_Name;
    $device->Threshold7_Desc = $request->Threshold7_Desc;
    $device->Threshold8_Name = $request->Threshold8_Name;
    $device->Threshold8_Desc = $request->Threshold8_Desc;
    $device->Threshold9_Name = $request->Threshold9_Name;
    $device->Threshold9_Desc = $request->Threshold9_Desc;
    $device->Threshold10_Name = $request->Threshold10_Name;
    $device->Threshold10_Desc = $request->Threshold10_Desc;

    $device->save();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    Device::destroy($id);
  }

  /**
   * 
   *
   * @param
   * @return \Illuminate\Http\Response
   */
  public function devicelist()
  {
    return DB::table('device')
      ->whereNotIn('Device_ID', [18])
      ->groupby('device.Device_Group')
      ->get();
  }

  /**
   * 
   *
   * @param
   * @return \Illuminate\Http\Response
   */
  public function numbers($Device_Group)
  {
    return DB::table('device')
      ->groupby('device.Device_ID')
      ->where('device.Device_Group', '=', $Device_Group)
      ->get();
  }

  /**
   * 
   *
   * @param
   * @return \Illuminate\Http\Response
   */
  public function actions($Device_Group)
  {
    return DB::table('device')
      ->groupby('device.Device_ID')
      ->where('device.Device_Group', '=', $Device_Group)
      ->get();
  }

  /**
   * 
   *
   * @param
   * @return \Illuminate\Http\Response
   */
  public function device($Device_Group, $Action_ID)
  {
    return DB::table('device')
      ->groupby('device.Device_ID')
      ->where('device.Device_Group', '=', $Device_Group)
      ->where('device.Action_ID', '=', $Action_ID)
      ->get();
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function devices_patients($Patient_ID)
  {
    $devices = array();

    $devices = DB::table('device')
      ->join('threshold', 'device.Device_ID', '=', 'threshold.Device_ID')
      ->groupBy('device.Device_ID')
      ->groupBy('device.Device_Group')
      ->where('threshold.Patient_ID', '=', decrypt($Patient_ID))
      ->get();

    return view('devices.patients')
      ->with('Patient_ID', decrypt($Patient_ID))
      ->with('devices', $devices);
  }
}
