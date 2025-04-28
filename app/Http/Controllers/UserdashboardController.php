<?php

namespace App\Http\Controllers;

use App\Models\swen_question;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin;
use App\Models\Answer;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class UserdashboardController extends Controller
{
    public function UserDashboard(Request $request)
    {
        
        // $user = Auth::user('admin');
        // dd($user);

        $questions = DB::table('swen_questions')->get();
        return view('userdashboard.userdashboard', ['questions' => $questions]);
    }




    public function createabout(Request $request)
    {
        return view('about.about');
    }
    public function home(Request $request)
    {
        return view('home.home');
    }



    public function questiondetail(Request $request)
    {
        $id = $request->id;
        $qdetail = swen_question::findOrFail($id);
    
        return view('getquestiondetail.getquestiondetail', ['qdetail' => $qdetail]);
    }



    public function createanswer(Request $request)
    {
        $id = $request->qid;
        $qdetail = swen_question::findOrFail($id);
        $q_user=$qdetail->q_user;
        $q_name=$qdetail->q_name;
        $q_email=$qdetail->q_email;
        $q_department=$qdetail->q_department;
        $q_programe=$qdetail->q_programe;
        $q_title=$qdetail->q_title;
        $q_description=$qdetail->q_description;
        $user = Auth::user();
        $a_name=$user->name;
        $a_email=$user->email; 
        $a_programe=$user->interests;
        $a_department=$user->departments;
        $a_description =$request->description;

        $answer=Answer::create([
          'q_user'=>$q_user,
          'q_name'=>$q_name,
          'q_email'=>$q_email,
          'q_department'=>$q_department,
          'q_programe'=>$q_programe,
          'q_title'=>$q_title,
          'q_description'=>$q_description,
          'a_name'=>$a_name,
          'a_email'=>$a_email,
          'a_programe'=>$a_programe,
          'a_department'=>$a_department,
          'a_description'=>$a_description,
        ]);

        if($answer){
            print('inserted');

        }
      else{
        print('erorr');
      }
       
    }




    public function contactus(){
        return view('contactus.contactus');
    }


    public function getregister(){
        $departments = DB::table('departments')->get();
        //dd($departments);
        return view('auth.register', ['department' => $departments]);
    }

    public function storeregister(Request $request) 
    { 
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'departments' => ['required', 'int', 'max:255'],
            'interests' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email, 
            'departments' => $request->departments,
            'interests' =>$request->interests,
            'password' => Hash::make($request->password),
        ]);

       
        return redirect(RouteServiceProvider::LOGIN);
    }

    public function GetJasonResponse(Request $request ,$id)
    {
       // dd($request);
        $programe = DB::table("interests")
                    ->where("department_id",$id)
                    ->get("name","id");
         return Response::json($programe);
        
    }

    public function destory(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
