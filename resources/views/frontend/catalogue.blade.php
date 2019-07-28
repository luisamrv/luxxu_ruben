@extends('layouts.app')

@section('head_metas')

    <title>Catalogue | Luxxu | Modern Design and Living</title>
    @if (Session::has('data'))
        <meta http-equiv="refresh" content="5;url=/download/{{ Session::get('data') }}">
    @endif
    <meta property="og:title" content="Catalogue | Luxxu | Modern Design and Living"/>
    <meta property="og:description" content="" />
    <meta property="og:type" content="Catalogue" />
    <meta property="article:author" content="Catalogue | Luxxu | Modern Design and Living" />
    <meta property="article:published_time" content="" />
    <meta property="og:url" content="../catalogue" />
    <meta property="og:site_name" content="{!! env('BRAND_NAME') !!}" />
    <meta name="description" content="" />

@endsection


@section('head_style')

    <style type="text/css">
        h1.product-title span {
          font-size: 22px;
          line-height: 30pt;
          margin-bottom: 30px;
          font-weight: 600;
          letter-spacing: 1.5pt;
          margin-top: 0px;
          color: #968460;
        }
        button.btn-block-preview-catalogue.download-catalogue-button {
          border: 1px solid grey;
          background-color: transparent;
          padding: 8px;
          font-size: 11px;
          letter-spacing: 0.6pt;
        }
        .modal-open .modal {
          z-index: 10000000;
        }
        .modal-content {
          background-color: rgb(250, 250, 250);
          margin: 15% auto;
          padding: 20px;
          border: 1px solid #888;
          width: 70%;
          height: auto;
        }
        .modal-content button[type="submit"] {
          float: none;
        }
        .modal-header {
          border: none;
          padding: 0px;
        }
        .close {
          opacity: 1;
        }
        .form_landing_catalogue input, select {
          line-height: 12pt;
        }
        .form-section.current {
            display: block;
        }
        .form-section {
          display: none;
        }
        li.parsley-required {
          color: black;
          font-weight: normal;
        }
        li.parsley-type {
          color: black;
          font-weight: normal;
        }
        button.next.btn.btn-info.pull-right {
          background-color: black;
          color: white;
          border: none;
          border-radius: 0px;
          text-transform: uppercase;
          font-family: "PT Sans", sans-serif;
          font-size: 11px;
          letter-spacing: 1pt;
        }
        button.previous.btn.btn-info.pull-left {
          background-color: black;
          color: white;
          border: none;
          border-radius: 0px;
          text-transform: uppercase;
          font-family: "PT Sans", sans-serif;
          font-size: 11px;
          letter-spacing: 1pt;
        }
        .buttonsubmission {
          background-color: black !important;
          color: white;
          border: none;
          border-radius: 0px;
          text-transform: uppercase;
          font-family: "PT Sans", sans-serif;
          font-size: 11px;
          letter-spacing: 1pt !important;
          font-weight: normal !important;
          border: none !important;
          margin-top: 10px;
        }
        .menu-visual-catalogue {
          cursor: pointer;
          margin-bottom: 10px;
        }
        .menu-visual-catalogue div {
          margin-bottom: 0px;
        }
        .button-slide-catalogue {
          text-align: center;
          margin-top: -63%;
        }
        .menu-visual-catalogue img {
          max-width: 100%;
        }
        .menu-visual-catalogue li {
          width: 97.5% !important;
          list-style: none;
        }
        #inspirationals {
          display: none;
          position: absolute;
          z-index: 10000;
         background-color: #e9e7e7;
        }
        .showinspirations:hover #inspirationals {
          display:block;
        }
        #finishes {
          display: none;
          position: absolute;
          z-index: 10000;
         background-color: #e9e7e7;
        }
        .showfinishes:hover #finishes {
          display:block;
        }
        #social {
          display: none;
          position: absolute;
          z-index: 10000;
        }
        .showsocial:hover #social {
          display:block;
        }

        @media screen and (max-width: 991px) {
          .product-title {
            margin-top: 0px !important;
          }
          .col-sm-offset-0.col-xs-offset-0 {
            margin-left: 0px !important;
          }
          #inspirationals, #finishes {
            display: none !important; 
          }
        }
    </style>

@endsection


