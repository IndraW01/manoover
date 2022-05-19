@extends('layouts.dashboardAdmin', ['title' => 'Manoover Dashboard'])

@section('content')

<main>

<div class="tittle_Competition">User</div>
<ul class="box-info">
  <li>
    <a class="flex" href="{{ route('dashboard.pubg.index') }}">
      <i class="bx bxs-group"></i>
      <span class="text">
        <h3>{{ $user->count() }}</h3>
        <p>Pendaftar</p>
      </span>
    </a>
  </li>

 <li>
  <a class="flex" href="{{ route('dashboard.pubg.index', ['status' => 'belum']) }}">
   <i class="bx bxs-group"></i>
   <span class="text">
     <h3>{{ $user->whereNull('email_verified_at')->count() }}</h3>
     <p> Belum Verifikasi</p>
   </span>
  </a>
 </li>

 <li>
  <a class="flex" href="{{ route('dashboard.pubg.index', ['status' => 'sudah']) }}">
    <i class="bx  bxs-calendar-check"></i>
    <span class="text">
      <h3>{{ $user->whereNotNull('email_verified_at')->count() }}</h3>
      <p>Telah Verifikasi</p>
    </span>
  </a>
 </li>
</ul>

<div class="tittle_Competition">PUBG</div>
<ul class="box-info">
  <li>
    <a class="flex" href="{{ route('dashboard.pubg.index') }}">
      <i class="bx bxs-group"></i>
      <span class="text">
        <h3>{{ $pubg->count() }}</h3>
        <p>Pendaftar</p>
      </span>
    </a>
  </li>

 <li>
  <a class="flex" href="{{ route('dashboard.pubg.index', ['status' => 'belum']) }}">
   <i class="bx bxs-group"></i>
   <span class="text">
     <h3>{{ $pubg->where('status', 'belum')->count() }}</h3>
     <p> Belum Verifikasi</p>
   </span>
  </a>
 </li>

 <li>
  <a class="flex" href="{{ route('dashboard.pubg.index', ['status' => 'sudah']) }}">
    <i class="bx  bxs-calendar-check"></i>
    <span class="text">
      <h3>{{ $pubg->where('status', 'sudah')->count() }}</h3>
      <p>Telah Verifikasi</p>
    </span>
  </a>
 </li>

 <li>
  <a class="flex" href="{{ route('dashboard.pubg.index', ['status' => 'tolak']) }}">
    <i class="bx bxs-error"></i>
    <span class="text">
      <h3>{{ $pubg->where('status', 'tolak')->count() }}</h3>
      <p>Di Tolak</p>
    </span>
  </a>
 </li>
</ul>

<div class="tittle_Competition">ML</div>
<ul class="box-info">
  <li>
    <a class="flex" href="{{ route('dashboard.ml.index') }}">
      <i class="bx bxs-group"></i>
      <span class="text">
        <h3>{{ $ml->count() }}</h3>
        <p>Pendaftar</p>
      </span>
    </a>
  </li>

 <li>
  <a class="flex" href="{{ route('dashboard.ml.index', ['status' => 'belum']) }}">
   <i class="bx bxs-group"></i>
   <span class="text">
     <h3>{{ $ml->where('status', 'belum')->count() }}</h3>
     <p> Belum Verifikasi</p>
   </span>
  </a>
 </li>

 <li>
  <a class="flex" href="{{ route('dashboard.ml.index', ['status' => 'sudah']) }}">
    <i class="bx  bxs-calendar-check"></i>
    <span class="text">
      <h3>{{ $ml->where('status', 'sudah')->count() }}</h3>
      <p>Telah Verifikasi</p>
    </span>
  </a>
 </li>

 <li>
  <a class="flex" href="{{ route('dashboard.ml.index', ['status' => 'tolak']) }}">
    <i class="bx bxs-error"></i>
    <span class="text">
      <h3>{{ $ml->where('status', 'tolak')->count() }}</h3>
      <p>Di Tolak</p>
    </span>
  </a>
 </li>
</ul>

