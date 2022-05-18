{{-- @dd($bayarClosing[$bayarClosing->count() - 1]) --}}
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
        <h2 class="tittleUser">Pembayaran</h2>

        <div class="timeLine">
            <div id="line"></div>
            <div id="marker"></div>
            <span onclick="DetailAcara()">Pembayaran</span>
            <span onclick="DetailTiket()">Tiket</span>
        </div>

      @if($pubg == null and $valorant == null and $mobileLegend == null and $futsal == null and $band == null and $closing== null )
        <center><p style="color: white">Belum ada pembayaran</p></center>
      @endif

      <div class="timeContent1">
        @if ($pubg)
            <div class="list-dashboardUser">
                <div class="left">
                    <img src="{{ asset('dist/user/image/pubgCompetition.svg') }}" alt="">
                    <div class="info">
                        <div class="name">PUBG Mobile Competition</div>
                        <div class="price">Total Pembayaran : Rp 60.000</div>
                        @if ($pubg->bukti_pembayaran)
                            <div class="status sudah">Pembayaran selesai</div>
                        @else
                            <div class="status belum">Belum menyelesaikan Pembayaran</div>
                        @endif
                    </div>
                </div>
                <div class="right">
                    @if ($pubg->bukti_pembayaran)
                        <div class="timeNow">Tanggal bayar : 10 Mei 2022</div>
                    @else
                        <div class="timeNow">Pembayaran akan hangus dalam <span class="countdown" value="{{$pubg->created_at->addHours(24)}}"></span></div>
                        @if ((Carbon\Carbon::now() > $pubg->created_at->addDay()))
                            <a  href="#"><button class="buyNowCancel">Waktu Habis</button></a>
                        @else
                            <a  href="{{ route('competition.pubg.pembayaran', ['pubg' => $pubg]) }}"><button class="buyNow">Bayar Sekarang</button></a>
                        @endif
                    @endif
                </div>
            </div>
        @endif
        {{-- endlooping --}}

        {{-- looping --}}
        @if ($valorant)
            <div class="list-dashboardUser">
                <div class="left">
                    <img src="{{ asset('dist/user/image/valorantCompetition.svg') }}" alt="">
                    <div class="info">
                        <div class="name">Valorant Competition</div>
                        <div class="price">Total Pembayaran : Rp 100.000</div>
                        @if ($valorant->bukti_pembayaran)
                            <div class="status sudah">Pembayaran selesai</div>
                        @else
                            <div class="status belum">Belum menyelesaikan Pembayaran</div>
                        @endif
                    </div>
                </div>
                <div class="right">
                    @if ($valorant->bukti_pembayaran)
                        <div class="timeNow">Tanggal bayar : 10 Mei 2022</div>
                    @else
                        <div class="timeNow">Pembayaran akan hangus dalam <span class="countdown" value="{{$valorant->created_at->addHours(24)}}"></span></div>
                        @if ((Carbon\Carbon::now() > $valorant->created_at->addDay()))
                            <a  href="#"><button class="buyNowCancel">Waktu Habis</button></a>
                        @else
                            <a  href="{{ route('competition.valorant.pembayaran', ['valorant' => $valorant]) }}"><button class="buyNow">Bayar Sekarang</button></a>
                        @endif
                    @endif
                </div>
            </div>
        @endif
        {{-- endlooping --}}

        {{-- looping --}}
        @if ($mobileLegend)
            <div class="list-dashboardUser">
                <div class="left">
                    <img src="{{ asset('dist/user/image/mlCompetition.svg') }}" alt="">
                    <div class="info">
                        <div class="name">Mobile Legend Competition</div>
                        <div class="price">Total Pembayaran : Rp 75.000</div>
                        @if ($mobileLegend->bukti_pembayaran)
                            <div class="status sudah">Pembayaran selesai</div>
                        @else
                            <div class="status belum">Belum menyelesaikan Pembayaran</div>
                        @endif
                    </div>
                </div>
                <div class="right">
                    @if ($mobileLegend->bukti_pembayaran)
                        <div class="timeNow">Tanggal bayar : 10 Mei 2022</div>
                    @else
                        <div class="timeNow">Pembayaran akan hangus dalam <span class="countdown" value="{{$mobileLegend->created_at->addHours(24)}}"></span></div>
                        @if ((Carbon\Carbon::now() > $mobileLegend->created_at->addDay()))
                            <a  href="#"><button class="buyNowCancel">Waktu Habis</button></a>
                        @else
                            <a  href="{{ route('competition.ml.pembayaran', ['mobile_legend' => $mobileLegend]) }}"><button class="buyNow">Bayar Sekarang</button></a>
                        @endif
                    @endif
                </div>
            </div>
        @endif
        {{-- endlooping --}}

        {{-- looping --}}
        @if ($futsal)
            <div class="list-dashboardUser">
                <div class="left">
                    <img src="{{ asset('dist/user/image/futsalCompetition.svg') }}" alt="">
                    <div class="info">
                        <div class="name">Futsal Competition</div>
                        <div class="price">Total Pembayaran : Rp 300.000</div>
                        @if ($futsal->bukti_pembayaran)
                            <div class="status sudah">Pembayaran selesai</div>
                        @else
                            <div class="status belum">Belum menyelesaikan Pembayaran</div>
                        @endif
                    </div>
                </div>
                <div class="right">
                    @if ($futsal->bukti_pembayaran)
                        <div class="timeNow">Tanggal bayar : 10 Mei 2022</div>
                    @else
                        <div class="timeNow">Pembayaran akan hangus dalam <span class="countdown" value="{{$futsal->created_at->addHours(24)}}"></span></div>
                        @if ((Carbon\Carbon::now() > $futsal->created_at->addDay()))
                            <a  href="#"><button class="buyNowCancel">Waktu Habis</button></a>
                        @else
                            <a  href="{{ route('competition.futsal.pembayaran', ['futsal' => $futsal]) }}"><button class="buyNow">Bayar Sekarang</button></a>
                        @endif
                    @endif
                </div>
            </div>
        @endif
        {{-- endlooping --}}

        {{-- looping --}}
        @if ($band)
            <div class="list-dashboardUser">
                <div class="left">
                    <img src="{{ asset('dist/landingPage/image/band2.svg') }}" alt="">
                    <div class="info">
                        <div class="name">Band Audition</div>
                        <div class="price">Total Pembayaran : Rp 250.000</div>
                        @if ($band->bukti_pembayaran)
                            <div class="status sudah">Pembayaran selesai</div>
                        @else
                            <div class="status belum">Belum menyelesaikan Pembayaran</div>
                        @endif
                    </div>
                </div>
                <div class="right">
                    @if ($band->bukti_pembayaran)
                        <div class="timeNow">Tanggal bayar : 10 Mei 2022</div>
                    @else
                        <div class="timeNow">Pembayaran akan hangus dalam <span class="countdown" value="{{$band->created_at->addHours(24)}}"></span></div>
                        @if ((Carbon\Carbon::now() > $band->created_at->addDay()))
                            <a  href="#"><button class="buyNowCancel">Waktu Habis</button></a>
                        @else
                            <a  href="{{ route('competition.band.pembayaran', ['band' => $band]) }}"><button class="buyNow">Bayar Sekarang</button></a>
                        @endif
                    @endif
                </div>
            </div>
        @endif
        {{-- endlooping --}}

        {{-- looping --}}
        @if ($bayarClosing->count() > 0)
            <div class="list-dashboardUser">
                <div class="left">
                    <img src="{{ asset('dist/landingPage/image/band2.svg') }}" alt="">
                    <div class="info">
                        <div class="name">Closing Ceremony</div>
                        <div class="price">Total Pembayaran : Rp {{ 70 * $bayarClosing->count() }}.000</div>
                        @if ($bayarClosing[$bayarClosing->count() - 1]->bukti_pembayaran)
                            <div class="status sudah">Pembayaran selesai</div>
                        @else
                            <div class="status belum">Belum menyelesaikan Pembayaran</div>
                        @endif
                    </div>
                </div>
                <div class="right">
                    @if ($bayarClosing[$bayarClosing->count() - 1]->bukti_pembayaran)
                        <div class="timeNow">Tanggal bayar : 10 Mei 2022</div>
                    @else
                        <div class="timeNow">Pembayaran akan hangus dalam <span class="countdown" value="{{$bayarClosing[$bayarClosing->count() - 1]->created_at->addHours(24)}}"></span></div>
                        @if ((Carbon\Carbon::now() > $bayarClosing[$bayarClosing->count() - 1]->created_at->addDay()))
                            <a  href="#"><button class="buyNowCancel">Waktu Habis</button></a>
                        @else
                            <a  href="{{ route('closing.pembayaran') }}"><button class="buyNow">Bayar Sekarang</button></a>
                        @endif
                    @endif
                </div>
            </div>
        @endif
      </div>

      <br><br>
      <div class="wrapTicket timeContent2 d-none" >
            @if ($closing->count() > 0)
            <div class="left"><img src="dist/user/image/ticket.svg" alt=""></div>
            <div class="right">
            <div>
            <div class="topChild">
                <p class="name">Early Bird</p>
            </div>
            <div class="line"></div>
            <div class="bottomChild">
                <div class="leftChild" >
                {{ $closing->count() }} Tiket
                </div>
                <div class="rightChild">
                    <a  href="{{ route('user.dashboard.tikcet') }}"><button class="buyNow">Lihat Tiket</button></a>
                </div>
            </div>
            </div>
            </div>
            @else
              <p>Tiket Kosong</p>
              @endif
        </div>

<<<<<<< HEAD
      @else
        <center><p style="color: white">Tiket Kosong</p></center>
      @endif
=======
>>>>>>> b30b04ff50ccc331fc2b6ffb7c391a5e061f3216

    </div>

    <div class="wrapAnimasi">
      <img class="ikan" src="ikan.svg" alt="" />
    </div>

    @include('sweetalert::alert')

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
