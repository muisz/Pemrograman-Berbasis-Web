@extends('base')

@section('menu')
<a href="/dashboard" class="text-slate-400 font-medium hover:text-slate-300">Dashboard</a>
<a href="/inventaris" class="text-slate-400 font-medium hover:text-slate-300">Inventaris</a>
<a href="/users" class="text-slate-300 font-medium">Manajemen Pengguna</a>
@endsection

@section('content')
<div class="">
    <h5 class="text-center text-lg font-semibold">
        @if ($is_edit_mode == 'true')
        Ubah Pengguna
        @else
        Detail Pengguna
        @endif
    </h5>
    <form method="POST" action="/users/edit/{{ $user->id }}">
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
                c
                <a href="/users/reset/{{ $user->id }}?edit=true"><button type="button" class="btn btn-dark">Reset kata sandi</button></a>
                <a href="/users/delete/{{ $user->id }}"><button type="button" class="btn btn-danger">Hapus</button></a>
            @endif
        </div>
    </form>
</div>
@endsection