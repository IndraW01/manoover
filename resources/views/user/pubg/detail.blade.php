@extends('layouts.user', ['title' => 'Manover | Detail PUBG'])


@section('content')
<div class="wrap">
  <div class="top">
    <img src="{{ asset('dist/user/image/pubgBannerNew.svg') }}" alt="" />
  </div>
  <div class="middle">
    <div class="left">
      <p>Biaya Pendaftaran</p>
      <h3>Rp 75.000/tim</h3>
    </div>
    <div class="right">
      <a href="/competition/pubg/form"><button>Register Now</button></a>
    </div>
  </div>
  <div class="bottom">
   <p>
    <b>Detail Turnamen</b> <br />
    Waktu Pelaksanaan Tanggal:3 juni (Mulai pukul 15.00 WIB - 18.50 WIB) <br>
    Perlobaan akan dilaksanakan melalui Custom Room dan live streaming youtube
    
   </p>

   <p>
    <b>Hadiah</b> <br />
    Hadiah Juara 1 : Rp 800.000 <br>
    Hadiah Juara 2 : Rp 550.000 <br>
    Hadiah Juara 3 : Rp 350.000 <br>
    
   </p>
 </div>
  </div>
</div>
@endsection
