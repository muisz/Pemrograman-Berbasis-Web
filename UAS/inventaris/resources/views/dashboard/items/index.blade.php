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
        <div class="active section">Items</div>
    </div>
</div>

@endsection

@section('content')

<div class="p-3">
    <h1 class="text-[20px] font-semibold">Items</h1>

    <div class="flex justify-end">
        <a href="/items/add"><button class="ui primary button"><i class="plus square icon"></i> Tambah Item</button></a>
    </div>

    <table class="ui selectable celled table">
        <thead>
            <tr>
                <th>Tanggal Input</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td data-label="Tanggal Input">{{ $item->created_at }}</td>
                <td data-label="Nama">{{ $item->name }}</td>
                <td data-label="Jenis">
                    @php
                        $categories = explode(',', $item->kategori);
                    @endphp
                    @foreach ($categories as $category)
                    <div class="ui label">{{ $category }}</div>
                    @endforeach
                </td>
                <td data-label="">
                    <a href="/items/{{ $item->id }}"><button class="ui button">Lihat detail</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="4">
                    <div class="ui right floated pagination menu">
                        <a class="icon item">
                            <i class="left chevron icon"></i>
                        </a>
                        <a class="item active">1</a>
                        <a class="icon item">
                            <i class="right chevron icon"></i>
                        </a>
                    </div>
                </th>
            </tr>
        </tfoot>
    </table>
</div>

@endsection