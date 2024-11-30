@extends('dashboard.base')

@section('menu')
<!-- sider -->
<div class="w-[120px] flex flex-col justify-between items-center">
    <div class="w-[100px] h-[100px]"></div>
    <div class="flex flex-col gap-3 flex-1">
        <a href="#">
            <div class="flex flex-col items-center text-slate-500 gap-2 hover:text-slate-200">
                <div class="bg-slate-800 w-[40px] h-[40px] rounded-circle flex items-center justify-center">
                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                </div>
                <span class="font-medium text-sm text-center">Dashboard</span>
            </div>
        </a>
        <a href="#">
            <div class="flex flex-col items-center text-slate-200 gap-2 hover:text-slate-200">
                <div class="bg-slate-800 w-[40px] h-[40px] rounded-circle flex items-center justify-center">
                    <i class="fa fa-dropbox" aria-hidden="true"></i>
                </div>
                <span class="font-medium text-sm text-center">Inventaris</span>
            </div>
        </a>
        <a href="#">
            <div class="flex flex-col items-center text-slate-500 gap-2 hover:text-slate-200">
                <div class="bg-slate-800 w-[40px] h-[40px] rounded-circle flex items-center justify-center">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <span class="font-medium text-sm text-center">Manajemen<br />Pengguna</span>
            </div>
        </a>
    </div>
    <div class="mb-3">
        <a href="#">
            <div class="flex flex-col items-center text-slate-500 gap-2 hover:text-slate-200">
                <div class="bg-slate-800 w-[40px] h-[40px] rounded-circle flex items-center justify-center">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                </div>
                <span class="font-medium text-sm text-center">Keluar</span>
            </div>
        </a>
    </div>
</div>
@endsection

@section('page-header')
<h1 class="text-white text-[24px] font-semibold">Inventaris</h1>
@endsection

@section('content')
<div class="">
    <div class="row mt-2">
        <div class="col flex gap-3">
            <select class="form-select" aria-label="Filter category" style="width: 300px" id="filter-category">
                <option selected value="0">Pilih Kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category }}">{{$category}}</option>
                @endforeach
            </select>
            <button type="button" class="btn btn-secondary" id="apply-filter">Terapkan Filter</button>
        </div>
        <div class="col text-end">
            <a href="/add"><button type="button" class="btn btn-primary">Tambah Item</button></a>
        </div>
    </div>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama Item</th>
                <th scope="col">Kategori</th>
                <th scope="col">Qty</th>
                <th scope="col">Supplier</th>
                <th scope="col">Tanggal Diterima</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td><a href="/detail/{{ $item->id }}">{{ $item->item_name }}</a></td>
                <td>{{ $item->category }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->supplier }}</td>
                <td>{{ $item->received_date }}</td>
                <td>
                    <a href="/detail/{{ $item->id }}?edit=true"><button type="button" class="btn btn-secondary btn-sm">Edit</button></a>
                    <a href="/delete/{{ $item->id }}"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script type="text/javascript">
    let applyFilterButton = document.getElementById('apply-filter');
    applyFilterButton.onclick = function() {
        let value = document.getElementById('filter-category');
        window.location.href = `/?category=${value.value}`;
    };
</script>
@endsection