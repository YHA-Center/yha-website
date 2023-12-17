<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //
    public function dashboard(){
        return view('admin.pages.index');
    }

    // return admin home page
    public function home(){
        $welcome = Welcome::paginate(3);
        // dd($welcome);
        return view('admin.pages.main.home', compact('welcome'));
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

    // for welcome pages
    public function createWelcome(){
        return view('admin.pages.main.welcome.create');
    }
    // posting welcome images
    public function postWelcome(Request $request){
        $rule = [
            'image' => 'required|image|mimes:png,jpeg,jpg'
        ];
        Validator::make($request->all(), $rule)->validate();
        if($request->hasfile('image')){
            $filename = uniqid() .'_'. $request->file('image')->getClientOriginalName(); // filename with unique
            $request->file('image')->storeas('public', $filename);
            $data["image"] = $filename;
        }
        // dd($data); 
        Welcome::create($data);
        return redirect()->route('Home')->with(['success' => 'Added Image Successfully!']);
    }
}
