<?php

namespace App\Http\Controllers\Front;
use App\SISAccount;
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
            'SchoolFBProfile'=>'required',
            'AddressL1'=>'required',
            'AddressL2'=>'required',
            'TelNo'=>'required'
             

       ]);


       $user = SISAccount::create([
        'SchoolName'=>$request->SchoolName,
   
        'District'=>$request->District,
        'EducationZone'=>$request->EducationZone,
         'PresidentOfSociety'=>$request->PresidentOfSociety, 
         'SecretryOfSociety'=>$request->SecretryOfSociety, 
         'TreasurerOfSociety'=>$request->TreasurerOfSociety, 
         'TeacherInCharge'=>$request->TeacherInCharge,
          'Email'=>$request->Email,
           'password'=>bcrypt($request->password),
           'SchoolFBProfile'=>$request->SchoolFBProfile,
           'AddressL1'=>$request->AddressL1,
           'AddressL2'=>$request->AddressL2,
           'TelNo'=>$request->TelNo,
           

       ]);

       auth()->login($user);

       return redirect('/SISprofile');
    }
}
