<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{


    //add schedule
    public function create(Request $request)
    {
        \App\Models\schedule::create($request->all());
        return redirect('/ManageSchedule');


    }

    //edit schedule
    public function edit($id){
        $data_schedule = \App\Models\Schedule::find($id);
        // dd($data_schedule);
        return view('ManageSchedule/UpdateorDeleteSchedule', ['data_schedule' =>$data_schedule]);
    }

    public function update(Request $request, $id){
        $data_schedule = \App\Models\Schedule::find($id);
        $data_schedule = update($request->all());
        // dd($data_schedule);
        return view('/ManageSchedule');
    }




    public function index()
    {
        $data_schedule = \App\Models\Schedule::all();
        return view('ManageSchedule/AddSchedule' , ['data_schedule'=>$data_schedule]);
    }
}
