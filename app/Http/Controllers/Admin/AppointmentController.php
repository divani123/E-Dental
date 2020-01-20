<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Appointment;

class AppointmentController extends Controller
{
    public function store(Request $request){
//dd($request->all());

$appointment=new Appointment;

/*$this->validate($request,[
    'firstname'=>'required|max:50|min:1',
    'lastname'=>'required|max:50|min:1',
    'email'=>'required|max:50|min:1',
    'phonenumber'=>'required|max:10|min:10',
    'doctorname'=>'required|max:50|min:1',
    'message'=>'required|max:50|min:1',
    
]);*/

$appointment->firstname=$request->firstname;
$appointment->laststname=$request->lastname;
$appointment->email=$request->email;
$appointment->phone=$request->phonenumber;
$appointment->Doctorname=$request->doctorname;
$appointment->message=$request->message;
$appointment->file=$request->image;
$appointment->save();

$data=Appointment::all();

//dd($data);
        return view('dashboard.patient-app')->with('appointments',$data);
       //return redirect()->back();
    }
}
