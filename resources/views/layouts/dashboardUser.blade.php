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
    <title>Dashboard</title>
  </head>
  <body>
    <div class="wrapForm">
      <h2 class="tittleUser">Pembayaran</h2>
      {{-- looping --}}
      @if ($pubg)
        <div class="list-dashboardUser">
            <div class="left">
                <img src="{{ asset('dist/user/image/pubgCompetition.svg') }}" alt="">
                <div class="info">
                    <div class="name">PUBG Mobile Competition</div>
                    <div class="price">Total Pembayaran : Rp 50.000</div>
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
                    <div class="timeNow">Pembayaran akan hangus dalam 23:59:59</div>
                    <a  href="{{ route('competition.pubg.pembayaran', ['pubg' => $pubg]) }}"><button class="buyNow">Bayar Sekarang</button></a>
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
                    <div class="price">Total Pembayaran : Rp 50.000</div>
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
                    <div class="timeNow">Pembayaran akan hangus dalam 23:59:59</div>
                    <a  href="{{ route('competition.valorant.pembayaran', ['valorant' => $valorant]) }}"><button class="buyNow">Bayar Sekarang</button></a>
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
                    <div class="price">Total Pembayaran : Rp 50.000</div>
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
                    <div class="timeNow">Pembayaran akan hangus dalam 23:59:59</div>
                    <a  href="{{ route('competition.ml.pembayaran', ['mobile_legend' => $mobileLegend]) }}"><button class="buyNow">Bayar Sekarang</button></a>
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
                    <div class="price">Total Pembayaran : Rp 50.000</div>
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
                    <div class="timeNow">Pembayaran akan hangus dalam 23:59:59</div>
                    <a  href="{{ route('competition.futsal.pembayaran', ['futsal' => $futsal]) }}"><button class="buyNow">Bayar Sekarang</button></a>
                @endif
            </div>
        </div>
      @endif
      {{-- endlooping --}}

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
    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
  </body>
</html>
