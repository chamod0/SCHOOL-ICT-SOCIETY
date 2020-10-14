<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\SISAccount;
use App\Evants;
use App\Mentor;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

use App\Event;
use Illuminate\Http\Request;

class SISProfileController extends Controller
{
    public function index(){
        $id = auth()->user()->id;
        $user = SISAccount::where('id', $id)->first();
        $eventtable = Event::all()->where('SISID', '==', $id);
       
        $events = []; 
        $data = Event::all();
        if($data->count())
         {
            foreach ($data as $key => $value) 
            {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.'+1 day'),
                    null,
                    // Add color
                 [
                     'color' => '#72E527',
                     'textColor' => '#000000',
                 ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
       
        return view('Front.SISProfile', compact('user','calendar','eventtable'));
      
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
