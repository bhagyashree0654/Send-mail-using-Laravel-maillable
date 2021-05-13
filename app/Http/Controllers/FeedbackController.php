<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

use Session;

class FeedbackController extends Controller
{
    
    public function getFeedbackForm(){
		return view('feedback');
	}
					//fetch department
    public function getDepartment(Request $request){

		$output=array("aaData"=>array() , "dbMessage" => "", "dbStatus" => "");
		$status=1;
		$value1 = Session::get('dept_code');
		$result = DB::table('department')
		->select("deptcode","deptname")
		->where('deptcode',$value1)
		->orderBy('deptname')->get();

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


			//fetchSubject
	public function getSubject(Request $request){

		$output=array("aaData"=>array() , "dbMessage" => "", "dbStatus" => "");
		$status=1;
		$value1 = Session::get('dept_code');
		$result = DB::table('subject_master')
		->select("sub_code","sub_name")
		->where('dept_code',$value1)
		->orderBy('sub_name')->get();

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
			//fetch teacher
	public function getTeacher(Request $request){

		$output=array("aaData"=>array() , "dbMessage" => "", "dbStatus" => "");
		$status=1;
		$value1 = Session::get('dept_code');
		$result = DB::table('teacher')
		->select("tname","tcode")
		->where('dept_code',$value1)
		->orderBy('tname')->get();

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


	public function sendFeedbackMail(Request $request){


        $department = $request->input('dept');
		$subject= $request ->input('sub');
		$teacher= $request ->input('teacher');
		$rating1= $request ->input('rating1');
        $rating2= $request ->input('rating2');
        $rating3= $request ->input('rating3');
        $rating4= $request ->input('rating4');
        $rating5= $request ->input('rating5');
        $rating6= $request ->input('rating6');
        $rating7= $request ->input('rating7');
        $rating8= $request ->input('rating8');
        $rating9= $request ->input('rating9');
        $rating10= $request ->input('rating10');


        $result1 = DB::table('teacher')
		->select("mail",'tname','hod_status')
		->where('tcode',$teacher)
        ->orWhere('hod_status', 1)
		->orderBy('tname')->get();

		foreach ($result1 AS $row) {
			$tchr= $row -> tname;
            $to_mail = $row -> mail ;
		}

        $result = DB::table('department')
		->select("deptname")
		->where('deptcode',$department)
        ->get();

		foreach ($result AS $row) {
			$dptnm = $row->deptname;			
		}

        $result = DB::table('subject_master')
		->select("sub_name")
		->where('sub_code',$subject)
        ->get();

		foreach ($result AS $row) {
			$sub = $row->sub_name;			
		}
		
        $data = array(
            
			'department'	=> $dptnm,
			'subject'      => $sub ,
            'teacher'   =>   $tchr,
			'rt1' => $rating1,
			'rt2' => $rating2,
			'rt3' => $rating3,
			'rt4' => $rating4,
			'rt5' => $rating5,
			'rt6' => $rating6,
			'rt7' => $rating7,
			'rt8' => $rating8,
			'rt9' => $rating9,
			'rt10' => $rating10

        );

		Mail::to($to_mail)->send(new SendMail($data));
		return view('dashboard');	


	}


	
}
