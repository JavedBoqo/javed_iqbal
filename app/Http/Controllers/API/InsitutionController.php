<?php
namespace App\Http\Controllers;
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Institution;
use Validator;
   
class InstitutionController extends BaseController
{
    /**
     * Display a listing of the students.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institutions = Institution::all();
    
        return $this->sendResponse(InstituionResource::collection($institutions), 'Instituion retrieved.');
    }
}