@extends('landing.base')

@section('content')
<div class='h-screen bg-red-100'>
    <div class='w-full h-full flex items-center justify-center'>
        <div class='w-[400px]'>
            <h1 class='font-semibold text-[34px] text-center'>Reset Kata Sandi</h1>
            
            <div class="ui negative message">
                <div class="header">
                    Akun tidak ditemukan!
                </div>
                <p>Harap perika kembali email Anda
            </p></div>

            <div class="ui success message">
                <div class="header">
                    Reset password telah terkirim!
                </div>
                <p>Kami telah mengirimkan instruksi untuk mengatur ulang kata sandi ke email Anda
            </p></div>

            <form class="ui form">
                <div class="field">
                    <label>Kata sandi</label>
                    <input type="password" name="password" placeholder="">
                </div>
                <div class="field">
                    <label>Konfirmasi kata sandi</label>
                    <input type="password" name="confirm-password" placeholder="">
                </div>
                <button class="ui fluid button primary" type="submit">Reset kata sandi</button>
            </form>
        </div>
    </div>
</div>
@endsection