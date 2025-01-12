<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index(Request $request)
    {
        $suppliers = Supplier::all();
        return view('dashboard.suppliers.index')
            ->with('suppliers', $suppliers)
            ->with('user', $request->user());
    }

    public function add(Request $request)
    {
        return view('dashboard.suppliers.add')->with('user', $request->user());
    }

    public function post_add(Request $request)
    {
        $supplier = new Supplier();
        $supplier->name = $request->name;
        $supplier->keterangan = $request->keterangan;
        $supplier->save();
        return redirect()->route('suppliers')->with('user', $request->user());
    }

    public function edit(Request $request)
    {
        $supplier = Supplier::find($request->id);
        return view('dashboard.suppliers.edit')
            ->with('supplier', $supplier)
            ->with('user', $request->user());
    }

    public function post_edit(Request $request)
    {
        $supplier = Supplier::find($request->id);
        $supplier->update([
            'name' => $request->name,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->route('suppliers');
    }

    public function delete(Request $request)
    {
        $supplier = Supplier::find($request->id);
        $supplier->delete();
        return redirect()->route('suppliers');
    }
}

?>