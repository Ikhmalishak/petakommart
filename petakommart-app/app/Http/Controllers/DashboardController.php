<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //FROM LOGIN PAGE TO THIS DASHBOARD PAGE
    public function __construct()
    {
        $this->middleware('auth');
    }
    //authorize session from user type
    public function loadDashboard()
    {
        $category = Auth::user()->category;

        if ($category == 'admin') {
            return view('dashboard.Student');
        }
        
    }

    public function create() //create =method 
    {
        //
        //$blogs = Blog::get(); //Select * FROM users, guna model User untuk access database
      
        return view('blogs.create');//tambah return untuk display data 
        //compact('blogs'), //send data daripada declare ($) kepada index.blade (compact), mesti sama nama dengan $
    //); 
    }
}
