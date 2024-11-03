<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(Request $request) {
        $filter_category = $request->query('category');
        if ($filter_category) {
            $items = Item::where('category', $filter_category)->get();
        } else {
            $items = Item::all();
        }

        $categories = Item::distinct()->pluck('category');
        return view('index')
            ->with("items", $items)
            ->with('categories', $categories);
    }

    public function add(Request $request) {
        return view('add');
    }

    public function addItem(Request $request) { 
        $item = new Item();
        $item->item_name = $request->item_name;
        $item->category = $request->category;
        $item->quantity = $request->quantity;
        $item->supplier = $request->supplier;
        $item->received_date = $request->received_date;
        $item->save();
        return redirect()->route('list');
    }

    public function delete(Request $request) {
        $item = Item::find($request->id);
        $item->delete();
        return redirect()->route('list');
    }

    public function detail(Request $request) {
        $item = Item::find($request->id);
        return view('detail')
            ->with('item', $item)
            ->with('is_edit_mode', $request->query('edit'));
    }

    public function edit(Request $request) {
        $item = Item::find($request->id);
        $item->update([
            'item_name' => $request->item_name,
            'category' => $request->category,
            'quantity' => $request->quantity,
            'supplier' => $request->supplier,
            'received_date' => $request->received_date,
        ]);
        return redirect()->route('list');
    }
}
