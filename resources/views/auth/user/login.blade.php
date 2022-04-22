@extends('layouts.auth', ['title' => 'login'])

@section('content')

<div class="content-layer">
 <div class="form-content">
    <a href="/" class="back">
        <img src="{{asset('dist/auth/arrow.svg')}}" alt="">
        <p>Kembali ke Homepage</p>
    </a>
     <h2>Login</h2>
     <p>Sebelum mendaftar Competition atau membeli tiket, silahkan login terlebih dulu ya</p>
     <form method="POST" action="{{ route('login') }}">
        @csrf
         <div class="input-form">
             <div class="tittle">Email</div>
             <input type="email" name="email" placeholder="Masukkan Email anda..." value="{{ old('email') }}" autocomplete="email" autofocus required>
             @error('email')
                @php
                    Alert::error('Error', 'Login Anda Gagal')
                @endphp
             @enderror
        </div>
         <div class="input-form">
             <div class="tittle">Password</div>
             <input type="password" name="password" value="" placeholder="Masukkan password anda..." required>
         </div>

         <button class="register">Login</button>
     </form>


     <a href="{{ route('user.login.google') }}" ><button class="google"><img  src="{{ asset('ic_google.svg') }}" alt="">Login dengan Google</button></a>
     <div class="wrap">
       <p>Belum punya akun <a href="{{ route('register') }}">Daftar</a></p>
     </div>

 </div>

@endsection
