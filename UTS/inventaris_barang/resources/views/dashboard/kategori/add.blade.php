@extends('dashboard.base')

@section('menu')
<div class="flex-1">
    <div>
    <h5 class="text-slate-200 font-medium">MENU</h5>
    <div class="flex flex-col gap-2 mt-3">
        <a href="/dashboard">
        <div class="flex items-center text-slate-300 gap-3 hover:font-medium hover:text-green-300">
            <i class="fa fa-dropbox" aria-hidden="true"></i>
            <span>Dashboard</span>
        </div>
        </a>
        <a href="/inventaris">
        <div class="flex items-center text-slate-300 gap-3 font-light hover:font-medium hover:text-green-300">
            <i class="fa fa-dropbox" aria-hidden="true"></i>
            <span>Inventaris</span>
        </div>
        </a>
        <a href="/user">
        <div class="flex items-center text-slate-300 gap-3 font-light hover:font-medium hover:text-green-300">
            <i class="fa fa-dropbox" aria-hidden="true"></i>
            <span>Pengguna</span>
        </div>
        </a>
    </div>
    </div>
    <div class="mt-3">
    <h5 class="text-slate-200 font-medium">MASTER</h5>
    <div class="flex flex-col gap-2 mt-3">
        <a href="/barang">
        <div class="flex items-center text-slate-300 gap-3 font-light hover:font-medium hover:text-green-300">
            <i class="fa fa-dropbox" aria-hidden="true"></i>
            <span>Barang</span>
        </div>
        </a>
        <a href="/supplier">
        <div class="flex items-center text-slate-300 gap-3 font-light hover:font-medium hover:text-green-300">
            <i class="fa fa-dropbox" aria-hidden="true"></i>
            <span>Supplier</span>
        </div>
        </a>
        <a href="/kategori">
        <div class="flex items-center gap-3 font-light font-medium text-green-300">
            <i class="fa fa-dropbox" aria-hidden="true"></i>
            <span>Kategori</span>
        </div>
        </a>
    </div>
    </div>
</div>
@endsection

@section('content')

<div class="bg-white border p-3 rounded-lg flex items-center gap-3">
    <div class="text-sm"><a href="/kategori">Kategori</a></div>
    <div class="text-sm">/</div>
    <div class="text-sm text-green-600">Tambah Kategori</div>
</div>

<div class="bg-white border p-3 rounded-lg mt-2">
    <h5 class="text-center font-medium text-lg">Tambah Daftar Kategori</h5>
    <form method="POST" action="/kategori/add">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
    </form>
</div>

@endsection