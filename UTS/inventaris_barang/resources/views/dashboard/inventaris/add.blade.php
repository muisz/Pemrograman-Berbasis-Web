@extends('dashboard.base')

@section('menu')
<!-- sider -->
<div class="w-[150px] flex flex-col justify-between items-center">
    <div class="w-[100px] h-[100px]"></div>
    <div class="flex flex-col gap-3 flex-1">
        <a href="#">
            <div class="flex flex-col items-center text-slate-500 gap-2 hover:text-slate-200">
                <div class="bg-slate-800 w-[40px] h-[40px] rounded-circle flex items-center justify-center">
                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                </div>
                <span class="font-medium text-sm text-center">Dashboard</span>
            </div>
        </a>
        <a href="#">
            <div class="flex flex-col items-center text-slate-200 gap-2 hover:text-slate-200">
                <div class="bg-slate-800 w-[40px] h-[40px] rounded-circle flex items-center justify-center">
                    <i class="fa fa-dropbox" aria-hidden="true"></i>
                </div>
                <span class="font-medium text-sm text-center">Inventaris</span>
            </div>
        </a>
        <a href="#">
            <div class="flex flex-col items-center text-slate-500 gap-2 hover:text-slate-200">
                <div class="bg-slate-800 w-[40px] h-[40px] rounded-circle flex items-center justify-center">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <span class="font-medium text-sm text-center">Manajemen<br />Pengguna</span>
            </div>
        </a>
    </div>
    <div class="mb-3">
        <a href="#">
            <div class="flex flex-col items-center text-slate-500 gap-2 hover:text-slate-200">
                <div class="bg-slate-800 w-[40px] h-[40px] rounded-circle flex items-center justify-center">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                </div>
                <span class="font-medium text-sm text-center">Keluar</span>
            </div>
        </a>
    </div>
</div>
@endsection

@section('page-header')
<h1 class="text-white text-[24px] font-semibold">Inventaris</h1>
@endsection

@section('content')
<div class="">
    <h5 class="text-center font-semibold text-lg">Tambah Daftar Barang</h5>
    <form method="POST" action="/add">
        @csrf
        <div class="mb-3">
            <label for="item_name" class="form-label">Nama Item</label>
            <input type="text" class="form-control" id="item_name" name="item_name">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="category" name="category">
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Jumlah Item</label>
            <input type="number" class="form-control" id="quantity" name="quantity">
        </div>
        <div class="mb-3">
            <label for="supplier" class="form-label">Supplier</label>
            <input type="text" class="form-control" id="supplier" name="supplier">
        </div>
        <div class="mb-3">
            <label for="received_date" class="form-label">Tanggal Diterima</label>
            <input type="date" class="form-control" id="received_date" name="received_date">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection