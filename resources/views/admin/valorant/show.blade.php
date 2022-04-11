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
         <a href="#">Valorant</a>
       </li>
       <li><i class="bx bx-chevron-right"></i></li>
       <li>
         <a href="#">Pendaftar</a>
       </li>
       <li><i class="bx bx-chevron-right"></i></li>
       <li>
         <a class="active" href="#">detail</a>
       </li>
     </ul>
   </div>
 </div>


 
 <div class="table-data">
  <div class="order">
    <div class="head">
      <h3>Detail Pendaftar</h3>
      <i class="bx bx-filter"></i>
    </div>
    <table>
        <tr>
          <td>
            Nama Tim
          </td>
          <td>:</td>
          <td class="answer">Srilala </td>
        </tr>
        <tr>
          <td>
            Nama Ketua Tim
          </td>
          <td>:</td>
          <td class="answer">Eki Gantng </td>
        </tr>
        <tr>
          <td>
            Email
          </td>
          <td>:</td>
          <td class="answer">kjjkK@hhh.com</td>
        </tr>
        <tr>
          <td>
            No HP
          </td>
          <td>:</td>
          <td class="answer">089876567</td>
        </tr>
        <tr>
          <td>
            Nama Anggota
          </td>
          <td valign="top">:</td>
          <td valign="top" >
             <div class="answer">Pemain Inti</div>
             <table class="child">
               <tr>
                 <td class="no">1</td>
                 <td> Muhamad Azroi </td>
                 <td>
                  <span class="status2 pending2" data-bs-toggle="modal" data-bs-target="#riviewModal">Lihat Identitas</span>
                  <span class="status2 pending">Download</span>
                 </td>
               </tr>
               <tr>
                 <td class="no">1</td>
                 <td> Muhamad Azroi </td>
                 <td>
                  <span class="status2 pending2" data-bs-toggle="modal" data-bs-target="#riviewModal">Lihat Identitas</span>
                  <span class="status2 pending">Download</span>
                 </td>
               </tr>
               <tr>
                 <td class="no">1</td>
                 <td> Muhamad Azroi </td>
                 <td>
                  <span class="status2 pending2" data-bs-toggle="modal" data-bs-target="#riviewModal">Lihat Identitas</span>
                  <span class="status2 pending">Download</span>
                 </td>
               </tr>
               <tr>
                 <td class="no">1</td>
                 <td> Muhamad Azroi </td>
                 <td>
                  <span class="status2 pending2" data-bs-toggle="modal" data-bs-target="#riviewModal">Lihat Identitas</span>
                  <span class="status2 pending">Download</span>
                 </td>
               </tr>
             </table>


             <br>
             <div class="answer">Pemain Cadangan</div>

             <table class="child">
               <tr>
                 <td class="no">1</td>
                 <td> Muhamad Azroi </td>
                 <td>
                  <span class="status2 pending2" data-bs-toggle="modal" data-bs-target="#riviewModal">Lihat Identitas</span>
                  <span class="status2 pending">Download</span>
                 </td>
               </tr>
             </table>
          </td>
        </tr>
        <tr>
         <td>
           Bukti Pembayaran
         </td>
         <td>:</td>
         <td>
           <span data-bs-toggle="modal" data-bs-target="#exampleModal" class="status completed">Lihat dan Konfirmasi</span>
           <span class="status pending">Download</span>
         </td>
       </tr>
    </table>
  </div>
 </div>

  <!-- Modal identitas -->
  <div class="modal fade" id="riviewModal" tabindex="-1" aria-labelledby="riviewModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-body">
        </div>
        <div class="footer-modal">
          <span class="button status completed" data-bs-dismiss="modal" aria-label="Close">Tutup</span>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal Tolak -->
  <div class="modal fade" id="dropModal" tabindex="-1" aria-labelledby="dropModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-body">
          <div class="alertHapus">
            <img src="{{ asset('dist/admin/iconHapus.svg') }}" alt="">
            <p>Apakah kamu yakin ingin menolak ini ?</p>
          </div>
        </div>
        <div class="footer-modal">
          <span class="button status completed" data-bs-dismiss="modal" aria-label="Close">Batlkan</span>
          <span class="button status2 completed">Tolak</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="gambar_dashboard/bukti.jpg" alt="">
        </div>
        <div class="footer-modal">
          <span class="button status2 completed" data-bs-toggle="modal" data-bs-target="#dropModal">Tolak</span>
          <span class="button status completed">Konfirmasi</span>
        </div>
      </div>
    </div>
  </div>
 </main>

@endsection

