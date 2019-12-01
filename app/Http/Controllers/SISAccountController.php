<?php

namespace App\Http\Controllers;
use App\SISAccount;
use App\Evants;
use Illuminate\Http\Request;

class SISAccountController extends Controller
{
    public function index(){    
        $SISAccouts=SISAccount::all();
        return view('admin.SISAccount.manageSISAccount',compact('SISAccouts'));
    }

    public function confirm($id){

        $accdetails = SISAccount::find($id);
    
        $accdetails -> update(['IsActive' => 1]);

        session()->flash('msg','Order has been confirmed');
        return redirect('/admin/manageSISAccount');

    }
    public function Pending($id){

        $accdetails = SISAccount::find($id);

        $accdetails -> update(['IsActive' => 0]);

        session()->flash('msg','Order has been pending');
        return redirect('/admin/manageSISAccount');

    }
   public function show($id){
    $accdetails = SISAccount::find($id);
    $evants = Evants::all()->where('SISid', '==', $id);
    return view('admin.SISAccount.SISAccountDetails',compact('accdetails','evants'));

   }
  
}
