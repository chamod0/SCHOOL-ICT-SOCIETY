<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SISAccountController extends Controller
{
    public function index(){

        return view('admin.SISAccount.manageSISAccount');
    }
}
