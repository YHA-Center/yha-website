<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //get all course from database
    public function course(){
        return view('client.master.course');
    }
}
