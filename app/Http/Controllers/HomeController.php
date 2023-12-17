<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //home Page
    public function home(){
        return view('client.home.home');
    }

    //get all course from database
    public function course(){
        return view('client.home.course');
    }

    // return all event
    public function event(){
        return view('client.home.event');
    }

    // return all student's project
    public function project(){
        return view('client.home.project');
    }

    // return all photo 
    public function photoGallery(){
        return view('client.home.photogallery');
    }

}
