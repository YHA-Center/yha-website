<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Welcome;
use App\Models\AboutDesc;
use Illuminate\Http\Request;
use App\Models\StudentProject;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class HomeController extends Controller
{
    // //home Page
    // public function home(){
    //     return view('client.home.home');
    // }

    // //get all course from database
    // public function course(){
    //     return view('client.home.course');
    // }

    // // return all event
    // public function event(){
    //     return view('client.home.event');
    // }

    // // return all student's project
    // public function project(){
    //     return view('client.home.project');
    // }

    // // return all photo 
    // public function photoGallery(){
    //     return view('client.home.photogallery');
    // }


    public function dashboard(){
        return view('admin.pages.index');
    }

    // return admin home page
    public function home(){
        $welcome = Welcome::orderBy('updated_at')->paginate(3);
        $about = About::get();
        $about_desc = AboutDesc::get()->first();
        $projects = StudentProject::orderBy('updated_at', 'desc')->paginate(6);
        // dd($about->toArray());
        return view('admin.pages.main.home', compact('welcome', 'about', 'about_desc', 'projects'));
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
    // editing welcome images
    public function editWelcome($id){
        $welcome = Welcome::where('id', $id)->first();
        // dd($welcome->toArray());
        return view('admin.pages.main.welcome.edit', compact('welcome'));
    }
    // updating welcome images
    public function updateWelcome(Request $request){
        // validation rule
        $rule = [
            'image' => 'required|image|mimes:png,jpeg,jpg'
        ];
        // make validation
        Validator::make($request->all(), $rule)->validate();
        // get current image id
        $id = $request->id;
        if($request->hasfile('image')){
            // Delete Old image 
            $old = Welcome::select('image')->where('id', $request->id)->first()->toArray();
            $old = $old['image'];
            if($old != null){
                Storage::delete('public/'.$old);
            }
            $filename = uniqid() .'_'. $request->file('image')->getClientOriginalName(); // filename with unique
            $request->file('image')->storeas('public', $filename);
            $data["image"] = $filename;
        }
        // dd($data);
        Welcome::where('id', $id)->update($data);
        return redirect()->route('Home')->with(['success' => 'Updated image successfully']);
    }
    // deleting welcome image
    public function deleteWelcome($id){
        $old = Welcome::select('image')->where('id', $id)->first()->toArray();
        $old = $old['image'];
        if($old != null){
            Storage::delete('public/'.$old);
        }
        Welcome::where('id', $id)->delete();
        return redirect()->route('Home')->with(['success'=>'Deleted image successfully!']);
    }




    //direct about add image page
    public function postAbout(){
        return view('admin.pages.main.about.create');
    }
    // create about page
    public function createAbout(Request $request){
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
        About::create($data);
        return redirect()->route('Home')->with(['success' => 'Added about image successfully!']);
    }
    // editing about image
    public function editAbout($id){
        $data = About::where('id', $id)->first();
        // dd($welcome->toArray());
        return view('admin.pages.main.about.edit', compact('data'));
    }
    // delete about image
    public function deleteAbout($id){
        About::where('id', $id)->delete();
        return back()->with(['success' => 'Deleted about image successfully!']);
    }
    // update about image
    public function updateAbout(Request $request){
        // validation rule
        $rule = [
            'image' => 'required|image|mimes:png,jpeg,jpg'
        ];
        // make validation
        Validator::make($request->all(), $rule)->validate();
        // get current image id
        $id = $request->id;
        if($request->hasfile('image')){
            // Delete Old image 
            $old = About::select('image')->where('id', $request->id)->first()->toArray();
            $old = $old['image'];
            if($old != null){
                Storage::delete('public/'.$old);
            }
            $filename = uniqid() .'_'. $request->file('image')->getClientOriginalName(); // filename with unique
            $request->file('image')->storeas('public', $filename);
            $data["image"] = $filename;
        }
        // dd($data);
        About::where('id', $id)->update($data);
        return redirect()->route('Home')->with(['success' => 'Updated about image successfully']);
    }
    // edit about description
    public function editDesc($id){
        $data = AboutDesc::where('id', $id)->first();
        return view('admin.pages.main.about.desc', compact('data'));
    }
    // update about description
    public function updateDesc(Request $request){
        $data = [
            'id' => $request->id,
            'desc' => $request->desc,
        ];
        // dd($data);
        $id = $request->id;
        AboutDesc::where('id', $id)->update($data);
        return redirect()->route('Home')->with(['success' => 'Updated about description successfully!']);
    }




    // direct student project create page
    public function postProject(){
        return view('admin.pages.main.student_project.create');
    }
    // create student project
    public function createProject(Request $request){

        $data = $this->getStudentProjectData($request);
        $rule = [
            'title' => 'required|min:3|unique:student_projects,title,'.$request->id,
            'image' => 'required|image|mimes:png,jpeg,jpg',
            'desc' => 'required|min:5',
        ];
        Validator::make($request->all(), $rule)->validate();
        if($request->hasfile('image')){
            $filename = uniqid() .'_'. $request->file('image')->getClientOriginalName(); // filename with unique
            $request->file('image')->storeas('public', $filename);
            $data["image"] = $filename;
        }
        // dd($data); 
        StudentProject::create($data);
        return redirect()->route('Home')->with(['success' => 'Added student project successfully!']);
    }
    // delete student project
    public function deleteProject($id){
        StudentProject::where('id', $id)->delete();
        return back()->with(['success' => 'Deleted student project successfully!']);
    }
    // edit student project
    public function editProject($id){
        $data = StudentProject::where('id', $id)->first();
        return view('admin.pages.main.student_project.edit', compact('data'));
    }
    // update student project
    public function updateProject(Request $request){
        $rule = [
            'title' => 'required|min:3|unique:student_projects,title,'.$request->id,
            'image' => 'required|image|mimes:png,jpeg,jpg',
            'desc' => 'required|min:5',
        ];
        Validator::make($request->all(), $rule)->validate();
        $data = $this->getStudentProjectData($request);
        $id = $request->id;
        if($request->hasfile('image')){
            // Delete Old image 
            $old = StudentProject::select('image')->where('id', $id)->first()->toArray();
            $old = $old['image'];
            if($old != null){
                Storage::delete('public/'.$old);
            }
            $filename = uniqid() .'_'. $request->file('image')->getClientOriginalName(); // filename with unique
            $request->file('image')->storeas('public', $filename);
            $data["image"] = $filename;
        }
        StudentProject::where('id', $id)->update($data);
        return redirect()->route('Home')->with(['success' => 'Updated student project successfully']);
    }




    // private
    private function getStudentProjectData($request){
        $arr = [
            'title' => $request->title,
            'desc' => $request->desc,
            'github' => $request->github,
            'demo' => $request->demo,
        ];
        return $arr;
    }

}
