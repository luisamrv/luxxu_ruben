@extends('layouts.app')

@section('head_metas')

    <title>About | Luxxu | Modern Design and Living</title>
    @if (Session::has('data'))
        <meta http-equiv="refresh" content="5;url=/download/{{ Session::get('data') }}">
    @endif
    <meta property="og:title" content="About | Luxxu | Modern Design and Living"/>
    <meta property="og:description" content="" />
    <meta property="og:type" content="About" />
    <meta property="article:author" content="About | Luxxu | Modern Design and Living" />
    <meta property="article:published_time" content="" />
    <meta property="og:url" content="../about" />
    <meta property="og:site_name" content="{!! env('BRAND_NAME') !!}" />
    <meta name="description" content="" />

@endsection

@section('head_style')

    <style type="text/css">
      .title-inspirations-page {
        margin-top: 30px;
        margin-bottom: 25px;
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
      .about-description {
        font-size: 12px;
        text-align: center;
        color: #555;
        margin-left: 6%;
        margin-right: 6%;
      }
      .about-description-text {
        font-size: 14px;
        color: #555;
        text-align: center;
      }
      .active-header {
        border:none;
      }
      .inactive-header {
        border:none;
      }
      .separator {
        margin: 25px auto 8px;
      }
      .info_about {
        margin: 10px 0px;
      }
      .background-brand-history {
        background-size: 100%;
        padding: 90px !important;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-image: url(https://www.luxxu.net/images/footer/footer-background.jpg);
        height: 475px;
      }
      .brand-title {
        color: #FFF;
        font-weight: 600;
        font-size: 19px;
        margin-bottom: 15px;
      }
      .brand-description {
        font-size: 14px;
        color: #d5d5d5;
        text-align: left;
      }
      .tablinks {
        background-color: transparent;
        text-align: left;
        margin-bottom: 10px;
        font-family: 'Lato', sans-serif;
        font-weight: 700;
        letter-spacing: 1.1px;
        border: none;
        color: #FFF;
        font-size: 14px;
      }
      .tablinks.active {
        background-color: transparent;
        text-align: left;
        margin-bottom: 10px;
        border: 0px;
        outline: none;
        font-weight: 700;
        letter-spacing: 1.1px;
        font-size: 15.5px;
        border: none;
        color: #FFF;
      }
      .tablinks:focus {
        outline: none !important;
        box-shadow: none !important;
      }
      .brand-tablink {
        width: 6%;
      }
      .accordion-content p {
        font-size: 13px;
      }

      .about-banner {
        display: block;
      }
      .about-banner-mobile {
        display: none;
      }

      @media (min-width: 320px) and (max-width: 560px) {
        .about-banner {
          display: none;
        }
        .about-banner-mobile {
          display: block;
        }
        .about-content .col-lg-12 {
          margin-top: 20px !important;
        }
        div#intro-terms {
          width: 85% !important;
        }
        .background-brand-history {
          background-attachment: scroll;
          background-size: cover;
          padding: 30px !important;
          height: 380px !important;
        }
        .brand-tablink {
          width: 100%;
        }
        .about-content .col-lg-12 {
          margin-bottom: 20px !important;
        }
      }

      @media (min-width: 560px) and (max-width: 770px) {
        .brand-tablink {
          width: 100%;
        }
        .background-brand-history {
          background-attachment: scroll;
          background-size: cover;
          padding: 30px !important;
          height: 400px !important;
        }
      }

      @media (min-width: 770px) and (max-width: 1000px) {
        .brand-tablink {
          width: 8%;
        }
      }

    </style>

@endsection

@section('content')

  <!-- TITLE PAGE -->
  <div class="row">
    <div class="col-md-12 title-inspirations-page">
      <h2>Enter LUXXU's World!</h2>
      <h4>#lifestylebyluxxu</h4>
    </div>
  </div>

  <!-- ABOUT IMG -->
  <div class="row" style="margin-bottom: 15px;">
    <img src="/images/about/2019/about.jpg" class="img-responsive about-banner">
    <img src="/images/about/2019/about-mobile.jpg" class="img-responsive about-banner-mobile">
  </div>

  <!-- ABOUT DESCRIPTION -->
  <div class="container about-content">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 45px; margin-bottom: 35px;">
      <div class="about-description">
        <h2><b><i>Everything we create, we believe in redesigning your definition of art.</i></b></h2>
        <br>
        <p class="about-description-text">
        LUXXU’s Empire is shaping its future by setting trends with timeless pieces and refined elegance. Lighting was the start of a luxury journey stating itself as classic with a modern twist.
        Today, a new epoch unveils at LUXXU. Daring designs are symphonies created not only with one key object. Ambiences are an everlasting aesthetic language shared by every element. 
        LUXXU now gives you the opportunity to create those ambiences. LUXXU uncovers a crucial Imperial complement, a Furniture Collection. Offering resembling noble materials and finishing’s where customization blossoms as brand capital.
        Be our guest and get inspired by the greatest collection of timeless pieces.
        </p>
      </div>
    </div>
  </div>  

  <!-- BRAND HISTORY -->
  <div class="background-brand-history">
    <div class="container">
      <div class="row">

        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 brand-tablink">
            <div class="tab">
              <button class="tablinks" onclick="openCity(event, '2018')" id="defaultOpen">2018</button>
              <button class="tablinks" onclick="openCity(event, '2016')">2016</button>
              <button class="tablinks" onclick="openCity(event, '2014')">2014</button>
            </div>
        </div>
        
        <div class="col-md-6 col-sm-10 col-xs-12">

          <div class="col-md-12 col-sm-12 col-xs-12">
            <h2 class="brand-title">BRAND'S HISTORY</h2>
          </div>

          <div class="col-md-9 col-sm-9 col-xs-12">
            <div id="2018" class="tabcontent">
              <p class="brand-description">Driven by the dazzling success of the lighting segment, the new furniture collection reflects the desire to elevate LUXXU to a new dimension. The aspiration to offer a disruptive idea in creating environments where conceptual design shines, is fully embraced by this new brand philosophy.
              </p>
            </div>
            <div id="2016" class="tabcontent">
              <p class="brand-description">A new epoch unveils at LUXXU. Daring designs are symphonies created not only with one key object. Ambiences are an everlasting aesthetic language shared by every element. LUXXU uncovers a crucial Imperial complement, a Furniture Collection.
              </p>
            </div>
            <div id="2014" class="tabcontent">
              <p class="brand-description">A unique lighting design brand that was born. A harmonious synthesis between innovation and tradition, the rare handwork techniques of the craftsman and contemporary creativity.
              </p>
            </div>
          </div>
        </div>
        
        <div class="col-md-8"></div>

      </div>
    </div>
  </div>

  <!-- OUR VISION, MISSION, VALUES -->
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 info_about">
      <div id="intro-terms">
        <div id="accordion-container"> 
          
          <div class="separator accordion-header"><h3 class="background"><span style="color: #A58A62;">OUR VISION</span></h3></div>
          <div class="accordion-content"> 
            <br>
            <p>
              LUXXU is the reference Luxury Design, Quality and Innovation. We are present in the most recognisable and exclusive trade shows bringing what we do best, exclusive design by setting trends. LUXXU grants you a glimpse of our world, a harmonious classical world with a modern luxury twist present in every detail.
            </p>
          </div>

          <div class="separator accordion-header"><h3 class="background"><span style="color: #A58A62;">OUR MISSION</span></h3></div>
          <div class="accordion-content"> 
            <br>
            <p>
              Be assured of excellence in every detail of every component. Our supremacy is only achieved by bringing together the wisdom of the craftsmen with a daring and talented creativity.
            </p>
          </div>

          <div class="separator accordion-header"><h3 class="background"><span style="color: #A58A62;">OUR VALUES</span></h3></div>
          <div class="accordion-content"> 
            <br>
            <p>
              <b>Luxury</b><br>
              The most prestigious materials such as 24k gold plated brass, crystal glass, Swarovski crystals and velvet are carefully handled. The handmade techniques reflect the full attention and excellence we put into every detail.<br><br>
              <b>Elegance</b><br>
              Design experiences are what we deliver to you in every product. Each one has the power of elevating its surroundings. The outcome is a merge between refined art and design.<br><br>
              <b>Personality</b><br>
              A consistent search for a stylish functionality is our impulse. From modern to classical environments LUXXU reinvents trends and the concept of lighting and furniture by creating masterpieces.
            </p>
          </div>

        </div>

      </div>
    </div>
  </div><!-- end row -->

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