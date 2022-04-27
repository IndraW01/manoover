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
                  <a class="nav-link active" aria-current="page" href="#tree"
                    >About Us</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#four"
                    >Events</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#five"
                    >Timeline</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#six"
                    >Sponsor</a
                  >
                </li>
              </ul>
                @auth
                    <div class="d-flex user-logged nav-item dropdown no-arrow">
                          <a href="#" class="text-white text-decoration-none bold" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            Halo, {{ auth()->user()->name }}
                            <img src="{{ 'dist/landingPage/image/arrowDown.svg'}}" style="right: 13px; padding-left:7px;">
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right: 0; left: auto;">
                                <li>
                                  @if( auth()->user()->is_admin == 1)
                                    <a href="/dashboard-admin" class="dropdown-item">My Dashboard</a>
                                  @else
                                    <a href="/dashboard-user" class="dropdown-item">My Dashboard</a>
                                  @endif
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
                @else
                    <a href="{{ route('login') }}" class="login">Login</a>
                    <a href="{{ route('register') }}" class="register">Register</a>
                @endauth
            </div>
          </div>
        </nav>

        <div class="content">
          <img src="{{ asset('dist/landingPage/image/logo.svg') }}" alt="" />
          <p>Welcome to</p>
          <h2>The 3rd Manoover</h2>
          <a href="#two" class="explore">Explore Manoover</a>
        </div>
        <img src="{{ asset('dist/landingPage/image/OmbakAtas.svg') }}" class="OmbakAtas" alt="">
      </section>

      <section class="two" id="two">
        <img src="{{ asset('dist/landingPage/image/OmbakBawah.svg') }}" class="OmbakBawah" alt="">
        <h2>
          It’s Not Just A Festival, <br />
          It’s A Movement
        </h2>
        <div class="content">
          <div class="warp-image one">
            <div class="wrap" data-aos="zoom-in"><img src="{{ asset('dist/landingPage/image/foto1.svg') }}" alt=""></div>
          </div>
          <div class="warp-image two">
           <div class="wrap"data-aos="zoom-out-up" data-aos-delay="500"><img src="{{ asset('dist/landingPage/image/foto21.svg') }}" alt=""></div>
           <div class="wrap" data-aos="zoom-out-up" data-aos-delay="400"><img src="{{ asset('dist/landingPage/image/foto22 (2).svg') }}" alt=""></div>
          </div>
           <div class="warp-image tree">
            <div class="wrap" data-aos="zoom-out-up" data-aos-delay="200" d><img src="{{ asset('dist/landingPage/image/foto31.svg') }}" alt=""></div>
            <div class="wrap" data-aos="zoom-out-up" data-aos-delay="300"><img src="{{ asset('dist/landingPage/image/foto32.svg') }}" alt=""></div>
          </div>
          <div class="warp-image four">
           <div class="wrap view" data-aos="zoom-out-up" data-aos-delay="550"><img src="{{ asset('dist/landingPage/image/foto5.svg') }}" alt=""></div>
          </div>
        </div>
        <div class="wrapAnimasi">
          <img class="ikan" src="{{ asset('dist/landingPage/image/ikan1.svg') }}" alt="">
        </div>
      </section>


      <section class="tree" id="tree">
        <h2>About Us</h2>
        <div class="row">
          <div class="col-md-6">
            <img src="{{ asset('dist/landingPage/image/about.svg') }}" alt="" />
          </div>
          <div class="col-md-6">
            <div class="text">
              <p>
                The 3rd Manoover is a work program of the Project Division
                Management Student Association Faculty of Economics and Business,
                Diponegoro University (MSA FEB UNDIP) where there are two series
                of events, namely the Manoover Competition which facilitates
                student’s interests and talents in sports and arts that uphold
                sportsmanship and creativity, and the Manoover Closing Ceremony
                which is the culmination of the Manoover series with performances
                from the Featuring Band, Guest Star,Special Performance, and Band
                Performance.
              </p>
              <p>
                The purpose of this event is to celebrate the Big Day
                of Management with the entire Management family, FEB, and UNDIP.
                In addition, another purpose of this event is to create a strong
                brotherhood rope between the management citizens of FEB Diponegoro
                University and become a forum for the Association of Management
                Departments of FEB Undip to introduce themselves as role models in
                various positive aspects in the public eye. Through this event,
                Management students will be ushered in aspects of knowledge and
                harmony through efforts to introduce and preserve marine
                ecosystems that proudly carry the theme HOTS: Harmony Of The Sea
                to invite and increase public awareness about the importance of
                maintaining marine ecosystems.
              </p>
              <p>
                Manoover also held a real action in
                the form of charity that aims to invite the community in
                maintaining the ecosystem by donating mangrove seeds. Donations
                can be given through the following link
                https://LindungiHutan.com/ 1000PohonManooverMSA or by buying 1
                manoover closing ceremony ticket equal to donating 1 mangrove
                seedling
              </p>
            </div>
          </div>
        </div>
      </section>

      <div class="wrapAnimasi">
        <img class="ikan" src="{{ asset('dist/landingPage/image/ikan4.svg') }}" alt="">
      </div>

      <section class="four" id="four">
        <h2>Events</h2>
        <div class="row">
         <div class="col-md-6">
          <div class="wrapEvent" data-aos="fade-up">
            <img src="{{ asset('dist/landingPage/image/ivent2.svg') }}" alt="" />
            <div id="demo" class="content-wrapEvent">
              <p class="contentEvent1  d-none">Management Competition</p>
              <p class="contentEvent2 d-none">It is one of a series of Manoover that facilitates students' interests and talents in the field of sports and arts that uphold sportsmanship and creativity. The Management Competition was held for a total of 4 days starting from the E-Sport competition (PUBG, Valorant, Mobile Legend) on June 3rd-June 5th, 2022, Futsal on June 4th, 2022, and Band Audition on July 23th, 2022</p>
              <a href="/competition" class="contentEvent3 d-none"><button>Register Now</button></a>
            </div>
          </div>
         </div>
         <div class="col-md-6">
          <div class="wrapEvent" data-aos="fade-up">
            <img src="{{ asset('dist/landingPage/image/ivent1.svg') }}" alt="" />
            <div id="demo2" class="content-wrapEvent2">
              <p class="contentEvent11  d-none">Management Closing Ceremony</p>
              <p class="contentEvent21 d-none">Is the highlight of all Manoover series with performances from Band Featuring, Guest Star, Special Performance, Band Performance and others. Management Closing Ceremony was held on July 30th, 2022. </p>
              <a href="/closingCeremony" class="contentEvent31 d-none"><button>Register Now</button></a>
            </div>
          </div>
         </div>
        </div>
      </section>




      <section class="five" id="five">
        <h2>Timeline</h2>
        <div class="wrap-line">
         <div class="wrap">
          <div class="top">
            <div class="timeLine">
              <div id="line"></div>
              <div id="marker"></div>
              <span onclick="first()">April</span>
              <span onclick="two()">Mei</span>
              <span onclick="tree()">Juni</span>
              <span onclick="four()">Juli</span>
              <span onclick="five()">Agustus</span>
            </div>
          </div>
          <br>
          <div class="timeContent1">
            <div class="bottom" data-aos="fade-up">
              <div class="wrap-description">
                <div class="list-descripton">
                  <div class="start">10 april 2022</div>
                  <div class="middle"></div>
                  <div class="end">Open Donation MANOOVER x lindungihutan</div>
                </div>
              </div>
            </div>
          </div>

          <div class="timeContent2 d-none">
            <div class="bottom" data-aos="fade-up">
              <div class="wrap-description">
                <div class="list-descripton">
                  <div class="start">03 Mei 2022</div>
                  <div class="middle"></div>
                  <div class="end">Open Registration Management Competition</div>
                </div>
                <br>
                <div class="list-descripton">
                  <div class="start">28 Mei 2022</div>
                  <div class="middle"></div>
                  <div class="end">Pelatihan Day 1 Management Icon</div>
                </div>
                <br>
                <div class="list-descripton">
                  <div class="start">29 Mei 2022</div>
                  <div class="middle"></div>
                  <div class="end">Pelatihan Day 1 Management Icon</div>
                </div>                
              </div>
            </div>
          </div>
          <div class="timeContent3 d-none">
            <div class="bottom" data-aos="fade-up">
              <div class="wrap-description">
                <div class="list-descripton">
                  <div class="start">01 Juni 2022</div>
                  <div class="middle"></div>
                  <div class="end">Close Registration Management Competition</div>
                </div>
                <br>
                <div class="list-descripton">
                  <div class="start">02 Juni 2022</div>
                  <div class="middle"></div>
                  <div class="end">Technical Meeting Management Competition</div>
                </div>
                <br>
                <div class="list-descripton">
                  <div class="start">03 Juni 2022</div>
                  <div class="middle"></div>
                  <div class="end">PUBG Mobile, Day 1 Mobile Legend</div>
                </div>                
                <br>
                <div class="list-descripton">
                  <div class="start">04 Juni 2022</div>
                  <div class="middle"></div>
                  <div class="end">Day 1 Management Icon, Day 2 Mobile Legend, Day 1 Valorant, Futsal</div>
                </div>                
                <br>
                <div class="list-descripton">
                  <div class="start">05 Juni 2022</div>
                  <div class="middle"></div>
                  <div class="end">Day 2 Management Icon, Day 3 Mobile Legend, Day 2 Valorant, Pengumuman Pemenang E-Sport</div>
                </div>                
              </div>
            </div>
          </div>
          <div class="timeContent4 d-none">
            <div class="bottom" data-aos="fade-up">
              <div class="wrap-description">
                <div class="list-descripton">
                  <div class="start">23 Juli 2022</div>
                  <div class="middle"></div>
                  <div class="end">Band Audition</div>
                </div>
                <br>
                <div class="list-descripton">
                  <div class="start">30 Juli 2022</div>
                  <div class="middle"></div>
                  <div class="end">Management Closing Ceremony</div>
                </div>
                <br>               
              </div>
            </div>
          </div>
          <div class="timeContent5 d-none">
            <div class="bottom" data-aos="fade-up">
              <div class="wrap-description">
                <div class="list-descripton">
                  <div class="start">06 Agustus 2022</div>
                  <div class="middle"></div>
                  <div class="end">Charity</div>
                </div>
                <br>               
              </div>
            </div>
          </div>
         </div>
        </div>
      </section>



      <section class="six" id="six">
       <div class="wrap">
        <p>Sponsored by :</p>
        <div class="support">
         <div class="list">
          <img src="{{ asset('dist/landingPage/image/logo.svg') }}" alt="">
         </div>
         <div class="list"><img src="{{ asset('dist/landingPage/image/logo.svg') }}" alt=""></div>
         <div class="list"><img src="{{ asset('dist/landingPage/image/logo.svg') }}" alt=""></div>
         <div class="list"><img src="{{ asset('dist/landingPage/image/logo.svg') }}" alt=""></div>
        </div>
        <p>Media Partner :</p>
        <div class="media">
         <div class="list">
          <img src="{{ asset('dist/landingPage/image/logo.svg') }}" alt="">
         </div>
         <div class="list"><img src="{{ asset('dist/landingPage/image/logo.svg') }}" alt=""></div>
         <div class="list"><img src="{{ asset('dist/landingPage/image/logo.svg') }}" alt=""></div>
         <div class="list"><img src="{{ asset('dist/landingPage/image/logo.svg') }}" alt=""></div>
         <div class="list"><img src="{{ asset('dist/landingPage/image/logo.svg') }}" alt=""></div>
         <div class="list"><img src="{{ asset('dist/landingPage/image/logo.svg') }}" alt=""></div>
         <div class="list"><img src="{{ asset('dist/landingPage/image/logo.svg') }}" alt=""></div>
        </div>
       </div>
       <br><br>
       <div class="wrapAnimasi">
        <img class="ikan" src="{{ asset('dist/landingPage/image/ikan1.svg') }}" alt="">
      </div>
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
         <a href="#tree">About Us</a>
         <a href="#four">Events</a>
         <a href="#five">Timeline</a>
         <a href="#six">Sponsor </a>
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
    <script src="{{ asset('dist/landingPage/script4.js') }}"></script>
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
