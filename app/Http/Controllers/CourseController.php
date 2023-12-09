<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //get all course from database
    public function getCourse(){
        return view('client.course');
    }
}
