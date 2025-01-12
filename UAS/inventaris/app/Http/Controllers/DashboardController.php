<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.index')->with('user', $request->user());
    }

    public function profile(Request $request)
    {
        return view('dashboard.profile')->with('user', $request->user());
    }

    public function post_profile(Request $request)
    {
        $new_password = $request->new_password;
        if ($new_password)
        {
            $user = $request->user();
            $user->password = $new_password;
            $user->save();
        }
        return redirect()->route('profile');
    }
}

?>