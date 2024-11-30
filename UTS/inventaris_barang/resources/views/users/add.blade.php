@extends('base')

@section('menu')
<a href="/dashboard" class="text-slate-400 font-medium hover:text-slate-300">Dashboard</a>
<a href="/inventaris" class="text-slate-400 font-medium hover:text-slate-300">Inventaris</a>
<a href="/users" class="text-slate-300 font-medium">Manajemen Pengguna</a>
@endsection

@section('content')
<div class="">
    <h5 class="text-center font-semibold text-lg">Tambah Pengguna</h5>
    <form method="POST" action="/users/add">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Role</label>
            <select class="form-select" aria-label="role" style="width: 300px" id="role" name="role">
                <option selected value="">Pilih Role</option>
                <option selected value="Admin">Admin</option>
                <option selected value="Gudang">Gudang</option>
                <option selected value="Manajemen">Manajemen</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endsection