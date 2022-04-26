@extends('layouts.user', ['title' => 'Detail PUBG'])

@section('content')
<div class="wrapForm">
 <div class="top">
  <img src="{{ asset('dist/user/image/bennBand.svg') }}" alt="" />
 </div>
 <h3>Band Audition</h3>

 <h4>Data Band</h4>

 <form action="#" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="row">
   <div class="col-md-6">
     <div class="input-form">
       <div class="tittle">Nama Band</div>
       <input
         type="text"
         name="nama_tim"
         value="{{ old('nama_tim') }}"
         placeholder="Masukkan Nama Band anda..."
       />
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
     </div>
   </div>
 </div>
 <div class="row">
   <div class="col-md-6">
     <div class="input-form">
       <div class="tittle">ID Line Perwakilan</div>
       <input
         type="text"
         name="nama_ketua_tim"
         value="{{ old('nama_ketua_tim') }}"
         placeholder="Masukkan ID line anda..."
       />
     </div>
   </div>
   <div class="col-md-6">
     <div class="input-form">
       <div class="tittle">No HP (Whatsapp) Perwakilan</div>
       <input
         type="text"
         name="no_hp"
         value="{{ old('no_hp') }}"
         placeholder="Masukkan no HP (whatsapp) anda..."
       />
     </div>
   </div>
 </div>

 <button type="submit">Register Now</button>
 </form>
</div>
@endsection
