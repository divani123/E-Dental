<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function store(Request $request){

        $contact=new Contact;

        $this->validate($request,[
            'name'=>'required|max:50|min:1',
            'email'=>'required|max:50|min:1',
            'subject'=>'required|max:50|min:1',
            'message'=>'required|max:200|min:1',
        ]);

        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        $contact->save();

        $data=Contact::all();
        return view('dashboard.patient-contact')->with('contacts',$data);
        //dd($data);

        //return redirect()->back();

        //dd($request->all());
    }

    public function contactdelete($id){
        $data=Contact::findOrFail($id);
        $data->delete();

        return redirect('/dashboard/patient-contact')->with('status','FeedBack is Deleted');
    }
}
