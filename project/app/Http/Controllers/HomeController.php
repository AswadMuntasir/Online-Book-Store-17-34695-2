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

	public function allbooks(Request $req){
		return view('home.allbooks');
	}

	public function allusers(Request $req){
		return view('home.allusers');
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
							<td><a href="/home/users/details/'.$row->id.'">Change Staus</a></td>
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
					->orWhere('categoris', 'like', '%'.$query.'%')
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
