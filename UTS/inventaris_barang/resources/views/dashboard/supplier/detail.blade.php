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
        <div class="flex items-cente gap-3 font-light font-medium text-green-300">
            <i class="fa fa-dropbox" aria-hidden="true"></i>
            <span>Supplier</span>
        </div>
        </a>
        <a href="/kategori">
        <div class="flex items-center text-slate-300 gap-3 font-light hover:font-medium hover:text-green-300">
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
    <div class="text-sm"><a href="/supplier">Supplier</a></div>
    <div class="text-sm">/</div>
    <div class="text-sm text-green-600">{{ $supplier->name }}</div>
</div>

<div class="bg-white border p-3 rounded-lg mt-2">
    <h5 class="text-center font-medium text-lg">
        @if ($is_edit_mode == 'true')
        Ubah Supplier
        @else
        Detail Supplier
        @endif
    </h5>
    <form method="POST" action="/supplier/edit/{{ $supplier->id }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            @if ($is_edit_mode == 'true')
            <input type="text" class="form-control" id="name" name="name" value="{{ $supplier->name }}">
            @else
            <input type="text" class="form-control" id="name" name="name" value="{{ $supplier->name }}" disabled>
            @endif
        </div>
        @if ($is_edit_mode == 'true')
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        @else
        <a href="/supplier/detail/{{ $supplier->id }}?edit=true"><button type="button" class="btn btn-secondary btn-sm">Edit</button></a>
        <a href="/supplier/delete/{{ $supplier->id }}"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
        @endif
    </form>
</div>

@endsection