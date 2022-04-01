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
         <a href="#">Futsal</a>
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
            Nama Jurusan
          </td>
          <td>:</td>
          <td class="answer">Sistem Informasi</td>
        </tr>
        <tr>
          <td>
            Nama Tim
          </td>
          <td>:</td>
          <td class="answer">Srilala </td>
        </tr>
        <tr>
          <td>
            Kartu Tanda Mahasiswa
          </td>
          <td>:</td>
          <td>
           <span data-bs-toggle="modal" data-bs-target="#exampleModal" class="status completed">Lihat</span>
           <span class="status pending">Download</span>
         </td>
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
               </tr>
               <tr>
                 <td class="no">1</td>
                 <td> Muhamad Azroi </td>
               </tr>
               <tr>
                 <td class="no">1</td>
                 <td> Muhamad Azroi </td>
               </tr>
               <tr>
                 <td class="no">1</td>
                 <td> Muhamad Azroi </td>
               </tr>
               <tr>
                 <td class="no">1</td>
                 <td> Muhamad Azroi </td>
               </tr>
             </table>


             <br>
             <div class="answer">Pemain Cadangan</div>

             <table class="child">
               <tr>
                 <td class="no">1</td>
                 <td> Muhamad Azroi </td>
               </tr>
               <tr>
                 <td class="no">2</td>
                 <td> Muhamad Azroi </td>
               </tr>
               <tr>
                 <td class="no">3</td>
                 <td> Muhamad Azroi </td>
               </tr>
               <tr>
                 <td class="no">4</td>
                 <td> Muhamad Azroi </td>
               </tr>
               <tr>
                 <td class="no">5</td>
                 <td> Muhamad Azroi </td>
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
          <span class="button status completed">Konfirmasi</span>
        </div>
      </div>
    </div>
  </div>
 </main>

@endsection

