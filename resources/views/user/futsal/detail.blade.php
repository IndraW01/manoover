@extends('layouts.user', ['title' => 'Detail Futsal'])


@section('content')
<div class="wrap">
  <div class="top">
    <img src="{{ asset('dist/user/image/bennfutsal.svg') }}" alt="" />
  </div>
  <div class="middle">
    <div class="left">
      <p>Biaya Pendaftaran</p>
      <h3>Rp 300.000/tim</h3>
    </div>
    <div class="right">
      <a href="/competition/futsal/form"><button>Register Now</button></a>
    </div>
  </div>
  <div class="bottom">
   <p>
    <b>Detail Turnamen</b> <br />
    Pelaksanaan tanggal 4 Juni 2022 (mulai pukul 10.00-selesai) <br>
    Sistem Perlombaan Akan Langsung Gugur <br>
    Venue Perlombaan : Venus Futsal" <br>

   </p>

   <p>
    <b>Hadiah</b> <br />
    Juara 1 : Rp 1.500.000.00 <br>
    Juara 2 : Rp 1.000.000.00 <br>
    Juara 3 : Rp  750.000.00 <br>

   </p>
 </div>
  </div>
</div>
@endsection
