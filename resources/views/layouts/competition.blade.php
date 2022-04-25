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
    <link rel="stylesheet" href="{{ asset('dist/landingPage/style.css') }}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Manoover</title>
  </head>
  <body>
    <div class="wrap">
      <div class="light d-none"></div>
      <section class="one" id="one">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <button
              class="navbar-toggler bg-light"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mt-2 mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#one"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#four"
                    >Competition</a
                  >
                </li>

              </ul>
                <div class="d-flex user-logged nav-item dropdown no-arrow">
                    <a href="#" class="text-white text-decoration-none" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Halo, {{ auth()->user()->name }}
                        <img src="{{ 'dist/landingPage/image/arrowDown.svg'}}" style="right: 13px; padding-left:7px;">
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right: 0; left: auto;">
                            <li>
                                <a href="/dashboard-admin" class="dropdown-item">My Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
                                <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
          </div>
        </nav>

        <div class="content">
          <img src="{{ asset('dist/landingPage/image/logo.svg') }}" alt="" />
          <p>Welcome to</p>
          <h2>Manoover Competition</h2>
          <a href="#four" class="exploreCompetition">Explore Manoover Compeition</a>
        </div>
        <img src="{{ asset('dist/landingPage/image/OmbakAtas.svg') }}" class="OmbakAtas" alt="">
      </section>

      <section class="four" id="four">
        <img src="{{ asset('dist/landingPage/image/OmbakBawah.svg') }}" class="OmbakBawah" alt="">
        <h2>Competition</h2>
        <div class="row">
         <div class="col-md-6">
          <div class="wrapEvent" data-aos="fade-up">
            <img src="{{ asset('dist/landingPage/image/pubgCompetition.svg') }}" alt="" />
            <div id="demoCompetition" class="content-wrapEvent">
              <p class="contentCompetition1 tittleCompetition d-none">PUBG Mobile</p>
              <a href="/competition/pubg" class="contentCompetition2 d-none"><button class="btnCompetition">Register Now</button></a>
            </div>
          </div>
         </div>
         <div class="col-md-6">
          <div class="wrapEvent" data-aos="fade-up">
            <img src="{{ asset('dist/landingPage/image/mlCompetition.svg') }}" alt="" />
            <div id="demoCompetition2" class="content-wrapEvent2">
              <p class="contentCompetition3 tittleCompetition d-none">Mobile Legends : Bang Bang</p>
              <a href="/competition/ml" class="contentCompetition4 d-none"><button class="btnCompetition">Register Now</button></a>
            </div>
          </div>
         </div>
        </div>
        <div class="row">
         <div class="col-md-6">
          <div class="wrapEvent" data-aos="fade-up">
            <img src="{{ asset('dist/landingPage/image/valorantCompetition.svg') }}" alt="" />
            <div id="demoCompetition3" class="content-wrapEvent3">
              <p class="contentCompetition5 tittleCompetition d-none">Valorant</p>
              <a href="/competition/valorant" class="contentCompetition6 d-none"><button class="btnCompetition">Register Now</button></a>
            </div>
          </div>
         </div>
         <div class="col-md-6">
          <div class="wrapEvent" data-aos="fade-up">
            <img src="{{ asset('dist/landingPage/image/futsalCompetition.svg') }}" alt="" />
            <div id="demoCompetition4" class="content-wrapEvent4">
              <p class="contentCompetition7 tittleCompetition d-none">Futsal</p>
              <a href="/competition/futsal" class="contentCompetition8 d-none"><button class="btnCompetition">Register Now</button></a>
            </div>
          </div>
         </div>

         <div class="row">
          <div class="col-md-12">
            <div class="wrapEvent" data-aos="fade-up">
              <img class="imglarge" src="{{ asset('dist/landingPage/image/band.svg') }}" alt="" />
              <img class="imgsmall" src="{{ asset('dist/landingPage/image/band2.svg') }}" alt="" />
              <div id="demoCompetition5" class="content-wrapEvent5">
                <p class="contentCompetition9 tittleCompetition d-none">Band Audition</p>
                <a href="/competition/band" class="contentCompetition10 d-none"><button class="btnCompetition">Register Now</button></a>
              </div>
            </div>
          </div>
         </div>

        </div>
        <div class="space"></div>
      </section>




      <section class="footer">
       <img class="kiri" src="{{ asset('dist/landingPage/image/footerKiri.svg') }}" alt="">
       <img class="kanan" src="{{ asset('dist/landingPage/image/footerKanan.svg') }}" alt="">
       <div class="row">
        <div class="col-md-4 kolom">
         <img class="logo" src="{{ asset('dist/landingPage/image/logo.svg') }}" alt="">
         <div class="name">The 3rd Manoover</div>
         <div class="harmony">Harmony Of The Sea</div>
        </div>
        <div class="col-md-4 kolom">
         <div class="tittle">Menu</div>
         <a href="#one">Home</a>
         <a href="#two">Competition</a>
        </div>
        <div class="col-md-4 kolom ">
         <div class="tittle">Contact Us</div>
         <li>
          <img src="{{ asset('dist/landingPage/image/instagram.svg') }}" alt="">
          <p>@manoover.undip</p>
         </li>
         <li>
          <img src="{{ asset('dist/landingPage/image/Google.svg') }}" alt="">
          <p>manooverundip@gmail.com</p>
         </li>
         <li>
          <img src="{{ asset('dist/landingPage/image/WhatsApp.svg') }}" alt="">
          <p>081297317866 : Ken Arsyi N.R.K.</p>
         </li>
         <li>
          <img src="{{ asset('dist/landingPage/image/WhatsApp.svg') }}" alt="">
          <p>08112728570   : Amanda Aprilya Liza</p>
         </li>
        </div>
        <br><br><br>
      </section>
    </div>




    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="{{ asset('dist/landingPage/script.js') }}"></script>
    <script src="{{ asset('dist/landingPage/script3.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>

    AOS.init();



    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 680) {
                $(".light").removeClass("d-none");
            } else {
                $(".light").addClass("d-none");
            }
        });
    });

    </script>

  </body>

</html>
