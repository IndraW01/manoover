@extends('layouts.user', ['title' => 'Detail Mobile Legend'])


@section('content')
<div class="wrapForm">
 <div class="top">
  <img src="{{ asset('dist/user/image/bennml.svg') }}" alt="" />
 </div>
 <h3>Mobile Legends : Bang Bang Competition</h3>

 <h4>Data Tim</h4>

 <form action="{{ route('competition.ml.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
    @csrf
    <div class="row">
     <div class="col-md-6">
       <div class="input-form">
         <div class="tittle">Nama Tim</div>
         <input
           type="text"
           name="nama_tim"
           value="{{ old('nama_tim') }}"
           placeholder="Masukkan Nama Tim anda..."
           required
         />
         <div class="invalid-feedback">Nama tim tidak boleh kosong !!!</div>
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
         <div class="tittle">Nama Ketua Tim</div>
         <input
           type="text"
           name="nama_ketua_tim"
           value="{{ old('nama_ketua_tim') }}"
           placeholder="Masukkan Nama Ketua Tim anda..."
           required
         />
         <div class="invalid-feedback">Nama Ketua tim tidak boleh kosong !!!</div>
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
   </div>

   <h4>Data Anggota Tim</h4>
   <div class="input-form">
     <div class="tittle">Nama Anggota 1</div>
     <input
       type="text"
       name="anggota1"
       value="{{ old('anggota1') }}"
       placeholder="Masukkan nama anda..."
       required
     />
     <div class="invalid-feedback">Nama anggota tim tidak boleh kosong !!!</div>
   </div>
   <div class="input-form">
     <div class="tittle">Nama Anggota 2</div>
     <input
       type="text"
       name="anggota2"
       value="{{ old('anggota2') }}"
       placeholder="Masukkan nama anda..."
       required
     />
     <div class="invalid-feedback">Nama anggota tim tidak boleh kosong !!!</div>
   </div>
   <div class="input-form">
     <div class="tittle">Nama Anggota 3</div>
     <input
       type="text"
       name="anggota3"
       value="{{ old('anggota3') }}"
       placeholder="Masukkan nama anda..."
       required
     />
     <div class="invalid-feedback">Nama anggota tim tidak boleh kosong !!!</div>
   </div>
   <div class="input-form">
     <div class="tittle">Nama Anggota 4</div>
     <input
       type="text"
       name="anggota4"
       value="{{ old('anggota4') }}"
       placeholder="Masukkan nama anda..."
       required
     />
     <div class="invalid-feedback">Nama anggota tim tidak boleh kosong !!!</div>
   </div>
   <div class="input-form">
     <div class="tittle">Nama Anggota 5</div>
     <input
       type="text"
       name="anggota5"
       value="{{ old('anggota5') }}"
       placeholder="Masukkan nama anda..."
       required
     />
     <div class="invalid-feedback">Nama anggota tim tidak boleh kosong !!!</div>
   </div>
   <div class="input-form">
     <div class="tittle">Nama Anggota Cadangan</div>
     <input
       type="text"
       name="cadangan1"
       value="{{ old('cadangan1') }}"
       placeholder="Masukkan nama anda..."
       required
     />
     <div class="invalid-feedback">Nama anggota tim tidak boleh kosong !!!</div>
   </div>
   <div class="input-form">
     <div class="tittle">Foto Identitas Seluruh Anggota (dalam bentuk .pdf)</div>
     <input
       type="file"
       name="kartu_identitas"
       value="{{ old('kartu_identitas') }}"
       required
     />
     <div class="invalid-feedback">Format anda salah !!!</div>
   </div>

   <button type="submit">Register Now</button>
   </form>
</div>
@endsection
