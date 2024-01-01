<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function send(Request $request){
        $contact=new Contact;
        $contact->name=$request->name;
        $contact->phone=$request->phone;
        $contact->email=$request->email;
        $contact->message=$request->message;
        $contact->save();

        return back()->with('message', 'your message has been sent');

    }

}
