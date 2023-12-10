<?php

namespace App\Http\Controllers\master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignUpController extends Controller
{
    //return signup page
    public function signup(){
        return view('client.master.signup');
    }
}
