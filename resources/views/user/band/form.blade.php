@extends('layouts.user', ['title' => 'Manover | Form Band'])

@section('content')
<div class="wrapForm">
 <div class="top">
  <img src="{{ asset('dist/user/image/bennBand.svg') }}" alt="" />
 </div>
 <h3>Band Audition</h3>

 <h4>Data Band</h4>

 <form action="{{ route('competition.band.store') }}" method="POST" class="needs-validation" novalidate>
  @csrf
  <div class="row">
   <div class="col-md-6">
     <div class="input-form">
       <div class="tittle">Nama Band</div>
       <input
         type="text"
         name="nama_band"
         value="{{ old('nama_band') }}"
         placeholder="Masukkan Nama Band anda..."
       />
       @error('nama_band')
        <h6 class="text-danger mt-1 ms-2">{{ $message }}</h6>
       @enderror
     </div>
   </div>
   <div class="col-md-6">
     <div class="input-form">
       <div class="tittle">Email</div>
       <input
         type="email"
         name="email"
         value="{{ old('email') }}"
         placeholder="Masukkan Email anda..."
       />
       @error('email')
        <h6 class="text-danger mt-1 ms-2">{{ $message }}</h6>
       @enderror
     </div>
   </div>
 </div>
 <div class="row">
   <div class="col-md-6">
     <div class="input-form">
       <div class="tittle">ID Line Perwakilan</div>
       <input
         type="text"
         name="id_line"
         value="{{ old('id_line') }}"
         placeholder="Masukkan ID line anda..."
       />
       @error('id_line')
        <h6 class="text-danger mt-1 ms-2">{{ $message }}</h6>
       @enderror
     </div>
   </div>
   <div class="col-md-6">
     <div class="input-form">
       <div class="tittle">No HP (Whatsapp) Perwakilan</div>
       <input
         type="number"
         name="whatsapp"
         value="{{ old('whatsapp') }}"
         placeholder="Masukkan no HP (whatsapp) anda..."
       />
       @error('whatsapp')
        <h6 class="text-danger mt-1 ms-2">{{ $message }}</h6>
       @enderror
     </div>
   </div>
 </div>

 <button type="submit">Register Now</button>
 </form>
</div>
@endsection
