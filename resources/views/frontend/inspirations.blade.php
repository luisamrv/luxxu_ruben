@extends('layouts.app')

@section('head_metas')

    <title>Inspirations | Luxxu | Modern Design and Living</title>
    @if (Session::has('data'))
        <meta http-equiv="refresh" content="5;url=/download/{{ Session::get('data') }}">
    @endif
    <meta property="og:title" content="Inspirations | Luxxu | Modern Design and Living"/>
    <meta property="og:description" content="" />
    <meta property="og:type" content="Inspirations" />
    <meta property="article:author" content="Inspirations | Luxxu | Modern Design and Living" />
    <meta property="article:published_time" content="" />
    <meta property="og:url" content="../inspirations" />
    <meta property="og:site_name" content="{!! env('BRAND_NAME') !!}" />
    <meta name="description" content="" />

@endsection


@section('head_style')

    <style type="text/css">

      .item {
        margin-bottom: 8px;
      }

      .title_inspirations_page {
        margin-top: 30px;
        margin-bottom: 35px;
      }
      .title_inspirations_page h2 {
        text-align: center;
        font-size: 25px;
        font-weight: 100 !important;
        font-family: 'Lato', sans-serif;
        margin-bottom: 10px;
      }
      .title_inspirations_page h4 {
        text-align: center;
        font-size: 17px;
        font-weight: 500 !important;
        font-family: 'Lato', sans-serif;
        color: #A58A62;
        letter-spacing: 0.5pt;
      }
      .viewmoreproduct {
        color: #333;
        letter-spacing: 0.5pt;
        font-size: 10px;
        border: 1px solid #333;
        display: inline;
        padding-top: 5px;
        padding-bottom: 5px;
        padding-left: 15px;
        padding-right: 15px;
      }
      .product-caption {
        font-size: 12px !important;
        margin-bottom: 25px;
      }
      .post_line {
        margin-bottom: 30px;
      }
      .category_post {
        text-transform: capitalize;
        color: black;
        font-size: 13px;
        margin-bottom: 7px;
        font-weight: normal;
      }
      .title_post {
        text-transform: uppercase;
        color: black;
        font-size: 17px;
        margin-bottom: 12px;
        font-weight: bold;
        letter-spacing: 0.7pt;
      }
      .description_post {
        text-transform: lowercase;
        color: #303030;
        font-size: 12px;
        margin-bottom: 20px;
        font-weight: normal;
        letter-spacing: 0.3pt;
        line-height: 14pt;
      }

      .banner-img {
        margin: 0;
        position: relative;
        display: flex;
        text-align: center;
        justify-content: center;
        align-items: center;
        margin-bottom: 15px;
      }

      .banner-img:hover {
        opacity: 0.98;
      }

      .banner-img:hover > .banner-title {
        opacity: 1;
      }

      .banner-title {
        position: absolute;
        color: #FFF;
        margin-bottom: 0px;
        font-size: 30px;
        text-align: center;
        line-height: 35px;
      }

    </style>

@endsection


