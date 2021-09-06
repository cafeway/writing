<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index ()
    {
        return view('auth.login');
    }
    public function login (Request $request)
    {
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            dd('you logged in successfuly');
        }
        return redirect($to = '/home');
    }
}
