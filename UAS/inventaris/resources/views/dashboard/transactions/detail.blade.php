@extends('dashboard.base')

@section('menu')

@if($user->role == 'super_admin')
<ul class="*:my-1">
    <li>
        <a href="/dashboard" class="hover:text-none">
            <div class="group flex gap-2 p-2 rounded hover:bg-slate-100">
                <i class="chart line icon text-slate-200 group-hover:text-slate-800"></i>
                <span class="text-slate-200 group-hover:font-medium group-hover:text-slate-800">Dashboard</span>
            </div>
        </a>
    </li>
    <li>
        <a href="/items">
            <div class="group flex gap-2 p-2 rounded hover:bg-slate-100">
                <i class="boxes icon text-slate-200 group-hover:text-slate-800"></i>
                <span class="text-slate-200 group-hover:font-medium group-hover:text-slate-800">Items</span>
            </div>
        </a>
    </li>
    <li>
        <a href="/transactions">
            <div class="group flex gap-2 p-2 rounded bg-slate-100">
                <i class="clipboard check line icon text-slate-200 text-slate-800"></i>
                <span class="text-slate-200 font-medium text-slate-800">Transaksi</span>
            </div>
        </a>
    </li>
    <li>
        <a href="/suppliers">
            <div class="group flex gap-2 p-2 rounded hover:bg-slate-100">
                <i class="warehouse icon text-slate-200 group-hover:text-slate-800"></i>
                <span class="text-slate-200 group-hover:font-medium group-hover:text-slate-800">Suppliers</span>
            </div>
        </a>
    </li>
    <li>
        <a href="/users">
            <div class="group flex gap-2 p-2 rounded hover:bg-slate-100">
                <i class="users icon text-slate-200 group-hover:text-slate-800"></i>
                <span class="text-slate-200 group-hover:font-medium group-hover:text-slate-800">Users</span>
            </div>
        </a>
    </li>
</ul>
@else
<ul class="*:my-1">
    <li>
        <a href="/items">
            <div class="group flex gap-2 p-2 rounded hover:bg-slate-100">
                <i class="boxes icon text-slate-200 group-hover:text-slate-800"></i>
                <span class="text-slate-200 group-hover:font-medium group-hover:text-slate-800">Items</span>
            </div>
        </a>
    </li>
    <li>
        <a href="/transactions">
            <div class="group flex gap-2 p-2 rounded bg-slate-100">
                <i class="clipboard check line icon text-slate-200 text-slate-800"></i>
                <span class="text-slate-200 font-medium text-slate-800">Transaksi</span>
            </div>
        </a>
    </li>
</ul>
@endif

@endsection

@section('navigation')

<div class="bg-[#C1272D] p-3 text-white">
    <div class="ui breadcrumb">
        <div class="section">Transaksi</div>
        <div class="divider"> / </div>
        <div class="active section">Detail Transaksi</div>
    </div>
</div>

@endsection

@section('content')

<div class="p-3">
    <div class="flex items-center justify-between">
        <h1 class="text-[20px] font-semibold mb-6">{{ $transaction->name }}</h1>
        
        @if ($transaction->jenis_transaksi == 'masuk')
        <a href="/transactions/{{ $transaction->id }}/edit/in"><button class="ui button"><i class="pencil icon"></i>Ubah</button></a>
        @else
        <a href="/transactions/{{ $transaction->id }}/edit/out"><button class="ui button"><i class="pencil icon"></i>Ubah</button></a>
        @endif
    </div>
    <div class="flex flex-col gap-2">
        <div class="flex">
            <div class="w-[200px] font-medium">Nama</div>
            <div class="flex-1 text-slate-500">{{ $transaction->name }}</div>
        </div>
        <div class="flex">
            <div class="w-[200px] font-medium">Deskripsi</div>
            <div class="flex-1 text-slate-500">{{ $transaction->deskripsi }}</div>
        </div>
        <div class="flex">
            <div class="w-[200px] font-medium">Jenis Transaksi</div>
            <div class="flex-1 text-slate-500">
                @if ($transaction->jenis_transaksi == 'masuk')
                <div class="ui brown label">Transaksi Masuk</div>
                @else
                <div class="ui grey label">Transaksi Keluar</div>
                @endif
            </div>
        </div>
        <div class="flex">
            <div class="w-[200px] font-medium">Tanggal Transaksi</div>
            <div class="flex-1 text-slate-500">{{ $transaction->tanggal_transaksi }}</div>
        </div>
        <div class="flex">
            <div class="w-[200px] font-medium">Jumlah Transaksi</div>
            <div class="flex-1 text-slate-500">{{ $transaction->total }} unit</div>
        </div>
    </div>

    <div class="mt-6 p-3 border rounded shadow">
        <h2 class="text-[20px] font-semibold">Daftar Item</h2>
        <table class="ui selectable celled table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Total</th>
                    @if ($transaction->jenis_transaksi == 'masuk')
                    <th>Supplier</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($transaction->items as $item)
                <tr>
                    <td data-label="Id">{{ $item->item->id }}</td>
                    <td data-label="Nama">{{ $item->item->name }}</td>
                    <td data-label="Total">{{ $item->total }}</td>
                    @if ($transaction->jenis_transaksi == 'masuk')
                    <td data-label="Supplier">{{ $item->supplier->name }}</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection