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

<div class="bg-white border p-3 rounded-lg flex items-center">
    <div class="text-sm text-green-600">Kategori</div>
</div>

<div class="bg-white border p-3 mt-2">
    <div class="flex items-center justify-between">
        <h4 class="text-lg font-medium">Master Data Kategori</h4>
        <a href="/kategori/add"><button class="btn btn-primary btn-sm">Tambah Kategori</button></a>
    </div>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col" class="font-medium">Id</th>
                <th scope="col" class="font-medium">Nama</th>
                <th scope="col" class="font-medium">Tanggal Ditambahkan</th>
                <th scope="col" class="font-medium"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td><a href="/kategori/detail/{{ $category->id }}">{{ $category->name }}</a></td>
                    <td>{{ $category->created_at }}</td>
                    <td>
                        <a href="/kategori/detail/{{ $category->id }}?edit=true"><button type="button" class="btn btn-secondary btn-sm">Edit</button></a>
                        <a href="/kategori/delete/{{ $category->id }}"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection