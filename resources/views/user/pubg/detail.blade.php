@extends('layouts.user', ['title' => 'Detail PUBG'])


@section('content')
  <div class="wrap">
       
   {{-- <div class="wrapAnimasi">
    <img class="ikan" src="{{ asset('dist/landingPage/image/ikan1.svg') }}" alt="">
   </div> --}}

   <img src="{{asset('dist/user/pubg.svg')}}" alt="">
  </div>

  <div class="price">
    <div class="left">
      <p>Biaya Pendaftaran</p>
      <h2>Rp 50.000/tim</h2>
    </div>
    <div class="right">
      <a href="#"><button>Register Now</button></a>
    </div>
  </div>


  <div class="wrap2">
    <div class="content">
      <p>
        Match Day : 2 - 3 Mei 2022
        <br>Pendaftaran ditutup tanggal 28 April 2022
        <br>TM tanggal 29 April 2022
        <br>Biaya pendaftaran IDR 35.000,- / Slot
        <br> Venue : Online
        <br> Khusus Mahasiswa dan SMA/SMK/Sederajat
        <br> Squad Mode
        <br> Match Mode : Standard 13R - Tournament Mode
        <br> Single Elimination BO1 | Grand Final BO3
        <br> Live Streaming YouTube Channel "Kamadhis Dharma Jaya UAJY"

        <br> Hadiah
        <br> Juara 1 : Rp. 600.000,- + E-Certificate + Team Profile di Website Info Tourney
        <br> Juara 2 : Rp. 350.000,- + E-Certificate + Team Profile di Website Info Tourney
        <br> Juara 3 : Rp. 250.000,- + E-Certificate + Team Profile di Website Info Tourney
        <br> *Hadiah FIX tidak berubah
        <br> **Semua peserta mendapatkan E-Certificate Partisipasi

      </p>
  </div>
@endsection
