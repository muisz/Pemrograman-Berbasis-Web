<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class AuthController extends Controller
{
    public function login(Request $request) {
        return view('login');
    }

    public function register(Request $request) {
        return view('register');
    }

    public function submitLogin(Request $request) {
        return redirect()->route('list');
    }

    public function submitRegister(Request $request) {
        return redirect()->route('list');
    }

    public function logout(Request $request) {
        return redirect()->route('login');
    }
}

?>