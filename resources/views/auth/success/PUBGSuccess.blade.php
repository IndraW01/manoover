@extends('layouts.notifikasi', ['title' => 'Verifikasi Email'])


@section('content')

<div class="wrap-competition">
 <img src="{{ asset('dist/all/logo.svg') }}" alt="">
 <h4>Pembayaran Berhasil!</h4>
 <p class="competition">Pembayaran untuk PUBG Mobile Competition telah berhasil!
  <br><br>
  Selanjutkan pembayaran kamu akan diverifikasi oleh Admin dan akan diberikan notifikasi melalui email yang terdaftar
 </p>
 <br>
 <a href="/beranda">close Window</a>
</div>
@endsection
