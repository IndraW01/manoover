@extends('layouts.user', ['title' => 'Detail PUBG'])


@section('content')
<div class="wrapForm">
 <div class="top">
  <img src="{{ asset('dist/user/image/bennvalorant.svg') }}" alt="" />
 </div>
 <h3>Valorant Competition</h3>

 <h4>Data Tim</h4>

 <form action="#">
  @csrf
  <div class="row">
   <div class="col-md-6">
     <div class="input-form">
       <div class="tittle">Nama Tim</div>
       <input
         type="text"
         name="name"
         value=""
         placeholder="Masukkan Nama Tim anda..."
         required
         autocomplete="email"
         autofocus
       />
     </div>
   </div>
   <div class="col-md-6">
     <div class="input-form">
       <div class="tittle">Email</div>
       <input
         type="email"
         name="email"
         value=""
         placeholder="Masukkan Email anda..."
         required
         autocomplete="email"
         autofocus
       />
     </div>
   </div>
 </div>
 <div class="row">
   <div class="col-md-6">
     <div class="input-form">
       <div class="tittle">Nama Ketua Tim</div>
       <input
         type="text"
         name="nameKetua"
         value=""
         placeholder="Masukkan Nama Ketua Tim anda..."
         required
         autocomplete="email"
         autofocus
       />
     </div>
   </div>
   <div class="col-md-6">
     <div class="input-form">
       <div class="tittle">No HP</div>
       <input
         type="text"
         name="email"
         value=""
         placeholder="Masukkan no hp anda..."
         required
         autocomplete="email"
         autofocus
       />
     </div>
   </div>
 </div>

 <h4>Data Anggota Tim</h4>
 <div class="input-form">
   <div class="tittle">Nama Anggota 1</div>
   <input
     type="text"
     name="nameAnggota1"
     value=""
     placeholder="Masukkan nama anda..."
     required
     autocomplete="email"
     autofocus
   />
 </div>
 <div class="input-form">
   <div class="tittle">Nama Anggota 2</div>
   <input
     type="text"
     name="nameAnggota2"
     value=""
     placeholder="Masukkan nama anda..."
     required
     autocomplete="email"
     autofocus
   />
 </div>
 <div class="input-form">
   <div class="tittle">Nama Anggota 3</div>
   <input
     type="text"
     name="nameAnggota3"
     value=""
     placeholder="Masukkan nama anda..."
     required
     autocomplete="email"
     autofocus
   />
 </div>
 <div class="input-form">
   <div class="tittle">Nama Anggota 4</div>
   <input
     type="text"
     name="nameAnggota4"
     value=""
     placeholder="Masukkan nama anda..."
     required
     autocomplete="email"
     autofocus
   />
 </div>
 <div class="input-form">
  <div class="tittle">Nama Anggota 5</div>
  <input
    type="text"
    name="nameAnggota5"
    value=""
    placeholder="Masukkan nama anda..."
    required
    autocomplete="email"
    autofocus
  />
</div>
 <div class="input-form">
   <div class="tittle">Nama Anggota Cadangan</div>
   <input
     type="text"
     name="nameAnggotaCadangan"
     value=""
     placeholder="Masukkan nama anda..."
     required
     autocomplete="email"
     autofocus
   />
 </div>
 <div class="input-form">
   <div class="tittle">Foto Identitas Seluruh Anggota (dalam bentuk .pdf)</div>
   <input
     type="file"
     name="file"
     value=""
     required
     autocomplete="email"
     autofocus
   />
 </div>
 
 </form>
 <a href="/competition/valorant/pembayaran"><button type="submit">Register Now</button></a>
</div>
@endsection
