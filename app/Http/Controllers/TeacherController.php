<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    // direct to teacher page
    public function teacherPage(){
        $teachers = Teacher::get();
        return view('admin.pages.teacher.home', compact('teachers'));
    }

    // direct create new teacher page
    public function createPage(){
        return view('admin.pages.teacher.create');
    }

    // create new teacher
    public function create(Request $request){
        $this->validation($request);
        $data = $this->get_request_data($request);
        if($request->hasfile('image')){
            $filename = uniqid() .'_'. $request->file('image')->getClientOriginalName(); // filename with unique
            $request->file('image')->storeas('public', $filename);
            $data["image"] = $filename;
        }
        Teacher::create($data);
        return redirect()->route('Teacher')->with(['success' => 'Added instructor '.$data['name']]);
    }

    // edit teacher
    public function edit($id){
        $teacher = Teacher::where('id', $id)->first();
        return view('admin.pages.teacher.edit', compact('teacher'));
    }

    // update teacher
    public function update(Request $request){
        $this->validation($request);
        $data = $this->get_request_data($request);
        $id = $request->id;
        if($request->hasfile('image')){
            // Delete Old image 
            $old = Teacher::select('image')->where('id', $id)->first()->toArray();
            $old = $old['image'];
            if($old != null){
                Storage::delete('public/'.$old);
            }
            $filename = uniqid() .'_'. $request->file('image')->getClientOriginalName(); // filename with unique
            $request->file('image')->storeas('public', $filename);
            $data["image"] = $filename;
        }
        Teacher::where('id', $id)->update($data);
        return redirect()->route('Teacher')->with(['success' => 'Updated instructor '.$request->name.' successfully']);
    }

    // delete teacher
    public function delete($id){
        $name = Teacher::where('id', $id)->first();
        Teacher::where('id', $id)->delete();
        return redirect()->route('Teacher')->with(['success' => 'Deleted instructor '.$name->name]);
    }

    // get request data
    private function get_request_data($request){
        $array = [
            'name' => $request->name,
            'age' => $request->age,
            'position' => $request->position,
        ];
        return $array;
    }
    // validation the request data
    private function validation($request){
        $rule = [
            'name' => 'required|min:3|unique:teachers,name,'.$request->id,
            'age' => 'required',
            'position' => 'required',
            'image' => 'required|file|mimes:jpg,jpeg,png,webp',
        ];
        $message = [
            'name.required' => 'Instructor name is required.',
            'name.min' => 'Instructor name must have upper 3 letters!',
            'name.unique' => 'Instructor name have been taken!',
            'age.required' => 'Instructor age is required',
            'position.required' => 'Instructor position is required',
        ];
        Validator::make($request->all(), $rule, $message)->validate();
    }
}
