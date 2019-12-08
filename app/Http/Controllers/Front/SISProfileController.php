<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\SISAccount;
use App\Evants;
use Illuminate\Http\Request;

class SISProfileController extends Controller
{
    public function index(){
        $id = auth()->user()->id;
        $user = SISAccount::where('id', $id)->first();
        $evants = Evants::all()->where('SISid', '==', $id);
        return view('Front.SISProfile', compact('user','evants'));
      
    }
}
