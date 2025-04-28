<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

class AdminAuthController extends Controller
{
    public function AdminRegisterView()
    {
        return view('admin.auth.register');
    }
    public function AdminRegister(Request $request)
    {
        Admin::insert([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'created_at'=>Carbon::now(),
         ]);
           return redirect()->route('admin.login');
        
    }
    public function AdminLoginView()
    {    
        return view('admin.auth.login');
    }
    public function AdminLogin(Request $request)
    {
       
        $credentials = $request->except(['_token']);
        //dd($check);
        if (Auth::guard('admin')->attempt(['name'=>$credentials['name'],'email'=>$credentials['email'],'password'=>$credentials['password']])) {
            //Authentication passed...
            return redirect(RouteServiceProvider::ADMINDASHBOARD);
        } 

        //Authentication failed...
       else{
           echo"login failed";
       }
    }
   



}
