<?php

namespace App\Http\Controllers\Front;
use App\SISAccount;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SISLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function index(){

        return view('Front.SISLogin');
    }

    public function store(Request $request){
            
        // Validate the user
        $rules = [
            'Email' => 'required|email',
            'password' => 'required'
        ];
        $request->validate($rules);

        // Check if exists
        $data= request(['Email','password']);
        if ( ! auth()->attempt($data) ) {
      
            return back()->withErrors([
                'message' => 'Wrong credentials please try again'
            ]);
        }

        return redirect('/SISProfile');

    }

    public function logout() {

        auth()->logout();

        session()->flash('msg','You have been logged out successfully');

        return redirect('/SISLogin');

    }
   
}
