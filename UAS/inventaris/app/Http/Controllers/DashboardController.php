<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Transaction;
use App\Models\Item;
use App\Models\Supplier;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $today_transactions = Transaction::whereDate('created_at', Carbon::today())->get();
        $total_items = Item::all()->count();
        $total_item_in = Transaction::where('jenis_transaksi', 'masuk')->count();
        $total_item_out = Transaction::where('jenis_transaksi', 'keluar')->count();
        $total_suppliers = Supplier::all()->count();
        return view('dashboard.index')
            ->with('transactions', $today_transactions)
            ->with('total_items', $total_items)
            ->with('total_item_in', $total_item_in)
            ->with('total_item_out', $total_item_out)
            ->with('total_suppliers', $total_suppliers)
            ->with('user', $request->user());
    }

    public function profile(Request $request)
    {
        return view('dashboard.profile')->with('user', $request->user());
    }

    public function post_profile(Request $request)
    {
        $new_password = $request->new_password;
        if ($new_password)
        {
            $user = $request->user();
            $user->password = $new_password;
            $user->save();
        }
        return redirect()->route('profile');
    }
}

?>