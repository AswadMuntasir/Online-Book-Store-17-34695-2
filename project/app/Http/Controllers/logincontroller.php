<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class logincontroller extends Controller
{
    public function index(){	

		return view('login.index');
	}

	public function verify(Request $req){	

		$result = users::where('email', $req->email)
				->where('password', $req->password)
				->get();
		
		//echo $result[0]->type;

		if(count($result) > 0){

			$req->session()->put('email', $req->email);
			$req->session()->put('type', $result[0]->type);

			if($result[0]->type=="admin")
			{
				return redirect()->route('home.AfterLoginAdmin');
			}
			else
			{
				return redirect()->route('home.AfterLoginCustomer');
			}


		}else{
			$req->session()->flash('msg', 'invalid email or password');
			return redirect()->route('login.index');
			//return view('login.index');
		}
	}
}
