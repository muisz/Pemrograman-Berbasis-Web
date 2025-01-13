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
            <div class="group flex gap-2 p-2 rounded bg-slate-100">
                <i class="boxes icon text-slate-200 text-slate-800"></i>
                <span class="text-slate-200 font-medium text-slate-800">Items</span>
            </div>
        </a>
    </li>
    <li>
        <a href="/transactions">
            <div class="group flex gap-2 p-2 rounded hover:bg-slate-100">
                <i class="clipboard check line icon text-slate-200 group-hover:text-slate-800"></i>
                <span class="text-slate-200 group-hover:font-medium group-hover:text-slate-800">Transaksi</span>
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
            <div class="group flex gap-2 p-2 rounded bg-slate-100">
                <i class="boxes icon text-slate-200 text-slate-800"></i>
                <span class="text-slate-200 font-medium text-slate-800">Items</span>
            </div>
        </a>
    </li>
    <li>
        <a href="/transactions">
            <div class="group flex gap-2 p-2 rounded hover:bg-slate-100">
                <i class="clipboard check line icon text-slate-200 group-hover:text-slate-800"></i>
                <span class="text-slate-200 group-hover:font-medium group-hover:text-slate-800">Transaksi</span>
            </div>
        </a>
    </li>
</ul>
@endif

@endsection

@section('navigation')

<div class="bg-[#C1272D] p-3 text-white">
    <div class="ui breadcrumb">
        <div class="section">Items</div>
        <div class="divider"> / </div>
        <div class="active section">Detail Item</div>
    </div>
</div>

@endsection

@section('content')

<div class="p-3">
    <div class="flex items-center justify-between">
        <h1 class="text-[20px] font-semibold mb-6">{{ $item->name }}</h1>
        <div>
            <a href="/items/{{ $item->id }}/edit"><button class="ui button"><i class="pencil icon"></i>Ubah</button></a>
        </div>
    </div>
    <div class="flex flex-col gap-2">
        <div class="flex">
            <div class="w-[200px] font-medium">Nama</div>
            <div class="flex-1 text-slate-500">{{ $item->name }}</div>
        </div>
        <div class="flex">
            <div class="w-[200px] font-medium">Deskripsi</div>
            <div class="flex-1 text-slate-500">{{ $item->deskripsi }}</div>
        </div>
        <div class="flex">
            <div class="w-[200px] font-medium">Kategori</div>
            <div class="flex-1 text-slate-500">
                @php
                    $categories = explode(',', $item->kategori);
                @endphp
                @foreach ($categories as $category)
                <div class="ui label">{{ $category }}</div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="mt-6 p-3 border rounded shadow">
        <h2 class="text-[20px] font-semibold">Suppliers</h2>
        <table class="ui selectable celled table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suppliers as $supplier)
                <tr>
                    <td data-label="Id">{{ $supplier->id }}</td>
                    <td data-label="Nama">{{ $supplier->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection