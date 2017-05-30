<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Models\Feedback as Feedback;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Feedback::all();
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
        $feedback = new Feedback;
        $feedback->Staff_ID = $request->Staff_ID;
        $feedback->Patient_ID = $request->Patient_ID;
        $feedback->Device_ID = $request->Device_ID;
        $feedback->Device_NO = $request->Device_NO;
        $feedback->Action_ID = $request->Action_ID;
        $feedback->Week_NO = $request->Week_NO;
        $feedback->Feedback_Datetime = $request->Feedback_Datetime;
        $feedback->Comment = $request->Comment;
        $feedback->Patient_Telno = $request->Patient_Telno;
        $feedback->Patient_Email = $request->Patient_Email;

        $feedback->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Feedback::find($id);
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
        $feedback = Feedback::find($id);
        $feedback->Staff_ID = $request->Staff_ID;
        $feedback->Patient_ID = $request->Patient_ID;
        $feedback->Device_ID = $request->Device_ID;
        $feedback->Device_NO = $request->Device_NO;
        $feedback->Action_ID = $request->Action_ID;
        $feedback->Week_NO = $request->Week_NO;
        $feedback->Feedback_Datetime = $request->Feedback_Datetime;
        $feedback->Comment = $request->Comment;
        $feedback->Patient_Telno = $request->Patient_Telno;
        $feedback->Patient_Email = $request->Patient_Email;

        $feedback->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Feedback::destroy($id);
    }
}

