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
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="wrapForm">
      <h2 class="tittleUser">Pembayaran</h2>
      {{-- looping --}}
      <div class="list-dashboardUser">
        <div class="left">
         <img src="{{ asset('dist/user/image/pubgCompetition.svg') }}" alt="">
          <div class="info">
            <div class="name">PUBG Mobile Competition</div>
            <div class="price">Total Pembayaran : Rp 50.000</div>
            <div class="status belum">Belum menyelesaikan pembayaran</div>
          </div>
        </div>
        <div class="right">
          <div class="timeNow">Pembayaran akan hangus dalam 23:59:59</div>
          <a  href="#"><button class="buyNow">Bayar Sekarang</button></a>
        </div>
      </div>
      {{-- endlooping --}}

      <div class="list-dashboardUser">
        <div class="left">
         <img src="{{ asset('dist/user/image/valorantCompetition.svg') }}" alt="">
          <div class="info">
            <div class="name">PUBG Mobile Competition</div>
            <div class="price">Total Pembayaran : Rp 50.000</div>
            <div class="status sudah">Pembayaran selesai</div>
          </div>
        </div>
        <div class="right">
          <div class="timeNow">Pembayaran akan hangus dalam 23:59:59</div>
          <a  href="#"><button class="buyNow">Bayar Sekarang</button></a>
        </div>
      </div>
      <div class="list-dashboardUser">
        <div class="left">
         <img src="{{ asset('dist/user/image/mlCompetition.svg') }}" alt="">
          <div class="info">
            <div class="name">PUBG Mobile Competition</div>
            <div class="price">Total Pembayaran : Rp 50.000</div>
            <div class="status belum">Belum menyelesaikan pembayaran</div>
          </div>
        </div>
        <div class="right">
          <div class="timeNow">Pembayaran akan hangus dalam 23:59:59</div>
          <a  href="#"><button class="buyNow">Bayar Sekarang</button></a>
        </div>
      </div>
      <div class="list-dashboardUser">
        <div class="left">
         <img src="{{ asset('dist/user/image/futsalCompetition.svg') }}" alt="">
          <div class="info">
            <div class="name">PUBG Mobile Competition</div>
            <div class="price">Total Pembayaran : Rp 50.000</div>
            <div class="status belum">Belum menyelesaikan pembayaran</div>
          </div>
        </div>
        <div class="right">
          <div class="timeNow">Pembayaran akan hangus dalam 23:59:59</div>
          <a  href="#"><button class="buyNow">Bayar Sekarang</button></a>
        </div>
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
    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
  </body>
</html>
