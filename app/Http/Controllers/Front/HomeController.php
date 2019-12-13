<?php

namespace App\Http\Controllers\Front;
use App\Mentor;
use App\Ambassador;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viwe(){    
       
    }
    public function index(){
        $mentor=Mentor::all();
        $ambassador=Ambassador::all();
        
        return view('Front.index',compact('mentor','ambassador'));
        
    } 
    
   


    
}
