<?php

namespace App\Http\Controllers\Front;
use App\Mentor;
use App\Ambassador;
use App\Http\Controllers\Controller;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use App\Event;
use App\SISAccount;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viwe(){    
       
    }
    public function index(){
        $mentor=Mentor::all()->where('IsActive', '==', "1");
        $ambassador=Ambassador::all()->where('IsActive', '==', "1");
        $eventtable = Event::all();

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

        $SISAccount = new SISAccount();

        return view('Front.index',compact('mentor','ambassador','calendar','eventtable','SISAccount'));
        
    } 
    
   


    
}
