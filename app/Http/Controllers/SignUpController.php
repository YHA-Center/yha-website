<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignUpController extends Controller
{
    //return signup page
    public function signup(){
        return view('client.signup');
    }
}
