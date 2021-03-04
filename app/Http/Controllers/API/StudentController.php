<?php
namespace App\Http\Controllers;
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Student;
use Validator;
   
class StudentController extends BaseController
{
    /**
     * Display a listing of the students.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
    
        return $this->sendResponse(StudentResource::collection($students), 'Students retrieved.');
    }
}