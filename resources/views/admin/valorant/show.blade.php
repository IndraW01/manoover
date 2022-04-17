@extends('layouts.dashboardAdmin', ['title' => 'Manoover Valorant | Detail'])

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
          <td class="answer">{{ $valorant->nama_tim }} </td>
        </tr>
        <tr>
          <td>
            Nama Ketua Tim
          </td>
          <td>:</td>
          <td class="answer">{{ $valorant->nama_ketua_tim }} </td>
        </tr>
        <tr>
          <td>
            Email
          </td>
          <td>:</td>
          <td class="answer">{{ $valorant->user->email }}</td>
        </tr>
        <tr>
          <td>
            No HP
          </td>
          <td>:</td>
          <td class="answer">{{ $valorant->no_hp }}</td>
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
                 <td> {{ $valorant->anggota1 }} </td>
               </tr>
               <tr>
                 <td class="no">2</td>
                 <td> {{ $valorant->anggota2 }} </td>
               </tr>
               <tr>
                 <td class="no">3</td>
                 <td> {{ $valorant->anggota3 }} </td>
               </tr>
               <tr>
                 <td class="no">4</td>
                 <td> {{ $valorant->anggota4 }} </td>
               </tr>
               <tr>
                 <td class="no">5</td>
                 <td> {{ $valorant->anggota5 }} </td>
               </tr>
             </table>


             <br>
             <div class="answer">Pemain Cadangan</div>

             <table class="child">
               <tr>
                 <td class="no">1</td>
                 <td> {{ $valorant->cadangan1 ?? '-' }} </td>
               </tr>
             </table>
          </td>
        </tr>
        <tr>
         <td>
           All Kartu Identitas
         </td>
         <td>:</td>
         <td>
           <span data-bs-toggle="modal" data-bs-target="#exampleModal" class="status completed">Lihat</span>
           <span class="status pending"><a href="{{ route('dashboard.valorant.download.identitas', ['valorant' => $valorant]) }}" class="text-white">Download</a></span>
         </td>
       </tr>
        <tr>
         <td>
           Bukti Pembayaran
         </td>
         <td>:</td>
         <td>
            @if (!$valorant->bukti_pembayaran)
                <span data-bs-toggle="modal" data-bs-target="#exampleModal" class="status completed">Lihat dan Konfirmasi</span>
                <span class="status pending"><a href="#" class="disabled text-white">Download</a></span>
                <span>
                    <small>Bukti Pembayaran belum di upload</small>
                 </span>
            @else
                <span data-bs-toggle="modal" data-bs-target="#exampleModal" class="status completed">Lihat dan Konfirmasi</span>
                <span class="status pending"><a href="{{ route('dashboard.valorant.download.bukti', ['valorant' => $valorant]) }}" class="text-white">Download</a></span>
            @endif
         </td>
       </tr>
       <tr>
        <td>
          Verifikasi
        </td>
        <td>:</td>
        <td>
            @if (($valorant->status == 'sudah') || ($valorant->status == 'tolak'))
                <a href="#" class="btn btn-success btn-sm disabled">Verifikasi</a>
                <a href="#" class="btn btn-warning btn-sm text-white disabled">Tolak</a>
            @else
                @if (!$valorant->bukti_pembayaran)
                    <a href="#" class="btn btn-success btn-sm v-rounded disabled">Verifikasi</a>
                @else
                    <a href="{{ route('dashboard.valorant.verifikasi.berhasil', ['valorant' => $valorant]) }}" class="btn btn-success btn-sm v-rounded">Verifikasi</a>
                @endif
                <a href="{{ route('dashboard.valorant.verifikasi.tolak', ['valorant' => $valorant]) }}" class="btn btn-warning btn-sm text-white">Tolak</a>
            @endif

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

