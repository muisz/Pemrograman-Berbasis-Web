@extends('base')

@section('content')
<div class="container mt-2">
    <h5 class="text-center">Tambah Daftar Barang</h5>
    <form method="POST" action="/add">
        @csrf
        <div class="mb-3">
            <label for="item_name" class="form-label">Nama Item</label>
            <input type="text" class="form-control" id="item_name" name="item_name">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="category" name="category">
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Jumlah Item</label>
            <input type="number" class="form-control" id="quantity" name="quantity">
        </div>
        <div class="mb-3">
            <label for="supplier" class="form-label">Supplier</label>
            <input type="text" class="form-control" id="supplier" name="supplier">
        </div>
        <div class="mb-3">
            <label for="received_date" class="form-label">Tanggal Diterima</label>
            <input type="date" class="form-control" id="received_date" name="received_date">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection