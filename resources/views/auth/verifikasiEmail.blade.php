
@extends('layouts.notifikasi', ['title' => 'Verifikasi Email'])


@section('content')

<div class="wrap-verifikasiEmail">
 <img src="{{ asset('dist/all/logo.svg') }}" alt="">
 <h4>Verifikasi Email</h4>
    @if (session('resent'))
        <div class="row justify-content-center">
            <div class="alert alert-success col-6" role="alert">
                {{ __('Link Verifikasi Email berhasil dikirim') }}
            </div>
        </div>
    @endif
 <p>Terimakasih telah mendaftar!
  <br><br>
  Untuk menyelesaikan pendaftaran silahkan cek email untuk melakukan
  verifikasi email,
    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class="btn btn-link p-0 m-0 align-baseline text-white">Kirim ulang verikasi</button>.
    </form>
  <br>
  <br>
  <a href="{{ route('home') }}">Kembali Ke Home</a>
 </p>
</div>
@endsection
