@extends('landing.base')

@section('content')
<div class='h-screen'>
    <div class='w-full h-full flex items-center justify-center'>
        <div class='w-[400px]'>
            <h1 class='font-semibold text-[34px] text-center'>Lupa Kata Sandi</h1>
            
            @if(isset($error))
            <div class="ui negative message">
                <div class="header">
                    Akun tidak ditemukan!
                </div>
                <p>Harap perika kembali email Anda
            </p></div>
            @endif

            @if(isset($success))
            <div class="ui success message">
                <div class="header">
                    Reset password telah terkirim!
                </div>
                <p>Kami telah mengirimkan instruksi untuk mengatur ulang kata sandi ke email Anda
            </p></div>
            @endif

            <form class="ui form" method="POST">
                @csrf
                <div class="field">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="jhon@email.com">
                </div>
                <button class="ui fluid button primary" type="submit">Reset kata sandi</button>
                <div class='ui horizontal divider'>atau</div>
                <a href="/login"><button class='ui fluid button' type='button'>Masuk</button></a>
            </form>
        </div>
    </div>
</div>
@endsection