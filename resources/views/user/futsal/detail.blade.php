@extends('layouts.user', ['title' => 'Manover | Detail Futsal'])


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
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29562.65683671045!2d110.45836728151832!3d-7.038836093994052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708dcb417d00bb%3A0x5027a76e356dcc0!2sSendangmulyo%2C%20Tembalang%2C%20Semarang%20City%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1651509367819!5m2!1sen!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
   </p>


   <br><br><br>
 </div>
  </div>
</div>
@endsection
