<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;

class LevelController extends Controller
{
    public function index(){
        $levels = Level::select('id','lvl_name','is_active')->get();
        return view('Level.index')->with('level',$levels);
     }

    public function create(Request $request){
        $data = $request->except('submit');
  
        $validator = \Validator::make($request->all(), [
           'lvl_name' => 'required|string|'           
        ]);
  
        if ($validator->fails()) {
           return redirect()->Back()->withInput()->withErrors($validator);
        }
        
        if($record = Level::firstOrCreate($data)){
            Session::flash('message', 'Saved Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('level');
         }else{
            Session::flash('message', 'Level not saved!');
            Session::flash('alert-class', 'alert-danger');
         }
  
        return Back()->withInput();
     }

    public function update(Request $request,$id){
        $data = $request->except('submit');
  
        $validator = Validator::make($request->all(), [
            'lvl_name' => 'required|string|'
        ]);
  
        if ($validator->fails()) {
           return redirect()->Back()->withInput()->withErrors($validator);
        }
        $subject = Level::find($id);
  
        if($subject->update($data)){
  
           Session::flash('message', 'Level successfully!');
           Session::flash('alert-class', 'alert-success');
           return redirect()->route('level');
        }else{
           Session::flash('message', 'Level not updated!');
           Session::flash('alert-class', 'alert-danger');
        }
  
        return Back()->withInput();
     }
}
