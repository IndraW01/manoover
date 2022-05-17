{{-- @dd($userClosingWaitings) --}}
@extends('layouts.dashboardAdmin', ['title' => 'Manoover Closing Ceremony Audition | Detail'])

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
        <h3>Detail Data Pembeli</h3>
        <i class="bx bx-filter"></i>
      </div>
      <table>
          <tr>
            <td>
              Nama
            </td>
            <td>:</td>
            <td class="answer">{{ $user->name }} </td>
          </tr>
          <tr>
            <td>
              Email
            </td>
            <td>:</td>
            <td class="answer">{{ $user->email }} </td>
          </tr>
          <tr>
            <td>
              No HP
            </td>
            <td>:</td>
            <td class="answer">{{ $user->dataPendaftaran->no_hp }}</td>
          </tr>
          <tr>
            <td>
              No Identitas
            </td>
            <td>:</td>
            <td class="answer">{{ $user->dataPendaftaran->no_identitas }}</td>
          </tr>
          <tr>
            <td>
              Kota Domisili
            </td>
            <td>:</td>
            <td class="answer">{{ $user->dataPendaftaran->domisili }}</td>
          </tr>
      </table>
    </div>
   </div>

@if ($userClosingSuccess->count() > 0)
    <div class="table-data">
        <div class="order">
          <div class="head">
            <h3>Detail Pendaftar Success</h3>
            <i class="bx bx-filter"></i>
          </div>
          @foreach ($userClosingSuccess as $userClosingSucces)
          <div class="head">
              <h5>Tiket</h5>
          </div>
          <table>
              <tr>
                <td>
                  Nama
                </td>
                <td>:</td>
                <td class="answer">{{ $userClosingSucces->nama }} </td>
              </tr>
              <tr>
                <td>
                  Email
                </td>
                <td>:</td>
                <td class="answer">{{ $userClosingSucces->email }} </td>
              </tr>
              <tr>
                <td>
                  ID Invoice
                </td>
                <td>:</td>
                <td class="answer">{{ $userClosingSucces->kode_unik }}</td>
              </tr>
          </table>
          @endforeach
        </div>
       </div>
@endif

@if ($userClosingWaitings->count() > 0)
<div class="table-data">
 <div class="order">
   <div class="head">
     <h3>Detail Pendaftar Waiting</h3>
     <i class="bx bx-filter"></i>
   </div>
   @foreach ($userClosingWaitings as $userClosingWaiting)
   <div class="head">
       <h5>Tiket</h5>
   </div>
   <table>
       <tr>
         <td>
           Nama
         </td>
         <td>:</td>
         <td class="answer">{{ $userClosingWaiting->nama }} </td>
       </tr>
       <tr>
         <td>
           Email
         </td>
         <td>:</td>
         <td class="answer">{{ $userClosingWaiting->email }} </td>
       </tr>
       <tr>
         <td>
           ID Invoice
         </td>
         <td>:</td>
         <td class="answer">{{ $userClosingWaiting->kode_unik }}</td>
       </tr>
   </table>
   @endforeach

   <table>
       <tr>
           <td>
             Bukti Pembayaran
           </td>
           <td>:</td>
           <td>
              @if (!$userClosingWaitings[$userClosingWaitings->count() - 1]->bukti_pembayaran)
              <small class="notifBukti">Bukti Pembayaran belum di upload</small>
              @else
                  <span data-bs-toggle="modal" data-bs-target="#exampleModal" class="status completed">Lihat</span>
                  <span class="status pending"><a href="{{ route('dashboard.closing.download.bukti', ['closing' => $userClosingWaitings[$userClosingWaitings->count() - 1]]) }}" class="text-white">Download</a></span>
              @endif
           </td>
         </tr>
         <tr>
          <td>
            Verifikasi
          </td>
          <td>:</td>
          <td>
              @if (($userClosingWaitings[$userClosingWaitings->count() - 1]->status == 'sudah') || ($userClosingWaitings[$userClosingWaitings->count() - 1]->status == 'tolak'))
                <span class="status success transparant disabled">Verifikasi</span>
                <span class="status destroy transparant disabled">Tolak</span>
              @else
                  {{-- @if (!$userClosingWaitings[$userClosingWaitings->count() - 1]->bukti_pembayaran || Carbon\Carbon::now() > $userClosingWaitings[$userClosingWaitings->count() - 1]->created_at->addDay()) --}}
                  @if (!$userClosingWaitings[$userClosingWaitings->count() - 1]->bukti_pembayaran)
                  <span class="status success transparant success">Verifikasi</span>
                  @else
                      <a href="{{ route('dashboard.closing.verifikasi.berhasil', ['user' => $user]) }}" ><span class="status success">Verifikasi</span></a>
                  @endif
                  <a href="{{ route('dashboard.closing.verifikasi.tolak', ['user' => $user]) }}"><span class="status destroy">Tolak</span></a>
              @endif

          </td>
        </tr>
   </table>
 </div>
</div>

  <!-- Modal -->
  {{-- <div class="modal fade" id="kartuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog xl">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        </div>
      </div>
    </div>
  </div> --}}

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="{{asset("img/" . $userClosingWaitings[$userClosingWaitings->count() - 1]->bukti_pembayaran)}}" alt="">
        </div>
      </div>
    </div>
  </div>

  @endif
 </main>

@endsection

