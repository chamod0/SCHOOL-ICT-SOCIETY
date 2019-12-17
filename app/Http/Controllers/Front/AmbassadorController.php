<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ambassador;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;



class AmbassadorController extends Controller
{
    public function index(){
        
        return view('Front.AmbassadorRegister');
      
    }
    public function AmbassadorRegister(Request $request){
            
        $request->validate([
 
          'FirstName'=>'required',
           'LastName'=>'required', 
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
         'LastName'=>$request->LasttName,
         'School'=>$request->School,
          'District'=>$request->District, 
          'EducationZone'=>$request->EducationZone, 
          'Email'=>$request->Email, 
          'Dob'=>$request->Dob,
          'description'=>$request->description,
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

     //admin------------------------------------------
     public function admin(){
        $Ambassadors=Ambassador::all();
        
        
        
        return view('admin.AmbssadorAccount.manageAmbssdor',compact('Ambassadors'));
    }
    public function confirm($id){
      
        $accdetails = Ambassador::find($id);
         

   
       
        
       //  Mail::to($Ambassadors['Email'])->send(new WelcomeMail($Ambassadors));
  
        $accdetails -> update(['IsActive' => 1]);

        Mail::to($accdetails->Email)->send(new WelcomeMail($accdetails));

        session()->flash('msg','Ambassador Request has been confirmed');
        return redirect('admin/Ambassador');

    }
    public function Pending($id){

        $accdetails = Ambassador::find($id);

       // Mail::to($accdetails->Email)->send(new WelcomeMail());
        $accdetails -> update(['IsActive' => 0]);

        session()->flash('msg','Ambassador Request has been pending');
        return redirect('admin/Ambassador');

    }
   public function show($id){
    $accdetails = Ambassador::find($id);
    
    return view('admin.MenteorAccount.manageMentor',compact('accdetails'));

   }
}
