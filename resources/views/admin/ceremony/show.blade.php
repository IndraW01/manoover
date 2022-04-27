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
          <a href="#">Closing Ceremony</a>
        </li>
        <li><i class="bx bx-chevron-right"></i></li>
        <li>
          <a class="active" href="#">Pendaftar</a>
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
            Nama
          </td>
          <td>:</td>
          <td class="answer">sd </td>
        </tr>
        <tr>
          <td>
            Profesi
          </td>
          <td>:</td>
          <td class="answer">v </td>
        </tr>
        <tr>
          <td>
            No HP
          </td>
          <td>:</td>
          <td class="answer">rdrvrd</td>
        </tr>
        
        <tr>
         <td>
           Foto KTP / Kartu Pelajar
         </td>
         <td>:</td>
         <td>
           <span data-bs-toggle="modal" data-bs-target="#KartuModal" class="status completed">Lihat</span>
           <span class="status pending"><a href="{{ route('dashboard.valorant.download.identitas', ['valorant' ]) }}" class="text-white">Download</a></span>
         </td>
       </tr>
        <tr>
         <td>
           Bukti Pembayaran
         </td>
         <td>:</td>
         <td>
            @if (!$valorant->bukti_pembayaran)
            <small class="notifBukti">Bukti Pembayaran belum di upload</small>
            @else
                <span data-bs-toggle="modal" data-bs-target="#exampleModal" class="status completed">Lihat</span>
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
              <span class="status success transparant disabled">Verifikasi</span>
              <span class="status destroy transparant disabled">Tolak</span>
            @else
                @if (!$valorant->bukti_pembayaran)
                <span class="status success transparant success">Verifikasi</span>
                @else
                    <a href="{{ route('dashboard.valorant.verifikasi.berhasil', ['valorant' => $valorant]) }}" ><span class="status success">Verifikasi</span></a>
                @endif
                <a href="{{ route('dashboard.valorant.verifikasi.tolak', ['valorant' => $valorant]) }}"><span class="status destroy">Tolak</span></a>
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
          {{-- <img src="{{asset("img/$futsal->bukti_pembayaran")}}" alt=""> --}}
        </div>
      </div>
    </div>
  </div>
 </main>

@endsection

