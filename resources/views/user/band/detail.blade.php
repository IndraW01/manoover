@extends('layouts.user', ['title' => 'Manover | Detail Band'])


@section('content')
<div class="wrap">
  <div class="top">
    <img src="{{ asset('dist/user/image/bennBand.svg') }}" alt="" />
  </div>
  <div class="middle">
    <div class="left">
      <p>Biaya Pendaftaran</p>
      <h3>Rp 250.000/tim</h3>
    </div>
    <div class="right">
      <a href="/competition/band/form"><button>Register Now</button></a>
    </div>
  </div>
  <div class="bottom">
   <p>
    <b>Detail Turnamen</b> <br />
    Band audition merupakan salah satu rangkaian kompetisi dari Management Competition The 3rd Manoover. Band audition ini bertujuan sebagai wadah untuk menuangkan minat, bakat, kreatifitas serta karya bagi para musisi muda di Indonesia. Bagi pemenang Band Audition nanntinya akan bergabung sebagai talent pada Closing Ceremony The 3rd Manoover <br>
    Tempat: TP Studio Semarang <br>
    Tanggal: Sabtu, 23 Juli 2022 <br>
    Waktu: 13.00 - 15.25 WIB

   </p>
 </div>
  </div>
</div>
@endsection
