<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Helpers\Auth\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Exceptions\GeneralException;
//use App\Http\Controllers\Controller;
use App\Helpers\Frontend\Auth\Socialite;
use App\Events\Frontend\Auth\UserLoggedIn;
use App\Events\Frontend\Auth\UserLoggedOut;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Access\User\Meeting;
use App\Models\Access\User\Course;
use App\Models\Access\User\study;
use App\Models\Access\User\milestone;
use App\Models\Access\User\engagement;
use App\Models\Access\User\supervision;
use App\Http\Requests\Frontend\User\UpdateProfileRequest;
use App\Repositories\Frontend\Access\User\UserRepository;

/**
 * Class AccountController.
 */
class AccountController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()

    {
    		$supervisor = DB::table('role_user')
    							->join('users', 'role_user.user_id','=','users.id')->where('role_id','=',2)
                                //->join('supervisions','role_user.user_id','=','supervisions.user_id')
                                ->get();

    	  

       //print_r($supervisor);exit;
           
        return view('frontend.user.account')->with('supervisor',$supervisor);
    }



    //function to attach supervisors to students 

    public function addsupervisor($id){

        $student_id =  auth()->user()->id;

        

    $check = DB::table('supervisions')->where('supervised_by_id','=',$id)->where('user_id','=',$student_id)->where('deleted','=',0)->first();

    if (is_null($check)){
        $data = array( 

              'user_id'=>$student_id,
              'supervised_by_id'=>$id,

                );        

        supervision::insert($data);

        return redirect()->route('frontend.user.account')->withFlashSuccess(trans('supervisor has been added successfully'));

           
    }else {
          
         return redirect()->route('frontend.user.account')->withFlashDanger(trans(' sorry supervisor already added'));


    }


    
    }



    public function delete_supervisor($id) {

         $page = supervision::find($id);

            // Make sure you've got the Page model
            if($page) {
                $page->deleted = 1;
                $page->save();
                }

                return redirect()->route('frontend.user.dashboard');
    }
}
 