<div class="tittle_Competition">Valorant</div>
<ul class="box-info">
  <li>
    <a class="flex" href="{{ route('dashboard.valorant.index') }}">
      <i class="bx bxs-group"></i>
      <span class="text">
        <h3>{{ $valorant->count() }}</h3>
        <p>Pendaftar</p>
      </span>
    </a>
  </li>

 <li>
  <a class="flex" href="{{ route('dashboard.valorant.index', ['status' => 'belum']) }}">
   <i class="bx bxs-group"></i>
   <span class="text">
     <h3>{{ $valorant->where('status', 'belum')->count() }}</h3>
     <p> Belum Verifikasi</p>
   </span>
  </a>
 </li>

 <li>
  <a class="flex" href="{{ route('dashboard.valorant.index', ['status' => 'sudah']) }}">
    <i class="bx  bxs-calendar-check"></i>
    <span class="text">
      <h3>{{ $valorant->where('status', 'sudah')->count() }}</h3>
      <p>Telah Verifikasi</p>
    </span>
  </a>
 </li>

 <li>
  <a class="flex" href="{{ route('dashboard.valorant.index', ['status' => 'tolak']) }}">
    <i class="bx bxs-error"></i>
    <span class="text">
      <h3>{{ $valorant->where('status', 'tolak')->count() }}</h3>
      <p>Di Tolak</p>
    </span>
  </a>
 </li>
</ul>


<div class="tittle_Competition">Futsal</div>
<ul class="box-info">
  <li>
    <a class="flex" href="{{ route('dashboard.futsal.index') }}">
      <i class="bx bxs-group"></i>
      <span class="text">
        <h3>{{ $futsal->count() }}</h3>
        <p>Pendaftar</p>
      </span>
    </a>
  </li>

 <li>
  <a class="flex" href="{{ route('dashboard.futsal.index', ['status' => 'belum']) }}">
   <i class="bx bxs-group"></i>
   <span class="text">
     <h3>{{ $futsal->where('status', 'belum')->count() }}</h3>
     <p> Belum Verifikasi</p>
   </span>
  </a>
 </li>

 <li>
  <a class="flex" href="{{ route('dashboard.futsal.index', ['status' => 'sudah']) }}">
    <i class="bx  bxs-calendar-check"></i>
    <span class="text">
      <h3>{{ $futsal->where('status', 'sudah')->count() }}</h3>
      <p>Telah Verifikasi</p>
    </span>
  </a>
 </li>

 <li>
  <a class="flex" href="{{ route('dashboard.futsal.index', ['status' => 'tolak']) }}">
    <i class="bx bxs-error"></i>
    <span class="text">
      <h3>{{ $futsal->where('status', 'tolak')->count() }}</h3>
      <p>Di Tolak</p>
    </span>
  </a>
 </li>
</ul>

<div class="tittle_Competition">Band</div>
<ul class="box-info">
  <li>
    <a class="flex" href="{{ route('dashboard.band.index') }}">
      <i class="bx bxs-group"></i>
      <span class="text">
        <h3>{{ $band->count() }}</h3>
        <p>Pendaftar</p>
      </span>
    </a>
  </li>

 <li>
  <a class="flex" href="{{ route('dashboard.band.index', ['status' => 'belum']) }}">
   <i class="bx bxs-group"></i>
   <span class="text">
     <h3>{{ $band->where('status', 'belum')->count() }}</h3>
     <p> Belum Verifikasi</p>
   </span>
  </a>
 </li>

 <li>
  <a class="flex" href="{{ route('dashboard.band.index', ['status' => 'sudah']) }}">
    <i class="bx  bxs-calendar-check"></i>
    <span class="text">
      <h3>{{ $band->where('status', 'sudah')->count() }}</h3>
      <p>Telah Verifikasi</p>
    </span>
  </a>
 </li>

 <li>
  <a class="flex" href="{{ route('dashboard.band.index', ['status' => 'tolak']) }}">
    <i class="bx bxs-error"></i>
    <span class="text">
      <h3>{{ $band->where('status', 'tolak')->count() }}</h3>
      <p>Di Tolak</p>
    </span>
  </a>
 </li>
</ul>

<div class="tittle_Competition">Closing Ceremony</div>
<ul class="box-info">
  <li>
    <a class="flex" href="{{ route('dashboard.ticket') }}">
      <i class="bx bxs-group"></i>
      <span class="text">
        <h3>{{ $closing->count() }}</h3>
        <p>Pendaftar</p>
      </span>
    </a>
  </li>

 <li>
  <a class="flex" href="{{ route('dashboard.ticket', ['status' => 'belum']) }}">
   <i class="bx bxs-group"></i>
   <span class="text">
     <h3>{{ $closing->where('status', 'belum')->count() }}</h3>
     <p> Belum Verifikasi</p>
   </span>
  </a>
 </li>

 <li>
  <a class="flex" href="{{ route('dashboard.ticket', ['status' => 'sudah']) }}">
    <i class="bx  bxs-calendar-check"></i>
    <span class="text">
      <h3>{{ $closing->where('status', 'sudah')->count() }}</h3>
      <p>Telah Verifikasi</p>
    </span>
  </a>
 </li>
</ul>

</main>
@endsection

