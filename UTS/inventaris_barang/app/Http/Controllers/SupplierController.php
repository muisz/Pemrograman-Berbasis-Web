<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index(Request $request) {
        $suppliers = Supplier::all();
        return view('dashboard.supplier.index')->with('suppliers', $suppliers);
    }

    public function add(Request $request) {
        return view('dashboard.supplier.add');
    }

    public function detail(Request $request) {
        $supplier = Supplier::find($request->id);
        return view('dashboard.supplier.detail')
            ->with('supplier', $supplier)
            ->with('is_edit_mode', $request->query('edit'));
    }

    public function addSupplier(Request $request) {
        $supplier = new Supplier();
        $supplier->name = $request->name;
        $supplier->save();
        return redirect()->route('supplier');
    }

    public function editSupplier(Request $request) {
        $supplier = Supplier::find($request->id);
        $supplier->update(['name' => $request->name]);
        return redirect()->route('detail-supplier', ['id' => $supplier->id]);
    }

    public function hapusSupplier(Request $request) {
        $supplier = Supplier::find($request->id);
        $supplier->delete();
        return redirect()->route('supplier');
    }
}

?>