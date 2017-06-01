<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Models\Staff;
use App\Http\Models\Users;

class StaffController extends Controller
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
    $staffs = array();

    $staffs = DB::table('staff')
      ->select('users.*', 'staff.*')
      ->join('users', 'users.id', '=', 'staff.User_ID')
      ->get();
    
    return view('staffs.index')->with('staffs', $staffs);
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
    $user = new Users;
    $user->name = $request->Staff_Name;
    $user->email = $request->Staff_Email;
    $user->level = "staff";
    $user->password = bcrypt($request->Staff_Password);
    $user->save();

    $staff = new Staff;
    $staff->Staff_Sex = $request->Staff_Sex;
    $staff->Staff_Position = $request->Staff_Position;
    $staff->Staff_Email= $request->Staff_Email;
    $staff->Staff_Telno = $request->Staff_Telno;
    $staff->User_ID = $user->id;
    $staff->save();
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //return Staff::find($id);
    return DB::table('staff')
      ->select('users.*', 'staff.*')
      ->join('users', 'users.id', '=', 'staff.User_ID')
      ->where('staff.Staff_ID', '=', $id)
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
    $staff = Staff::find($id);
    $staff->Staff_Sex = $request->Staff_Sex;
    $staff->Staff_Position = $request->Staff_Position;
    $staff->Staff_Telno = $request->Staff_Telno;
    $staff->Staff_Email= $request->Staff_Email;
    $staff->save();

    $user = Users::find($staff->User_ID);
    $user->name = $request->Staff_Name;
    $user->email = $request->Staff_Email;
    $user->password = bcrypt($request->Staff_Password);
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
    Staff::destroy($id);
  }

  /**
   * 
   *
   * @param
   * @return \Illuminate\Http\Response
   */
  public function users($User_ID)
  {
    return Staff::where('User_ID', '=', $User_ID)->get();
  }
}
