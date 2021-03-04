<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    public function create(Request $request){
        $data = $request->except('submit');
  
        $validator = \Validator::make($request->all(), [
           'ins_name' => 'required|string|',
           'ins_phone_number' => 'required|string|'
        ]);
  
        if ($validator->fails()) {
           return redirect()->Back()->withInput()->withErrors($validator);
        }
        
        if($record = Institution::firstOrCreate($data)){
            Session::flash('message', 'Saved Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('institution');
         }else{
            Session::flash('message', 'Institution not saved!');
            Session::flash('alert-class', 'alert-danger');
         }
  
        return Back()->withInput();
     }

    public function update(Request $request,$id){
        $data = $request->except('submit');
  
        $validator = Validator::make($request->all(), [
            'ins_name' => 'required|string|',
           'ins_phone_number' => 'required|string|'
        ]);
  
        if ($validator->fails()) {
           return redirect()->Back()->withInput()->withErrors($validator);
        }
        $subject = Institution::find($id);
  
        if($subject->update($data)){
  
           Session::flash('message', 'Institution successfully!');
           Session::flash('alert-class', 'alert-success');
           return redirect()->route('institution');
        }else{
           Session::flash('message', 'Institution not updated!');
           Session::flash('alert-class', 'alert-danger');
        }
  
        return Back()->withInput();
     }
}
