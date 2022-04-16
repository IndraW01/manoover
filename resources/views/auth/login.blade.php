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

     <button class="google"><img src="Google.svg" alt=""> Daftar dengan google</button>

     <div class="wrap">
       <p>Belum punya akun <a href="/registrasi">Daftar</a></p>
     </div>

 </div>  

@endsection
