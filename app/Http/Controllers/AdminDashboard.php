<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class AdminDashboard extends Controller
{
    public function Dashboard(Request $request)
    {
       $user= Auth::guard('admin')->user();
       return view('admindashboard.dashboard');
    }

    public function ViewProfile(Request $request)
    {
     return view('admindashboard.adminprofile.adminprofile');


    }
    public function Usermanagement(Request $request)
    {
     return view('admindashboard.adminusermanagement.usermanagement');


    }
}