@section('content')

    <div class="row main">
        <div class="col-md-12 title_inspirations_page">
          <h2>Get Inspired by LUXXU</h2>
          <h4>#lifestylebyluxxu</h4>
        </div>
      </div>

        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <a href="/interiors/" target="_blank" class="banner-img">
              <img src="/images/interiors/interiors-banner.jpg">
              <p class="banner-title">INTERIORS</p>
            </a>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <a href="/interiors/design-books/" target="_blank" class="banner-img">
              <img src="/images/interiors/book-banner.jpg">
              <p class="banner-title">DESIGN<br>BOOKS</p>
            </a>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <a href="/trends/" target="_blank" class="banner-img">
              <img src="/images/interiors/trends-banner.jpg">
              <p class="banner-title">TRENDS</p>
            </a>
          </div>
        </div>
      


    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <div class="separator"><h3 class="background"><span style="color: #A58A62;">WEEK'S FAVOURITES</span></h3></div>
        </div>
      </div>

      <div class="row" style="margin-bottom: 10px;">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 product_thumb">
          <a href="/furniture/charla-dining-chair">
            <img srcset="/images/furniture/thumbnails/charla-dining-chair.jpg" class="img-responsive">
            <div class="product-caption"> <b>CHARLA</b> | DINING CHAIR</div>
            <div class="viewmoreproduct">VIEW MORE</div>
          </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 product_thumb" style="">
          <a href="/furniture/prisma-stool">
            <img srcset="/images/furniture/thumbnails/prisma-stool.jpg" class="img-responsive">
            <div class="product-caption"> <b>PRISMA</b> | STOOL</div>
            <div class="viewmoreproduct">VIEW MORE</div>
          </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 product_thumb">
          <a href="/products/waterfall-pendant">
            <img srcset="/images/products/thumbnails/waterfall-pendant.jpg" class="img-responsive">
            <div class="product-caption"> <b>WATERFALL</b> | PENDANT</div>
            <div class="viewmoreproduct">VIEW MORE</div>
          </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 product_thumb" style="display: ;">
          <a href="/products/tycho-round-suspension">
            <img srcset="/images/products/thumbnails/tycho-round-suspension.jpg" class="img-responsive">
            <div class="product-caption"> <b>TYCHO ROUND</b> | SUSPENSION</div>
            <div class="viewmoreproduct">VIEW MORE</div>
          </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 product_thumb">
          <a href="/products/empire-center-table">
            <img srcset="/images/products/thumbnails/empire-center-table.jpg" class="img-responsive">
            <div class="product-caption"> <b>EMPIRE</b> | CENTER TABLE </div>
            <div class="viewmoreproduct">VIEW MORE</div>
          </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 product_thumb" style="display: ;">
          <a href="/furniture/waltz-nightstand">
            <img srcset="/images/furniture/thumbnails/waltz-nightstand.jpg" class="img-responsive">
            <div class="product-caption"> <b>WALTZ</b> | NIGHTSTAND </div>
            <div class="viewmoreproduct">VIEW MORE</div>
          </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 product_thumb" style="display: ;">
          <a href="/furniture/darian-dining-table">
            <img srcset="/images/furniture/thumbnails/darian-dining-table.jpg" class="img-responsive">
            <div class="product-caption"> <b>DARIAN</b> | DINING TABLE</div>
            <div class="viewmoreproduct">VIEW MORE</div>
          </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 product_thumb" style="display: ;">
          <a href="/furniture/anguis-sofa">
            <img srcset="/images/furniture/thumbnails/anguis-sofa.jpg" class="img-responsive">
            <div class="product-caption"> <b>ANGUIS</b> | SOFA</div>
            <div class="viewmoreproduct">VIEW MORE</div>
          </a>
        </div>
      </div>

      
      <div class="row">
        <div class="col-md-12">
          <div class="separator"><h3 class="background"><span style="color: #A58A62;">TRENDING NOW</span></h3></div>
        </div>
      </div>

      <div class="row" style="margin-top: 20px;">
        <div class="col-md-12 post_line">
          <a href="https://www.luxxu.net/blog/luxury-furniture-brands-isaloni-2019/" target="_blank">
            <div class="col-md-5">
              <img src="https://www.luxxu.net/blog/wp-content/uploads/2019/04/Top-5-Luxury-Furniture-Brands-At-iSaloni-2019-01-850x410.jpg">
            </div>
            <div class="col-md-6" style="padding: 40px;">
              <div class="category_post" style="color: #A58A62;">News</div>
              <div class="title_post">Top 5 Luxury Furniture Brands At iSaloni 2019</div>
              <div class="description_post">iSaloni is especially known for exhibiting the most well-known and luxurious designers from around the world. It was a pleasure for LUXXU to have been part of this luxury roll in the world of interior design.</div>
              <div class="viewmoreproduct">VIEW MORE</div>
            </div>
          </a>
        </div>
        <div class="col-md-12 post_line">
          <a href="https://www.luxxu.net/blog/meet-luxxus-new-furniture-designs-isaloni-2019/" target="_blank">
            <div class="col-md-5">
              <img src="https://www.luxxu.net/blog/wp-content/uploads/2019/04/Meet-LUXXU%E2%80%99s-New-Furniture-Designs-At-iSaloni-2019-01-1-850x410.jpg">
            </div>
            <div class="col-md-6" style="padding: 40px;">
              <div class="category_post" style="color: #A58A62;">Events</div>
              <div class="title_post">Meet LUXXU’s New Furniture Designs At iSaloni 2019</div>
              <div class="description_post">iSaloni is already halfway through, and we could not be happier with what we are presenting to the world of design! With two different locations and a whole lot of new pieces for you to discover, our visitors definitely had a lot to see!...</div>
              <div class="viewmoreproduct">VIEW MORE</div>
            </div>
          </a>
        </div>
      </div>

    </div>
    </div>
    <!-- -->
  
    <div class="row video-content">
        <div class="col-xs-12 nopadding">
            <a href="https://www.youtube.com/watch?v=86xUeAZJ9Kg&amp;feature=youtu.be" target="_blank"><img src="https://www.luxxuhome.net/imgs/home/video.jpg"></a>
        </div>
    </div>

@endsection


@section('footer_scripts')

@endsection