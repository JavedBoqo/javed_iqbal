<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::select('id','std_name','level_id')->get();
        return view('Student.index')->with('student',$students);
     }

    public function create(Request $request){
        $data = $request->except('submit');
  
        $validator = \Validator::make($request->all(), [
           'std_name' => 'required|string|',
           'std_father_name' => 'required|string|',
           'level_id    ' => 'required|number',
        ]);
  
        if ($validator->fails()) {
           return redirect()->Back()->withInput()->withErrors($validator);
        }
        
        if($record = Student::firstOrCreate($data)){
            Session::flash('message', 'Saved Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('student');
         }else{
            Session::flash('message', 'Student not saved!');
            Session::flash('alert-class', 'alert-danger');
         }
  
        return Back()->withInput();
     }

    public function update(Request $request,$id){
        $data = $request->except('submit');
  
        $validator = Validator::make($request->all(), [
            'std_name' => 'required|string|',
            'std_father_name' => 'required|string|',
            'level_id    ' => 'required|number',
        ]);
  
        if ($validator->fails()) {
           return redirect()->Back()->withInput()->withErrors($validator);
        }
        $subject = Student::find($id);
  
        if($subject->update($data)){
  
           Session::flash('message', 'Student successfully!');
           Session::flash('alert-class', 'alert-success');
           return redirect()->route('student');
        }else{
           Session::flash('message', 'Student not updated!');
           Session::flash('alert-class', 'alert-danger');
        }
  
        return Back()->withInput();
     }
}
