<?php

namespace App\Http\Controllers\master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    // return all student's project
    public function project(){
        return view('client.master.project');
    }
}
