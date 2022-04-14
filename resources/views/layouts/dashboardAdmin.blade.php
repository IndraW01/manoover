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
       <div class="tittle">Competition</div>
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
        <div class="tittle">Events</div>

        <li>
         <a href="#">
           <i class="bx bxs-shopping-bag-alt"></i>
           <span class="text">Closing</span>
         </a>
       </li>
      <ul class="side-menu">

        <li>
          <a href="#" class="logout">
            <i class="bx bxs-log-out-circle"></i>
            <span class="text">Logout</span>
          </a>
        </li>
      </ul>
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
        <a href="#" class="profile">
          <img src="{{ asset('img/profile.png') }}" />
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{ asset('dist/admin/script.js') }}"></script>

    @yield('extra-footer')

    @include('sweetalert::alert')
  </body>
</html>
