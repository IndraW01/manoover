@extends('layouts.dashboardAdmin', ['title' => 'Manoover Valorant'])

@section('content')

<main>
 <div class="head-title">
  <div class="left">
    <h1>Dashboard</h1>
    <ul class="breadcrumb">
      <li>
        <a href="#">Dashboard</a>
      </li>
      <li><i class="bx bx-chevron-right"></i></li>
      <li>
        <a href="#">Valorant</a>
      </li>
      <li><i class="bx bx-chevron-right"></i></li>
      <li>
        <a class="active" href="#">Pendaftar</a>
      </li>
    </ul>
  </div>
</div>


<div class="tittle_Competition">Valorant</div>
<ul class="box-info">
  <li>
    <a class="flex" href="/dashboard/futsal">
      <i class="bx bxs-group"></i>
      <span class="text">
        <h3>{{ $valorants->count() }}</h3>
        <p>Pendaftar</p>
      </span>
    </a>
  </li>

 <li>
  <a class="flex" href="/dashboard/ml/belum_verifikasi">
   <i class="bx bxs-group"></i>
   <span class="text">
     <h3>{{ $valorants->where('status', 'belum')->count() }}</h3>
     <p> Belum Verifikasi</p>
   </span>
  </a>
 </li>

 <li>
  <a class="flex" href="/dashboard/ml/sudah_verifikasi">
    <i class="bx  bxs-calendar-check"></i>
    <span class="text">
      <h3>{{ $valorants->where('status', 'sudah')->count() }}</h3>
      <p>Telah Verifikasi</p>
    </span>
  </a>
 </li>

 <li>
  <a class="flex" href="/dashboard/ml/tolak">
    <i class="bx bxs-error"></i>
    <span class="text">
      <h3>{{ $valorants->where('status', 'tolak')->count() }}</h3>
      <p>Di Tolak</p>
    </span>
  </a>
 </li>
</ul>



<div class="table-data">
 <div class="order">
   <div class="head">
     <h3>Pendaftar</h3>
     <i class="bx bx-search"></i>
     <i class="bx bx-filter"></i>
   </div>
   <table>
     <thead>
       <tr>
         <th>User</th>
         <th>Nama Tim</th>
         <th>Date Order</th>
         <th>Status</th>
         <th>Action</th>
       </tr>
     </thead>
     <tbody>
        @foreach ($valorants as $valorant)
            <tr>
                <td>
                    <img src="{{ asset('img/profile.png') }}" />
                    <p>{{ $valorant->nama_ketua_tim }}</p>
                </td>
                <td>{{ $valorant->nama_tim }}</td>
                <td>{{ $valorant->created_at->isoFormat('DD-MM-YYYY') }}</td>
                <td>{{ $valorant->status == 'tolak' ? 'Ditolak' : ($valorant->status == 'sudah' ? 'Sudah Verifikasi' : 'Belum Verifikasi') }}</td>
                <td class="action">
                    <a href="{{ route('dashboard.valorant.show', ['valorant' => $valorant]) }}"><span class="status completed">Detail</span></a>
                    @if (($valorant->created_at->isoFormat('DD-MM-YYYY') != Carbon\Carbon::now()->isoFormat('DD-MM-YYYY')) && $valorant->status == 'belum')
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="status destroy">Hapus</span></a>
                    @endif
                </td>
            </tr>
        @endforeach
     </tbody>
   </table>
 </div>
</div>


<!-- Modal Hapus -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-body">
       <div class="alertHapus">
        <img src="{{ asset('dist/admin/iconHapus.svg') }}" alt="">
          <p>Apakah kamu yakin ingin menghapus ini ?</p>
        </div>
      </div>
      <div class="footer-modal">
        <span class="button status completed" data-bs-dismiss="modal" aria-label="Close">Batalkan</span>
        <span class="button status2 completed">Ya, Hapus</span>
      </div>
    </div>
  </div>
 </div>
</main>

@endsection

