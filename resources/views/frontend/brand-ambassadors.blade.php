@extends('layouts.app')

@section('head_metas')

    <title>Brand Ambassadors | Luxxu | Modern Design and Living</title>
    @if (Session::has('data'))
        <meta http-equiv="refresh" content="5;url=/download/{{ Session::get('data') }}">
    @endif
    <meta property="og:title" content="Brand Ambassadors | Luxxu | Modern Design and Living"/>
    <meta property="og:description" content="" />
    <meta property="og:type" content="Brand Ambassadors" />
    <meta property="article:author" content="Brand Ambassadors | Luxxu | Modern Design and Living" />
    <meta property="article:published_time" content="" />
    <meta property="og:url" content="../brand-ambassadors" />
    <meta property="og:site_name" content="{!! env('BRAND_NAME') !!}" />
    <meta name="description" content="" />

    <!-- Fontawesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Map script generator -->
    <script type="text/javascript" src="js/world-map/mapdata.js"></script>    
    <script  type="text/javascript" src="js/world-map/worldmap.js"></script>

@endsection

@section('head_style')

      <style type="text/css">
        tspan {
          display: none;
        }
        div#map_zoom {
          margin-top: 70px;
        }
        div#map_outer {
          margin-top: 70px;
        }

        .ambassador-banner {
          display: block;
          margin: 0;
          position: relative;
          display: flex;
          text-align: center;
          justify-content: center;
          align-items: center;
        }
        .ambassador-banner-mobile {
          display: none;
        }
        /* banner pc */
        .ambassador-banner .ambassador-info {
          position: absolute;
          top: 40%;
        }
        .ambassador-banner .ambassador-info h2 {
          font-size: 38px;
          font-weight: 500;
          letter-spacing: 1px;
          color: #FFF;
          margin-bottom: 6px;
        }
        .ambassador-banner .ambassador-info h3 {
          font-size: 25px;
          font-style: italic;
          color: #FFF;
          letter-spacing: 1px;
          font-family: serif;
        }
        /* banner mobile */
        .ambassador-banner-mobile .ambassador-info {
          position: absolute;
          top: 25%;
          padding-left: 8px;
          padding-right: 8px;
        }
        .ambassador-banner-mobile .ambassador-info h2 {
          font-size: 21px;
          font-weight: 500;
          letter-spacing: 1px;
          color: #FFF;
          margin-bottom: 6px;
        }
        .ambassador-banner-mobile .ambassador-info h3 {
          font-size: 17px;
          font-style: italic;
          color: #FFF;
          letter-spacing: 1px;
          font-family: serif;
        }


        .foto-team img {
          border-radius: 50%;
        }
        .member-content {
          margin-bottom: 35px;
        }
        .member-content i {
          font-size: 12px;
          padding-right: 5px;
        }
        .country-team {    
          font-size: 12px;
          line-height: 12pt;
          font-weight: 600;
          color: #474747;
          border-bottom: 1px solid #989797;
          margin-bottom: 16px;
          padding-bottom: 5px;
          min-height: 45px;
          padding-top: 7px;
        }
        .name-team {
          text-transform: capitalize;
          font-weight: 600;
          margin-bottom: 5px;
          font-size: 15px;
          letter-spacing: 1px;
          color: #262626;
        }
        .function-team {
          text-transform: capitalize;
          font-size: 12px;
          color: #968460;
          margin-bottom: 15px;
          letter-spacing: 0.5px;
          font-weight: lighter;
          font-weight: 100;
        }
        .email-team {
          font-size: 11px;
          color: #262626;
          letter-spacing: 0.5px;
          line-height: 20px;
          font-weight: 100;
          padding-left: 5px;
        }
        .email-team a {
          display: inline-block;
          color: #262626;
          letter-spacing: 0.5px;
          line-height: 20px;
          font-weight: 100;
        }
        .skype-team {
          font-size: 11px;
          color: #262626;
          letter-spacing: 0.5px;
          line-height: 20px;
          font-weight: 100;
          padding-left: 5px;
        }
        .mobile-team  {
          font-size: 11px;
          color: #262626;
          letter-spacing: 0.5px;
          line-height: 20px;
          font-weight: 100;
          padding-left: 5px;
        }
        .whatsapp-team {
          line-height: 20px;
          width: 120px;
        }


        .map-offices-box {
          height: 160px;
        }
        .map-offices p {
          margin: 0;
          line-height: 1.3;
          text-align: left;
          font-size: 14px;
          color: #000;
        }
        .map-offices p a {
          color: #000;
        }



         @media (min-width: 320px) and (max-width: 560px) {
          .ambassador-banner {
            display: none;
          }
          .ambassador-banner-mobile {
            display: block;
          }
          .member-content .col-lg-7 {
            padding-left:30px; 
          }
          .members-mobile {
            margin-top: 25px;
          }
        }

        .center-content-img {
          margin: 0;
          position: relative;
          display: flex;
          text-align: center;
          justify-content: center;
          align-items: center;
        }

      </style>

