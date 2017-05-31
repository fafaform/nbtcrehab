<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Models\User;
use App\Http\Models\Patient;
use App\Http\Models\Staff;

class PatientController extends Controller
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
    $patients = array();

    $Staff_ID = Staff::where('User_ID', '=', auth()->id())->first()->Staff_ID;
    $patients = DB::table('patient')
      ->select('users.*', 'patient.*', 'patient.id AS PatientID')
      ->join('users', 'users.id', '=', 'patient.User_ID')
      ->where('patient.Staff_ID', '=', $Staff_ID)
      ->get();

    return view('patients.index')->with('patients', $patients);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('patients.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
      'Patient_ID' => 'required|unique:patient,Patient_ID|max:255',
      'Patient_Name' => 'required',
      'Patient_Sex' => 'required',
      'Patient_Email' => 'required|email',
      'Patient_Password' => 'required',
      'Patient_Tel' => 'required',
      'Patient_Symtom' => 'required',
    ]);

    $user = new Users;
    $user->name = $request->Patient_Name;
    $user->email = $request->Patient_Email;
    $user->password = bcrypt($request->Patient_Password);
    $user->level = "patient";
    $user->save();

    $patient = new Patient;
    $patient->Patient_ID = $request->Patient_ID;
    $patient->Patient_Sex = $request->Patient_Sex;
    $patient->Patient_Telno = $request->Patient_Telno;
    $patient->Patient_Email= $request->Patient_Email;
    $patient->Patient_Symptom = $request->Patient_Symptom;
    $patient->Staff_ID = auth()->id();
    $patient->User_ID = $user->id;
    $patient->save();

    return view('patients');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //return Patient::find($id);
    return DB::table('patient')
      ->select('users.*', 'patient.*', 'patient.id AS PatientID')
      ->join('users', 'users.id', '=', 'patient.User_ID')
      ->where('patient.id', '=', $id)
      ->get();
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    return view('patients.edit')->with('id', decrypt($id));
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
    $patient = Patient::find($id);
    $patient->Patient_ID = $request->Patient_ID;
    $patient->Patient_Sex = $request->Patient_Sex;
    $patient->Patient_Telno = $request->Patient_Telno;
    $patient->Patient_Email= $request->Patient_Email;
    $patient->Patient_Symptom = $request->Patient_Symptom;
    $patient->save();

    $user = Users::find($patient->User_ID);
    $user->name = $request->Patient_Name;
    $user->email = $request->Patient_Email;
    $user->password = bcrypt($request->Patient_Password);
    $user->save();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    Patient::destroy($id);
  }

  /**
   * 
   *
   * @param
   * @return \Illuminate\Http\Response
   */
  public function users($User_ID)
  {
    return Patient::where('User_ID', '=', $User_ID)->get();
  }

  public function pid($Patient_ID)
  {
    //return Patient::find($id);
    return DB::table('patient')
      ->select('users.*', 'patient.*', 'patient.id AS PatientID')
      ->join('users', 'users.id', '=', 'patient.User_ID')
      ->where('patient.Patient_ID', '=', $Patient_ID)
      ->get();
  }

  public function patients_staffs($Staff_ID)
  {
    //return Patient::find($id);
    return Patient::where('Staff_ID', '=', $Staff_ID)->get();
  }
}
