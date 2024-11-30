@extends('base')

@section('menu')
<a href="/dashboard" class="text-slate-400 font-medium hover:text-slate-300">Dashboard</a>
<a href="/inventaris" class="text-slate-300 font-medium">Inventaris</a>
<a href="/users" class="text-slate-400 font-medium hover:text-slate-300">Manajemen Pengguna</a>
@endsection

@section('content')
<div class="">
    <h5 class="text-center text-lg font-semibold">
        @if ($is_edit_mode == 'true')
        Ubah Barang
        @else
        Detail Barang
        @endif
    </h5>
    <form method="POST" action="/inventaris/edit/{{ $item->id }}">
        @csrf
        <div class="mb-3">
            <label for="item_name" class="form-label">Nama Item</label>
            @if ($is_edit_mode == 'true')
                <input type="text" class="form-control" id="item_name" name="item_name" value="{{ $item->item_name }}">
            @else
                <input type="text" class="form-control" id="item_name" name="item_name" value="{{ $item->item_name }}" disabled>
            @endif
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            @if ($is_edit_mode == 'true')
                <input type="text" class="form-control" id="category" name="category" value="{{ $item->category }}">
            @else
                <input type="text" class="form-control" id="category" name="category" value="{{ $item->category }}" disabled>
            @endif
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Jumlah Item</label>
            @if ($is_edit_mode == 'true')
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $item->quantity }}">
            @else
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $item->quantity }}" disabled>
            @endif
        </div>
        <div class="mb-3">
            <label for="supplier" class="form-label">Supplier</label>
            @if ($is_edit_mode == 'true')
                <input type="text" class="form-control" id="supplier" name="supplier" value="{{ $item->supplier }}">
            @else
                <input type="text" class="form-control" id="supplier" name="supplier" value="{{ $item->supplier }}" disabled>
            @endif
        </div>
        <div class="mb-3">
            <label for="received_date" class="form-label">Tanggal Diterima</label>
            @if ($is_edit_mode == 'true')
                <input type="date" class="form-control" id="received_date" name="received_date" value="{{ $item->received_date }}">
            @else
                <input type="date" class="form-control" id="received_date" name="received_date" value="{{ $item->received_date }}" disabled>
            @endif
        </div>

        @if ($is_edit_mode == 'true')
            <button type="submit" class="btn btn-primary">Submit</button>
        @else
            <a href="/inventaris/detail/{{ $item->id }}?edit=true"><button type="button" class="btn btn-secondary">Edit</button></a>
            <a href="/inventaris/delete/{{ $item->id }}"><button type="button" class="btn btn-danger">Hapus</button></a>
        @endif
    </form>
</div>
@endsection