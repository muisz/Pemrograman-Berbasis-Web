<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.users.index');
    }

    public function add(Request $request)
    {
        return view('dashboard.users.add');
    }

    public function edit(Request $request)
    {
        return view('dashboard.users.edit');
    }

    public function delete(Request $request)
    {
        return redirect()->route('users');
    }
}

?>