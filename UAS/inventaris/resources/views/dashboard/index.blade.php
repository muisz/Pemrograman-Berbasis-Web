@extends('dashboard.base')

@section('menu')

<ul class="*:my-1">
    <li>
        <a href="/dashboard" class="hover:text-none">
            <div class="flex gap-2 bg-slate-100 p-2 rounded">
                <i class="chart line icon text-slate-800"></i>
                <span class="font-medium text-slate-800">Dashboard</span>
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
        <div class="section">Home</div>
        <div class="divider"> / </div>
        <div class="section">Store</div>
        <div class="divider"> / </div>
        <div class="active section">T-Shirt</div>
    </div>
</div>

@endsection

@section('content')

<div class="p-3">
    <h1 class="text-[20px] font-semibold">Dashboard</h1>

    <div class="flex mt-6 gap-3">
        <div class="border p-3 rounded shadow flex-1">
            <p><i class="boxes line icon"></i></p>
            <p class="text-slate-600 mt-2">Total Items</p>
            <p class="font-bold text-[22px]">1.000</p>
        </div>
        <div class="border p-3 rounded shadow flex-1">
            <p><i class="clipboard check line icon"></i></p>
            <p class="text-slate-600 mt-2">Total Items Masuk</p>
            <p class="font-bold text-[22px]">1.000</p>
        </div>
        <div class="border p-3 rounded shadow flex-1">
            <p><i class="shipping fast line icon"></i></p>
            <p class="text-slate-600 mt-2">Total Items Keluar</p>
            <p class="font-bold text-[22px]">1.000</p>
        </div>
        <div class="border p-3 rounded shadow flex-1">
            <p><i class="warehouse line icon"></i></p>
            <p class="text-slate-600 mt-2">Total Suppliers</p>
            <p class="font-bold text-[22px]">1.000</p>
        </div>
    </div>

    <div class="mt-6 p-3 border rounded shadow">
        <h2 class="text-[20px] font-semibold">Transaksi hari ini</h2>
        <table class="ui selectable celled table">
            <thead>
                <tr>
                    <th>Tanggal Input</th>
                    <th>Tanggal Transaksi</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Tanggal Input">12 Januari 2025 10:20</td>
                    <td data-label="Tanggal Transaksi">12 Januari 2025 10:20</td>
                    <td data-label="Nama">Pemesanan Pemenuhan Kebutuhan Smartphone</td>
                    <td data-label="Jenis">
                        <div class="ui brown label">Transaksi Masuk</div>
                    </td>
                    <td data-label="Total">100</td>
                    <td data-label="">
                        <a href="#"><button class="ui button">Lihat detail</button></a>
                    </td>
                </tr>
                <tr>
                    <td data-label="Tanggal">12 Januari 2025 10:20</td>
                    <td data-label="Tanggal Transaksi">12 Januari 2025 10:20</td>
                    <td data-label="Nama">Pemesanan Pemenuhan Kebutuhan Smartphone</td>
                    <td data-label="Jenis">
                        <div class="ui grey label">Transaksi Keluar</div>
                    </td>
                    <td data-label="Total">100</td>
                    <td data-label="">
                        <a href="#"><button class="ui button">Lihat detail</button></a>
                    </td>
                </tr>
                <tr>
                    <td data-label="Tanggal">12 Januari 2025 10:20</td>
                    <td data-label="Tanggal Transaksi">12 Januari 2025 10:20</td>
                    <td data-label="Nama">Pemesanan Pemenuhan Kebutuhan Smartphone</td>
                    <td data-label="Jenis">
                        <div class="ui brown label">Transaksi Masuk</div>
                    </td>
                    <td data-label="Total">100</td>
                    <td data-label="">
                        <a href="#"><button class="ui button">Lihat detail</button></a>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="6">
                        <div class="ui right floated pagination menu">
                            <a class="icon item">
                                <i class="left chevron icon"></i>
                            </a>
                            <a class="item active">1</a>
                            <a class="item">2</a>
                            <a class="item">3</a>
                            <a class="item">4</a>
                            <a class="icon item">
                                <i class="right chevron icon"></i>
                            </a>
                        </div>
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection