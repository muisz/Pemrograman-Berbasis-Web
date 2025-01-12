<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionItem;
use App\Models\Item;
use App\Models\Supplier;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $transactions = Transaction::all();
        return view('dashboard.transactions.index')
            ->with('transactions', $transactions)
            ->with('user', $request->user());
    }

    public function detail(Request $request)
    {
        $transaction = Transaction::find($request->id);
        return view('dashboard.transactions.detail')
            ->with('transaction', $transaction)
            ->with('user', $request->user());
    }

    public function add_in(Request $request)
    {
        $items = Item::all();
        $suppliers = Supplier::all();
        return view('dashboard.transactions.add-in')
            ->with('suppliers', $suppliers)
            ->with('items', $items)
            ->with('user', $request->user());
    }

    public function post_add_in(Request $request)
    {
        $payload = $request->all();
        
        $transaction = new Transaction();
        $transaction->name = $request->name;
        $transaction->deskripsi = $request->description;
        $transaction->tanggal_transaksi = $request->date;
        $transaction->jenis_transaksi = 'masuk';
        $transaction->total = 0;
        $transaction->save();

        $total = 0;
        foreach ($request->item as $item)
        {
            $transaction_item = new TransactionItem();
            $transaction_item->transaction_id = $transaction->id;
            $transaction_item->item_id = $item['item_id'];
            $transaction_item->total = $item['total'];
            $transaction_item->supplier_id = $item['supplier_id'];
            $transaction_item->save();
            $total += $transaction_item->total;
        }

        $transaction->update(['total' => $total]);
        return redirect()->route('transactions');
    }

    public function add_out(Request $request)
    {
        $items = Item::all();
        $suppliers = Supplier::all();
        return view('dashboard.transactions.add-out')
            ->with('suppliers', $suppliers)
            ->with('items', $items)
            ->with('user', $request->user());
    }

    public function edit_in(Request $request)
    {
        $items = Item::all();
        $suppliers = Supplier::all();
        $transaction = Transaction::find($request->id);
        return view('dashboard.transactions.edit-in')->with('user', $request->user())
            ->with('transaction', $transaction)
            ->with('suppliers', $suppliers)
            ->with('items', $items)
            ->with('user', $request->user());
    }

    public function post_edit_in(Request $request)
    {
        $transaction = Transaction::find($request->id);
        $total = 0;
        foreach ($request->item as $item)
        {
            if (isset($item['id']))
            {
                $transaction_item = TransactionItem::find($item['id']);
                $transaction_item->update([
                    'item_id' => $item['item_id'],
                    'total' => $item['total'],
                    'supplier_id' => $item['supplier_id'],
                ]);
            }
            else
            {
                $transaction_item = new TransactionItem();
                $transaction_item->transaction_id = $transaction->id;
                $transaction_item->item_id = $item['item_id'];
                $transaction_item->total = $item['total'];
                $transaction_item->supplier_id = $item['supplier_id'];
                $transaction_item->save();
            }
            $total += $transaction_item->total;
        }

        if ($request->deleted_items)
        {
            $deleted_items = explode(',', $request->deleted_items);
            foreach ($deleted_items as $deleted_id)
            {
                $item_id = trim($deleted_id);
                if ($item_id == "")
                    continue;

                $t = TransactionItem::find($item_id);
                if ($t != null)
                    $t->delete();
            }
        }

        $transaction->update([
            'name' => $request->name,
            'deskripsi' => $request->description,
            'tanggal_transaksi' => $request->date,
            'total' => $total,
        ]);
        return redirect()->route('detail-transaction', ['id' => $transaction->id]);
    }
    
    public function edit_out(Request $request)
    {
        return view('dashboard.transactions.edit-out')->with('user', $request->user());
    }
}

?>