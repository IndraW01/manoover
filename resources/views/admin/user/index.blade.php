@extends('layouts.dashboardAdmin', ['title' => 'Manoover User'])

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
        <a href="#">User</a>
      </li>
      <li><i class="bx bx-chevron-right"></i></li>
      <li>
        <a class="active" href="#">Pendaftar</a>
      </li>
    </ul>
  </div>
</div>


<div class="tittle_Competition">User</div>
<ul class="box-info">
  <li>
    <a class="flex" href="{{ route('dashboard.pubg.index') }}">
      <i class="bx bxs-group"></i>
      <span class="text">
        <h3>{{ $users->count() }}</h3>
        <p>Pendaftar</p>
      </span>
    </a>
  </li>

 <li>
  <a class="flex" href="{{ route('dashboard.pubg.index', ['status' => 'belum']) }}">
   <i class="bx bxs-group"></i>
   <span class="text">
     <h3>{{ $users->whereNull('email_verified_at')->count() }}</h3>
     <p> Belum Verifikasi</p>
   </span>
  </a>
 </li>

 <li>
  <a class="flex" href="{{ route('dashboard.pubg.index', ['status' => 'sudah']) }}">
    <i class="bx  bxs-calendar-check"></i>
    <span class="text">
        <h3>{{ $users->whereNotNull('email_verified_at')->count() }}</h3>
      <p>Telah Verifikasi</p>
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
         <th>Email</th>
         <th>No HP</th>
       </tr>
     </thead>
     <tbody>
        @foreach ($users as $user)
            <tr>
                <td>
                    <img src="{{ asset('img/profile.png') }}" />
                    <p>{{ $user->name }}</p>
                </td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->no_hp ?? 'N/A' }}</td>
            </tr>
        @endforeach
     </tbody>
    </table>
    <div class="mt-3">
        {{ $users->links() }}
    </div>
 </div>
</div>

</main>




@endsection

