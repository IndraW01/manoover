@extends('layouts.dashboardAdmin', ['title' => 'Manoover Pubg Mobile'])

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
        <a href="#">Pubg Mobile</a>
      </li>
      <li><i class="bx bx-chevron-right"></i></li>
      <li>
        <a class="active" href="#">Pendaftar</a>
      </li>
    </ul>
  </div>
</div>


<div class="tittle_Competition">Pubg Mobile</div>
<ul class="box-info">
  <li>
    <a class="flex" href="{{ route('dashboard.pubg.index') }}">
      <i class="bx bxs-group"></i>
      <span class="text">
        <h3>{{ $pubgMobiles->count() }}</h3>
        <p>Pendaftar</p>
      </span>
    </a>
  </li>

 <li>
  <a class="flex" href="{{ route('dashboard.pubg.index', ['status' => 'belum']) }}">
   <i class="bx bxs-group"></i>
   <span class="text">
     <h3>{{ $pubgMobiles->where('status', 'belum')->count() }}</h3>
     <p> Belum Verifikasi</p>
   </span>
  </a>
 </li>

 <li>
  <a class="flex" href="{{ route('dashboard.pubg.index', ['status' => 'sudah']) }}">
    <i class="bx  bxs-calendar-check"></i>
    <span class="text">
      <h3>{{ $pubgMobiles->where('status', 'sudah')->count() }}</h3>
      <p>Telah Verifikasi</p>
    </span>
  </a>
 </li>

 <li>
  <a class="flex" href="{{ route('dashboard.pubg.index', ['status' => 'tolak']) }}">
    <i class="bx bxs-error"></i>
    <span class="text">
      <h3>{{ $pubgMobiles->where('status', 'tolak')->count() }}</h3>
      <p>Di Tolak</p>
    </span>
  </a>
 </li>
</ul>



<div class="table-data">
 <div class="order">
   <div class="head">
     <h3>Pendaftar</h3>
     <i class="bx bx-search"></i>
     <i class="bx bx-filter"></i>
   </div>
   <table>
     <thead>
       <tr>
         <th>User</th>
         <th>Nama Tim</th>
         <th>Date Order</th>
         <th>Status</th>
         <th>Action</th>
       </tr>
     </thead>
     <tbody>
        @foreach ($pubgMobiles as $pubgMobile)
            <tr>
                <td>
                    <img src="{{ asset('img/profile.png') }}" />
                    <p>{{ $pubgMobile->nama_ketua_tim }}</p>
                </td>
                <td>{{ $pubgMobile->nama_tim }}</td>
                <td>{{ $pubgMobile->created_at->isoFormat('DD-MM-YYYY') }}</td>
                <td>{{ $pubgMobile->status == 'tolak' ? 'Ditolak' : ($pubgMobile->status == 'sudah' ? 'Sudah Verifikasi' : 'Belum Verifikasi') }}</td>
                <td class="action">
                    <a href="{{ route('dashboard.pubg.show', ['pubg' => $pubgMobile]) }}"><span class="status completed">Detail</span></a>
                    @if ((Carbon\Carbon::now() > $pubgMobile->created_at->addDay()) && ($pubgMobile->status == 'belum'))
                        <form action="{{ route('dashboard.pubg.destroy', ['pubg' => $pubgMobile]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="status destroy border-0 btn-hapus" data-name="{{ $pubgMobile->nama_ketua_tim }}">Hapus</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
     </tbody>
   </table>
 </div>
</div>


<!-- Modal Hapus -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-body">
       <div class="alertHapus">
        <img src="{{ asset('dist/admin/iconHapus.svg') }}" alt="">
          <p>Apakah kamu yakin ingin menghapus ini ?</p>
        </div>
      </div>
      <div class="footer-modal">
        <span class="button status completed" data-bs-dismiss="modal" aria-label="Close">Batalkan</span>
        <span class="button status2 completed">Ya, Hapus</span>
      </div>
    </div>
  </div>
 </div> --}}
</main>


<script>
    let semuaTombol = document.querySelectorAll('.btn-hapus');

    semuaTombol.forEach(function(item) {
        item.addEventListener('click',konfirmasi);
    })

    function konfirmasi(event){
        let tombol = event.currentTarget;

        event.preventDefault();
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: 'Hapus data '+ tombol.getAttribute('data-name'),
            icon: 'warning',
            showCancelButton: true,
            cancelButtonColor: '#6c757d',
            confirmButtonColor: '#dc3545',
            confirmButtonText: 'Ya, hapus!',
            reverseButtons: true,
        }).then((result) => {
            if (result.value) {
                tombol.parentElement.submit();
            }
        })
    }
</script>

@endsection

