<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;
use App\users;

class HomeController extends Controller
{
    public function index(Request $req){
		return view('home.index');
	}

	public function search1(Request $req){
		$search = $req->search;
		$user = books::where('name', $search)->get();
		return view('home.search',['books'=>$user]);
	}
	
	public function AfterLoginAdmin(Request $req){
		return view('home.AfterLoginAdmin');
	}

	public function AfterLoginCustomer(Request $req){
		return view('home.AfterLoginCustomer');
	}

	public function allbooks(Request $req){
		return view('home.allbooks');
	}

	public function allusers(Request $req){
		return view('home.allusers');
	}

	public function allbooksAdmin(Request $req){
		$book = books::all();
		return view('home.allbooksAdmin', ['book'=>$book]);
	}

	public function banncustomerA(Request $req, $id){

    	$user = users::find($id);

        $user->status = "Deactive";
    	$user->save();

		return redirect()->route('home.banncustomer');
    }

    public function profileup(Request $req){

    	$users->email = $req->session()->get('email');

    	$users = users::find($email);

    	$users->name = $req->name;
        $users->password = $req->password;
        $users->email = $req->email;
        $users->address = $req->address;
        $users->phonenumber = $req->phonenumber;

    	$user->save();

		return redirect()->route('home.profile');
    }

    public function profile(Request $req){

    	$email = $req->session()->get('email');

    	$users = users::find($email);

    	return redirect()->route('home.profile', ['value'=>$users]);
    }

	public function banncustomer(Request $req){

		$users = books::where('type', "customer");
		return view('home.banncustomer', ['users'=>$users]);
	}

	public function novel(Request $req){
		$novelList = books::where('categories', "novel");

		return view('home.categories.novel', ['novel'=> $novelList]);
	}

	public function details($id){

		$book = books::find($id);
		return view('home.categories.details', ['book'=>$book]);
    }

	public function literature(Request $req){
		$literatureList = books::where('categories', "literature");

		return view('home.categories.literature', ['literature'=> $literatureList]);
	}

	public function scifi(Request $req){
		$scifiList = books::where('categories', "scifi");

		return view('home.categories.scifi', ['scifi'=> $scifiList]);
	}

	public function livesearchUsers(Request $request)
	{
		if($request->ajax())
    	{
	      	$output = '';
	      	$query = $request->get('query');
	      	if($query != '')
	      	{
		       	$data = users::where('name', 'like', '%'.$query.'%')
					->orWhere('email', 'like', '%'.$query.'%')
					->orderBy('id', 'desc')
		        	->get();
	      	}
	      	else
	      	{
	       		$data =users::orderBy('id', 'desc')
	         	->get();
      		}
      		$total_row = $data->count();
      		if($total_row > 0)
      		{
       			foreach($data as $row)
       			{
        			$output .= '
        				<tr>
							<td>'.$row->id.'</td>
							<td>'.$row->name.'</td>
							<td>'.$row->email.'</td>
							<td>'.$row->address.'</td>
							<td>'.$row->phonenumber.'</td>
							<td>'.$row->workdetails.'</td>
							<td>'.$row->Status.'</td>
        				</tr>
        			';
       			}
      		}
      		else
      		{
       			$output = '
    			<tr>
        			<td align="center" colspan="5">No Data Found</td>
       			</tr>
				';
			}
			$data = array(
				'table_data'  => $output,
				'total_data'  => $total_row
			);

			echo json_encode($data);
		}
	}
public function livesearchBooks(Request $request)
	{
		if($request->ajax())
    	{
	      	$output = '';
	      	$query = $request->get('query');
	      	if($query != '')
	      	{
		       	$data = books::where('name', 'like', '%'.$query.'%')
					->orWhere('categories', 'like', '%'.$query.'%')
					->orderBy('id', 'desc')
		        	->get();
	      	}
	      	else
	      	{
	       		$data =books::orderBy('id', 'desc')
	         	->get();
      		}
      		$total_row = $data->count();
      		if($total_row > 0)
      		{
       			foreach($data as $row)
       			{
        			$output .= '
        				<tr>
							<td>'.$row->id.'</td>
							<td>'.$row->name.'</td>
							<td>'.$row->categories.'</td>
							<td>'.$row->price.'</td>
							<td>'.$row->author.'</td>
							<td><a href="/home/cart">Add to Cart</a></td>
        				</tr>
        			';
       			}
      		}
      		else
      		{
       			$output = '
    			<tr>
        			<td align="center" colspan="5">No Data Found</td>
       			</tr>
				';
			}
			$data = array(
				'table_data'  => $output,
				'total_data'  => $total_row
			);

			echo json_encode($data);
		}
	}
}
