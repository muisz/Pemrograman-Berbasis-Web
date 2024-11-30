@extends('base')

@section('menu')
<a href="/dashboard" class="text-slate-400 font-medium hover:text-slate-300">Dashboard</a>
<a href="/inventaris" class="text-slate-400 font-medium hover:text-slate-300">Inventaris</a>
<a href="/users" class="text-slate-300 font-medium">Manajemen Pengguna</a>
@endsection

@section('content')
<div class="">
    <div class="row mt-2">
        <div class="col">
            <h5 class="text-lg font-semibold">Daftar Pengguna</h5>
        </div>
        <div class="col text-end">
            <a href="/users/add"><button type="button" class="btn btn-primary">Tambah Pengguna</button></a>
        </div>
    </div>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Tanggal Ditambahkan</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td><a href="/users/detail/{{ $user->id }}">{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <a href="/users/detail/{{ $user->id }}?edit=true"><button type="button" class="btn btn-secondary btn-sm">Edit</button></a>
                        <a href="/users/delete/{{ $user->id }}"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection