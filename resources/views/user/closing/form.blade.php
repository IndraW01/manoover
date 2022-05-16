@extends('layouts.user', ['title' => 'Manover | Form Closing'])

@section('content')
<div class="wrapForm">
  <div class="top">
    <img src="{{ asset('dist/user/image/bennceremony.svg') }}" alt="" />
  </div>
  
  <h3>Management Closing Ceremony</h3>
  <h4>Daata Diri 1</h4>

  <form action="{{ route('closing.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
    @csrf
    <div class="row">
      <div class="col-md-6">
        <div class="input-form">
          <div class="tittle">Nama</div>
          <input
          type="text"
          name="nama"
          value="{{ old('nama') }}"
          placeholder="Masukkan Nama anda..."
        />
            @error('nama')
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
          <div class="tittle">No. Identitas (KTP/SIM/ID Lainnya)</div>
          <input
            type="text"
            name="profesi"
            value="{{ old('profesi') }}"
            placeholder="Masukkan profesi anda..."
          />
            @error('profesi')
              <h6 class="text-danger mt-1 ms-2">{{ $message }}</h6>
            @enderror
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
            />
            @error('no_hp')
              <h6 class="text-danger mt-1 ms-2">{{ $message }}</h6>
            @enderror
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6">
        <div class="input-form">
          <div class="tittle">Kota Domisili</div>
          <input
            type="text"
            name="profesi"
            value="{{ old('profesi') }}"
            placeholder="Masukkan profesi anda..."
          />
          @error('profesi')
            <h6 class="text-danger mt-1 ms-2">{{ $message }}</h6>
          @enderror
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-form">
          <div class="tittle">Foto KTP/Kartu Pelajar</div>
          <input
            type="file"
            name="kartu_identitas"
            value="{{ old('kartu_identitas') }}"
          />
          @error('kartu_identitas')
            <h6 class="text-danger mt-1 ms-2">{{ $message }}</h6>
          @enderror
        </div>
      </div>
    </div>

    <h4>Data Diri 2</h4>

    <div class="row">
      <div class="col-md-6">
        <div class="input-form">
          <div class="tittle">Nama</div>
          <input
            type="text"
            name="name2"
            value="{{ old('profesi') }}"
            placeholder="Masukkan nama peserta..."
          />
          @error('name2')
            <h6 class="text-danger mt-1 ms-2">{{ $message }}</h6>
          @enderror
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-form">
          <div class="tittle">Foto KTP/Kartu Pelajar</div>
          <input
            type="email"
            name="email2"
            value="{{ old('email2') }}"
            placeholder="Masukkan email peserta..."
          />
          @error('email2')
            <h6 class="text-danger mt-1 ms-2">{{ $message }}</h6>
          @enderror
        </div>
      </div>
    </div>

    <h4>Data Diri 3</h4>

    <div class="row">
      <div class="col-md-6">
        <div class="input-form">
          <div class="tittle">Nama</div>
          <input
            type="text"
            name="name3"
            value="{{ old('profesi') }}"
            placeholder="Masukkan nama peserta..."
          />
          @error('name3')
            <h6 class="text-danger mt-1 ms-2">{{ $message }}</h6>
          @enderror
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-form">
          <div class="tittle">Foto KTP/Kartu Pelajar</div>
          <input
            type="email"
            name="email3"
            value="{{ old('email2') }}"
            placeholder="Masukkan email peserta..."
          />
          @error('email3')
            <h6 class="text-danger mt-1 ms-2">{{ $message }}</h6>
          @enderror
        </div>
      </div>
    </div>

    <h4>Data Diri 4</h4>

    <div class="row">
      <div class="col-md-6">
        <div class="input-form">
          <div class="tittle">Nama</div>
          <input
            type="text"
            name="name2"
            value="{{ old('profesi') }}"
            placeholder="Masukkan nama peserta..."
          />
          @error('name2')
            <h6 class="text-danger mt-1 ms-2">{{ $message }}</h6>
          @enderror
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-form">
          <div class="tittle">Foto KTP/Kartu Pelajar</div>
          <input
            type="email"
            name="email2"
            value="{{ old('email2') }}"
            placeholder="Masukkan email peserta..."
          />
          @error('email2')
            <h6 class="text-danger mt-1 ms-2">{{ $message }}</h6>
          @enderror
        </div>
      </div>
    </div>

    <h4>Data Diri 5</h4>

    <div class="row">
      <div class="col-md-6">
        <div class="input-form">
          <div class="tittle">Nama</div>
          <input
            type="text"
            name="name2"
            value="{{ old('profesi') }}"
            placeholder="Masukkan nama peserta..."
          />
          @error('name2')
            <h6 class="text-danger mt-1 ms-2">{{ $message }}</h6>
          @enderror
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-form">
          <div class="tittle">Foto KTP/Kartu Pelajar</div>
          <input
            type="email"
            name="email2"
            value="{{ old('email2') }}"
            placeholder="Masukkan email peserta..."
          />
          @error('email2')
            <h6 class="text-danger mt-1 ms-2">{{ $message }}</h6>
          @enderror
        </div>
      </div>
    </div>



    <button type="submit">Register Now</button>
  </form>
</div>

@endsection