@section('content')

    <div class="row product">

    <!-- 
    <div class="col-md-12">
      <div class="col-md-4 menu-visual-catalogue showinspirations"><div><a href="https://www.luxxu.net/inspirations/design-books/">INSPIRATIONALS BOOKS</a></div>
        <li id="inspirationals">
          <a href="https://www.luxxu.net/inspirations/design-books/">
            <div class="col-md-4"><img src="https://www.luxxu.net/inspirations/design-books/media/Luxxu's-Color-Trends-2018.png"></div>
            <div class="col-md-4"><img src="https://www.luxxu.net/inspirations/design-books/media/modern-collections-design-space.png"></div>
            <div class="col-md-4"><img src="https://www.luxxu.net/inspirations/design-books/media/winter-christmas-trends.png"></div>
            <div class="col-md-12" style="padding-top: 0px;">SEE MORE ></div>
          </a>
        </li>
      </div>
      <div class="col-md-4 menu-visual-catalogue showfinishes"><div><a href="https://www.luxxu.net/finishes/">FINISHES</a></div>
        <li id="finishes">
          <a href="https://www.luxxu.net/finishes/">
            <div class="col-md-4"><img src="https://www.luxxu.net/images/samples/menu/metal.jpg"></div>
            <div class="col-md-4"><img src="https://www.luxxu.net/images/samples/menu/crystal.jpg"></div>
            <div class="col-md-4"><img src="https://www.luxxu.net/images/samples/menu/swarovski.jpg"></div>
            <div class="col-md-12" style="padding-top: 0px;">SEE MORE ></div>
          </a>
        </li>
      </div>
      <div class="col-md-4 menu-visual-catalogue showsocial"><div><a href="https://www.luxxu.net/landing-page/social/">SOCIAL MEDIA</a> </div>
      </div>
    </div> 
    -->

    <div class="col-md-12 col-md-offset-0">
      <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="padding: 20px;">
        <div class="slide-product-main col-lg-12 col-md-12 col-sm-12 col-xs-12 flexslider" id="slider_product">
          <ul class="slides">
            <li>
              <img src="/images/landing-page/download-catalogue/img_01.jpg" class="img-responsive">
            </li>
            <li>
              <img src="/images/landing-page/download-catalogue/img_02.jpg" class="img-responsive">
            </li>
            <li>
              <img src="/images/landing-page/download-catalogue/img_03.jpg" class="img-responsive">
            </li>
            <li>
              <img src="/images/landing-page/download-catalogue/img_04.jpg" class="img-responsive">
            </li>
            <li>
              <img src="/images/landing-page/download-catalogue/img_05.jpg" class="img-responsive">
            </li>
            <li>
              <img src="/images/landing-page/download-catalogue/img_09.jpg" class="img-responsive">
              <div class="button-slide-catalogue">
                <button type="button" class="btn-block-preview-catalogue download-catalogue-button" data-toggle="modal" data-target="#download-catalogue" style="margin-top: 15px;">
                DOWNLOAD THE CATALOGUE
                </button>
              </div>
            </li>
          </ul>
        </div>
        <!-- <div class="carousel_product_main col-lg-12 col-md-12 col-sm-12 col-xs-12 flexslider" id="carousel_product">
          <ul class="slides">
            <li>
              <img src="/images/landing-page/download-catalogue/preview-catalogue-luxxu-01-thumb.jpg" class="img-responsive">
            </li>
            <li>
              <img src="/images/landing-page/download-catalogue/preview-catalogue-luxxu-02-thumb.jpg" class="img-responsive">
            </li>
            <li>
              <img src="/images/landing-page/download-catalogue/preview-catalogue-luxxu-03-thumb.jpg" class="img-responsive">
            </li>
            <li>
              <img src="/images/landing-page/download-catalogue/preview-catalogue-luxxu-04-thumb.jpg" class="img-responsive">
            </li>
          </ul>
        </div> -->
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 20px;">
        <h1 class="product-title" style="margin-top: 17%; margin-bottom: 24px;">Take a look at our Catalogue and Find out the <span>#LifestyleByLuxxu</span></h1>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product_description">
          <p style="text-align: left;"> Luxxu is synonymous with <a href="https://www.luxxu.net/all-products/?utm_source=Luxxu&utm_medium=website&utm_content=pagecatalogue&utm_campaign=pagecatalogue" target="_blank" style="display: initial;"><b> timeless and contemporary luxury design </b></a>! We ensure excellence in every luxury item through a distinctive approach, combining <a href="https://www.luxxu.net/video/?utm_source=Luxxu&utm_medium=website&utm_content=pagecatalogue&utm_campaign=pagecatalogue" target="_blank" style="display: initial;"><b> manual techniques from our craftsmen with contemporary art </b></a>. Each project is undertaken with dedication and utmost rigor in each detail, from choice of materials to final <a href="https://www.luxxu.net/finishes/?utm_source=Luxxu&utm_medium=website&utm_content=pagecatalogue&utm_campaign=pagecatalogue" target="_blank" style="display: initial;"><b>finishes</b></a>! We not only thrive to create objects with an individual and distinctive character. Our purpose is to involve you in a <a href="https://www.luxxu.net/?utm_source=Luxxu&utm_medium=website&utm_content=pagecatalogue&utm_campaign=pagecatalogue" target="_blank" style="display: initial;"><b>unique design experience</b></a>!</p>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product_description">
            
            @include('includes/forms/catalogue/download-catalogue')
            
        </div>
      </div>
    </div>

    <div class="col-md-12"><div class="separator"><h3 class="background"><span>LUXXU’S ICONIC PIECES</span></h3></div></div>
    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 product_thumb col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
      <a href="/products/empire-chandelier.php">
        <img src="/images/products/thumbnails/empire-chandelier.jpg" class="img-responsive">
        <div class="product-caption"> EMPIRE </div>
        <div class="product-caption-sub"> CHANDELIER </div>
        <div class="product-caption-sub catalogue">SEE MORE</div>
      </a>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 product_thumb">
      <a href="/products/mcqueen-chandelier.php">
        <img src="/images/products/thumbnails/mcqueen-chandelier.jpg" class="img-responsive">
        <div class="product-caption"> MCQUEEN </div>
        <div class="product-caption-sub"> CHANDELIER </div>
        <div class="product-caption-sub catalogue">SEE MORE</div>
      </a>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 product_thumb">
      <a href="/products/tycho-round-suspension.php">
        <img src="/images/products/thumbnails/tycho-round-suspension.jpg" class="img-responsive">
        <div class="product-caption"> TYCHO ROUND </div>
        <div class="product-caption-sub"> SUSPENSION </div>
        <div class="product-caption-sub catalogue">SEE MORE</div>
      </a>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 product_thumb">
      <a href="/products/guggenheim-pendant.php">
        <img src="/images/products/thumbnails/guggenheim-pendant.jpg" class="img-responsive">
        <div class="product-caption"> GUGGENHEIM </div>
        <div class="product-caption-sub"> PENDANT </div>
        <div class="product-caption-sub catalogue">SEE MORE</div>
      </a>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 product_thumb">
      <a href="/products/waterfall-floor.php">
        <img src="/images/products/thumbnails/waterfall-floor.jpg" class="img-responsive">
        <div class="product-caption"> WATERFALL </div>
        <div class="product-caption-sub"> FLOOR </div>
        <div class="product-caption-sub catalogue">SEE MORE</div>
      </a>
    </div>
  </div>
  <!-- end row -->

