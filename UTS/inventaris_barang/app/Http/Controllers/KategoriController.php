<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(Request $request) {
        $categories = Kategori::all();
        return view('dashboard.kategori.index')->with('categories', $categories);
    }

    public function add(Request $request) {
        return view('dashboard.kategori.add');
    }

    public function detail(Request $request) {
        $kategori = Kategori::find($request->id);
        return view('dashboard.kategori.detail')
            ->with('category', $kategori)
            ->with('is_edit_mode', $request->query('edit'));
    }

    public function addKategori(Request $request) {
        $kategori = new Kategori();
        $kategori->name = $request->name;
        $kategori->save();
        return redirect()->route('kategori');
    }

    public function editKategori(Request $request) {
        $kategori = Kategori::find($request->id);
        $kategori->update(['name' => $request->name]);
        return redirect()->route('detail-kategori', ['id' => $kategori->id]);
    }

    public function hapusKategori(Request $request) {
        $kategori = Kategori::find($request->id);
        $kategori->delete();
        return redirect()->route('kategori');
    }
}

?>