@extends('layouts.dashboardAdmin', ['title' => 'Manoover Mobile Legend | Detail'])

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
          <td class="answer">{{ $mobileLegend->nama_tim }} </td>
        </tr>
        <tr>
          <td>
            Nama Ketua Tim
          </td>
          <td>:</td>
          <td class="answer">{{ $mobileLegend->nama_ketua_tim }} </td>
        </tr>
        <tr>
          <td>
            Email
          </td>
          <td>:</td>
          <td class="answer">{{ $mobileLegend->user->email }}</td>
        </tr>
        <tr>
          <td>
            No HP
          </td>
          <td>:</td>
          <td class="answer">{{ $mobileLegend->no_hp }}</td>
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
                 <td> {{ $mobileLegend->anggota1 }} </td>
               </tr>
               <tr>
                 <td class="no">2</td>
                 <td> {{ $mobileLegend->anggota2 }} </td>
               </tr>
               <tr>
                 <td class="no">3</td>
                 <td> {{ $mobileLegend->anggota3 }} </td>
               </tr>
               <tr>
                 <td class="no">4</td>
                 <td> {{ $mobileLegend->anggota4 }} </td>
               </tr>
               <tr>
                 <td class="no">5</td>
                 <td> {{ $mobileLegend->anggota5 }} </td>
               </tr>
             </table>


             <br>
             <div class="answer">Pemain Cadangan</div>

             <table class="child">
               <tr>
                 <td class="no">1</td>
                 <td> {{ $mobileLegend->cadangan1 ?? '-' }} </td>
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
           <span class="status pending"><a href="{{ route('dashboard.ml.download.identitas', ['mobile_legend' => $mobileLegend]) }}" class="text-white">Download</a></span>
         </td>
       </tr>
        <tr>
         <td>
           Bukti Pembayaran
         </td>
         <td>:</td>
         <td>
            @if (!$mobileLegend->bukti_pembayaran)
            <small class="notifBukti">Bukti Pembayaran belum di upload</small>
            @else
                <span data-bs-toggle="modal" data-bs-target="#kartuModal" class="status completed">Lihat</span>
                <span class="status pending"><a href="{{ route('dashboard.ml.download.bukti', ['mobile_legend' => $mobileLegend]) }}" class="text-white">Download</a></span>
            @endif
         </td>
       </tr>
       <tr>
        <td>
          Verifikasi
        </td>
        <td>:</td>
        <td>
            @if (($mobileLegend->status == 'sudah') || ($mobileLegend->status == 'tolak'))
            <span class="status success transparant disabled">Verifikasi</span>
            <span class="status destroy transparant disabled">Tolak</span>
            @else
                @if (!$mobileLegend->bukti_pembayaran)
                  <span class="status success transparant disabled">Verifikasi</span>
                @else
                    <a href="{{ route('dashboard.ml.verifikasi.berhasil', ['mobile_legend' => $mobileLegend]) }}"><span class="status success">Verifikasi</span></a>
                @endif
                <a href="{{ route('dashboard.ml.verifikasi.tolak', ['mobile_legend' => $mobileLegend]) }}"><span class="status destroy">Tolak</span></a>
            @endif

        </td>
      </tr>
    </table>
  </div>
 </div>


  <!-- Modal -->
  <div class="modal fade" id="kartuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog xl">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

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
          <img src="{{asset("img/$mobileLegend->bukti_pembayaran")}}" alt="">
        </div>
      </div>
    </div>
  </div>
 </main>

@endsection

