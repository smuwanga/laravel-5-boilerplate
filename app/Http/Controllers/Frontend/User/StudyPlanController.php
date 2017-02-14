<?php

namespace App\Http\Controllers\Frontend\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Access\User\Meeting;
use App\Models\Access\User\Course;

class StudyPlanController extends Controller{
    //
//course completion plan data is handled here.
	public function  index(){



}
// meeting plan data here 
		public function meet(Request $request){
			
	
 		Meeting::create($request->all());


 		return redirect()->route('frontend.user.dashboard')->withFlashSuccess(trans('Meeting has been set successfully'));
 	
}
//course completion plan 
		public function courses(Request $request){

			course::create($request->all());	
			return redirect()->route('frontend.user.dashboard')->withFlashSuccess(trans('Course Plan has been set successfully'));
 	



}
//Thesis completion plan data is handled here.
	public function thesis(Request $request){



	  return redirect()->route('frontend.user.dashboard')->withFlashSuccess(trans('Thesis has been saved successfully'));



		}

	}


