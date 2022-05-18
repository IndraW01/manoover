<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="x-apple-disable-message-reformatting">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title></title>

    <style type="text/css">
        @media only screen and (min-width: 570px) {
            .u-row {
                width: 550px !important;
            }
            .u-row .u-col {
                vertical-align: top;
            }

            .u-row .u-col-50 {
                width: 275px !important;
            }

            .u-row .u-col-100 {
                width: 550px !important;
            }
        }

        @media (max-width: 570px) {
            .u-row-container {
                max-width: 100% !important;
                padding-left: 0px !important;
                padding-right: 0px !important;
            }
            .u-row .u-col {
                min-width: 320px !important;
                max-width: 100% !important;
                display: block !important;
            }
            .u-row {
                width: calc(100% - 40px) !important;
            }
            .u-col {
                width: 100% !important;
            }
            .u-col > div {
                margin: 0 auto;
            }
        }

        body {
            margin: 0;
            padding: 0;
        }

        table,
        tr,
        td {
            vertical-align: top;
            border-collapse: collapse;
        }

        p {
            margin: 0;
        }

        .ie-container table,
        .mso-container table {
            table-layout: fixed;
        }

        * {
            line-height: inherit;
        }

        a[x-apple-data-detectors='true'] {
            color: inherit !important;
            text-decoration: none !important;
        }

        table, td { color: #000000; } a { color: #0000ee; text-decoration: underline; } @media (max-width: 480px) { #u_content_image_1 .v-src-width { width: auto !important; } #u_content_image_1 .v-src-max-width { max-width: 55% !important; } #u_content_image_2 .v-src-width { width: auto !important; } #u_content_image_2 .v-src-max-width { max-width: 60% !important; } #u_content_text_1 .v-container-padding-padding { padding: 30px 30px 30px 20px !important; } #u_content_button_1 .v-container-padding-padding { padding: 10px 20px !important; } #u_content_button_1 .v-size-width { width: 100% !important; } #u_content_button_1 .v-text-align { text-align: left !important; } #u_content_button_1 .v-padding { padding: 15px 40px !important; } #u_content_text_3 .v-container-padding-padding { padding: 30px 30px 80px 20px !important; } #u_content_text_5 .v-text-align { text-align: center !important; } #u_content_text_4 .v-text-align { text-align: center !important; } }



.wrapTicket {
    width: 100%;
    border: 1px solid white;
    padding: 30px 20px 20px 20px;
    border-radius: 24px;
    display: flex;
}
.wrapTicket .left {
    max-width: 90px;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.wrapTicket .left img {
    width: 90px;
}
.wrapTicket .line {
    width: 100%;
    border-bottom: 1px solid white;
    margin-top: -10px;
}
.wrapTicket .right {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-left: 20px;
}
.wrapTicket .right div {
    width: 100%;
}
.wrapTicket .right .topChild {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.wrapTicket .right .topChild .name {
    font-weight: 400;
    font-size: 16px;
    color: white;
}

.wrapTicket .right .bottomChild {
    display: flex;
    justify-content: space-between;
    margin-top: 5px;
    align-items: center;
}
.wrapTicket .right .bottomChild .leftChild {
    font-weight: 700;
    font-size: 20px;
    color: white;
    display: flex;
}
.wrapTicket .right .bottomChild .leftChild input {
    margin: 0 5px;
    outline: none;
    width: 130px;
    border: none;
    color: white;
    background: none;
}
.wrapTicket .right .bottomChild .rightChild {
    display: flex;
    justify-content: end;
    align-items: center;
}

.wrapTicket .right .bottomChild .rightChild button {
    max-width: 270px;
    width: 100%;
    background: #f9943b;
    border-radius: 45px;
    outline: none;
    border: 1px solid #f9943b;
    color: white;
    padding: 5px 70px;
    font-weight: 600;
}

.price {
    outline: none;
    border: none;
    color: white;
    padding-left: 10px;
    background: none;
    font-weight: 700;
    font-size: 20px;
    color: white;
}

.tittleDashUser {
    color: white;
    font-weight: 700;
    font-size: 16px;
    padding-top: 30px;
}

table {
    margin-top: 20px;
    width: 100%;
}

table tr td,
table tr th {
    color: white;
    min-width: 180px;
    padding: 10px 0;
}

.ticketUser {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    grid-gap: 24px;
}
.ticketUser li {
    max-width: 330px;
    width: 100%;
    list-style: none;
    grid-gap: 10px;
}

@font-face {
    src: url("../user/font/Alyssum-Sans.ttf");
    font-family: "Alyssum-Sans";
    font-weight: 300;
}

.wrapDetailTicket {
    color: #fff;
    background-image: url("../user/image/detailTicket.svg");
    background-size: cover;
    height: 100%;
    width: 100%;
    padding: 0 0 30px 0;
}
.wrapDetailTicket img {
    width: 100%;
    padding: 20px 10px 0 10px;
}
.wrapDetailTicket .two {
    display: flex;
    padding: 0 30px 0 30px;
}
.wrapDetailTicket .one {
    padding: 0 30px 0 30px;
}

.wrapDetailTicket .two .right {
    margin-left: 60px;
}
.wrapDetailTicket .content,
.wrapDetailTicket .tittle {
    font-family: "Alyssum-Sans";
    font-weight: 17;
    margin: 0;
    padding: 0;
}
.wrapDetailTicket .content {
    color: white;
    font-size: 14px;
}

.wrapDetailTicket .tittle {
    color: #ff914d;
    font-size: 16px;
}
    </style>

    <link rel="stylesheet" href="{{ asset('dist/user/styleDash.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,700&display=swap" rel="stylesheet" type="text/css">

</head>

<body class="clean-body u_body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #fbeeb8;color: #000000">
  <!--[if IE]><div class="ie-container"><![endif]-->
  <!--[if mso]><div class="mso-container"><![endif]-->
  <table style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #fbeeb8;width:100%" cellpadding="0" cellspacing="0">
  <tbody>
  <tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #fbeeb8;"><![endif]-->


<div class="u-row-container" style="padding: 0px;background-color: #ffffff">
  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #ffffff;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-color: #ffffff;"><![endif]-->

<!--[if (mso)|(IE)]><td align="center" width="550" style="width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
<div class="u-col u-col-100" style="max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;">
  <div style="width: 100% !important;">
  <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>



<div class="u-row-container" style="padding: 0px;background-color: transparent">
  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-color: transparent;"><![endif]-->

<!--[if (mso)|(IE)]><td align="center" width="550" style="width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
<div class="u-col u-col-100" style="max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;">
  <div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
  <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->

<table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:20px;font-family:arial,helvetica,sans-serif;" align="left">

  <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 0px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
    <tbody>
      <tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
          <span>&#160;</span>
        </td>
      </tr>
    </tbody>
  </table>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>



<div class="u-row-container" style="padding: 0px;background-color: transparent">
  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-color: #ffffff;"><![endif]-->

<!--[if (mso)|(IE)]><td align="center" width="542" style="width: 542px;padding: 0px;border-top: 4px solid #d9d8d8;border-left: 4px solid #d9d8d8;border-right: 4px solid #d9d8d8;border-bottom: 4px solid #d9d8d8;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
<div class="u-col u-col-100" style="max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;">
  <div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
  <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 4px solid #d9d8d8;border-left: 4px solid #d9d8d8;border-right: 4px solid #d9d8d8;border-bottom: 4px solid #d9d8d8;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->

<table id="u_content_image_2" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:40px 10px 10px;font-family:arial,helvetica,sans-serif;" align="left">

<table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr>
    <td class="v-text-align" style="padding-right: 0px;padding-left: 0px;" align="center">

      <img align="center" border="0" src="{{ asset('img/Logo Manoover.PNG') }}" alt="Wrong Email" title="Wrong Email" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 30%;max-width: 159px;" width="159" class="v-src-width v-src-max-width"/>

    </td>
  </tr>
</table>

      </td>
    </tr>
  </tbody>
</table>

<table id="u_content_text_1" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px 30px 30px 40px;font-family:arial,helvetica,sans-serif;" align="left">

  <div class="v-text-align" style="color: #333333; line-height: 140%; text-align: left; word-wrap: break-word;">
    <p style="font-size: 14px; line-height: 140%;"><span style="font-family: 'Crimson Text', serif; font-size: 14px; line-height: 19.6px;"><strong><span style="font-size: 22px; line-height: 30.8px;">Pembelian Tiket untuk The 3rd Manoover Closing Ceremony 2022 Telah Berhasil!</span></strong></span></p>
<p style="font-size: 14px; line-height: 140%;">&nbsp;</p>
<p style="font-size: 14px; line-height: 140%;"><span style="font-size: 18px; line-height: 25.2px; font-family: 'Crimson Text', serif;">Terima kasih telah melakukan pemesanan tiket The 3rd Manoover Closing Ceremony 2022 melalui web Manooverundip.com.
    <br><br> Berikut tiket dan detail pembelian kamu.


    <div class="ticketUser" style="margin-top: 50px">

        {{-- STAR LOOPING --}}
         <li>
          <div class="wrapDetailTicket">
           <img src="{{asset("dist/user/image/logoDetailTicket.svg")}}" alt="">
           <div class="one">
            <p class="tittle">NAME</p>
            <p class="content">Ndraa</p>
            {{-- <p class="content">{{ $closing->nama }}</p> --}}
           </div>
           <br>
           <div class="two">
            <div>
             <p class="tittle">DATE</p>
             <p class="content">30 JULI 2022</p>
            </div>
            <br>
            <div class="right">
             <p class="tittle">ID CODE</p>
             <p class="content">MN123</p>
             {{-- <p class="content">{{ $closing->kode_unik }}</p> --}}
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

       </div>
     </span>
  </div>

      </td>
    </tr>
  </tbody>
</table>

{{-- <table id="u_content_button_1" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px 40px;font-family:arial,helvetica,sans-serif;" align="left">

<div class="v-text-align" align="left">
  <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;font-family:arial,helvetica,sans-serif;"><tr><td class="v-text-align" style="font-family:arial,helvetica,sans-serif;" align="left"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://unlayer.com" style="height:47px; v-text-anchor:middle; width:456px;" arcsize="6.5%" strokecolor="#ced4d9" strokeweight="3px" fillcolor="#91a5e2"><w:anchorlock/><center style="color:#000000;font-family:arial,helvetica,sans-serif;"><![endif]-->
    <P>NOTE: TIKET BERSIFAT RAHASIA !!! Jangan berikan tiket kepada siapapun karena Panitia 3rd Manoover tidak bertanggung jawab atas kelalaian pembeli tiket yang mengakibatkan E-ticket hilang ataupun jatuh ke tangan orang lain (dalam penguasaan orang lain) untuk digunakan sebagai tanda masuk ke tempat pertunjukkan/penukaran E-ticket.</P>
  <!--[if mso]></center></v:roundrect></td></tr></table><![endif]-->
</div>

      </td>
    </tr>
  </tbody>
</table> --}}

<table id="u_content_text_3" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding: 0px 30px 80px 40px;font-family:arial,helvetica,sans-serif;" align="left">

  <div class="v-text-align" style="color: #333333; line-height: 140%; text-align: left; word-wrap: break-word;">
    <P style="font-size: 14px">NOTE: <span style="font-weight: bold; color: red">TIKET BERSIFAT RAHASIA</span> !!! Jangan berikan tiket kepada siapapun karena Panitia 3rd Manoover tidak bertanggung jawab atas kelalaian pembeli tiket yang mengakibatkan E-ticket hilang ataupun jatuh ke tangan orang lain (dalam penguasaan orang lain) untuk digunakan sebagai tanda masuk ke tempat pertunjukkan/penukaran E-ticket.</P>
<p style="font-size: 14px; line-height: 140%;">&nbsp;</p>
<p style="font-size: 14px; line-height: 140%;"><span style="font-size: 22px; line-height: 30.8px;"><strong><span style="line-height: 30.8px; font-family: 'Crimson Text', serif; font-size: 22px;">Thanks.</span></strong></span><br /><span style="font-size: 18px; line-height: 25.2px; font-family: 'Crimson Text', serif;">The 3rd Manoover</span></p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>



<div class="u-row-container" style="padding: 0px;background-color: transparent">
  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-color: transparent;"><![endif]-->

<!--[if (mso)|(IE)]><td align="center" width="550" style="width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
<div class="u-col u-col-100" style="max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;">
  <div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
  <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->

<table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:50px 10px 30px;font-family:arial,helvetica,sans-serif;" align="left">


      </td>
    </tr>
  </tbody>
</table>



  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>



    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
    </td>
  </tr>
  </tbody>
  </table>
  <!--[if mso]></div><![endif]-->
  <!--[if IE]></div><![endif]-->
</body>

</html>
