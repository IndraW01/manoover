@extends('layouts.auth', ['title' => 'registrasi'])

@section('content')


<div class="content-layer">
 <div class="form-content">
    <a href="/" class="back">
        <img src="{{asset('dist/auth/arrow.svg')}}" alt="">
        <p>Kembali ke Homepage</p>
    </a>
     
     <h2>Daftar</h2>
     <p>Sebelum mendaftar Competition atau membeli tiket, silahkan buat akun terlebih dulu ya</p>
     <form method="POST" action="#">
         <div class="input-form">
             <div class="tittle">Nama</div>
             <input type="text" name="email" value="" placeholder="Masukkan nama anda..." required autocomplete="email" autofocus>
         </div>
         <div class="input-form">
             <div class="tittle">Email</div>
             <input type="email" name="email" value="" placeholder="Masukkan Email anda..." required autocomplete="email" autofocus>
         </div>
         <div class="input-form">
             <div class="tittle">No HP</div>
             <input type="text" name="email" value="" placeholder="Masukkan no hp anda..." required autocomplete="email" autofocus>
         </div>
         <div class="input-form">
             <div class="tittle">Password</div>
             <input type="password" name="email" value="" placeholder="Masukkan password anda..." required autocomplete="email" autofocus>
         </div>
         <div class="input-form">
             <div class="tittle">Konfirmasi Password</div>
             <input type="password" name="email" value="" placeholder="Masukkan password anda..." required autocomplete="email" autofocus>
         </div>


         <button class="register">Daftar</button>
     </form>

     <a href="{{ route('user.login.google') }}" ><button class="google"><img  src="{{ asset('ic_google.svg') }}" alt="">Google</button></a>

     <div class="wrap">
       <p>Sudah punya akun <a href="{{ route('user.login') }}">Login</a></p>
     </div>

 </div>

@endsection
