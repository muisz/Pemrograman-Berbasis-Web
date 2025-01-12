@extends('landing.base')

@section('content')
<div class='h-screen'>
    <div class='w-full h-full flex items-center justify-center'>
        <div class='w-[400px]'>
            <h1 class='font-semibold text-[34px] text-center'>Daftar</h1>

            @if(isset($error))
            <div class="ui negative message">
                <div class="header">
                    Data tidak lengkap!
                </div>
                <p>Harap perika kembali data-data yang Anda isi</p>
            </div>
            @endif
            
            <form class="ui form" method="POST">
                @csrf
                <div class="field">
                    <label>Nama</label>
                    <input type="text" name="name" placeholder="Jhon">
                </div>
                <div class="field">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="jhon@email.com">
                </div>
                <div class="field">
                    <label>Kata sandi</label>
                    <input type="password" name="password">
                </div>
                <div class="field">
                    <label>Kode aktivasi</label>
                    <input type="text" name="activation_code" placeholder="">
                </div>
                <button class="ui fluid button primary" type="submit">Daftar</button>
                <div class='ui horizontal divider'>atau</div>
                <a href='/login'><button class='ui fluid button' type='button'>Masuk</button></a>
            </form>
        </div>
    </div>
</div>
@endsection