@extends('dashboard.base')

@section('menu')

@if($user->role == 'super_admin')
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
            <div class="group flex gap-2 p-2 rounded bg-slate-100">
                <i class="clipboard check line icon text-slate-200 text-slate-800"></i>
                <span class="text-slate-200 font-medium text-slate-800">Transaksi</span>
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
@else
<ul class="*:my-1">
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
            <div class="group flex gap-2 p-2 rounded bg-slate-100">
                <i class="clipboard check line icon text-slate-200 text-slate-800"></i>
                <span class="text-slate-200 font-medium text-slate-800">Transaksi</span>
            </div>
        </a>
    </li>
</ul>
@endif

@endsection

@section('navigation')

<div class="bg-[#C1272D] p-3 text-white">
    <div class="ui breadcrumb">
        <div class="section">Transaksi</div>
        <div class="divider"> / </div>
        <div class="active section">Tambah Transaksi Masuk</div>
    </div>
</div>

@endsection

@section('content')

<div class="p-3">
    <h1 class="text-[20px] font-semibold mb-6">Tambah Transaksi Masuk</h1>

    <form class="ui form mt-6" method="POST">
        @csrf
        <div class="field">
            <label>Nama</label>
            <input type="text" name="name" placeholder="">
        </div>
        <div class="field">
            <label>Deskripsi</label>
            <textarea name="description"></textarea>
        </div>
        <div class="field">
            <label>Tanggal Transaksi</label>
            <input type="date" name="date" placeholder="">
        </div>
        <div class="field">
            <label>Daftar Item</label>
            <table class="ui selectable celled table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th class="w-[150px]">Total</th>
                        <th>Supplier</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="daftar-item">
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="5">
                            <button type="button" id="add-daftar-item" class="ui right floated button" onclick="onAddItem()"><i class="plus icon"></i>Tambah item</button>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <button type="submit" class="ui primary button">Submit</button>
    </form>
</div>

<script type="text/javascript">

let itemCount = 0;

let arrayOfItems = @json($items);
let arrayOfSuppliers = @json($suppliers);

let htmlItems = "";
let htmlSuppliers = "";

arrayOfItems.forEach(item => {
    htmlItems += `<option value="${item.id}">${item.name}</option>`;
});

arrayOfSuppliers.forEach(supplier => {
    htmlSuppliers += `<option value="${supplier.id}">${supplier.name}</option>`;
});

function onAddItem()
{
    $('#daftar-item').append(`<tr id="item-${itemCount}">
                        <td data-label="Nama">
                            <select class="ui fluid dropdown" name="item[${itemCount}][item_id]">
                                <option value="">-- Pilih item --</option>
                                ${htmlItems}
                            </select>
                        </td>
                        <td data-label="Total">
                            <input type="number" name="item[${itemCount}][total]" />
                        </td>
                        <td data-label="Supplier">
                            <select class="ui fluid dropdown" name="item[${itemCount}][supplier_id]">
                                <option value="">-- Pilih item --</option>
                                ${htmlSuppliers}
                            </select>
                        </td>
                        <td data-label="">
                            <button type="button" class="ui icon red button" onclick="onDeleteItem(${itemCount})"><i class="trash icon"></i></button>
                        </td>
                    </tr>`);
    itemCount++;
}

function onDeleteItem(id)
{
    $(`#item-${id}`).remove();
}

</script>

@endsection