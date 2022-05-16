@extends('layouts.user', ['title' => 'Manover | Detail Closing '])


@section('content')
<div class="wrap">
  <div class="top">
    <img src="{{ asset('dist/user/image/bennceremony.svg') }}" alt="" />
  </div>
  <div class="middle">
    <div class="left">
      <p id="textPrice">Harga mulai dari</p>
      <h3>
        Rp.<input type="text" class="price" id="priceDinamis" value="700000">
      </h3>
    </div>
    <div class="right">
      <a href="{{ route('closing.create') }}"><button>Register Now</button></a>
    </div>
  </div>

  <div class="bottom">
    
    <div class="timeLine">
      <div id="line"></div>
      <div id="marker"></div>
      <span onclick="DetailAcara()">Detail Acara</span>
      <span onclick="DetailTiket()">Tiket</span>
    </div>

    <br><br>

    <div class="timeContent1">
      <p>
        Is the highlight of all Manoover series with performances from Band Featuring, Guest Star, Special Performance, Band Performance and others. Management Closing Ceremony was held on July 30th, 2022.
      </p>
  
     <p>
      <b>Terms & Condition</b> <br />
      Tiket secara resmi hanya dibeli melalui www.manoover.com . Jika Anda membeli tiket diluar itu, maka kami tidak bertanggung jawab jika tiket tidak valid. <br>
      Panitia 3rd Manoover tidak bertanggung jawab atas kelalaian pembeli tiket yang mengakibatkan E-ticket hilang ataupun jatuh ke tangan orang lain (dalam penguasaan orang lain) untuk digunakan sebagai tanda masuk ke tempat pertunjukkan/penukaran E-ticket <br>
      Jika terjadi pembatalan pertunjukan dikarenakan alasan tertentu dikemudian hari maka uang tiket akan dikembalikan sesuai dengan ketentuan promotor. <br>
      Dalam keadaan Force Majeure seperti bencana alam, kerusuhan, perang, wabah, dan semua keadaan darurat yang diumumkan secara resmi oleh Pemerintah. Panitia/penyelenggara/promotor berhak untuk membatalkan dan/atau merubah waktu acara dan tata letak tempat tanpa pemberitahuan sebelumnya. <br>
      Panitia 3rd Manoover tidak bertanggung jawab atas kompensasi dan atau biaya pembatalan perjalanan yang anda keluarkan apabila pertunjukkan di batalkan atau di tunda. <br>
      Email yang disertakan untuk membeli tiket harus aktif, guna mengirim E-Ticket yang valid. <br>
      E-Ticket wajib ditukar dengan wristband pada hari H di venue dengan membawa ID asli pemesan tiket. Satu wristband berlaku untuk satu orang, satu kali memasuki area pertunjukan. <br>
      Wajib membawa ID (KTP/SIM) yang valid & tidak bisa diwakilkan. <br>
      Pembayaran dilakukan maximal 1x24 jam setelah mengisi formulir yang telah diberikan. <br>
      E-Ticket akan dikirimkan setelah melakukan pembayaran yang akan di verifikasi selambat-lambatnya 4x24 jam <br>
      Setiap pembeli hanya di perbolehkan membeli tiket maximal 5 tiket menggunakan 1 akun. <br>
      Penyelenggara berhak untuk: <br>
      a. Melarang Penonton masuk jika wristband telah digunakan oleh orang lain/rusak. <br>
      b. Memproses atau mengajukan hukuman, baik perdata maupun pidana, terhadap pengunjung yang mendapatkan Entry Pass secara tidak sah, termasuk memalsukan dan menggandakan Entry Pass yang sah atau memperoleh Entry Pass dengan cara yang tidak sesuai dengan prosedur. <br>
     </p>
    </div>

   

   <div class="wrapTicket timeContent2 d-none" >
     <div class="left"><img src="dist/user/image/ticket.svg" alt=""></div>
     <div class="right">
       <div>
        <div class="topChild">
          <p class="name">Early Bird</p>
          <p class="info">Available 330 Pax</p>
        </div>
        <div class="line"></div>
        <div class="bottomChild">
          <div class="leftChild" >
            Rp.
            <input type="text" class="price" id="price" value="700000">
          </div>
          <div class="rightChild">
            <img src="dist/user/image/TombolKurang.svg" id="handleCounterMin" alt="">
            <input type="text" id="counter" value="0">
            <img src="dist/user/image/TombolTambah.svg" id="handleCounterPlus" alt="">
          </div>
        </div>
       </div>
     </div>
   </div>

   <br><br><br>

 </div>
  </div>
</div>


<script>

  
  const counter = document.getElementById("counter");
  const Plus = document.getElementById("handleCounterPlus");
  const Minus = document.getElementById("handleCounterMin");

  var textPrice = document.getElementById("textPrice");

  let price = document.getElementById("price").value;
  let priceDinamis = document.getElementById("priceDinamis").value;

  let counterValue = counter.value;
  let valueAll = 0 ;

  

  Plus.addEventListener("click", ()=> {
    if(valueAll < 6){
      counter.value = ++counterValue;
      valueAll++;

      let hasil = price * valueAll;
      $("#priceDinamis").val(hasil);
      textPrice.innerHTML = "Harga tiket (" + valueAll + " tiket)";
    }

  });
  Minus.addEventListener("click", ()=> {
    if(valueAll > 0){
      counter.value = --counterValue;
 
      valueAll--;

      let hasil = price * valueAll;
      $("#priceDinamis").val(hasil);
      textPrice.innerHTML = "Harga tiket (" + valueAll + " tiket)";
    }
    else{
      textPrice.innerHTML = "Harga mulai dari";
    }
  });
  



</script>
@endsection
