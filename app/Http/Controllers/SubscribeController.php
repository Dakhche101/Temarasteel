<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribe;

class SubscribeController extends Controller
{
    //
    public function subscribe(Request $request){
        $isexist=Subscribe::where('email', $request->email)->first();
        if($isexist){
            return back()->with('message','you are alredy subscribed');
        }else{
            $subscribe=new subscribe;
            $subscribe->email=$request->email;
            $subscribe->save();
            return back()->with('message','You have successfully subscribed');
        }
    }
}
