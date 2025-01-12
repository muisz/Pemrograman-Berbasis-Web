<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.suppliers.index');
    }

    public function add(Request $request)
    {
        return view('dashboard.suppliers.add');
    }

    public function edit(Request $request)
    {
        return view('dashboard.suppliers.edit');
    }

    public function delete(Request $request)
    {
        return redirect()->route('suppliers');
    }
}

?>