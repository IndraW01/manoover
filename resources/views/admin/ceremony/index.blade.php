@extends('layouts.dashboardAdmin', ['title' => 'Manoover Closing Ceremony'])

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


<div class="tittle_Competition">Closing Ceremony</div>
{{-- <ul class="box-info">
  <li>
    <a class="flex" href="{{ route('dashboard.closing.index') }}">
      <i class="bx bxs-group"></i>
      <span class="text">
        <h3>{{ $userClosings->count() }}</h3>
        <p>Pendaftar</p>
      </span>
    </a>
  </li>

 <li>
  <a class="flex" href="{{ route('dashboard.closing.index', ['status' => 'belum']) }}">
   <i class="bx bxs-group"></i>
   <span class="text">
     <h3>{{ $userClosings->where('status', 'belum')->count() }}</h3>
     <p> Belum Verifikasi</p>
   </span>
  </a>
 </li>

 <li>
  <a class="flex" href="{{ route('dashboard.closing.index', ['status' => 'sudah']) }}">
    <i class="bx  bxs-calendar-check"></i>
    <span class="text">
      <h3>{{ $userClosings->where('status', 'sudah')->count() }}</h3>
      <p>Telah Verifikasi</p>
    </span>
  </a>
 </li>

 <li>
  <a class="flex" href="{{ route('dashboard.closing.index', ['status' => 'tolak']) }}">
    <i class="bx bxs-error"></i>
    <span class="text">
      <h3>{{ $userClosings->where('status', 'tolak')->count() }}</h3>
      <p>Di Tolak</p>
    </span>
  </a>
 </li>
</ul> --}}



<div class="table-data">
 <div class="order">
   <div class="head">
     <h3>Pendaftar</h3>
     <form action="http://google.com">
      <input id="myInputSearch" type="text" class="searchInput">

      <button type="submit" style="outline: none; border: none"><i class="bx bx-search"></i></button>
     </form>
     <i class="bx bx-filter"></i>
   </div>
   <table>
<<<<<<< HEAD
    <thead>
      <tr>
        <th>No</th>
        <th>User</th>
        <th>Email</th>
        <th>Jumlah Tiket (Dibeli)</th>
        <th style="padding: 0 10px;">Detail Data Tiket</th>
      </tr>
    </thead>
    <tbody>
       @foreach ($userClosings as $userClosing)
           <tr>
               <td style="padding-right: 10px">{{ $loop->iteration }}</td>
               <td>
                   <img src="{{ asset('img/profile.png') }}" />
                   <p>{{ $userClosing->name }}</p>
               </td>
               <td style="padding: 0 10px;">{{ $userClosing->email }}</td>
               <td>{{ $userClosing->closings->count() }}</td>
               <td class="action">
                   <a href="{{ route('dashboard.closing.show', ['user' => $userClosing]) }}"><span class="status completed">Detail</span></a>
               </td>
           </tr>
       @endforeach
    </tbody>
  </table>
=======
     <thead>
       <tr>
         <th>No</th>
         <th>User</th>
         <th>Email</th>
         <th style="padding: 0 10px;">Detail Data Tiket</th>
         <th>Jumlah Tiket (Dibeli)</th>
       </tr>
     </thead>
     <tbody>
        @foreach ($userClosings as $userClosing)
            <tr>
                <td style="padding-right: 10px">{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ asset('img/profile.png') }}" />
                    <p>{{ $userClosing->name }}</p>
                </td>
                <td style="padding: 0 10px;">{{ $userClosing->email }}</td>
                <td>{{ $userClosing->closings->count() }}</td>
                <td class="action">
                    <a href="{{ route('dashboard.closing.show', ['user' => $userClosing]) }}"><span class="status completed">Detail</span></a>
                </td>
            </tr>
        @endforeach
     </tbody>
   </table>
>>>>>>> 3007410f27f977f15339948329bebc86c761ef0c
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

