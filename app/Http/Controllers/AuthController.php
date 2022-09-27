<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function signin()
    {
        return view('Auth/signin');
    }

    public function signup() {
        return view('Auth/signup');
    }
}