@endsection

@section('content')

  <!-- AMBASSADOR BANNER -->
  <div class="row" style="margin:0;">
    <!-- banner pc -->
    <div class="ambassador-banner">
      <img src="/images/contact/2019/meet-ambassadors.jpg" class="img-responsive">
      <div class="ambassador-info">
        <h2 class="text-center">MEET YOUR AMBASSADORS</h2>
        <h3 class="text-center">Get in direct contact with the responsible for your market</h3>
      </div>
    </div>
    <!-- banner mobile -->
    <div class="ambassador-banner-mobile">
      <div class="center-content-img">
        <img src="/images/contact/2019/meet-ambassadors-mobile.jpg" class="img-responsive">
        <div class="ambassador-info">
          <h2 class="text-center">MEET YOUR AMBASSADORS</h2>
          <h3 class="text-center">Get in direct contact with the responsible for your market</h3>
        </div>
      </div>
    </div>
  </div>
  
  <!-- MEMBERS -->
  <div class="container" style="margin-top: 40px;">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 members-mobile">

      <!-- Team 1 -->
      <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 member-content">
        <div class="country-team">NETHERLANDS, BELGIUM, NORDIC COUNTRIES AND EAST EUROPE</div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <div class="foto-team"><img src="/images/contact/team-07.jpg"></div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
          <div class="name-team">José Costa</div> 
          <div class="function-team">Brand Ambassador</div>
          <div class="email-team"><i class="fas fa-envelope" aria-hidden="true"></i><a href="mailto:jcosta@luxxu.net">jcosta@luxxu.net</a></div>
          <div class="skype-team"><i class="fab fa-skype" aria-hidden="true"></i>loureiro.e.costa</div>
          <div class="mobile-team"><i class="fas fa-phone" aria-hidden="true"></i>+351 915 204 686</div>
          <div class="whatsapp-team"><a href="//api.whatsapp.com/send?phone=351915204686&text=Hello, I'm interested in LUXXU pieces. Can you help me?" target="_blank"><img src="https://via.placeholder.com/120x25/a5a5a5" class="img-responsive"></a></div>
        </div>
      </div> -->

      <!-- Team 2 -->
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 member-content">
        <div class="country-team">MIDDLE EAST AND ASIA</div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <div class="foto-team"><img src="/images/contact/team-03.jpg"></div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
          <div class="name-team">Diogo Ribeiro</div> 
          <div class="function-team">Brand Ambassador</div>
          <div class="email-team"><i class="fas fa-envelope" aria-hidden="true"></i><a href="mailto:dribeiro@luxxu.net">dribeiro@luxxu.net</a></div>
          <div class="skype-team"><i class="fab fa-skype" aria-hidden="true"></i>Diogoribeiro_26</div>
          <div class="mobile-team"><i class="fas fa-phone" aria-hidden="true"></i>+351 915 234 499</div>
          <div class="whatsapp-team"><a href="//api.whatsapp.com/send?phone=351915234499&text=Hello, I'm interested in LUXXU pieces. Can you help me?" target="_blank"><img src="/images/contact/2019/whatsapp-message.png" class="img-responsive"></a></div>
        </div>
      </div>

      <!-- Team 3 -->
      <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 member-content">
        <div class="country-team">CENTRAL & NORTH EAST USA AND CANADA</div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <div class="foto-team"><img src="/images/contact/team-05.jpg"></div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
          <div class="name-team">Ana Ribeiro</div> 
          <div class="function-team">Brand Ambassador</div>
          <div class="email-team"><i class="fas fa-envelope" aria-hidden="true"></i><a href="mailto:amartins@luxxu.net">amartins@luxxu.net</a></div>
          <div class="skype-team"><i class="fab fa-skype" aria-hidden="true"></i>ana_martins.ribeiro</div>
          <div class="mobile-team"><i class="fas fa-phone" aria-hidden="true"></i>+351 912 528 471</div>
          <div class="whatsapp-team"><a href="//api.whatsapp.com/send?phone=351912528471&text=Hello, I'm interested in LUXXU pieces. Can you help me?" target="_blank"><img src="https://via.placeholder.com/120x25/a5a5a5" class="img-responsive"></a></div>
        </div>
      </div> -->

      <!-- Team 4 -->
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 member-content">
        <div class="country-team">EUROPE AND AFRICA</div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <div class="foto-team"><img src="/images/contact/team-09.jpg"></div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
          <div class="name-team">Cláudia Moreira</div> 
          <div class="function-team">Brand Ambassador</div>
          <div class="email-team"><i class="fas fa-envelope" aria-hidden="true"></i><a href="mailto:cmoreira@luxxu.net">cmoreira@luxxu.net</a></div>
          <div class="skype-team"><i class="fab fa-skype" aria-hidden="true"></i>cmoreira_76</div>
          <div class="mobile-team"><i class="fas fa-phone" aria-hidden="true"></i>+351 911 823 455</div>
          <div class="whatsapp-team"><a href="//api.whatsapp.com/send?phone=351911823455&text=Hello, I'm interested in LUXXU pieces. Can you help me?" target="_blank"><img src="/images/contact/2019/whatsapp-message.png" class="img-responsive"></a></div>
        </div>
      </div>

      <!-- Team 5 -->
      <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 member-content">
        <div class="country-team">FRANCE, AUSTRIA, GERMANY, SWITZERLAND AND AFRICA</div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <div class="foto-team"><img src="/images/contact/team-11.jpg"></div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
          <div class="name-team">Diana Pires</div> 
          <div class="function-team">Brand Ambassador</div>
          <div class="email-team"><i class="fas fa-envelope" aria-hidden="true"></i><a href="mailto:dpires@luxxu.net">dpires@luxxu.net</a></div>
          <div class="skype-team"><i class="fab fa-skype" aria-hidden="true"></i>dianacarvalhopires</div>
          <div class="mobile-team"><i class="fas fa-phone" aria-hidden="true"></i>+351 917 695 547</div>
          <div class="whatsapp-team"><a href="//api.whatsapp.com/send?phone=351917695547&text=Hello, I'm interested in LUXXU pieces. Can you help me?" target="_blank"><img src="https://via.placeholder.com/120x25/a5a5a5" class="img-responsive"></a></div>
        </div>
      </div> -->

      <!-- Team 6 -->
      <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 member-content">
        <div class="country-team">SOUTH EAST USA AND SOUTH AMERICA</div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <div class="foto-team"><img src="/images/contact/francisco-marques.jpg"></div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
          <div class="name-team">Francisco Marques</div> 
          <div class="function-team">Brand Ambassador</div>
          <div class="email-team"><i class="fas fa-envelope" aria-hidden="true"></i><a href="mailto:fmarques@luxxu.net">fmarques@luxxu.net</a></div>
          <div class="skype-team"><i class="fab fa-skype" aria-hidden="true"></i>franciscomarques_21</div>
          <div class="mobile-team"><i class="fas fa-phone" aria-hidden="true"></i>+351 910 463 037</div>
          <div class="whatsapp-team"><a href="//api.whatsapp.com/send?phone=351910463037&text=Hello, I'm interested in LUXXU pieces. Can you help me?" target="_blank"><img src="https://via.placeholder.com/120x25/a5a5a5" class="img-responsive"></a></div>
        </div>
      </div> -->

      <!-- Team 7 -->
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 member-content">
        <div class="country-team">RUSSIAN SPEAKING COUNTRIES</div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <div class="foto-team"><img src="/images/contact/anastasia-zharkova.jpg"></div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
          <div class="name-team">Anastasia Zharkova</div> 
          <div class="function-team">Brand Ambassador</div>
          <div class="email-team"><i class="fas fa-envelope" aria-hidden="true"></i><a href="mailto:azharkova@luxxu.net">azharkova@luxxu.net</a></div>
          <div class="skype-team"><i class="fab fa-skype" aria-hidden="true"></i>zhastia</div>
          <div class="mobile-team"><i class="fas fa-phone" aria-hidden="true"></i>+351 911 777 950</div>
          <div class="whatsapp-team"><a href="//api.whatsapp.com/send?phone=351911777950&text=Hello, I'm interested in LUXXU pieces. Can you help me?" target="_blank"><img src="/images/contact/2019/whatsapp-message.png" class="img-responsive"></a></div>
        </div>
      </div>

      <!-- Team 8 -->
      <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 member-content">
        <div class="country-team">ASIA</div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <div class="foto-team"><img src="/images/contact/team-12.jpg"></div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
          <div class="name-team">Luísa Pereira</div> 
          <div class="function-team">Brand Ambassador</div>
          <div class="email-team"><i class="fas fa-envelope" aria-hidden="true"></i><a href="mailto:lpereira@luxxu.net">lpereira@luxxu.net</a></div>
          <div class="skype-team"><i class="fab fa-skype" aria-hidden="true"></i>lpereira_150</div>
          <div class="mobile-team"><i class="fas fa-phone" aria-hidden="true"></i>+351 916 981 110</div>
          <div class="whatsapp-team"><a href="//api.whatsapp.com/send?phone=351916981110&text=Hello, I'm interested in LUXXU pieces. Can you help me?" target="_blank"><img src="https://via.placeholder.com/120x25/a5a5a5" class="img-responsive"></a></div>
        </div>
      </div> -->

      <!-- Team 9 -->
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 member-content">
        <div class="country-team">AMERICAS AND CANADA</div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <div class="foto-team"><img src="/images/contact/team-13.jpg"></div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
          <div class="name-team">Rui Soares</div> 
          <div class="function-team">Brand Ambassador</div>
          <div class="email-team"><i class="fas fa-envelope" aria-hidden="true"></i><a href="mailto:rsoares@luxxu.net">rsoares@luxxu.net</a></div>
          <div class="skype-team"><i class="fab fa-skype" aria-hidden="true"></i>ruisoares_28</div>
          <div class="mobile-team"><i class="fas fa-phone" aria-hidden="true"></i>+351 915 234 588</div>
          <div class="whatsapp-team"><a href="//api.whatsapp.com/send?phone=351915234588&text=Hello, I'm interested in LUXXU pieces. Can you help me?" target="_blank"><img src="/images/contact/2019/whatsapp-message.png" class="img-responsive"></a></div>
        </div>
      </div>

      <!-- Team 10 -->
      <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 member-content">
        <div class="country-team">ONDE ?????????????</div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <div class="foto-team"><img src="/images/contact/team-14.jpg"></div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
          <div class="name-team">NOME ?????</div> 
          <div class="function-team">FUNÇÃO ?????</div>
          <div class="email-team"><i class="fas fa-envelope" aria-hidden="true"></i><a href="mailto:dribeiro@luxxu.net">MAIL ??????</a></div>
          <div class="skype-team"><i class="fab fa-skype" aria-hidden="true"></i>SKYPE ????????</div>
          <div class="mobile-team"><i class="fas fa-phone" aria-hidden="true"></i> CONTACTO ???????</div>
          <div class="whatsapp-team"><a href="//api.whatsapp.com/send?phone=351919999999&text=Hello, I'm interested in LUXXU pieces. Can you help me?" target="_blank"><img src="https://via.placeholder.com/120x25/a5a5a5" class="img-responsive"></a></div>
        </div>
      </div> -->

      <!-- Team 11 -->
      <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 member-content">
        <div class="country-team">PRESS RELATIONS MANAGER</div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <div class="foto-team"><img src="/images/contact/team-06.jpg"></div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
          <div class="name-team">Sofia Oliveira</div> 
          <div class="function-team">Press Relations Manager</div>
          <div class="email-team"><i class="fas fa-envelope" aria-hidden="true"></i><a href="mailto:soliveira@luxxu.net">soliveira@luxxu.net</a></div>
          <div class="skype-team"><i class="fab fa-skype" aria-hidden="true"></i>soliveira_64</div>
          <div class="mobile-team"><i class="fas fa-phone" aria-hidden="true"></i>+351 914 925 846</div>
          <div class="whatsapp-team"><a href="//api.whatsapp.com/send?phone=351914925846&text=Hello, I'm interested in LUXXU pieces. Can you help me?" target="_blank"><img src="https://via.placeholder.com/120x25/a5a5a5" class="img-responsive"></a></div>
        </div>
      </div> -->

    </div>

  </div>

  <!-- CONTACT FORM -->
  <div class="container" style="margin-top: 26px;">
    <div class="separator"><h3 class="background"><span style="color: #A58A62; font-size: 16px;">GENERAL INQUIRE</span></h3></div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
     @include('includes/forms/contact/general-inquire')
    </div>
  </div>

  <!-- MAP OFFICES -->
  <div class="container" style="margin-top: 20px;">
    <div class="separator" style="margin-bottom: 35px;"><h3 class="background"><span style="color: #A58A62; font-size: 16px;">WHERE TO FIND US</span></h3></div>
    
    <div id="map" style="margin-bottom: 30px;"></div>
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 map-offices" style="margin-top: 20px;">
      
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 map-offices-box">
        <div class="country-team" style="min-height: auto !important;">PORTUGAL OFFICE</div>
        <p>Rua Particular de Regueirais, 33</p>
        <p>4435-379 Rio Tinto</p>
        <p>Portugal</p>
        <p><a href="mailto:info@luxxu.net">info@luxxu.net</a></p>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 map-offices-box">
        <div class="country-team" style="min-height: auto !important;">COVET DOURO</div>
        <p>Avenida Clube de Caçadores, 4604</p>
        <p>4515-654 Porto</p>
        <p>Portugal</p>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 map-offices-box">
        <div class="country-team" style="min-height: auto !important;">COVET LONDON</div>
        <p>1 Regal House Lensbury Avenue</p>
        <p>Fulham London SW6 2GZ</p>
        <p>London</p>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 map-offices-box">
        <div class="country-team" style="min-height: auto !important;">COVET PARIS</div>
        <p>154 Rue des Rosiers</p>
        <p>93400 Saint-Ouen</p>
        <p>France</p>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 map-offices-box">
        <div class="country-team" style="min-height: auto !important;">COVET NYC</div>
        <p>“The Mansion”| 172 Madison Ave, 3rd Floor</p>
        <p>New York , NY 10016</p>
        <p>United States</p>
      </div>
    
    </div>

  </div>

@endsection


@section('footer_scripts')

  <!-- Brand history - home page -->
  <script>
      function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
              tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
      }

      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
  </script>

@endsection