<?php

namespace App\Http\Controllers;

use App\Ambassador;
use App\Evants;
use App\Mentor;
use App\SISAccount;
use App\Event;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

   
    public function index(){

        $SISAccount = new SISAccount();
        $mentor = new Mentor();
        $ambassador = new Ambassador();
        $events = new Event();

        return view('admin.dashboard',compact('SISAccount','mentor','ambassador','events'));

    }
    
}
