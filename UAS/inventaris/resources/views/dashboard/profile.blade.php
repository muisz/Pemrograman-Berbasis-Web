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
    <h1 class="text-[20px] font-semibold mb-6">Profil</h1>
    <div class="flex flex-col gap-2">
        <div class="flex">
            <div class="w-[200px] font-medium">Nama</div>
            <div class="flex-1 text-slate-500">{{ $user->name }}</div>
        </div>
        <div class="flex">
            <div class="w-[200px] font-medium">Email</div>
            <div class="flex-1 text-slate-500">{{ $user->email }}</div>
        </div>
        <div class="flex">
            <div class="w-[200px] font-medium">Role</div>
            <div class="flex-1 text-slate-500">{{ $user->role }}</div>
        </div>
        <div class="flex">
            <div class="w-[200px] font-medium">Kata sandi</div>
            <div class="flex-1 text-slate-500">
                <form class="ui form" method="POST">
                    @csrf
                    <div class="inline field">
                        <input type="password" name="new_password" />
                    </div>
                    <button type="submit" class="ui button">Ubah kata sandi</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection