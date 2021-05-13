<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class LoginController extends Controller
{
    
	public function getlogin(){
		return view('login');
	}

	public function logout(Request $request)
	{
		session()->forget('data');
		return redirect('login');
	}
	
	
	public function loginValidate(Request $request)
	{
		$request->session()->put('data',$request->input());
		$email = $request->input('email');
		$password = $request->input('password');
		$display_name = "";
		$dept_code = "";
		$mentor = "";
		$status = 1;
		$stu_mail="";
		
		$result = DB::select(DB::raw("SELECT fullname as display_name,password,T1.dept_code,T1.mentor,T1.email
					FROM user_master T1 
					WHERE T1.user_name = :user_name and T1.password = :password and T1.status = :status"),array('user_name'=>$email,'password'=>$password,'status'=>$status));

					foreach ($result AS $row) {
						$dept_code = $row->dept_code;
						$display_name = $row->display_name;
						$mentor=$row->mentor;
						$stu_mail=$row->email;
						
					}
					$request->session()->put('display_name',$display_name);
					$request->session()->put('dept_code',$dept_code);
					$request->session()->put('mentor',$mentor);
					$request->session()->put('stu_mail',$stu_mail);
			if (count($result)>0) {
				
				return view('dashboard');
				
			} else {
				return view('login');
			}
	
		
	}/*eofunction*/
	
}
