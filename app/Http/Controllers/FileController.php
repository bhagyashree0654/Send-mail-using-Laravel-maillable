<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

use Session;

class FileController extends Controller
{
    
	public function getMentorForm(){
		return view('mentor');
	}

    public function getFeedbackForm(){
		return view('feedback');
	}
				//fetchMentor
    public function getMentor(Request $request){

		$output=array("aaData"=>array() , "dbMessage" => "", "dbStatus" => "");
		$status=1;
		$value = Session::get('mentor');
        $result = DB::table('teacher')
		->select("tcode","tname")
		->where('tcode',$value)
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
			//fetchBatch
    public function getBatch(Request $request){
		$output=array("aaData"=>array() , "dbMessage" => "", "dbStatus" => "");
		$value1 = Session::get('dept_code');
		$status=1;
		if($value1 == "mca"){
			$result = DB::table('batch')
			->select("bcode","bname")
			->where('dept_code',$value1)
			->orderBy('bname')->get();
		}
		else{
			$result = DB::table('batch')
			->select("bcode","bname")
			->orderBy('bname')->get();
		}
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
		

/////////////////////////////////////////////////////<<<< MENTOR Form Sendling>>>>///////////////////////////////////////////

	public function sendMail(Request $request){

		$email = $request->input('mail');
		$batch= $request ->input('admsnBatch');
		$dept= $request ->input('department');
		$roll= $request ->input('rollNo');
		$name= $request ->input('fullname');
		$guardian= $request ->input('gname');
		$gender= $request ->input('gender');
		$caste= $request ->input('caste');
		$dob= $request ->input('dob');
		$address= $request ->input('address');
		$selfContact= $request ->input('noOfSelf');
		$gContact= $request ->input('noOfGuardian');
		$schlorship= $request ->input('scholarship');
		$research= $request ->input('research');
		$interest= $request ->input('interest');
		$aoi= $request ->input('aoi');
		$date= $request ->input('date');
		$sign= $request ->input('sign');

		$g1= $request ->input('grad1');
		$g2= $request ->input('grad2');
		$g3= $request ->input('grad3');
		$g4= $request ->input('grad4');
		$i1= $request ->input('int1');
		$i2= $request ->input('int2');
		$i3= $request ->input('int3');
		$i4= $request ->input('int4');
		$t1= $request ->input('ten1');
		$t2= $request ->input('ten2');
		$t3= $request ->input('ten3');
		$t4= $request ->input('ten4');
		$o1= $request ->input('ot1');
		$o2= $request ->input('ot2');
		$o3= $request ->input('ot3');
		$o4= $request ->input('ot4');
		$s1= $request -> input ('strength1');
		$s2= $request -> input ('strength2');
		$s3= $request -> input ('strength3');

		$w1 = $request -> input ('weakness1');
		$w2 = $request -> input ('weakness2');
		$w3 = $request -> input ('weakness3');


		
		$value = Session::get('mentor');
		$result = DB::table('teacher')
		->select("mail",'tname')
		->where('tcode',$value)
		->orderBy('tname')->get();

		foreach ($result AS $row) {
			$mentor_name= $row -> tname;
			$to = $row->mail;			
		}

		$request->session()->put('to_mail',$to);

		//echo $to;
		$result = DB::table('batch')
		->select("bname")
		->where('bcode',$batch)
		->orderBy('bname')->get();

		foreach ($result AS $row) {
			$bth = $row->bname;			
		}
		//echo $bth;
		$result = DB::table('department')
		->select("deptname")
		->where('deptcode',$dept)
		->orderBy('deptname')->get();

		foreach ($result AS $row) {
			$dptnm = $row->deptname;			
		}
		//echo $dptnm;


		$data = array(
            'mentor'      => $mentor_name ,
			'mail' => $email,
            'batch'   =>   $bth,
			'dept'	=> $dptnm,
			'roll'      => $roll ,
            'name'   =>   $name,
			'guardian'	=> $guardian,
			'gender'      => $gender ,
            'caste'   =>   $caste,
			'dob'	=> $dob,
			'address' =>$address,
			'no' => $selfContact,
			'gNo' => $gContact,
			'g1' => $g1,
			'g2' => $g2,
			'g3' => $g3,
			'g4' => $g4,
			'i1' => $i1,
			'i2' => $i2,
			'i3' => $i3,
			'i4' => $i4,
			't1' => $t1,
			't2' => $t2,
			't3' => $t3,
			't4' => $t4,
			'o1' => $o1,
			'o2' => $o2,
			'o3' => $o3,
			'o4' => $o4,
			'schlorship' => $schlorship,
			'interest' => $interest,
			'research' => $research,
			's1' => $s1,
			's2' => $s2,
			's3' => $s3,
			'w1' => $w1,
			'w2' => $w2,
			'w3' => $w3,
			'aoi' => $aoi,
			'date' => $date,
			'sign' => $sign

        );

		Mail::to($to)->send(new SendMail($data));
		return view('dashboard');	
		
	}

	
}
