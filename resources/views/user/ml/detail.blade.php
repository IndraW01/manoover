@extends('layouts.user', ['title' => 'Manover | Detail Mobile Legend'])


@section('content')
<div class="wrap">
  <div class="top">
    <img src="{{ asset('dist/user/image/bennml.svg') }}" alt="" />
  </div>
  <div class="middle">
    <div class="left">
      <p>Biaya Pendaftaran</p>
      <h3>Rp 50.000/tim</h3>
    </div>
    <div class="right">
      <a href="/competition/ml/form"><button>Register Now</button></a>
    </div>
  </div>
  <div class="bottom">
   <p>

    <b>Detail Turnamen</b> <br />
    Waktu Pelaksanaan Tanggal : 3,4,5 Juni <br>
    Tanggal 3 juni dan 4 juni : Babak Penyisihan <br>
    Tanggal 5 juni: Semi Final, Perebutan Juara 3 dan Final <br>
    Sistem Perlombaan akan Langsung Gugur (Knock Out) <br>
    Perlobaan akan dilakasanakan melauli Custom Match dan Live Streaming Youtube pada saat Semi Final, <br>
    Perebutan Juara 3 dan Final
   </p>

   <p>
    <b>Hadiah</b> <br />
    Hadiah Juara 1 : Rp 1.000.000 <br>
    Hadiah Juara 2 : Rp 750.000 <br>
    Hadiah Juara 3 : Rp 500.000 <br>
   </p>
 </div>
  </div>
</div>
@endsection
