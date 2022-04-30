@extends('layouts.dashboardAdmin', ['title' => 'Manoover Closing Ceremony | Detail'])

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
          <td class="answer">{{ $closing->user->name }} </td>
        </tr>
        <tr>
          <td>
            Profesi
          </td>
          <td>:</td>
          <td class="answer">{{ $closing->profesi }} </td>
        </tr>
        <tr>
          <td>
            No HP
          </td>
          <td>:</td>
          <td class="answer">{{ $closing->no_hp }}</td>
        </tr>

        <tr>
         <td>
           Foto KTP / Kartu Pelajar
         </td>
         <td>:</td>
         <td>
            <span data-bs-toggle="modal" data-bs-target="#kartuModal" class="status completed">Lihat</span>
           <span class="status pending"><a href="{{ route('dashboard.closing.download.identitas', ['closing' => $closing ]) }}" class="text-white">Download</a></span>
         </td>
       </tr>
        <tr>
         <td>
           Bukti Pembayaran
         </td>
         <td>:</td>
         <td>
            @if (!$closing->bukti_pembayaran)
            <small class="notifBukti">Bukti Pembayaran belum di upload</small>
            @else
                <span data-bs-toggle="modal" data-bs-target="#exampleModal" class="status completed">Lihat</span>
                <span class="status pending"><a href="{{ route('dashboard.closing.download.bukti', ['closing' => $closing]) }}" class="text-white">Download</a></span>
            @endif
         </td>
       </tr>
       <tr>
        <td>
          Verifikasi
        </td>
        <td>:</td>
        <td>
            @if (($closing->status == 'sudah') || ($closing->status == 'tolak'))
              <span class="status success transparant disabled">Verifikasi</span>
              <span class="status destroy transparant disabled">Tolak</span>
            @else
                @if (!$closing->bukti_pembayaran || Carbon\Carbon::now() > $closing->created_at->addDay())
                <span class="status success transparant success">Verifikasi</span>
                @else
                    <a href="{{ route('dashboard.closing.verifikasi.berhasil', ['closing' => $closing]) }}" ><span class="status success">Verifikasi</span></a>
                @endif
                <a href="{{ route('dashboard.closing.verifikasi.tolak', ['closing' => $closing]) }}"><span class="status destroy">Tolak</span></a>
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
            <embed type="application/pdf" src="{{ asset("berkas/$closing->kartu_identitas") }}" width="800" height="600"></embed>
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
          <img src="{{asset("img/$closing->bukti_pembayaran")}}" alt="">
        </div>
      </div>
    </div>
  </div>
 </main>

@endsection

