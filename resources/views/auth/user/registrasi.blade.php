@extends('layouts.auth', ['title' => 'registrasi'])

@section('content')

@if ($errors->all())
    @php
        $error = implode(', ', $errors->all());
        $error = Str::remove('.', $error);

        alert()->error('Gagal', $error . '.');
    @endphp

@endif

<div class="content-layer">
 <div class="form-content">
    <a href="/" class="back">
        <img src="{{asset('dist/auth/arrow.svg')}}" alt="">
        <p>Kembali ke Homepage</p>
    </a>

     <h2>Daftar</h2>
     <p>Sebelum mendaftar Competition atau membeli tiket, silahkan buat akun terlebih dulu ya</p>
     <form method="POST" action="{{ route('register') }}">
        @csrf
         <div class="input-form">
             <div class="tittle">Nama</div>
             <input type="text" name="nama" placeholder="Masukkan nama anda..." value="{{ old('nama') }}" autofocus>
         </div>
         <div class="input-form">
             <div class="tittle">Email</div>
             <input type="email" name="email" placeholder="Masukkan Email anda..." value="{{ old('email') }}">
         </div>
         <div class="input-form">
             <div class="tittle">No HP</div>
             <input type="text" name="no_hp" placeholder="Masukkan no hp anda..." value="{{ old('no_hp') }}">
         </div>
         <div class="input-form">
             <div class="tittle">Password</div>
             <input type="password" name="password" placeholder="Masukkan password anda...">
         </div>
         <div class="input-form">
             <div class="tittle">Konfirmasi Password</div>
             <input type="password" name="password_confirmation" placeholder="Masukkan password anda...">
         </div>


         <button class="register">Daftar</button>
     </form>

     <a href="{{ route('user.login.google') }}" ><button class="google"><img  src="{{ asset('ic_google.svg') }}" alt="">Daftar dengan Google</button></a>

     <div class="wrap">
       <p>Sudah punya akun <a href="{{ route('login') }}">Login</a></p>
     </div>

 </div>

@endsection