@endsection


@section('footer_scripts')

    <script src="https://www.luxxuhome.net/js/parsley.min.js"></script>

    <script type="text/javascript">
        $(function () {
          var $sections = $('.form-section');

          function navigateTo(index) {
            // Mark the current section with the class 'current'
            $sections
              .removeClass('current')
              .eq(index)
                .addClass('current');
            // Show only the navigation buttons that make sense for the current section:
            $('.form-navigation .previous').toggle(index > 0);
            var atTheEnd = index >= $sections.length - 1;
            $('.form-navigation .next').toggle(!atTheEnd);
            $('.form-navigation [type=submit]').toggle(atTheEnd);
          }

          function curIndex() {
            // Return the current index by looking at which section has the class 'current'
            return $sections.index($sections.filter('.current'));
          }

          // Previous button is easy, just go back
          $('.form-navigation .previous').click(function() {
            navigateTo(curIndex() - 1);
          });

          // Next button goes forward iff current block validates
          $('.form-navigation .next').click(function() {
            $('.form-catalogue-download').parsley().whenValidate({
              group: 'block-' + curIndex()
            }).done(function() {
              navigateTo(curIndex() + 1);
            });
          });

          // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
          $sections.each(function(index, section) {
            $(section).find(':input').attr('data-parsley-group', 'block-' + index);
          });
          navigateTo(0); // Start at the beginning
        });
    </script>

@endsection