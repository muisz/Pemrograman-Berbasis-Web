@extends('dashboard.base')

@section('menu')
<!-- sider -->
<div class="w-[120px] flex flex-col justify-between items-center">
    <div class="w-[100px] h-[100px]"></div>
    <div class="flex flex-col gap-3 flex-1">
        <a href="#">
            <div class="flex flex-col items-center text-slate-200 gap-2 hover:text-slate-200">
                <div class="bg-slate-800 w-[40px] h-[40px] rounded-circle flex items-center justify-center">
                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                </div>
                <span class="font-medium text-sm text-center">Dashboard</span>
            </div>
        </a>
        <a href="/inventaris">
            <div class="flex flex-col items-center text-slate-500 gap-2 hover:text-slate-200">
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
<h1 class="text-white text-[24px] font-semibold">Dashboard</h1>
@endsection