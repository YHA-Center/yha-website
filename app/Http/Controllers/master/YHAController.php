<?php

namespace App\Http\Controllers\master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class YHAController extends Controller
{
    //home Page
    public function home(){
        return view('client.master.home');
    }

}
