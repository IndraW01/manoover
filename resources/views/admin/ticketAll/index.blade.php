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
        <a href="#">Ticket All</a>
      </li>
    </ul>
  </div>
</div>


<div class="tittle_Competition">Closing Ceremony</div>

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
       </tr>
     </thead>
     <tbody>
        {{-- @foreach ($userClosings as $userClosing) --}}
            <tr>
              <td style="padding-right: 10px">1</td>
              <td>
                  <img src="{{ asset('img/profile.png') }}" />
                  <p>jsjsj</p>
              </td>
              <td style="padding: 0 10px;">jdjdjdjdjdjdjj@sjsjs.s</td>
              <td>ksksksksk</td>
            </tr>
        {{-- @endforeach --}}
     </tbody>
   </table>
 </div>
</div>

</main>

@endsection

