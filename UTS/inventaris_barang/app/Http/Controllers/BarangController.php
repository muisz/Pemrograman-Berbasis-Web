<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Supplier;

class BarangController extends Controller
{
    public function index(Request $request) {
        $list_of_barang = Barang::all();
        return view('dashboard.barang.index')->with('list_of_barang', $list_of_barang);
    }

    public function add(Request $request) {
        $suppliers = Supplier::all();
        $categories = Kategori::all();
        return view('dashboard.barang.add')
            ->with('suppliers', $suppliers)
            ->with('categories', $categories);
    }

    public function detail(Request $request) {
        $barang = Barang::find($request->id);
        $suppliers = Supplier::all();
        $categories = Kategori::all();
        return view('dashboard.barang.detail')
            ->with('barang', $barang)
            ->with('suppliers', $suppliers)
            ->with('categories', $categories)
            ->with('is_edit_mode', $request->query('edit'));
    }

    public function addBarang(Request $request) {
        $barang = new Barang();
        $barang->name = $request->name;
        $barang->kategori_id = $request->kategori_id;
        $barang->supplier_id = $request->supplier_id;
        $barang->save();
        return redirect()->route('barang');
    }

    public function editBarang(Request $request) {
        $barang = Barang::find($request->id);
        $barang->update([
            'name' => $request->name,
            'kategori_id' => $request->kategori_id,
            'supplier_id' => $request->supplier_id,
        ]);
        return redirect()->route('detail-barang', ['id' => $request->id]);
    }

    public function hapusBarang(Request $request) {
        $barang = Barang::find($request->id);
        $barang->delete();
        return redirect()->route('barang');
    }
}

?>