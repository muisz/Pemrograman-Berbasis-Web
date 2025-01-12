@extends('dashboard.base')

@section('menu')

<ul class="*:my-1">
    <li>
        <a href="/dashboard" class="hover:text-none">
            <div class="group flex gap-2 p-2 rounded hover:bg-slate-100">
                <i class="boxes icon text-slate-200 group-hover:text-slate-800"></i>
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
        <a href="/items">
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

@endsection

@section('navigation')

<div class="bg-[#C1272D] p-3 text-white">
    <div class="ui breadcrumb">
        <div class="section">Items</div>
        <div class="divider"> / </div>
        <div class="active section">IPhone 11</div>
    </div>
</div>

@endsection

@section('content')

<div class="p-3">
    <div class="flex items-center justify-between">
        <h1 class="text-[20px] font-semibold mb-6">IPhone 11</h1>
        <div>
            <a href="#"><button class="ui button"><i class="box icon"></i>Asripkan</button></a>
            <a href="#"><button class="ui button"><i class="pencil icon"></i>Ubah</button></a>
        </div>
    </div>
    <div class="flex flex-col gap-2">
        <div class="flex">
            <div class="w-[200px] font-medium">Nama</div>
            <div class="flex-1 text-slate-500">IPhone 11</div>
        </div>
        <div class="flex">
            <div class="w-[200px] font-medium">Deskripsi</div>
            <div class="flex-1 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.            </div>
        </div>
        <div class="flex">
            <div class="w-[200px] font-medium">Kategori</div>
            <div class="flex-1 text-slate-500">
                <div class="ui label">IPhone</div>
                <div class="ui label">Smartphone</div>
            </div>
        </div>
        <div class="flex">
            <div class="w-[200px] font-medium">Total Tersedia</div>
            <div class="flex-1 text-slate-500">100 Unit</div>
        </div>
        <div class="flex">
            <div class="w-[200px] font-medium">Status</div>
            <div class="flex-1 text-slate-500">
                <div class="ui green label">Tersedia</div>
                <div class="ui red label">Tidak tersedia</div>
                <div class="ui brown label">Diarsipkan</div>
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
                <tr>
                    <td data-label="Tanggal Input">1</td>
                    <td data-label="Nama">IBox</td>
                </tr>
                <tr>
                    <td data-label="Tanggal Input">1</td>
                    <td data-label="Nama">Digimap</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection