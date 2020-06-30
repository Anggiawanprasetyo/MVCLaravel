<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('form');
    }

    public function welcome(Request $request){
        $fname = $request["fname"];
        $lname = $request["lname"];
        return view('welcome')->with('fname',$fname)
                              ->with('lname',$lname);
        // return "Halo " .$fname ." " .$lname;
      

    }
}
