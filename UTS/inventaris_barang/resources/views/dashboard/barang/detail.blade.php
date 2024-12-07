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
        <div class="flex items-center gap-3 font-light font-medium text-green-300">
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
    <div class="text-sm"><a href="/barang">Barang</a></div>
    <div class="text-sm">/</div>
    <div class="text-sm text-green-600">{{ $barang->name }}</div>
</div>

<div class="bg-white border p-3 rounded-lg mt-2">
    <h5 class="text-center font-medium text-lg">
        @if ($is_edit_mode == 'true')
        Ubah Barang
        @else
        Detail Barang
        @endif
    </h5>
    <form method="POST" action="/barang/edit/{{ $barang->id }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            @if ($is_edit_mode == 'true')
            <input type="text" class="form-control" id="name" name="name" value="{{ $barang->name }}">
            @else
            <input type="text" class="form-control" id="name" name="name" value="{{ $barang->name }}" disabled>
            @endif
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Kategori</label>
            @if ($is_edit_mode == 'true')
            <select class="form-select" aria-label="kategori" style="width: 300px" id="kategori" name="kategori_id">
                <option selected value="">Pilih Kategori</option>
                @foreach ($categories as $category)
                    @if ($category->id == $barang->kategori->id)
                    <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
            @else
            <select class="form-select" aria-label="kategori" style="width: 300px" id="kategori" name="kategori" disabled>
                <option selected value="">{{ $barang->kategori->name }}</option>
            </select>
            @endif
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Supplier</label>
            @if ($is_edit_mode == 'true')
            <select class="form-select" aria-label="supplier" style="width: 300px" id="supplier" name="supplier_id">
                <option selected value="">Pilih Supplier</option>
                @foreach ($suppliers as $supplier)
                    @if ($supplier->id == $barang->supplier->id)
                    <option selected value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                    @else
                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                    @endif
                @endforeach
            </select>
            @else
            <select class="form-select" aria-label="supplier" style="width: 300px" id="supplier" name="supplier_id" disabled>
                <option selected value="">{{ $barang->supplier->name }}</option>
            </select>
            @endif
        </div>
        @if ($is_edit_mode == 'true')
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        @else
        <a href="/barang/detail/{{ $barang->id }}?edit=true"><button type="button" class="btn btn-secondary btn-sm">Edit</button></a>
        <a href="/barang/delete/{{ $barang->id }}"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
        @endif
    </form>
</div>

@endsection