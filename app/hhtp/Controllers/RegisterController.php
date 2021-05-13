<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Validator;
use Redirect;
use DB;


class RegisterController extends Controller
{
	public function getRegistered()
	{
		return view('register');
	}
	
	
	public function fetchDepartment(Request $request){

		$output=array("aaData"=>array() , "dbMessage" => "", "dbStatus" => "");
		$status=1;
		$result = DB::table('department')
		->select("deptcode","deptname")
		->orderBy('deptname')->get();

		//echo $result;

		if (COUNT($result)>0) {
			foreach ($result AS $row) {

				$output['aaData'][] = $row;
				$output['dbStatus'] = 'SUCCESS';

			}
		} else {
			$output['dbStatus'] = 'FAILURE';
		}
		return response()->json($output);
	}
	
	public function fetchCourse(Request $request){

		$output=array("aaData"=>array() , "dbMessage" => "", "dbStatus" => "");
		$status=1;
		$result = DB::table('course')
		->select("ccode","cname")
		->orderBy('cname')->get();

		if (COUNT($result)>0) {
			foreach ($result AS $row) {

				$output['aaData'][] = $row;
				$output['dbStatus'] = 'SUCCESS';

			}
		} else {
			$output['dbStatus'] = 'FAILURE';
		}
		return response()->json($output);
	}
	
	public function registerUser(Request $request)
	{
		$fullname = $request->input('fullname');
		$department = $request->input('department');
		$course = $request->input('course');
		$email = $request->input('email');
		$password=$request->input('password');
		$status =1;
		$prefix="User";
		$rand_no = rand(1,10000);
		$user_code = $prefix.$rand_no;
		$role_code="RLUSER";
		
		
		$result = DB::table('user_master')
		->insert(['user_code'=>$user_code,'user_name'=>$email,'fullname'=>$fullname,'dept_code'=>$department,'email'=>$email,'password'=>$password,'ccode'=>$course,'status'=>$status,'rlcode'=>$role_code]);
		if ($result)
		{
			return redirect('login');
			exit();
		} 
		else 
		{
			return redirect('register');
			exit();
		}

	}/*eof*/
	
		
		

}
