<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SISRegisterController extends Controller
{
    public function index(){

        return view('Front.SISRegister');
    }
    public function SISRegister(Request $request){

       $request->validate([

        'SchoolName'=>'required',
         'EducationZone' =>'required', 
         'District'=>'required',
          'PresidentOfSociety'=>'required', 
          'SecretryOfSociety'=>'required', 
          'TreasurerOfSociety'=>'required', 
          'TeacherInCharge'=>'required',
           'Email'=>'required|email',
            'password'=>'required|confirmed',
            'SchoolFBProfile'=>'required'
             

       ]);
    }
}
