<?php

namespace App\Http\Controllers\master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    // return all event
    public function event(){
        return view('client.master.event');
    }
}
