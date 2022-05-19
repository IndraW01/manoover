@extends('layouts.dashboardAdmin', ['title' => 'Manoover Ticket All'])

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
        <a href="#">Ticket All</a>
      </li>
    </ul>
  </div>
</div>


<div class="tittle_Competition">Ticket All</div>

<ul class="box-info">
    <li>
      <a class="flex" href="{{ route('dashboard.ticket') }}">
        <i class="bx bxs-group"></i>
        <span class="text">
          <h3>{{ $closings->count() }}</h3>
          <p>Pendaftar</p>
        </span>
      </a>
    </li>

   <li>
    <a class="flex" href="{{ route('dashboard.ticket', ['status' => 'belum']) }}">
     <i class="bx bxs-group"></i>
     <span class="text">
       <h3>{{ $closings->where('status', 'belum')->count() }}</h3>
       <p> Belum Verifikasi</p>
     </span>
    </a>
   </li>

   <li>
    <a class="flex" href="{{ route('dashboard.ticket', ['status' => 'sudah']) }}">
      <i class="bx  bxs-calendar-check"></i>
      <span class="text">
        <h3>{{ $closings->where('status', 'sudah')->count() }}</h3>
        <p>Telah Verifikasi</p>
      </span>
    </a>
   </li>

</ul>

<div class="table-data">
 <div class="order">
   <div class="head">
     <h3>Ticket All</h3>
     <i class="bx bx-filter"></i>
   </div>
   <table>
     <thead>
       <tr>
        <th>No</th>
        <th>User</th>
        <th>Email</th>
        <th>ID Invoice</th>
        <th>Nama Pembeli</th>
       </tr>
     </thead>
     <tbody>
        @foreach ($tickets as $ticket)
            <tr>
              <td style="padding-right: 10px">{{ $loop->iteration }}</td>
              <td>
                  <img src="{{ asset('img/profile.png') }}" />
                  <p>{{ $ticket->nama }}</p>
              </td>
              <td style="padding: 0 10px;">{{ $ticket->email }}</td>
              <td style="padding: 0 10px;">{{ $ticket->kode_unik }}</td>
              <td>{{ $ticket->user->name }}</td>
            </tr>
        @endforeach
     </tbody>
   </table>
 </div>
</div>

</main>

@endsection

