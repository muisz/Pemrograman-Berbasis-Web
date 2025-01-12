<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.items.index')->with('user', $request->user());
    }

    public function detail(Request $request)
    {
        return view('dashboard.items.detail')->with('user', $request->user());
    }

    public function add(Request $request)
    {
        return view('dashboard.items.add')->with('user', $request->user());
    }
}

?>