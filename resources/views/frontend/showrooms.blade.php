@extends('layouts.app')

@section('head_metas')

    <title>Showrooms | Luxxu | Modern Design and Living</title>
    @if (Session::has('data'))
        <meta http-equiv="refresh" content="5;url=/download/{{ Session::get('data') }}">
    @endif
    <meta property="og:title" content="Showrooms | Luxxu | Modern Design and Living"/>
    <meta property="og:description" content="" />
    <meta property="og:type" content="Showrooms" />
    <meta property="article:author" content="Showrooms | Luxxu | Modern Design and Living" />
    <meta property="article:published_time" content="" />
    <meta property="og:url" content="../showrooms" />
    <meta property="og:site_name" content="{!! env('BRAND_NAME') !!}" />
    <meta name="description" content="" />

@endsection


@section('head_style')

  <link rel="stylesheet" href="https://www.bocadolobo.com/css/bootstrap/bootstrap-datepicker3.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="js/parsley.min.js"></script>

  <style>
    .showrooms-menu {
      padding-bottom: 20px;
    }
    .showrooms-title {
      padding-top: 20px;
      padding-bottom: 30px;
    }
    .showrooms-title h1 {
      font-weight: 600;
      color: black;
      font-family: 'Lato', sans-serif;
      letter-spacing: 2pt;
    }
    .experiences-ebooks {
      padding-top: 6%;
      padding-bottom: 6%;
      padding-left: 30px;
      padding-right: 30px;
    }
    .experiences-ebooks h5 {
      color: black;
      text-align: left;
      font-weight: 400;
      letter-spacing: 3pt;
      font-size: 17px;
      line-height: 8pt;
    }
    .experiences-ebooks h1 {
      font-size: 45px;
      color: black;
      letter-spacing: 9pt;
      margin-bottom: 20px;
    }
    .experiences-ebooks p {
      font-size: 14px;
      color: black;
      letter-spacing: 0.7pt;
    }
    .single-ebooks {
      padding-left: 15px;
      padding-right: 15px;
    }
    ul.flex-direction-nav {
      display: none;
    }
    .padding-experiences {
      padding: 7%;
    }
    .padding-experiences p {
      line-height: 17px;
      font-size: 11px;
      margin-bottom: 20px;
    }
    .padding-experiences h4 {
      font-size: 11px;
      letter-spacing: 0.5pt;
      margin-bottom: 5px;
    }
    .padding-experiences h1 {
      font-weight: normal;
      margin-bottom: 15px;
    }
    .padding-experiences h3 {
      font-size: 12px;
      font-weight: bold;
      margin-bottom: 6px;
    }
    .form-appointment-showrooms {
      width: 100%;
    }
    .form-appointment-showrooms input, select {
      font-size: 11px !important;
      line-height: 10pt !important;
      letter-spacing: 0.5pt;
      padding-left: 6px !important;
      height: auto;
      border: 1px solid rgb(152, 151, 151);
    }
    .form-appointment-showrooms input#contact-tag {
      background-color: black;
      border-color: black;
      color: white;
      letter-spacing: 1pt;
    }
    div#date_1, div#date_2, div#date_3, div#date_4 {
      width: 100%;
    }
    .product_thumb h5 {
      background-color: white;
      font-size: 10px;
      border: 1px solid #545454;
      color: #4e4e4e;
      padding: 5px;
      padding-right: 15px;
      padding-left: 15px;
      display: inline-block;
      letter-spacing: 0.5pt;
    }
    .products-showrooms {
      margin-bottom: 50px;
    }
    .products-showrooms h2 {
      color: black;
      margin-bottom: 15px;
    }
    .showrooms-title h5 {
      text-align: center;
      margin-top: -10px;
    }
    .flex-control-paging li {
      float: none;
      display: inline-block;
    }

    .request {
      width: 52%;
      float: none; 
      margin: 10px 0px;
      line-height: 1;
    }

    .request a {
      color: #4e4e4e !important;
      font-weight: 600;
    }

    .request img {
      display: none;
    }

    .buy-button .wrapper .slideToggleBox {
      position: absolute;
      width: 115%;
      left: -15px;
      padding: 15px 15px 15px;
      background-color: rgb(250, 250, 250);
    }

    .request .slideToggleBox {
      margin-top: 15px;
    }

    @media screen and (max-width: 700px) {
      .nomobile {
        display: none;
      }
    }
  </style>

