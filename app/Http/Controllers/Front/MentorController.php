<?php

namespace App\Http\Controllers\Front;

use App\Mentor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MentorController extends Controller
{


      public function index(){

        return view('Front.mentor');
    }

    

    public function MentorRegister(Request $request){
            
        $request->validate([
 
         'question1'=>'required',
          'question2' =>'required', 
          'question3'=>'required',
           'Name'=>'required', 
           'Email'=>'required|email', 
           'Dob'=>'required', 
           'Job'=>'required',
            'AddressL1'=>'required',
             'AddressL2'=>'required',
             'Gender'=>'required',
             'Linkin'=>'required',
             'Facebook'=>'required',
             'twitter'=>'required',
             'img'=>'required'
              
 
        ]);
 
 
         Mentor::create([
         'question1'=>$request->question1,
         'question2'=>$request->question2,
         'question3'=>$request->question3,
          'Name'=>$request->Name, 
          'Email'=>$request->Email, 
          'Dob'=>$request->Dob, 
          'Job'=>$request->Job,
           'AddressL1'=>$request->AddressL1,
            'AddressL2'=>$request->AddressL2,
            'Gender'=>$request->Gender,
            'Linkin'=>$request->Linkin,
            'Facebook'=>$request->Facebook,
            'twitter'=>$request->twitter,
            'img'=>$request->img,
            
 
        ]);
      
       
 
        return redirect('/');
     }
     
    
}
