@extends('layouts.dashboardAdmin')

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
        <a href="#">Mobile Legends</a>
      </li>
      <li><i class="bx bx-chevron-right"></i></li>
      <li>
        <a class="active" href="#">Pendaftar</a>
      </li>
    </ul>
  </div>
</div>


<div class="tittle_Competition">Mobile Legends</div>
<ul class="box-info">
 <li>
   <i class="bx bxs-group"></i>
   <span class="text">
     <h3>1020</h3>
     <p>Pendaftar</p>
   </span>
 </li>
 <li>
   <i class="bx bxs-group"></i>
   <span class="text">
     <h3>2834</h3>
     <p> Belum Verifikasi</p>
   </span>
 </li>
 <li>
   <i class="bx  bxs-calendar-check""></i>
   <span class="text">
     <h3>$2543</h3>
     <p>Telah Verifikasi</p>
   </span>
 </li>
 <li>
   <i class="bx bxs-error"></i>
   <span class="text">
     <h3>$2543</h3>
     <p>Di Tolak</p>
   </span>
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
          <a href="/dashboard/ml/detail"><span class="status completed">Detail</span></a>
          <a href="/dashboard/ml/edit"><span class="status pending">Edit</span></a>
          <a href="/dashboard/ml/hapus"><span class="status destroy">Hapus</span></a>
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
          <a href="/dashboard/ml/detail"><span class="status completed">Detail</span></a>
          <a href="/dashboard/ml/edit"><span class="status pending">Edit</span></a>
          <a href="/dashboard/ml/hapus"><span class="status destroy">Hapus</span></a>
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
          <a href="/dashboard/ml/detail"><span class="status completed">Detail</span></a>
          <a href="/dashboard/ml/edit"><span class="status pending">Edit</span></a>
          <a href="/dashboard/ml/hapus"><span class="status destroy">Hapus</span></a>
          </td>
       </tr>
       
     </tbody>
   </table>
 </div>
</div>







</main>
@endsection

