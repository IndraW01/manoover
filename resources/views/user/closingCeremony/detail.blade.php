@extends('layouts.user', ['title' => 'Detail PUBG'])


@section('content')
<div class="wrap">
  <div class="top">
    <img src="{{ asset('dist/user/image/bennceremony.svg') }}" alt="" />
  </div>
  <div class="middle">
    <div class="left">
      <p>Biaya Pendaftaran</p>
      <h3>Rp 50.000/tim</h3>
    </div>
    <div class="right">
      <a href="/closingCeremony/form"><button>Register Now</button></a>
    </div>
  </div>
  <div class="bottom">
   <p>
    <b>Detail Turnamen</b> <br />
    Match Day : 2 - 3 Mei 2022 <br>
    Pendaftaran ditutup tanggal 28 April 2022 <br>
    TM tanggal 29 April 2022 <br>
    Biaya pendaftaran IDR 35.000,- / Slot <br>
    Venue : Online <br>
    Khusus Mahasiswa dan SMA/SMK/Sederajat <br>
    Squad Mode <br>
    Match Mode : Standard 13R - Tournament Mode <br>
    Single Elimination BO1 | Grand Final BO3 <br>
    Live Streaming YouTube Channel "Kamadhis Dharma Jaya UAJY" <br>
   </p>

   <p>
    <b>Hadiah</b> <br />
    Juara 1 : Rp. 600.000,- + E-Certificate + Team Profile di Website Info Tourney <br>
    Juara 2 : Rp. 350.000,- + E-Certificate + Team Profile di Website Info Tourney <br>
    Juara 3 : Rp. 250.000,- + E-Certificate + Team Profile di Website Info Tourney <br>
    *Hadiah FIX tidak berubah <br>
    **Semua peserta mendapatkan E-Certificate Partisipasi <br>
   </p>
 </div>
  </div>
</div>
@endsection
