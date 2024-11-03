@extends('base')

@section('content')
<div class="container">
    <div class="row mt-2">
        <div class="col">
            <h5>Daftar Inventaris Barang</h5>
        </div>
        <div class="col text-end">
            <a href="/add"><button type="button" class="btn btn-primary">Tambah Item</button></a>
        </div>
    </div>
    <div class="mt-2" style="display: flex; gap: 10px;">
        <select class="form-select" aria-label="Filter category" style="width: 300px" id="filter-category">
            <option selected value="0">Pilih Kategori</option>
            @foreach ($categories as $category)
                <option value="{{ $category }}">{{$category}}</option>
            @endforeach
        </select>
        <button type="button" class="btn btn-secondary" id="apply-filter">Terapkan Filter</button>
    </div>
    <table class="table mt-2">
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