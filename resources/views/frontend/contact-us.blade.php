@extends('layouts.app')

@section('head_metas')

    <title>Contact Us | Luxxu | Modern Design and Living</title>
    @if (Session::has('data'))
        <meta http-equiv="refresh" content="5;url=/download/{{ Session::get('data') }}">
    @endif
    <meta property="og:title" content="Contact Us | Luxxu | Modern Design and Living"/>
    <meta property="og:description" content="" />
    <meta property="og:type" content="Contact Us" />
    <meta property="article:author" content="Contact Us | Luxxu | Modern Design and Living" />
    <meta property="article:published_time" content="" />
    <meta property="og:url" content="../contact-us" />
    <meta property="og:site_name" content="{!! env('BRAND_NAME') !!}" />
    <meta name="description" content="" />

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
      .title-inspirations-page {
        margin-top: 30px;
        margin-bottom: 30px;
      }
      .title-inspirations-page h2 {
        text-align: center;
        font-size: 25px;
        font-weight: 100 !important;
        font-family: 'Lato', sans-serif;
        margin-bottom: 10px;
      }
      .title-inspirations-page h4 {
        text-align: center;
        font-size: 17px;
        font-weight: 500 !important;
        font-family: 'Lato', sans-serif;
        color: #A58A62;
        letter-spacing: 0.5pt;
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
        top: 35%;
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
      .ambassador-banner .get-contact {
          width: 180px;
          margin: 0 auto;
          border: 1px solid #FFF;
          padding: 10px;
          font-size: 16px;
          letter-spacing: 1px;
          font-weight: 100;
          color: #FFF;
          margin-top: 15px;
          cursor: pointer;
      }
      .ambassador-banner-mobile .get-contact {
          width: 180px;
          margin: 0 auto;
          border: 1px solid #FFF;
          padding: 10px;
          font-size: 16px;
          letter-spacing: 1px;
          font-weight: 100;
          color: #FFF;
          margin-top: 15px;
          cursor: pointer;
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
          position: relative;
        }
        .member-content .col-lg-7 {
          padding-left:30px; 
        }
        .ambassador-info {
          position: absolute;
          top: 50% !important;
          transform: translateY(-50%);
        }
        .ambassador-banner-mobile .get-contact {
          width: 130px !important;
          text-align: center;
          padding: 8px !important;
          font-size: 13px !important;
        }
      }
    </style>

@endsection

@section('content')

    <!-- TITLE PAGE -->
      <div class="row">
        <div class="col-md-12 title-inspirations-page">
          <h2>Get In Touch</h2>
          <h4>#lifestylebyluxxu</h4>
        </div>
      </div>

      <!-- CONTACT FORM -->
      <div class="container" style="margin-top: 10px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            @include('includes/forms/contact/contact-us')

        </div>
      </div>

      <!-- AMBASSADOR BANNER -->
      <div class="row" style="margin-top: 40px;">
        <!-- banner pc -->
        <div class="ambassador-banner">
          <img src="/images/contact/2019/meet-ambassadors.jpg" class="img-responsive">
          <div class="ambassador-info">
            <h2 class="text-center">MEET YOUR AMBASSADORS</h2>
            <h3 class="text-center">Get in direct contact with the responsible for your market</h3>
            <a href="/brand-ambassadors" class="get-contact">GET CONTACT</a>
          </div>
        </div>
        <!-- banner mobile -->
        <div class="ambassador-banner-mobile">
          <img src="/images/contact/2019/meet-ambassadors-mobile.jpg" class="img-responsive">
          <div class="ambassador-info">
            <h2 class="text-center">MEET YOUR AMBASSADORS</h2>
            <h3 class="text-center">Get in direct contact with the responsible for your market</h3>
            <a href="/brand-ambassadors" class="get-contact">GET CONTACT</a>
          </div>
        </div>
      </div>

      <!-- MAP OFFICES -->
      <div class="container" style="margin-top: 35px; margin-bottom: 30px; clear: both;">
        <div class="col-md-12 title-inspirations-page">
          <h2>Visit Us</h2>
        </div>

        <div id="map"></div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-12 map-offices" style="margin-top: 50px;">
    <div class="col-xl-4 col-lg-4 col-md-6 col-12 map-offices-box float-left">
        <div class="country-team" style="min-height: auto !important;">PORTUGAL OFFICE</div>
        <p>Rua Particular de Regueirais, 33</p>
        <p>4435-379 Rio Tinto</p>
        <p>Portugal</p>
        <p><a href="mailto:info@luxxu.net">info@luxxu.net</a>
        </p>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-12 map-offices-box float-left">
        <div class="country-team" style="min-height: auto !important;">COVET DOURO</div>
        <p>Avenida Clube de Ca&#xE7;adores, 4604</p>
        <p>4515-654 Porto</p>
        <p>Portugal</p>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-12 map-offices-box float-left">
        <div class="country-team" style="min-height: auto !important;">COVET LONDON</div>
        <p>1 Regal House Lensbury Avenue</p>
        <p>Fulham London SW6 2GZ</p>
        <p>London</p>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-12 map-offices-box float-left">
        <div class="country-team" style="min-height: auto !important;">COVET PARIS</div>
        <p>154 Rue des Rosiers</p>
        <p>93400 Saint-Ouen</p>
        <p>France</p>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-12 map-offices-box float-left">
        <div class="country-team" style="min-height: auto !important;">COVET NYC</div>
        <p>&#x201C;The Mansion&#x201D;| 172 Madison Ave, 3rd Floor</p>
        <p>New York , NY 10016</p>
        <p>United States</p>
    </div>
</div>

      </div>


      <!-- VIDEO -->
      <div class="row video-content" style="margin-top: 30px; clear: both;">
        <div class="col-xs-12 nopadding">
          <a href="https://youtu.be/6NcbsD17RDo" target="_blank"><img src="/images/contact/2019/video.jpg"></a>
        </div>
      </div>

@endsection


@section('footer_scripts')

@endsection