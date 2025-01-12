<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.items.index');
    }

    public function detail(Request $request)
    {
        return view('dashboard.items.detail');
    }
}

?>