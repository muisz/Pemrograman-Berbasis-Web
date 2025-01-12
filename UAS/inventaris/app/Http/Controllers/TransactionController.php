<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.transactions.index');
    }

    public function detail(Request $request)
    {
        return view('dashboard.transactions.detail');
    }

    public function add_in(Request $request)
    {
        return view('dashboard.transactions.add-in');
    }

    public function add_out(Request $request)
    {
        return view('dashboard.transactions.add-out');
    }

    public function edit_in(Request $request)
    {
        return view('dashboard.transactions.edit-in');
    }
    
    public function edit_out(Request $request)
    {
        return view('dashboard.transactions.edit-out');
    }
}

?>