@extends('layouts.dashboardAdmin', ['title' => 'Manoover Pubg Mobile | Detail'])

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
         <a href="#">Pubg Moile</a>
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
          <td class="answer">{{ $pubgMobile->nama_tim }} </td>
        </tr>
        <tr>
          <td>
            Nama Ketua Tim
          </td>
          <td>:</td>
          <td class="answer">{{ $pubgMobile->nama_ketua_tim }} </td>
        </tr>
        <tr>
          <td>
            Email
          </td>
          <td>:</td>
          <td class="answer">{{ $pubgMobile->user->email }}</td>
        </tr>
        <tr>
          <td>
            No HP
          </td>
          <td>:</td>
          <td class="answer">{{ $pubgMobile->no_hp }}</td>
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
                 <td> {{ $pubgMobile->anggota1 }} </td>
               </tr>
               <tr>
                 <td class="no">2</td>
                 <td> {{ $pubgMobile->anggota2 }} </td>
               </tr>
               <tr>
                 <td class="no">3</td>
                 <td> {{ $pubgMobile->anggota3 }} </td>
               </tr>
               <tr>
                 <td class="no">4</td>
                 <td> {{ $pubgMobile->anggota4 }} </td>
               </tr>
             </table>


             <br>
             <div class="answer">Pemain Cadangan</div>

             <table class="child">
               <tr>
                 <td class="no">1</td>
                 <td> {{ $pubgMobile->cadangan1 ?? '-' }} </td>
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
           <span data-bs-toggle="modal" data-bs-target="#kartuModal" class="status completed">Lihat</span>
           <span class="status pending"><a href="{{ route('dashboard.pubg.download.identitas', ['pubg' => $pubgMobile]) }}" class="text-white">Download</a></span>
         </td>
       </tr>
        <tr>
         <td>
           Bukti Pembayaran
         </td>
         <td>:</td>
         <td>
            @if (!$pubgMobile->bukti_pembayaran)
                <span data-bs-toggle="modal" data-bs-target="#exampleModal" class="status completed" style="pointer-events: none;">Lihat</span>
                <span class="status pending" style="pointer-events: none;"><a href="#" class="disabled text-white" >Download</a></span>
               <small class="notifBukti">Bukti Pembayaran belum di upload</small>
            @else
                <span data-bs-toggle="modal" data-bs-target="#exampleModal" class="status completed">Lihat</span>
                <span class="status pending"><a href="{{ route('dashboard.pubg.download.bukti', ['pubg' => $pubgMobile]) }}" class="text-white">Download</a></span>
            @endif
         </td>
       </tr>
       <tr>
        <td>
          Verifikasi
        </td>
        <td>:</td>
        <td>
            @if (($pubgMobile->status == 'sudah') || ($pubgMobile->status == 'tolak'))
            
                <a href="#" class="btn btn-success btn-sm disabled">Verifikasi</a>
                <a href="#" class="btn btn-warning btn-sm text-white disabled">Tolak</a>
            @else
                @if (!$pubgMobile->bukti_pembayaran)
                    <a href="#" class="btn btn-success btn-sm v-rounded disabled">Verifikasi</a>
                @else
                    <a href="{{ route('dashboard.pubg.verifikasi.berhasil', ['pubg' => $pubgMobile]) }}" class="btn btn-success btn-sm v-rounded">Verifikasi</a>
                @endif
                <a href="{{ route('dashboard.pubg.verifikasi.tolak', ['pubg' => $pubgMobile]) }}" class="btn btn-warning btn-sm text-white">Tolak</a>
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
          <img src="{{asset("img/$pubgMobile->bukti_pembayaran")}}" alt="">
        </div>
      </div>
    </div>
  </div>
 </main>

@endsection

