<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('dist/user/styleDash.css') }}" />
    <link rel="shortcut icon" href="{{asset('logo.svg')}}">
    <title>Dashboard</title>
  </head>
  <body>
   <div class="wrapForm">
    <h2 class="tittleUser">Tiket Saya</h2>

    <br><br>

    <div class="wrapTicket" >
     <div class="left"><img src="dist/user/image/ticket.svg" alt=""></div>
     <div class="right">
     <div>
      <div class="topChild">
       <p class="name">Presale 1</p>
      </div>

      <div class="line"></div>

      <div class="bottomChild">
       <div class="leftChild" >
        {{ $myTickets->count() }} Tiket
       </div>
      </div>
     </div>
    </div>
   </div>

   <h2 class="tittleDashUser">Data Pembeli Tiket</h2>

   <div style="overflow-x:auto;">
    <table>
      <tr>
       <th>Nama</th>
       <th>Email</th>
       <th>No HP</th>
       <th>No. Identitas</th>
       <th>Domisili</th>
      </tr>
      <tr>
       <td>{{ auth()->user()->name }}</td>
       <td>{{ auth()->user()->email }}</td>
       <td>{{ $myData->no_hp }}</td>
       <td>{{ $myData->no_identitas }}</td>
       <td>{{ $myData->domisili }}</td>
      </tr>
     </table>
   </div>



   <h2 class="tittleDashUser">Tiket</h2>

   <div class="ticketUser">

       @foreach ($myTickets as $myTicket)
        {{-- STAR LOOPING --}}
        <li>
        <div class="wrapDetailTicket">
        <img src="{{asset("dist/user/image/logoDetailTicket.svg")}}" alt="">
        <div class="one">
            <p class="tittle">NAME</p>
            <p class="content">{{ $myTicket->nama }}</p>
        </div>
        <br>
        <div class="two">
            <div>
            <p class="tittle">DATE</p>
            <p class="content">30 July 2022</p>
            </div>
            <div class="right">
            <p class="tittle">ID CODE</p>
            <p class="content">{{ $myTicket->kode_unik }}</p>
            </div>
        </div>
        <br>
        <div class="one">
            <p class="tittle">VENUE</p>
            <p class="content">UTC CONVETION HALL SEMARANG</p>
        </div>
        </div>
        </li>

        {{-- END LOOPING --}}

        @endforeach
    </div>
  </div>



    <div class="wrapAnimasi">
      <img class="ikan" src="ikan.svg" alt="" />
    </div>



    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset("js/time/jquery.countdown.js")}}"></script>
    <script src="{{asset("js/time/script.js")}}"></script>
    <script src="{{asset("dist/user/script.js")}}"></script>


  </body>
</html>
