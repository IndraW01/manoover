@extends('layouts.notifikasi', ['title' => 'Verifikasi Email'])


@section('content')

<div class="wrap-emailSuccess">
 <img src="{{ asset('dist/all/logo.svg') }}" alt="">
 <h4>Verifikasi Email Berhasil</h4>
 <p>Verifikasi email kamu berhasil!
  <br>
  Silahkan login untuk masuk ke akunmu.
 </p>
 <br>
 <a href="/beranda">Login</a>
</div>
@endsection
