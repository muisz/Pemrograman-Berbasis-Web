<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request) {
        $session_key_name = 'authenticated_user';
        if (Session::has($session_key_name))
        {
            return redirect()->route('list');
        }
        return view('login');
    }

    public function register(Request $request) {
        return view('register');
    }

    public function submitLogin(Request $request) {
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email', $email)->first();
        if (!$user || !Hash::check($password, $user->password))
        {
            return view('login')->with('error', 'Akun tidak ditemukan');
        }

        session(['authenticated_user' => $user->name]);
        return redirect()->route('list');
    }

    public function submitRegister(Request $request) {
        $email = $request->email;
        if ($this->email_sudah_terdaftar($email))
        {
            return view('register')->with('error', 'Email telah digunakan');
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        session(['authenticated_user' => $user->name]);
        return redirect()->route('list');
    }

    public function logout(Request $request) {
        Session::forget('authenticated_user');
        return redirect()->route('login');
    }

    public function email_sudah_terdaftar($email) {
        $user = User::where('email', $email)->first();
        if ($user) {
            return true;
        }
        return false;
    }
}

?>