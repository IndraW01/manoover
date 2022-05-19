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

      <div class="wrapTableAdmin">
        <div class="table">
          <div class="item">
            <div class="one">Nama</div>
            <div class="two"> : </div>
            <div class="tree">{{ $user->name }} </div>
          </div>
          <div class="item">
            <div class="one">Email</div>
            <div class="two"> : </div>
            <div class="tree">{{ $user->email }} </div>
          </div>
          <div class="item">
            <div class="one">No HP</div>
            <div class="two"> : </div>
            <div class="tree">{{ $user->dataPendaftaran->no_hp }} </div>
          </div>
          <div class="item">
            <div class="one">No Identitas</div>
            <div class="two"> : </div>
            <div class="tree">{{ $user->dataPendaftaran->no_identitas }} </div>
          </div>
          <div class="item">
            <div class="one">Kota Domisili</div>
            <div class="two"> : </div>
            <div class="tree">{{ $user->dataPendaftaran->domisili }} </div>
          </div>
          {{-- <div class="item">
            <div class="one">Identitas KTP/Kartu Pelajar</div>
            <div class="two"> : </div>
            <div class="tree">
              <div>
                <span data-bs-toggle="modal" data-bs-target="#kartuModal" class="status completed">Lihat</span>
              <span class="status pending"><a href="#" class="text-white">Download</a></span>
              </div>
            </div>
          </div> --}}
        </div>
      </div>

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
            <h2>Tiket</h2>
            <div class="item">
              <div class="one">Nama</div>
              <div class="two"> : </div>
              <div class="tree">{{ $userClosingWaiting->nama }} </div>
            </div>
            <div class="item">
              <div class="one">Email</div>
              <div class="two"> : </div>
              <div class="tree">{{ $userClosingWaiting->email }} </div>
            </div>
            <div class="item">
              <div class="one">ID Invoice</div>
              <div class="two"> : </div>
              <div class="tree">{{ $userClosingWaiting->kode_unik }} </div>
            </div>
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
<<<<<<< HEAD
  
   
   <div class="wrapTableAdmin">
    <div class="table">
      @foreach ($userClosingWaitings as $userClosingWaiting)
        <h2>Tiket</h2>
        <div class="item">
          <div class="one">Nama</div>
          <div class="two"> : </div>
          <div class="tree">{{ $userClosingWaiting->nama }} </div>
        </div>
        <div class="item">
          <div class="one">Email</div>
          <div class="two"> : </div>
          <div class="tree">{{ $userClosingWaiting->email }} </div>
        </div>
        <div class="item">
          <div class="one">ID Invoice</div>
          <div class="two"> : </div>
          <div class="tree">{{ $userClosingWaiting->kode_unik }} </div>
        </div>
      @endforeach
    </div>
  </div>

   

   <br><br>
   <div class="wrapTableAdmin">
    <div class="table">
      <div class="item">
        <div class="one">Waktu Pembayaran</div>
        <div class="two"> : </div>
        <div class="tree">Waktu Tersisa <b><span class="countdown" value="{{$userClosingWaiting->created_at->addHours(24)}}"></span></b></div>
      </div>
      <div class="item">
        <div class="one">Bukti Pembayaran</div>
        <div class="two"> : </div>
        <div class="tree">
          @if (!$userClosingWaitings[$userClosingWaitings->count() - 1]->bukti_pembayaran)
=======
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

   {{-- @dd($userClosingWaiting) --}}
   <table>
       <tr>
           <td>
             Bukti Pembayaran
           </td>
           <td>:</td>
           <td>
              @if (!$userClosingWaitings[$userClosingWaitings->count() - 1]->bukti_pembayaran)
>>>>>>> 3007410f27f977f15339948329bebc86c761ef0c
              <small class="notifBukti">Bukti Pembayaran belum di upload</small>
              @else
                  <span data-bs-toggle="modal" data-bs-target="#exampleModal" class="status completed">Lihat</span>
                  <span class="status pending"><a href="{{ route('dashboard.closing.download.bukti', ['closing' => $userClosingWaitings[$userClosingWaitings->count() - 1]]) }}" class="text-white">Download</a></span>
            @endif
        </div>
      </div>
      <div class="item">
        <div class="one">Verifikasi</div>
        <div class="two"> : </div>
        <div class="tree">
          @if (($userClosingWaitings[$userClosingWaitings->count() - 1]->status == 'sudah') || ($userClosingWaitings[$userClosingWaitings->count() - 1]->status == 'tolak'))
            <span class="status success transparant disabled">Verifikasi</span>
            <span class="status destroy transparant disabled">Tolak</span>
          @else
              {{-- @if (!$userClosingWaitings[$userClosingWaitings->count() - 1]->bukti_pembayaran || Carbon\Carbon::now() > $userClosingWaitings[$userClosingWaitings->count() - 1]->created_at->addDay()) --}}
              @if (!$userClosingWaitings[$userClosingWaitings->count() - 1]->bukti_pembayaran)
              <span class="status success transparant">Verifikasi</span>
              @else
<<<<<<< HEAD
                  <a href="{{ route('dashboard.closing.verifikasi.berhasil', ['user' => $user]) }}" ><span class="status success">Verifikasi</span></a>
=======
                  {{-- @if (!$userClosingWaitings[$userClosingWaitings->count() - 1]->bukti_pembayaran || Carbon\Carbon::now() > $userClosingWaitings[$userClosingWaitings->count() - 1]->created_at->addDay()) --}}
                  @if (!$userClosingWaitings[$userClosingWaitings->count() - 1]->bukti_pembayaran || Carbon\Carbon::now() > $userClosingWaitings[$userClosingWaitings->count() - 1]->created_at->addDay())
                  <span class="status success transparant success">Verifikasi</span>
                  @else
                      <a href="{{ route('dashboard.closing.verifikasi.berhasil', ['user' => $user]) }}" ><span class="status success">Verifikasi</span></a>
                  @endif
                  <a href="{{ route('dashboard.closing.verifikasi.tolak', ['user' => $user]) }}"><span class="status destroy">Tolak</span></a>
>>>>>>> 3007410f27f977f15339948329bebc86c761ef0c
              @endif
          <a href="{{ route('dashboard.closing.verifikasi.tolak', ['user' => $user]) }}"><span class="status destroy">Tolak</span></a>
          @endif
        </div>
      </div>
    </div>
  </div>


   
 </div>
</div>


  <!-- Modal -->
  {{-- <div class="modal fade" id="kartuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <embed type="application/pdf" src="{{ asset("berkas/". $user->dataPendaftaran->kartu_identitas) }}" width="800" height="600"></embed>
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

