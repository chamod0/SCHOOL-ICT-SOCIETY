<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\SISAccount;
use App\Evants;
use App\Mentor;

use Illuminate\Http\Request;

class SISProfileController extends Controller
{
    public function index(){
        $id = auth()->user()->id;
        $user = SISAccount::where('id', $id)->first();
        $evants = Evants::all()->where('SISid', '==', $id);
        return view('Front.SISProfile', compact('user','evants'));
      
    }

    public function list(){    
        $list=SISAccount::all();
       
        return view('Front.listSIS',compact('list'));
    }
    public function check($district){

        $list = SISAccount::all()->where('District', '==', $district);
        //$list = SISAccount::where('District', $district)->first();
        $mentor=Mentor::all();

      
        return view('Front.listSIS', compact('list','mentor'));
      
    }
   
}
