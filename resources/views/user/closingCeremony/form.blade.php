@extends('layouts.user', ['title' => 'Detail PUBG'])

@section('content')
<div class="wrapForm">
 <div class="top">
  <img src="{{ asset('dist/user/image/bennceremony.svg') }}" alt="" />
 </div>
 <h3>Management Closing Ceremony</h3>

 <h4>Data Tim</h4>

 <form action="#" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
  @csrf
  <div class="row">
   <div class="col-md-6">
     <div class="input-form">
       <div class="tittle">Nama</div>
       <input
         type="text"
         name="nama_tim"
         value="{{ old('nama_tim') }}"
         placeholder="Masukkan Nama anda..."
         required         
       />
       <div class="invalid-feedback">Nama tidak boleh kosong !!!</div>
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
         required
       />
       <div class="invalid-feedback">Format Email Anda Salah !!!</div>
     </div>
   </div>
 </div>
 <div class="row">
   <div class="col-md-6">
     <div class="input-form">
       <div class="tittle">Profesi</div>
       <input
         type="text"
         name="nama_ketua_tim"
         value="{{ old('nama_ketua_tim') }}"
         placeholder="Masukkan profesi anda..."
         required
       />
       <div class="invalid-feedback">Profesi tidak boleh kosong !!!</div>
     </div>
   </div>
   <div class="col-md-6">
     <div class="input-form">
       <div class="tittle">No HP</div>
       <input
         type="number"
         name="no_hp"
         value="{{ old('no_hp') }}"
         placeholder="Masukkan no hp anda..."
         required
       />
       <div class="invalid-feedback">Format no HP harus angka !!!</div>
     </div>
   </div>
   <div class="col-md-6">
    <div class="input-form">
      <div class="tittle">Foto KTP/Kartu Pelajar</div>
      <input
        type="file"
        name="kartu_identitas"
        value="{{ old('kartu_identitas') }}"
        required
      />
      <div class="invalid-feedback">Format anda salah !!!</div>
    </div>
   </div>

 </div>

 

 <button type="submit">Register Now</button>
 </form>
</div>

@endsection
