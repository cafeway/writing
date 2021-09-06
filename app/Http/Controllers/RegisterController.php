<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    public function index ()
    {
        return view('auth.register');
    }

    public function register (Request $request)
    {
        $this -> validate($request, [
            'password' => 'required|confirmed'
        ]);

        User:: Create([
            'first_name' => $request -> first_name,
            'last_name' => $request -> last_name,
            'email' => $request -> email ,
            'password' => Hash::make($request-> password),
            'phonenumber' => $request -> phonenumber ,
            'username' => $request -> username,
            'country' => $request -> country,
            'city' => $request -> country,
            'postalcode' => $request -> postalcode,
        ]);
        return route($to = '/');

    }
}
