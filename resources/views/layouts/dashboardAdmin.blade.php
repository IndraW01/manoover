<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('dist/admin/style.css') }}" />

    @yield('extra-header')

    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="shortcut icon" href="{{asset('logo.svg')}}">

  </head>
  <body>
    <!-- SIDEBAR -->
    <section id="sidebar">
      <a href="{{ route('admin.dashboard') }}" class="brand">
        <div class="logo">
         <img src="{{ asset('logo.png') }}" alt="" />
         <div class="text">MANOOVER</div>
        </div>
      </a>
      <ul class="side-menu top">
        <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
          <a href="{{ route('admin.dashboard') }}">
            <i class="bx bxs-dashboard"></i>
            <span class="text">Home</span>
          </a>
        </li>
      </ul>

      <ul class="side-menu top">
       <div class="tittle">Management User</div>
        <li class="{{ request()->routeIs('dashboard.user') ? 'active' : '' }}">
          <a href="{{ route('dashboard.user') }}">
            <i class="bx bxs-game"></i>
            <span class="text">User</span>
          </a>
        </li>

       <div class="tittle">Management Competition</div>
        <li class="{{ request()->routeIs('dashboard.pubg.*') ? 'active' : '' }}">
          <a href="{{ route('dashboard.pubg.index') }}">
            <i class="bx bxs-game"></i>
            <span class="text">PUBG</span>
          </a>
        </li>
        <li class="{{ request()->routeIs('dashboard.ml.*') ? 'active' : '' }}" >
          <a href="{{ route('dashboard.ml.index') }}">
            <i class="bx bxs-game"></i>
            <span class="text">ML</span>
          </a>
        </li>
        <li class="{{ request()->routeIs('dashboard.valorant.*') ? 'active' : '' }}">
          <a href="{{ route('dashboard.valorant.index') }}">
            <i class="bx bxs-game"></i>
            <span class="text">Valorant</span>
          </a>
        </li>
        <li class="{{ request()->routeIs('dashboard.futsal.*') ? 'active' : '' }}">
          <a href="{{ route('dashboard.futsal.index') }}">
            <i class="bx bxs-game"></i>
            <span class="text">Futsal</span>
          </a>
        </li>
        <li class="{{ request()->routeIs('dashboard.band.*') ? 'active' : '' }}">
          <a href="{{ route('dashboard.band.index') }}">
            <i class="bx bxs-game"></i>
            <span class="text">Band</span>
          </a>
        </li>
        <div class="tittle">Management Events</div>

        <li class="{{ request()->routeIs('dashboard.closing.*') ? 'active' : '' }}">
         <a href="{{ route('dashboard.closing.index') }}">
           <i class="bx bxs-shopping-bag-alt"></i>
           <span class="text">Closing Ceremnoy</span>
         </a>
       </li>
        <li class="{{ request()->routeIs('dashboard.ticketAll.*') ? 'active' : '' }}">
         <a href="/admin/ticket-all">
           <i class="bx bxs-shopping-bag-alt"></i>
           <span class="text">Ticket All</span>
         </a>
       </li>
    </section>



    <section id="content">
      <nav>
        <i class="bx bx-menu"></i>
        <form action="#">
          <div class="form-input">
          </div>
        </form>
        <a href="#" class="notification" id="notif">
          <i class="bx bxs-bell"></i>
          <span class="num">8</span>
        </a>
        <a href="#" class="profile" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="{{ asset('img/profile.png') }}"  />
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right: 0; left: auto;">
            <li>
                <a href="/" class="dropdown-item">Beranda</a>
            </li>
            <li>
                <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
                <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
        </a>
      </nav>

      <div class="info" id="info">
       <div class="wrap">
        <img src="{{ asset('default-user.png') }}" alt="" />
        <div class="content">
          <p class="nama">Muhamad Azroi</p>
          <p class="text">Melakukan pendaftaran PUBG</p>
        </div>
       </div>
       <div class="wrap">
        <img src="{{ asset('default-user.png') }}" alt="" />
        <div class="content">
          <p class="nama">Muhamad Azroi</p>
          <p class="text">Melakukan pendaftaran PUBG</p>
        </div>
       </div>
       <div class="wrap">
        <img src="{{ asset('default-user.png') }}" alt="" />
        <div class="content">
          <p class="nama">Muhamad Azroi</p>
          <p class="text">Melakukan pendaftaran PUBG</p>
        </div>
       </div>
       <div class="wrap">
        <img src="{{ asset('default-user.png') }}" alt="" />
        <div class="content">
          <p class="nama">Muhamad Azroi</p>
          <p class="text">Melakukan pendaftaran PUBG</p>
        </div>
       </div>
      </div>

      @yield('content')

    </section>

    @include('vendor.sweetalert.alert')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{ asset('dist/admin/script.js') }}"></script>

    @yield('extra-footer')

  </body>
</html>
