@extends('layouts.auth', ['title' => 'login'])

@section('content')


<div class="content-layer">
 <div class="form-content">
     <h2>Login</h2>
     <p>Sebelum mendaftar Competition atau membeli tiket, silahkan login terlebih dulu ya</p>
     <form method="POST" action="#">
         <div class="input-form">
             <div class="tittle">Email</div>
             <input type="email" name="email" value="" placeholder="Masukkan Email anda..." required autocomplete="email" autofocus>
         </div>
         <div class="input-form">
             <div class="tittle">Password</div>
             <input type="password" name="email" value="" placeholder="Masukkan password anda..." required autocomplete="email" autofocus>
         </div>

         <button class="register">Login</button>
     </form>

     <a href="{{ route('user.login.google') }}" class="google"><img src="{{ asset('ic_google.svg') }}" alt="">Google</a>

     <div class="wrap">
       <p>Belum punya akun <a href="{{ route('user.register') }}">Daftar</a></p>
     </div>

 </div>

@endsection
