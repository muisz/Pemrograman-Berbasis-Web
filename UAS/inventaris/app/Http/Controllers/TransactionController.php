<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.transactions.index')->with('user', $request->user());
    }

    public function detail(Request $request)
    {
        return view('dashboard.transactions.detail')->with('user', $request->user());
    }

    public function add_in(Request $request)
    {
        return view('dashboard.transactions.add-in')->with('user', $request->user());
    }

    public function add_out(Request $request)
    {
        return view('dashboard.transactions.add-out')->with('user', $request->user());
    }

    public function edit_in(Request $request)
    {
        return view('dashboard.transactions.edit-in')->with('user', $request->user());
    }
    
    public function edit_out(Request $request)
    {
        return view('dashboard.transactions.edit-out')->with('user', $request->user());
    }
}

?>