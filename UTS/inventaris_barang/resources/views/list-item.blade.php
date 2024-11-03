@extends('index')

@section('content')
<div class="w-full h-screen bg-slate-200 flex items-center justify-center overflow-hidden">
    <div class="w-[800px] bg-white rounded-lg shadow">
        <div class="flex items-center justify-between p-3">
            <h2 class="text-lg font-medium">Daftar Inventaris Barang</h2>
            <a href="/add">
                <button class="py-2 px-4 bg-blue-500 rounded-lg text-white text-sm">Tambah Barang</button>
            </a>
        </div>
        <div class="relative sm:rounded-lg">
            <div class="pb-4 bg-white dark:bg-gray-900 p-3">
                <select class="w-full p-2 border rounded-lg text-sm">
                    <option>Pilih kategori</option>
                </select>
            </div>
            <div class="h-max-[500px] overflow-y-scroll rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Item
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kategori
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Qty
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Supplier
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Diterima
                            </th>
                            <th scope="col" class="px-6 py-3"></th>
                            <th scope="col" class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                1
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Apple</a>
                            </th>
                            <td class="px-6 py-4">
                                Laptop
                            </td>
                            <td class="px-6 py-4">
                                1
                            </td>
                            <td class="px-6 py-4">
                                Ibox
                            </td>
                            <td class="px-6 py-4">
                                20 Juni 2024
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection