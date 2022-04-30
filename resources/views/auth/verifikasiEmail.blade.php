
@extends('layouts.notifikasi', ['title' => 'Verifikasi Email'])


@section('content')

<div class="wrap-verifikasiEmail">
 <img src="{{ asset('dist/all/logo.svg') }}" alt="">
 <h4>Verifikasi Email</h4>
 <p>Terimakasih telah mendaftar!
  <br><br>
  Untuk menyelesaikan pendaftaran silahkan cek email untuk melakukan
  verifikasi email
  <br>
  <br>
  <a href="{{ route('login') }}">Login</a>
 </p>
</div>
@endsection
