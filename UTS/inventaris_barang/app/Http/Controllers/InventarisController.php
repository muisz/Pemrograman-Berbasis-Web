<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Session;

class InventarisController extends Controller
{
    public function index(Request $request) {
        if (!$this->is_authenticated()) {
            return redirect()->route('login');
        }

        $filter_category = $request->query('category');
        if ($filter_category) {
            $items = Item::where('category', $filter_category)->get();
        } else {
            $items = Item::all();
        }

        $categories = Item::distinct()->pluck('category');
        return view('dashboard.inventaris.index')
            ->with("items", $items)
            ->with('categories', $categories);
    }

    public function add(Request $request) {
        if (!$this->is_authenticated()) {
            return redirect()->route('login');
        }
        return view('dashboard.inventaris.add');
    }

    public function addItem(Request $request) { 
        $item = new Item();
        $item->item_name = $request->item_name;
        $item->category = $request->category;
        $item->quantity = $request->quantity;
        $item->supplier = $request->supplier;
        $item->received_date = $request->received_date;
        $item->save();
        return redirect()->route('dashboard.inventaris.index');
    }

    public function delete(Request $request) {
        $item = Item::find($request->id);
        $item->delete();
        return redirect()->route('dashboard.inventaris.index');
    }

    public function detail(Request $request) {
        if (!$this->is_authenticated()) {
            return redirect()->route('login');
        }
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
        return redirect()->route('dashboard.inventaris.index');
    }

    public function is_authenticated() {
        if (Session::has('authenticated_user'))
        {
            return true;
        }
        return false;
    }
}

?>