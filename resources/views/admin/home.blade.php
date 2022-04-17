@extends('layouts.dashboardAdmin', ['title' => 'Manoover Dashboard'])

@section('content')

<main>
<div class="tittle_Competition">PUBG</div>
<ul class="box-info">
  <li>
    <a class="flex" href="/dashboard/futsal">
      <i class="bx bxs-group"></i>
      <span class="text">
        <h3>{{ $pubg->count() }}</h3>
        <p>Pendaftar</p>
      </span>
    </a>
  </li>

 <li>
  <a class="flex" href="/dashboard/futsal/belum_verifikasi">
   <i class="bx bxs-group"></i>
   <span class="text">
     <h3>{{ $pubg->where('status', 'belum')->count() }}</h3>
     <p> Belum Verifikasi</p>
   </span>
  </a>
 </li>

 <li>
  <a class="flex" href="/dashboard/futsal/sudah_verifikasi">
    <i class="bx  bxs-calendar-check"></i>
    <span class="text">
      <h3>{{ $pubg->where('status', 'sudah')->count() }}</h3>
      <p>Telah Verifikasi</p>
    </span>
  </a>
 </li>

 <li>
  <a class="flex" href="/dashboard/futsal/tolak">
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
    <a class="flex" href="/dashboard/futsal">
      <i class="bx bxs-group"></i>
      <span class="text">
        <h3>{{ $ml->count() }}</h3>
        <p>Pendaftar</p>
      </span>
    </a>
  </li>

 <li>
  <a class="flex" href="/dashboard/ml/belum_verifikasi">
   <i class="bx bxs-group"></i>
   <span class="text">
     <h3>{{ $ml->where('status', 'belum')->count() }}</h3>
     <p> Belum Verifikasi</p>
   </span>
  </a>
 </li>

 <li>
  <a class="flex" href="/dashboard/ml/sudah_verifikasi">
    <i class="bx  bxs-calendar-check"></i>
    <span class="text">
      <h3>{{ $ml->where('status', 'sudah')->count() }}</h3>
      <p>Telah Verifikasi</p>
    </span>
  </a>
 </li>

 <li>
  <a class="flex" href="/dashboard/ml/tolak">
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
    <a class="flex" href="/dashboard/futsal">
      <i class="bx bxs-group"></i>
      <span class="text">
        <h3>{{ $valorant->count() }}</h3>
        <p>Pendaftar</p>
      </span>
    </a>
  </li>

 <li>
  <a class="flex" href="/dashboard/valorant/belum_verifikasi">
   <i class="bx bxs-group"></i>
   <span class="text">
     <h3>{{ $valorant->where('status', 'belum')->count() }}</h3>
     <p> Belum Verifikasi</p>
   </span>
  </a>
 </li>

 <li>
  <a class="flex" href="/dashboard/valorant/sudah_verifikasi">
    <i class="bx  bxs-calendar-check"></i>
    <span class="text">
      <h3>{{ $valorant->where('status', 'sudah')->count() }}</h3>
      <p>Telah Verifikasi</p>
    </span>
  </a>
 </li>

 <li>
  <a class="flex" href="/dashboard/valorant/tolak">
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
    <a class="flex" href="/dashboard/futsal">
      <i class="bx bxs-group"></i>
      <span class="text">
        <h3>{{ $futsal->count() }}</h3>
        <p>Pendaftar</p>
      </span>
    </a>
  </li>

 <li>
  <a class="flex" href="/dashboard/futsal/belum_verifikasi">
   <i class="bx bxs-group"></i>
   <span class="text">
     <h3>{{ $futsal->where('status', 'belum')->count() }}</h3>
     <p> Belum Verifikasi</p>
   </span>
  </a>
 </li>

 <li>
  <a class="flex" href="/dashboard/futsal/sudah_verifikasi">
    <i class="bx  bxs-calendar-check"></i>
    <span class="text">
      <h3>{{ $futsal->where('status', 'sudah')->count() }}</h3>
      <p>Telah Verifikasi</p>
    </span>
  </a>
 </li>

 <li>
  <a class="flex" href="/dashboard/futsal/tolak">
    <i class="bx bxs-error"></i>
    <span class="text">
      <h3>{{ $futsal->where('status', 'tolak')->count() }}</h3>
      <p>Di Tolak</p>
    </span>
  </a>
 </li>
</ul>

</main>
@endsection

