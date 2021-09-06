<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetpasswordController extends Controller
{
    //index function
    public function index ()
    {
        return view('auth.ResetPassword');
    }
    public function Reset ()
    {
        dd('bladifukin');
    }
}
