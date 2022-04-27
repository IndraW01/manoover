@extends('layouts.user', ['title' => 'Detail PUBG'])

@section('content')
<div class="wrapForm">
 <div class="top">
  <img src="{{ asset('dist/user/image/bennBand.svg') }}" alt="" />
 </div>
 <h3>Band Audition</h3>

 <h4>Pembayaran</h4>
 <p>
   Silahkan melakukan pembayaran melalui beberapa rekening di bawah (pilih
   salah satu) :
 </p>

 <div class="bank">
   <div class="item">
    <img src="{{ asset('dist/user/image/bni.svg') }}" alt="" />
     <h6><b>BNI</b> : 1349522707 (a.n. Maya Simorangkir)</h6>
   </div>
   <div class="item"><img src="{{ asset('dist/user/image/dompet.svg') }}" alt="" />
     <h6><b>GoPay</b> : 089506133714 (a.n. Grace Panjaitan)</h6>
   </div>
   <div class="item">
    <img src="{{ asset('dist/user/image/dana.svg') }}" alt="" />
     <h6><b>DANA</b> : 089506133714 (a.n. Grace Agatha Panjaitan)</h6>
   </div>
   <div class="item">
    <img src="{{ asset('dist/user/image/ovo.svg') }}" alt="" />
     <h6><b>OVO</b> : 089506133714 (a.n. Grace Panjaitan)</h6>
   </div>
 </div>

 <p>
   Bayar biaya pendaftaran dengan total pembayaran <b>Rp 50.000</b> ke salah satu
   pilihan pembayaran di atas.
 </p>

 <h4>Bukti Pembayaran</h4>
 <p>
   Upload bukti pembayaran pada form di bawah, setelah itu silahkan tekan
   tombol “Finish Payment”. Cek email secara berkala. Pembayaran akan
   diverifikasi oleh admin dan akan dikirimkan email notifikasi ke email
   yang terdaftar.
 </p>
 <p>Segera selesaikan pembayaran dalam waktu <b>1x24 jam</b></p>

 <div class="time">Waktu Tersisa <b><span class="countdown" value="{{$closing->created_at->addHours(24)}}"></span></b></div>

 <form action="{{ route('closing.pembayaranProeses', ['closing' => $closing]) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
     @csrf
     @method('PATCH')
    <div class="input-form-pembayaran">
    <div class="tittle">Upload Bukti Pembayaran</div>
    <input
        type="file"
        name="bukti_pembayaran"
    />
    @error('bukti_pembayaran')
        <h6 class="text-danger mt-1 ms-2">{{ $message }}</h6>
    @enderror
    </div>
    <button>Register Now</button>
</form>
</div>
@endsection
