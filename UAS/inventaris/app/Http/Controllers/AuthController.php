<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('landing.login');
    }

    public function register(Request $request)
    {
        return view('landing.register');
    }

    public function forgot_password(Request $request)
    {
        return view('landing.forgot-password');
    }

    public function reset_password(Request $request)
    {
        return view('landing.reset-password');
    }
}

?>