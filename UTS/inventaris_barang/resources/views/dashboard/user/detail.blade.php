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
        <div class="flex items-center gap-3 font-light font-medium text-green-300">
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
        <div class="flex items-cente text-slate-300 gap-3 font-light hover:font-medium hover:text-green-300">
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
    <div class="text-sm text-green-600">{{ $user->name }}</div>
</div>

<div class="bg-white border p-3 rounded-lg mt-2">
    <h5 class="text-center font-medium text-lg">
        @if ($is_edit_mode == 'true')
        Ubah Pengguna
        @else
        Detail Pengguna
        @endif
    </h5>
    <form method="POST" action="/user/edit/{{ $user->id }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            @if ($is_edit_mode == 'true')
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
            @else
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" disabled>
            @endif
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            @if ($is_edit_mode == 'true')
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
            @else
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" disabled>
            @endif
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Role</label>
            @if ($is_edit_mode == 'true')
                <select class="form-select" aria-label="role" style="width: 300px" id="role">
                    <option selected value="">Pilih Role</option>
                    <option selected value="Admin">Admin</option>
                    <option selected value="Gudang">Gudang</option>
                    <option selected value="Manajemen">Manajemen</option>
                </select>
            @else
                <select class="form-select" aria-label="role" style="width: 300px" id="role">
                    <option selected value="">{{ $user->role }}</option>
                </select>
            @endif
        </div>
        <div class="mb-3">
            @if ($is_edit_mode == 'true')
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            @endif
        </div>
        <div class="mt-3">
            @if ($is_edit_mode == 'true')
                <button type="submit" class="btn btn-primary">Submit</button>
            @else
                <a href="/user/detail/{{ $user->id }}?edit=true"><button type="button" class="btn btn-dark">Edit</button></a>
                <a href="/user/delete/{{ $user->id }}"><button type="button" class="btn btn-danger">Hapus</button></a>
            @endif
        </div>
    </form>
</div>

@endsection