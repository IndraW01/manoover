{{-- @dd($userClosings) --}}
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
      <h3>Detail Tiket Pendaftar</h3>
      <i class="bx bx-filter"></i>
    </div>
    @foreach ($userClosings as $userClosing)
    <div class="head">
        <h5>Tiket {{ $loop->iteration }}</h5>
      </div>
    <table>
        <tr>
          <td>
            Nama
          </td>
          <td>:</td>
          <td class="answer">{{ $userClosing->nama }} </td>
        </tr>
        <tr>
          <td>
            Email
          </td>
          <td>:</td>
          <td class="answer">{{ $userClosing->email }} </td>
        </tr>
        <tr>
          <td>
            Tipe
          </td>
          <td>:</td>
          <td class="answer">{{ $userClosing->tipe == 'early' ? 'Eraly Bird' : 'Presale 1' }}</td>
        </tr>
        <tr>
          <td>
            Kode Unik
          </td>
          <td>:</td>
          <td class="answer">{{ $userClosing->kode_unik }}</td>
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
               @if (!$userClosings[0]->bukti_pembayaran)
               <small class="notifBukti">Bukti Pembayaran belum di upload</small>
               @else
                   <span data-bs-toggle="modal" data-bs-target="#exampleModal" class="status completed">Lihat</span>
                   <span class="status pending"><a href="{{ route('dashboard.closing.download.bukti', ['closing' => $userClosings[0]]) }}" class="text-white">Download</a></span>
               @endif
            </td>
        </tr>
        <tr>
            <td>
              Verifikasi
            </td>
            <td>:</td>
            <td>
                @if (($userClosings[0]->status == 'sudah') || ($userClosings[0]->status == 'tolak'))
                  <span class="status success transparant disabled">Verifikasi</span>
                  <span class="status destroy transparant disabled">Tolak</span>
                @else
                    {{-- @if (!$userClosings[0]->bukti_pembayaran || Carbon\Carbon::now() > $userClosings[0]->created_at->addDay()) --}}
                    @if (!$userClosings[0]->bukti_pembayaran)
                    <span class="status success transparant success">Verifikasi</span>
                    @else
                        <a href="{{ route('dashboard.closing.verifikasi.berhasil', ['closing' => $userClosings[0]]) }}" ><span class="status success">Verifikasi</span></a>
                    @endif
                    <a href="{{ route('dashboard.closing.verifikasi.tolak', ['closing' => $userClosings[0]]) }}"><span class="status destroy">Tolak</span></a>
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
            {{-- <embed type="application/pdf" src="{{ asset("berkas/$closing->kartu_identitas") }}" width="800" height="600"></embed> --}}
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
          <img src="{{asset("img/" . $userClosings[0]->bukti_pembayaran)}}" alt="">
        </div>
      </div>
    </div>
  </div>
 </main>

@endsection

