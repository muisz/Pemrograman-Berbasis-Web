@extends('dashboard.base')

@section('menu')

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
            <div class="group flex gap-2 p-2 rounded bg-slate-100">
                <i class="users icon text-slate-200 text-slate-800"></i>
                <span class="text-slate-200 font-medium text-slate-800">Users</span>
            </div>
        </a>
    </li>
</ul>

@endsection

@section('navigation')

<div class="bg-[#C1272D] p-3 text-white">
    <div class="ui breadcrumb">
        <div class="section">Users</div>
        <div class="divider"> / </div>
        <div class="active section">Ubah User</div>
    </div>
</div>

@endsection

@section('content')

<div class="p-3">
    <h1 class="text-[20px] font-semibold mb-6">Ubah User</h1>

    <form class="ui form mt-6" method="POST">
        @csrf
        <div class="field">
            <label>Nama</label>
            <input type="text" name="name" placeholder="" value="{{ $selected_user->name }}">
        </div>
        <div class="field">
            <label>Email</label>
            <input type="email" name="email" placeholder="" value="{{ $selected_user->email }}">
        </div>
        <div class="field">
            <label>Role</label>
            <select class="ui fluid dropdown" name="role" value="{{ $selected_user->role }}">
                <option value="">-- Pilih role --</option>
                <option value="super_admin">Super Admin</option>
                <option value="admin_gudang">Admin Gudang</option>
            </select>
        </div>
        <div class="field">
            <label>Kata sandi baru</label>
            <input type="password" name="new_password" placeholder="">
        </div>
        <button type="submit" class="ui primary button">Submit</button>
        <a href="/users"><button type="button" class="ui button">Batalkan</button></a>
    </form>
</div>

@endsection