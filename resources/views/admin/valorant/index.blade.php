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
        <h3>1020</h3>
        <p>Pendaftar</p>
      </span>
    </a>
  </li>

 <li>
  <a class="flex" href="/dashboard/valorant/belum_verifikasi">
   <i class="bx bxs-group"></i>
   <span class="text">
     <h3>2834</h3>
     <p> Belum Verifikasi</p>
   </span>
  </a>
 </li>

 <li>
  <a class="flex" href="/dashboard/valorant/sudah_verifikasi">
    <i class="bx  bxs-calendar-check"></i>
    <span class="text">
      <h3>$2543</h3>
      <p>Telah Verifikasi</p>
    </span>
  </a>
 </li>

 <li>
  <a class="flex" href="/dashboard/valorant/tolak">
    <i class="bx bxs-error"></i>
    <span class="text">
      <h3>$2543</h3>
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
       <tr>
         <td>
           <img src="img/people.png" />
           <p>John Doe</p>
         </td>
         <td>Hula Hula</td>
         <td>01-10-2021</td>
         <td>Belum Verifikasi</td>
                  <td class="action">
          <a href="/dashboard/valorant/detail"><span class="status completed">Detail</span></a>
          <a data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="status destroy">Hapus</span></a>
          </td>
       </tr>
       <tr>
         <td>
           <img src="img/people.png" />
           <p>John Doe</p>
         </td>
         <td>Iya iyaaa wkwk ccccccccccccc</td>
         <td>01-10-2021</td>
         <td>Sudah Verifikasi</td>
                  <td class="action">
          <a href="/dashboard/valorant/detail"><span class="status completed">Detail</span></a>
          <a data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="status destroy">Hapus</span></a>
          </td>
       </tr>
       <tr>
         <td>
           <img src="img/people.png" />
           <p>John Doe</p>
         </td>
         <td>Ihai kakakddddddddd</td>
         <td>01-10-2021</td>
         <td>Ditolak</td>
                  <td class="action">
          <a href="/dashboard/valorant/detail"><span class="status completed">Detail</span></a>
          <a data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="status destroy">Hapus</span></a>
          </td>
       </tr>
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