@endsection


@section('content')

    <div class="row showrooms-menu">
      <div class="container">
        <div class="col-md-12 text-center showrooms-title">
          <h1>SHOWROOMS</h1>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 showrooms-title">
          <a href="#covet-douro">
            <img src="/images/showrooms/menu/covet-douro.jpg">
            <h5>COVET DOURO</h5>
          </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 showrooms-title">
          <a href="#covet-london">
            <img src="/images/showrooms/menu/covet-london.jpg">
            <h5>COVET LONDON</h5>
          </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 showrooms-title">
          <a href="#covet-paris">
            <img src="/images/showrooms/menu/covet-paris.jpg">
            <h5>COVET PARIS</h5>
          </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 showrooms-title">
          <a href="#covet-nyc">
            <img src="/images/showrooms/menu/covet-nyc.jpg">
            <h5>COVET NYC</h5>
          </a>
        </div>
      </div>
    </div>

    <!-- 
    <div class="row" style="background-image: url(https://www.covethouse.eu/images/background-experiences-ebooks.jpg);padding-top: 30px;padding-bottom: 20px;background-size: 100%;">
      <div class="container">
        <div class="col-md-6 experiences-ebooks">
          <h5>EXPERIENCES</h5>
          <h1>EBOOKS</h1>
          <p>Discover more about each experience and city with<br> Covet House’s <b>FREE ebooks</b>.</p>
          <a href="">DOWNLOAD ALL</a>
        </div>

        <div class="col-md-2 text-center single-ebooks">
          <img src="https://www.covethouse.eu/wp-content/uploads/2018/09/ebook-welcome.png">
          <h3>COVET DOURO</h3>
          <a href="">DOWNLOAD</a>
        </div>
        <div class="col-md-2 text-center single-ebooks">
          <img src="https://www.covethouse.eu/wp-content/uploads/2018/09/ebook-london.png">
          <h3>COVET LONDON</h3>
          <a href="">DOWNLOAD</a>
        </div>
        <div class="col-md-2 text-center single-ebooks">
          <img src="https://www.covethouse.eu/wp-content/uploads/2018/09/ebook-paris.png">
          <h3>COVET PARIS</h3>
          <a href="">DOWNLOAD</a>
        </div>
      </div>
    </div> 
    -->


    <!-- COVET DOURO -->
    <div class="row" style="margin-top: 0px;" id="covet-douro">
      <div class="flexslider" style="position: relative;">
        <ul class="slides">
          <li><a href="https://www.youtube.com/watch?v=6J7qho82Sz4" target="_blank"><img src="/images/showrooms/douro-video.jpg"></a></li>
          <li><a href="http://covethouse.eu/virtual-tours/douro/" target="_blank"><img src="/images/showrooms/douro-showroom.jpg"></a></li>
        </ul>
      </div>
    </div>

    <div class="row" style="margin-top: -3px;margin-bottom: 30px;">
      <div class="col-md-6 col-sm-12 col-xs-12 padding-experiences">
        <h1>COVET DOURO</h1>
        <p>The ultimate experience of lived-design specially conceived for all design lovers worldwide. <br>An ancient three floor waterfront mansion in Oporto located in one of the most beautiful landscapes of Europe, Douro, a UNESCO World Heritage site.</p>

        <h4>OPENING HOURS:</h4>
        <p>By appointment only (schedule now)</p>
        <h4>ADDRESS:</h4>
        <p>Avenida Clube de Caçadores, 4604 <br>
        4515-654 Porto, Portugal</p>
        <h4>PHONE:</h4>
        <p><a href="tel:351915204663">+351 915 204 663</a></p>

        <h3>BOOK AN APPOINTMENT</h3>
        @include('includes/forms/contact/showroom-douro')
      </div>

      <div class="col-md-6 col-sm-12 col-xs-12 nopadding">
        <div class="flexslider" style="position: relative;">
          <ul class="slides">
            <li><img src="/images/showrooms/covet-douro/img_01.jpg"></li>
            <li><img src="/images/showrooms/covet-douro/img_03.jpg"></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row products-showrooms">
      <div class="container">
        <div class="col-md-12 text-center">
          <h2>PRODUCTS YOU CAN SEE AT COVET DOURO</h2>
        </div>
        <div class="carrousel_products text-center">

          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product_thumb">
            <a href="/products/waterfall-wall">
              <img srcset="/images/products/thumbnails/waterfall-wall.jpg" class="img-responsive">
              <div class="product-caption"> WATERFALL </div>
              <div class="product-caption-sub"> WALL </div>
              <h5>MORE INFO</h5>
            </a>
            <h5 class="request buy-button product-thumb btn buy">
              <?php $prodname = "Waterfall Wall"; ?> 
              @include('includes/forms/product-page/request-price')
            </h5>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product_thumb">
            <a href="/products/empire-wall">
              <img srcset="/images/products/thumbnails/empire-wall.jpg" class="img-responsive">
              <div class="product-caption"> EMPIRE </div>
              <div class="product-caption-sub"> WALL </div>
              <h5>MORE INFO</h5>
            </a>
            <h5 class="request buy-button product-thumb btn buy">
              <?php $prodname = "Empire Wall"; ?> 
              @include('includes/forms/product-page/request-price')
            </h5>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product_thumb">
            <a href="/products/tycho-small-wall">
              <img srcset="/images/products/thumbnails/tycho-small-wall.jpg" class="img-responsive">
              <div class="product-caption"> TYCHO SMALL</div>
              <div class="product-caption-sub"> WALL </div>
              <h5>MORE INFO</h5>
            </a>
            <h5 class="request buy-button product-thumb btn buy">
              <?php $prodname = "Tycho Small Wall"; ?> 
              @include('includes/forms/product-page/request-price')
            </h5>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product_thumb">
            <a href="/furniture/empire-column-display">
              <img srcset="/images/furniture/thumbnails/empire-column-display.jpg" class="img-responsive">
              <div class="product-caption"> EMPIRE </div>
              <div class="product-caption-sub"> COLUMN DISPLAY </div>
              <h5>MORE INFO</h5>
            </a>
            <h5 class="request buy-button product-thumb btn buy">
              <?php $prodname = "Empire Column Display"; ?> 
              @include('includes/forms/product-page/request-price')
            </h5>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product_thumb">
            <a href="/furniture/prisma-stool">
              <img srcset="/images/furniture/thumbnails/prisma-stool.jpg" class="img-responsive">
              <div class="product-caption"> PRISMA </div>
              <div class="product-caption-sub"> STOOL </div>
              <h5>MORE INFO</h5>
            </a>
            <h5 class="request buy-button product-thumb btn buy">
              <?php $prodname = "Prisma Stool"; ?> 
              @include('includes/forms/product-page/request-price')
            </h5>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product_thumb">
            <a href="/furniture/nubian-console">
              <img srcset="/images/furniture/thumbnails/nubian-console.jpg" class="img-responsive">
              <div class="product-caption"> NUBIAN</div>
              <div class="product-caption-sub"> CONSOLE </div>
              <h5>MORE INFO</h5>
            </a>
            <h5 class="request buy-button product-thumb btn buy">
              <?php $prodname = "Nubian Console"; ?> 
              @include('includes/forms/product-page/request-price')
            </h5>
          </div>
        </div>  
      </div>
    </div>
    <!-- end COVET DOURO -->

    <!-- COVET LONDON -->
    <div class="row" style="margin-top: 0px;" id="covet-london">
      <div class="flexslider" style="position: relative;">
        <ul class="slides">
          <li><a href="https://www.youtube.com/watch?v=rAZ2pBIZSPg&t=61s" target="_blank"><img src="/images/showrooms/london-video.jpg"></a></li>
          <li><a href="https://covethouse.eu/virtual-tours/london/" target="_blank"><img src="/images/showrooms/london-showroom.jpg"></a></li>
        </ul>
      </div>
    </div>

    <div class="row" style="margin-top: -3px;margin-bottom: 30px;">
      <div class="col-md-6 col-sm-12 col-xs-12 padding-experiences">
        <h1>COVET LONDON</h1>
        <p>A private showflat in the heart of the world’s design capital: London. Our wish is offer you an intimate design experience attached to an authentic scenario. Conceived with diferent collections of furniture, lighting and accessories, the apartment and its professionals are ready to inspire all the visitors with a private tour over amazing stories behind the pieces.</p>

        <h4>OPENING HOURS:</h4>
        <p>We are open from monday to friday <br>(11 AM TO 5 PM) 24H notice</p>
        <h4>ADDRESS:</h4>
        <p>1 Regal House Lensbury Avenue <br>
        Fulham London <br>
        SW6 2GZ</p>
        <h4>PHONE:</h4>
        <p><a href="tel:4402035926789">+44(0) 203 592 6789</a></p>

        <h3>BOOK AN APPOINTMENT</h3>
        @include('includes/forms/contact/showroom-london')
      </div>

      <div class="col-md-6 col-sm-12 col-xs-12 nopadding">
        <div class="flexslider" style="position: relative;">
          <ul class="slides">
            <li><img src="/images/showrooms/covet-london/img_01.jpg"></li>
            <li><img src="/images/showrooms/covet-london/img_02.jpg"></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row products-showrooms">
      <div class="container">
        <div class="col-md-12 text-center">
          <h2>PRODUCTS YOU CAN SEE AT COVET LONDON</h2>
        </div>
        <div class="carrousel_products text-center">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 nomobile product_thumb">
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product_thumb">
            <a href="/furniture/beyond-console.php">
              <img srcset="/images/furniture/thumbnails/beyond-console.jpg" class="img-responsive">
              <div class="product-caption"> BEYOND </div>
              <div class="product-caption-sub"> CONSOLE </div>
              <h5>MORE INFO</h5>
            </a>
            <h5 class="request buy-button product-thumb btn buy">
              <?php $prodname = "Beyond Console"; ?> 
              @include('includes/forms/product-page/request-price')
            </h5>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product_thumb">
            <a href="/furniture/empire-mirror.php">
              <img srcset="/images/furniture/thumbnails/empire-mirror.jpg" class="img-responsive">
              <div class="product-caption"> EMPIRE </div>
              <div class="product-caption-sub"> MIRROR </div>
              <h5>MORE INFO</h5>
            </a>
            <h5 class="request buy-button product-thumb btn buy">
              <?php $prodname = "Empire Mirror"; ?> 
              @include('includes/forms/product-page/request-price')
            </h5>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product_thumb" style="">
            <a href="/furniture/armour-stool.php">
              <img srcset="/images/furniture/thumbnails/armour-stool.jpg" class="img-responsive">
              <div class="product-caption"> ARMOUR </div>
              <div class="product-caption-sub"> STOOL </div>
              <h5>MORE INFO</h5>
            </a>
            <h5 class="request buy-button product-thumb btn buy">
              <?php $prodname = "Armour Stool"; ?> 
              @include('includes/forms/product-page/request-price')
            </h5>
          </div>
        </div>  
      </div>
    </div>
    <!-- end COVET LONDON -->

    <!-- COVET PARIS -->
    <div class="row" style="margin-top: 0px;" id="covet-paris">
      <div class="flexslider" style="position: relative;">
        <ul class="slides">
          <li><a href="https://www.youtube.com/watch?v=3kbykwdOplo" target="_blank"><img src="/images/showrooms/paris-video.jpg"></a></li>
          <li><a href="http://covethouse.eu/virtual-tours/paris/" target="_blank"><img src="/images/showrooms/paris-showroom.jpg"></a></li>
        </ul>
      </div>
    </div>

    <div class="row" style="margin-top: -3px;margin-bottom: 30px;">
      <div class="col-md-6 col-sm-12 col-xs-12 padding-experiences">
        <h1>COVET PARIS</h1>
        <p>Covet Paris showcases a wide range of products and the tools needed to boost an interior designer’s creativity and complete the most amazing projects.In one place, more than 1600 products and 1250 inspirations represented through a curated selection of interior design sets, room by room.</p>

        <h4>OPENING HOURS:</h4>
        <p>Monday To Friday – 9:30 AM TO 6 PM <br>
        Saturday To Sunday – 9:30 AM TO 7 PM</p>
        <h4>ADDRESS:</h4>
        <p>154 Rue des Rosiers, 93400 Saint-Ouen (inside the Flea Market)</p>
        <h4>PHONE:</h4>
        <p><a href="tel:33622334259">+33 622 334 259</a></p>

        <h3>BOOK AN APPOINTMENT</h3>
        @include('includes/forms/contact/showroom-paris')
      </div>

      <div class="col-md-6 col-sm-12 col-xs-12 nopadding">
        <div class="flexslider" style="position: relative;">
          <ul class="slides">
            <li><img src="/images/showrooms/covet-paris/img_01.jpg"></li>
            <li><img src="/images/showrooms/covet-paris/img_02.jpg"></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row products-showrooms">
      <div class="container">
        <div class="col-md-12 text-center">
          <h2>PRODUCTS YOU CAN SEE AT COVET PARIS</h2>
        </div>
        <div class="carrousel_products text-center">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 product_thumb nomobile">
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product_thumb" style="display: ;">
            <a href="/products/mcqueen-pendant.php">
              <img srcset="/images/products/thumbnails/mcqueen-pendant.jpg" class="img-responsive">
              <div class="product-caption"> MCQUEEN </div>
              <div class="product-caption-sub"> PENDANT </div>
              <h5>MORE INFO</h5>
            </a>
            <h5 class="request buy-button product-thumb btn buy">
              <?php $prodname = "Mcqueen Pendant"; ?> 
              @include('includes/forms/product-page/request-price')
            </h5>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product_thumb">
            <a href="/products/empire-pendant.php">
              <img srcset="/images/products/thumbnails/empire-pendant.jpg" class="img-responsive">
              <div class="product-caption"> EMPIRE </div>
              <div class="product-caption-sub"> PENDANT </div>
              <h5>MORE INFO</h5>
            </a>
            <h5 class="request buy-button product-thumb btn buy">
              <?php $prodname = "Empire Pendant"; ?> 
              @include('includes/forms/product-page/request-price')
            </h5>
          </div>
        </div>  
      </div>
    </div>
    <!-- end COVET PARIS -->

    <!-- COVET NYC -->
    <div class="row" style="margin-top: 0px;" id="covet-nyc">
      <div class="flexslider" style="position: relative;">
        <ul class="slides">
          <li><a href="https://youtu.be/Y5WUH47fhOI" target="_blank"><img src="/images/showrooms/nyc-video.jpg"></a></li>
        </ul>
      </div>
    </div>

    <div class="row" style="margin-top: -3px;margin-bottom: 30px;">
      <div class="col-md-6 col-sm-12 col-xs-12 padding-experiences">
        <h1>COVET NYC</h1>
        <p>A Staging project between Tessler Developments and Covet House makes “The Mansion” at 172 Madison Avenue the most coveted address for Design Lovers and Professionals in the Big Apple, just a few steps away from Madison Square Park, the Flatiron District, Gramercy Park and NoMad, right in the center of one of the city’s chicest neighborhoods.</p>

        <h4>OPENING HOURS:</h4>
        <p>Monday To Friday – 10AM TO 4PM <br>
        By Appointment only</p>
        <h4>ADDRESS:</h4>
        <p>“The Mansion”| 172 Madison Ave, 3rd Floor <br>
        New York , NY 10016</p>
        <h4>PHONE:</h4>
        <p><a href="tel:16469919257">+1 646 991 9257</a></p>

        <h3>BOOK AN APPOINTMENT</h3>
        @include('includes/forms/contact/showroom-nyc')
      </div>

      <div class="col-md-6 col-sm-12 col-xs-12 nopadding">
        <div class="flexslider" style="position: relative;">
          <ul class="slides">
            <li><img src="/images/showrooms/covet-nyc/img_01.jpg"></li>
            <li><img src="/images/showrooms/covet-nyc/img_02.jpg"></li>
            <li><img src="/images/showrooms/covet-nyc/img_03.jpg"></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row products-showrooms">
      <div class="container">
        <div class="col-md-12 text-center">
          <h2>PRODUCTS YOU CAN SEE AT COVET NYC</h2>
        </div>
        <div class="carrousel_products text-center">
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product_thumb">
            <a href="/furniture/spear-console.php">
              <img srcset="/images/furniture/thumbnails/spear-console.jpg" class="img-responsive">
              <div class="product-caption"> SPEAR </div>
              <div class="product-caption-sub"> CONSOLE </div>
              <h5>MORE INFO</h5>
            </a>
            <h5 class="request buy-button product-thumb btn buy">
              <?php $prodname = "Spear Console"; ?> 
              @include('includes/forms/product-page/request-price')
            </h5>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product_thumb">
            <a href="/products/gala-pendant.php">
              <img srcset="/images/products/thumbnails/gala-pendant.jpg" class="img-responsive">
              <div class="product-caption"> GALA </div>
              <div class="product-caption-sub"> PENDANT </div>
              <h5>MORE INFO</h5>
            </a>
            <h5 class="request buy-button product-thumb btn buy">
              <?php $prodname = "Gala Pendant"; ?> 
              @include('includes/forms/product-page/request-price')
            </h5>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product_thumb">
            <a href="/products/babel-suspension.php">
              <img srcset="/images/products/thumbnails/babel-suspension.jpg" class="img-responsive">
              <div class="product-caption"> BABEL </div>
              <div class="product-caption-sub"> SUSPENSION </div>
              <h5>MORE INFO</h5>
            </a>
            <h5 class="request buy-button product-thumb btn buy">
              <?php $prodname = "Babel Suspension"; ?> 
              @include('includes/forms/product-page/request-price')
            </h5>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product_thumb">
            <a href="/products/babel-pendant.php">
              <img srcset="/images/products/thumbnails/babel-pendant.jpg" class="img-responsive">
              <div class="product-caption"> BABEL </div>
              <div class="product-caption-sub"> PENDANT </div>
              <h5>MORE INFO</h5>
            </a>
            <h5 class="request buy-button product-thumb btn buy">
              <?php $prodname = "Babel Pendant"; ?> 
              @include('includes/forms/product-page/request-price')
            </h5>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product_thumb">
            <a href="/products/draycott-wall-I.php">
              <img srcset="/images/products/thumbnails/draycott-wall-I.jpg" class="img-responsive">
              <div class="product-caption"> DRAYCOTT I</div>
              <div class="product-caption-sub"> WALL  </div>
              <h5>MORE INFO</h5>
            </a>
            <h5 class="request buy-button product-thumb btn buy">
              <?php $prodname = "Draycott I Wall Pendant"; ?> 
              @include('includes/forms/product-page/request-price')
            </h5>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product_thumb">
            <a href="/products/burj-wall.php">
              <img srcset="/images/products/thumbnails/burj-wall.jpg" class="img-responsive">
              <div class="product-caption"> BURJ </div>
              <div class="product-caption-sub"> WALL </div>
              <h5>MORE INFO</h5>
            </a>
            <h5 class="request buy-button product-thumb btn buy">
              <?php $prodname = "Burj Wall"; ?> 
              @include('includes/forms/product-page/request-price')
            </h5>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product_thumb">
            <a href="/furniture/navis-armchair.php">
              <img srcset="/images/furniture/thumbnails/navis-armchair.jpg" class="img-responsive">
              <div class="product-caption"> NAVIS </div>
              <div class="product-caption-sub"> ARMCHAIR </div>
              <h5>MORE INFO</h5>
            </a>
            <h5 class="request buy-button product-thumb btn buy">
              <?php $prodname = "Navis Armchair"; ?> 
              @include('includes/forms/product-page/request-price')
            </h5>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product_thumb">
            <a href="/furniture/armour-stool.php">
              <img srcset="/images/furniture/thumbnails/armour-stool.jpg" class="img-responsive">
              <div class="product-caption"> ARMOUR </div>
              <div class="product-caption-sub"> STOOL </div>
              <h5>MORE INFO</h5>
            </a>
            <h5 class="request buy-button product-thumb btn buy">
              <?php $prodname = "Armour Stool"; ?> 
              @include('includes/forms/product-page/request-price')
            </h5>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product_thumb">
            <a href="/products/empire-center-table.php">
              <img srcset="/images/products/thumbnails/empire-center-table.jpg" class="img-responsive">
              <div class="product-caption"> EMPIRE </div>
              <div class="product-caption-sub"> CENTER TABLE </div>
              <h5>MORE INFO</h5>
            </a>
            <h5 class="request buy-button product-thumb btn buy">
              <?php $prodname = "Empire Center Table"; ?> 
              @include('includes/forms/product-page/request-price')
            </h5>
          </div>
        </div>  
      </div>
    </div>

@endsection


@section('footer_scripts')

  <script type="text/javascript">
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide",
        slideshow: false,
        touch: true, 
        // mousewheel: true, 
      });
    });
  </script>

  <!-- Datepicker -->
  <script type="text/javascript">
    $(function(){
        $('.date').each(function(){
            $(this).datepicker({
                todayHighlight: true,
                autoclose: true,
                startDate: "today",
                format: "dd MM yyyy"
            });
        });
    });
  </script>

@endsection