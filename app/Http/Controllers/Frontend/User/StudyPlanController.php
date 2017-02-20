<?php

namespace App\Http\Controllers\Frontend\User;
use App\Helpers\Auth\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Helpers\Frontend\Auth\Socialite;
use App\Events\Frontend\Auth\UserLoggedIn;
use App\Events\Frontend\Auth\UserLoggedOut;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Access\User\Meeting;
use App\Models\Access\User\Course;
use App\Models\Access\User\study;
use App\Models\Access\User\milestone;
use App\Models\Access\User\engagement;
use App\Http\Requests\Frontend\User\UpdateProfileRequest;
use App\Repositories\Frontend\Access\User\UserRepository;




class StudyPlanController extends Controller{

	use AuthenticatesUsers;




    //
//course completion plan data is handled here.
	public function  index(){ 



}
// meeting plan data here insert to db
		public function meet(Request $request){
			$input =   $request->all();
			$id =  auth()->user()->id;
 
			$data = array(

			  'title'=>$input['title'],
			  'date'=>$input['date'],
			  'venue'=>$input['venue'],
			  'agenda'=>$input['agenda'],
			  'user_id'=>$id,


				);
			
	
 		Meeting::insert($data);


 		return redirect()->route('frontend.user.dashboard')->withFlashSuccess(trans('Meeting has been set successfully'));
 	
}
//course completion plan insert to db 
		public function courses(Request $request){
			$input =   $request->all();
			$id =  auth()->user()->id;

			//print_r($input);exit;


			$data = array(

		   	         'course_name' =>$input['course_name'],
		   	         'course_code'=>$input['course_code'],
		   	          'credit_units'=>$input['credit_units'],
		   	          'institution'=>$input['institution'],
		   	          'department'=>$input['department'],
		   	          'semster'=>$input['semster'],
		   	          'year'=>$input['year'],
		   	          'user_id'=>$id,
		   	          
		   	         

		   					);

		   			course::insert($data);

				
			return redirect()->route('frontend.user.dashboard')->withFlashSuccess(trans('Course Plan has been set successfully'));
 	



}

//study plan insert to db
	public function plan(Request $request){
		  $id =  auth()->user()->id;
		  $input =   $request->all();

 	$am = $input['study_number'];

	 $check = DB::table('studies')
	 				->where('study_number','=',$am)
	 				->where('user_id','=',$id)
	 				->get()->toarray();
	// $user_study =  DB::table('studies')->where('user_id','=',$id)->get();
       
      
	//print_r($check);exit;
		  

	//print( $number);exit;
		
		 
		
		  if($check == false){


		  		  $data = array(

		   	         'study_name' =>$input['study_name'],
		   	         'study_number'=>$input['study_number'],
		   	          'objectives'=>$input['objectives'],
		   	          'ethical_approval'=>$input['ethical_approval'],
		   	          'data_collection'=>$input['data_collection'],
		   	          'data_analysis'=>$input['data_analysis'],
		   	          'manuscript'=>$input['manuscript'],
		   	          'number_papers'=>$input['number_papers'],
		   			  'user_id'=>$id,

		   					);

		   			study::insert($data);

		  			return redirect()->route('frontend.user.dashboard')->withFlashSuccess(trans('Study Plan has been set successfully'));
		  	
		 
 		}

 		else{


 					return redirect()->route('frontend.user.dashboard')->withFlashDanger(trans('Sorry ' .auth()->user()->name. ' this study plan already exists if u wish to edit please choose edit instead'));

	
 				
 			}

 			//return redirect()->route('frontend.user.dashboard');

		}

//milestones insert to db
	public function activity_create(Request $request){


	//milestone::create($request->all());	
	$input =   $request->all();
			$id =  auth()->user()->id;
 
			$data = array(

			  'proposal_write'=>$input['proposal_write'],
			  'desertation_write'=>$input['desertation_write'],
			  'desertation_submit'=>$input['desertation_submit'],
			  'year'=>$input['year'],
			  'quarters'=>$input['quarters'],
			  'user_id'=>$id,


				);
			
	
 		milestone::insert($data);



	  return redirect()->route('frontend.user.dashboard')->withFlashSuccess(trans('DESERTATION plan has been saved successfully'));



		}


//engagement plan insert to db

		public function engage(Request $request){

			$input =   $request->all();
			$id =  auth()->user()->id;
 
			$data = array(

			  'engage_type'=>$input['engage_type'],
			  'audience'=>$input['audience'],
			  'frequency'=>$input['frequency'],
			  'year'=>$input['year'],
			  'comments'=>$input['comments'],
			  'user_id'=>$id,


				);
			
	
 		engagement::insert($data);

					 return redirect()->route('frontend.user.dashboard')->withFlashSuccess(trans('Engagement has been saved successfully'));

		}
//show saved data in tables

		 public function showstudy(){
		 		$id =  auth()->user()->id;
		 		$plans = DB::table('studies')->where('user_id','=',$id)->where('deleted','=',0)->get();

		 		//print_r($plans);exit;



			return view('frontend.user.showstudy')->with('plans',$plans);

		}


		 public function showcourse(){
		 		$id =  auth()->user()->id;
		 		$course = DB::table('courses')->where('deleted','=',0)->where('user_id','=',$id)->get();

		 		//print_r($course);exit;



			return view('frontend.user.showcourse')->with('course',$course);


		}


		 public function showmeet(){
		 		$id =  auth()->user()->id;
		 		$meet = DB::table('meetings')->where('deleted','=',0)->where('user_id','=',$id)->get();

		 	

			return view('frontend.user.showmeet')->with('meet',$meet);


		}


		 public function showengagement(){
		 		$id =  auth()->user()->id;
		 		$engage = DB::table('engagements')->where('deleted','=',0)->where('user_id','=',$id)->get();

		 	

			return view('frontend.user.showengagement')->with('engage',$engage);


		}


	}


