<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ambassador;

class AmbassadorController extends Controller
{
    public function index(){
        
        return view('Front.AmbassadorRegister');
      
    }
    public function AmbassadorRegister(Request $request){
            
        $request->validate([
 
          'FirstName'=>'required',
           'LasttName'=>'required', 
           'School'=>'required',
           'District'=>'required',
           'EducationZone'=>'required',
           'Email'=>'required|email', 
           'Dob'=>'required', 
           'description'=>'required', 
           
            'AddressL1'=>'required',
             'AddressL2'=>'required',
             'Dob'=>'required',
             'Gender'=>'required',
             'Linkin'=>'required',
             'Facebook'=>'required',
             'twitter'=>'required',
             'img'=>'required'
              
 
        ]);
 
 
        Ambassador::create([
         'FirstName'=>$request->FirstName,
         'LasttName'=>$request->LasttName,
         'School'=>$request->School,
          'District'=>$request->District, 
          'EducationZone'=>$request->EducationZone, 
          'Email'=>$request->Email, 
          'Dob'=>$request->Dob,
          'description'=>$request->discription,
           'AddressL1'=>$request->AddressL1,
            'AddressL2'=>$request->AddressL2,
            'Dob'=>$request->Dob,
            'Gender'=>$request->Gender,
            'Linkin'=>$request->Linkin,
            'Facebook'=>$request->Facebook,
            'twitter'=>$request->twitter,
            'img'=>$request->img,
            
 
        ]);
      
       
 
        return redirect('/');
     }
}
