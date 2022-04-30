@extends('layouts.dashboardAdmin', ['title' => 'Manoover Band Audition | Detail'])

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
          <a href="#">Band Auddition</a>
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
          <td class="answer">{{ $band->user->name }} </td>
        </tr>
        <tr>
          <td>
            Profesi
          </td>
          <td>:</td>
          <td class="answer">{{ $band->nama_band }} </td>
        </tr>
        <tr>
          <td>
            ID Line
          </td>
          <td>:</td>
          <td class="answer">{{ $band->id_line }}</td>
        </tr>
        <tr>
          <td>
            No Whatsapp
          </td>
          <td>:</td>
          <td class="answer">{{ $band->whatsapp }}</td>
        </tr>

        <tr>
         <td>
           Bukti Pembayaran
         </td>
         <td>:</td>
         <td>
            @if (!$band->bukti_pembayaran)
            <small class="notifBukti">Bukti Pembayaran belum di upload</small>
            @else
                <span data-bs-toggle="modal" data-bs-target="#exampleModal" class="status completed">Lihat</span>
                <span class="status pending"><a href="{{ route('dashboard.band.download.bukti', ['band' => $band]) }}" class="text-white">Download</a></span>
            @endif
         </td>
       </tr>
       <tr>
        <td>
          Verifikasi
        </td>
        <td>:</td>
        <td>
            @if (($band->status == 'sudah') || ($band->status == 'tolak'))
              <span class="status success transparant disabled">Verifikasi</span>
              <span class="status destroy transparant disabled">Tolak</span>
            @else
                @if (!$band->bukti_pembayaran || Carbon\Carbon::now() > $band->created_at->addDay())
                <span class="status success transparant success">Verifikasi</span>
                @else
                    <a href="{{ route('dashboard.band.verifikasi.berhasil', ['band' => $band]) }}" ><span class="status success">Verifikasi</span></a>
                @endif
                <a href="{{ route('dashboard.band.verifikasi.tolak', ['band' => $band]) }}"><span class="status destroy">Tolak</span></a>
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
          <img src="{{asset("img/$band->bukti_pembayaran")}}" alt="">
        </div>
      </div>
    </div>
  </div>
 </main>

@endsection

