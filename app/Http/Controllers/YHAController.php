<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YHAController extends Controller
{
    //home Page
    public function home(){
        return view('client.master.home');
    }

}
