<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    // direct course page
    public function coursePage(){
        $courses = Course::get();
        return view('admin.pages.course.home', compact('courses'));
    }

    // course create page
    public function createPage(){
        return view('admin.pages.course.create');
    }

    // edit course page
    public function edit($id){
        $data = Course::where('id', $id)->first();
        return view('admin.pages.course.edit', compact('data'));
    }

    // create course
    public function create(Request $request){
        $this->validation($request);
        // dd($request->all());
        $data = $this->get_request_data($request);
        if($request->hasfile('image')){
            $filename = uniqid() .'_'. $request->file('image')->getClientOriginalName(); // filename with unique
            $request->file('image')->storeas('public', $filename);
            $data["image"] = $filename;
        }
        Course::create($data);
        return redirect()->route('Course')->with(['success' => 'Added course '.$data['name']]);
    }

    // update course
    public function update(Request $request){
        $this->validation($request);
        $data = $this->get_request_data($request);
        $id = $request->id;
        if($request->hasfile('image')){
            // Delete Old image 
            $old = Course::select('image')->where('id', $id)->first()->toArray();
            $old = $old['image'];
            if($old != null){
                Storage::delete('public/'.$old);
            }
            $filename = uniqid() .'_'. $request->file('image')->getClientOriginalName(); // filename with unique
            $request->file('image')->storeas('public', $filename);
            $data["image"] = $filename;
        }
        Course::where('id', $id)->update($data);
        return redirect()->route('Course')->with(['success' => 'Updated instructor '.$request->name.' successfully']);
    }

    // delete course
    public function delete($id){
        $course = Course::where('id', $id)->first();
        Course::where('id', $id)->delete();
        return redirect()->route('Course')->with(['success' => 'Deleted '.$course->name.' course.']);
    }

    // get request data
    private function get_request_data($request){
        $array = [
            'name' => $request->name,
            'description' => $request->description,
            'duration' => $request->duration,
        ];
        return $array;
    }

    // validation
    private function validation($request){
        $rule = [
            'name' => 'required|min:5|unique:courses,name,'.$request->id,
            'description' => 'required|min:5',
            'image' => 'required|file|mimes:jpg,png,jpeg,webp',
            'duration' => 'required|min:2',
        ];
        $message = [
            'name.required' => 'Course name is required',
            'description.required' => 'Course description is required',
            'image.required' => 'Course image is required',
            'duration.required' => 'Course duration is required',
            'name.min' => 'Course name must have minimum 5 letters',
            'description.min' => 'Course description must have minimun 5 letters',
            'duration.min' => 'Course duration must have minimum 2 letters',
        ];
        Validator::make($request->all(), $rule, $message)->validate();
    }
}
