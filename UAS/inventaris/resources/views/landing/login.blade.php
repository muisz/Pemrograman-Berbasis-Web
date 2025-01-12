@extends('landing.base')

@section('content')
<div class='h-screen bg-red-100'>
    <div class='w-full h-full flex items-center justify-center'>
        <div class='w-[400px]'>
            <h1 class='font-semibold text-[34px] text-center'>Masuk</h1>
            <div class="ui negative message">

            <div class="header">
                Akun tidak ditemukan!
            </div>
            <p>Harap perika kembali email atau kata sandi Anda
            </p></div>

            <form class="ui form">
                <div class="field">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="jhon@email.com">
                </div>
                <div class="field">
                    <label>Kata sandi</label>
                    <input type="password" name="password">
                </div>
                <div class="field">
                    <a href='/forgot-password' class='cursor-pointer'>Lupa kata sandi</a>
                </div>
                <button class="ui fluid button primary" type="submit">Masuk</button>
                <div class='ui horizontal divider'>atau</div>
                <a href="/register"><button class='ui fluid button' type='button'>Daftar</button></a>
            </form>
        </div>
    </div>
</div>
@endsection