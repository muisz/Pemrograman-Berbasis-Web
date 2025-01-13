<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $items = Item::all();
        return view('dashboard.items.index')
            ->with('items', $items)
            ->with('user', $request->user());
    }

    public function detail(Request $request)
    {
        $item = Item::find($request->id);
        $suppliers = [];
        foreach ($item->transaction_items as $transaction)
        {
            $supplier = $transaction->supplier;
            if (!in_array($supplier, $suppliers) && $supplier != null)
            {
                $suppliers[] = $supplier;
            }
        }
        return view('dashboard.items.detail')
            ->with('item', $item)
            ->with('suppliers', $suppliers)
            ->with('user', $request->user());
    }

    public function add(Request $request)
    {
        return view('dashboard.items.add')->with('user', $request->user());
    }

    public function post_add(Request $request)
    {
        $name = $request->name;
        $deskripsi = $request->deskripsi;
        $kategori = $request->kategori;
        
        $item = new Item();
        $item->name = $name;
        $item->deskripsi = $deskripsi;
        $item->kategori = $kategori;
        $item->total = 0;
        $item->save();

        return redirect()->route('items');
    }

    public function edit(Request $request)
    {
        $item = Item::find($request->id);
        return view('dashboard.items.edit')
            ->with('item', $item)
            ->with('user', $request->user());
    }

    public function post_edit(Request $request)
    {
        $item = Item::find($request->id);
        $item->update([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
        ]);
        return redirect()->route('detail-item', ['id' => $item->id]);
    }
}

?>