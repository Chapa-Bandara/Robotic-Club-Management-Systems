<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Manage extends Controller
{
    public function home()
    {
        return view('project.home');
    }
    public function login()
    {
        return view('project.login');
    }
    public function register()
    {
        return view('project.registration');
    }
    public function dashboard()
    {
        return view('project.Dashboard');
    }
    public function about(){
        return view('project.About');
    }
    public function category()
    {
        return view('project.Categories');
    }
    public function trance()
    {
        return view('project.Transaction');
    }
    public function payment()
    {
        return view('Project.Pyament');
    }
    public function course()
    {
        return view('project.Courses');
    }
    public function contact()
    {
        return view('project.contact');
    }
}
