@extends('landing.base')

@section('content')
<div class='h-screen'>
    <div class='w-full h-full flex items-center justify-center'>
        <div class='w-[400px]'>
            <h1 class='font-semibold text-[34px] text-center'>Reset Kata Sandi</h1>
            
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
                    Kata sandi berhasil diubah!
                </div>
                <p>Silahkan login kembali
            </p></div>
            @endif

            @if(isset($token_valid))
            <form class="ui form" method="POST">
                @csrf
                <div class="field">
                    <label>Kata sandi</label>
                    <input type="password" name="new_password" placeholder="">
                </div>
                <div class="field">
                    <label>Konfirmasi kata sandi</label>
                    <input type="password" name="confirm_new_password" placeholder="">
                </div>
                <input type="hidden" name="email" value="{{ $email }}" />
                <input type="hidden" name="token" value="{{ $token_valid }}" />
                <button class="ui fluid button primary" type="submit">Reset kata sandi</button>
            </form>
            @endif
        </div>
    </div>
</div>
@endsection