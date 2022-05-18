@extends('layouts.user', ['title' => 'Manover | Form Closing'])

@section('content')
<div class="wrapForm">
  <div class="top">
    <img src="{{ asset('dist/user/image/bennceremony.svg') }}" alt="" />
  </div>

  <h3>Management Closing Ceremony</h3>
  <h4>Data Pembeli</h4>

  <form action="{{ route('closing.store', ['stok' => $counter]) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
    <input type="hidden" name="counter" value="{{ $counter }}">
    @csrf
    <div class="row">
      <div class="col-md-6">
        <div class="input-form">
          <div class="tittle">No. Identitas (KTP/SIM/ID Lainnya)</div>
          <input
            type="text"
            name="no_identitas"
            value="{{ old('no_identitas') }}"
            placeholder="Masukkan No Identitas anda..."
          />
            @error('no_identitas')
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
            name="domisili"
            value="{{ old('domisili') }}"
            placeholder="Masukkan domisili anda..."
          />
          @error('domisili')
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

    @for ($i = 1; $i <= $counter; $i++)
    <h4>Data Diri {{ $i }}</h4>

    <div class="row">
      <div class="col-md-6">
        <div class="input-form">
          <div class="tittle">Nama</div>
          <input
            type="text"
            name="nama-{{ $i }}"
            value="{{ old('nama-' . $i) }}"
            placeholder="Masukkan nama peserta..."
          />
          @error('nama-' . $i)
            <h6 class="text-danger mt-1 ms-2">{{ $message }}</h6>
          @enderror
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-form">
          <div class="tittle">Email</div>
          <input
            type="email"
            name="email-{{ $i }}"
            value="{{ old('email-' . $i) }}"
            placeholder="Masukkan email peserta..."
          />
          @error('email-' . $i)
            <h6 class="text-danger mt-1 ms-2">{{ $message }}</h6>
          @enderror
        </div>
      </div>
    </div>
    @endfor

    <button type="submit">Register Now</button>
  </form>
</div>

@endsection
