<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class registarcontroller extends Controller
{
    public function index(Request $req){	
    	//$req->session()->flush();
		return view('register.Registration');
	}
	public function signuppost(Request $req){
		$users->name = $req->name;
        $users->password = $req->password;
        $users->email = $req->email;
        $users->address = $req->address;
		$users->type = $req->type;

		$users->status = "Active";
		
		$freelancer->save();
		//$req->session()->flush();
		return view('login.index');
	}
}
