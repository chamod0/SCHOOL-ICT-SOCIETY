<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use App\Event;

class EventController extends Controller
{
    public function createEvent()
    {
        return view('createevent');
    }
    public function store(Request $request)
    {
        $event= new Event();
        $event->title=$request->get('title');
        $event->SISID=$request->get('SISID');
        $event->Link=$request->get('Link');
        $event->start_date=$request->get('startdate');
        $event->end_date=$request->get('enddate');
        $event->save();
        return redirect('/SISProfile');
    }
   
 
}
