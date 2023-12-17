<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard(){
        return view('admin.pages.index');
    }

    // return admin home page
    public function home(){
        return view('admin.pages.main.home');
    }

    // return admin course page
    public function course(){
        return view('admin.pages.course.home');
    }

    // return admin event page
    public function event(){
        return view('admin.pages.event.home');
    }

    // return admin gallery page
    public function gallery(){
        return view('admin.pages.gallery.home');
    }

    // return admin project page
    public function project(){
        return view('admin.pages.project.home');
    }
}
