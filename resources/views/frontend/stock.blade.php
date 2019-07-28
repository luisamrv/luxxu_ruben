@extends('layouts.app')

@section('head_metas')

    <title>Stock | Luxxu | Modern Design and Living</title>
    @if (Session::has('data'))
        <meta http-equiv="refresh" content="5;url=/download/{{ Session::get('data') }}">
    @endif
    <meta property="og:title" content="Stock | Luxxu | Modern Design and Living"/>
    <meta property="og:description" content="" />
    <meta property="og:type" content="Stock" />
    <meta property="article:author" content="Stock | Luxxu | Modern Design and Living" />
    <meta property="article:published_time" content="" />
    <meta property="og:url" content="../stock" />
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
      .separator {
        margin: 25px auto 8px;
      }
      .best-sellers-info {
        width: 20%;
        margin-bottom: 26px;
      }
      .all-products-stock-list {
        width: 20%;
        margin-bottom: 26px;
      }
      .best-seller-product h2 {
        font-size: 15px;
        font-weight: 700;
        margin-bottom: 0px;
        color: #000;
        line-height: 15px;
        letter-spacing: 1px;
        text-transform: uppercase;
      }
      .best-seller-product h3 {
        font-size: 12px;
        margin-bottom: 0px;
        color: #968460;
        line-height: 25px;
        letter-spacing: 1px;
        text-transform: uppercase;
      }
      .stock-count-info {
        padding-top:10px;
      }
      .stock-count-info h1 {
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0;
        text-transform: uppercase;
        padding-top: 15px;
        padding-bottom: 10px;
      }
      .stock-count-info h2 {
        font-size: 9px;
        margin-bottom: 10px;
        letter-spacing: 0;
        text-transform: uppercase;
      }
      .best-seller-product {
        height: 54px;
      }
      .buy-button.product-thumb.btn.buy {
        margin: 0;
        padding: 0;
        background: none;
      }
      .request {
        margin-top: 6px;
        margin-bottom: 12px;
      }
      .buy-button .wrapper .slideToggleBox {
        left:0px;
      }
      input#request-price-tag {
        padding-left: 0;
      }



      .img-size {
        height: 220px;
      }
      .customize-size {
        display: none;
        height: 220px;
        background-color: #fafafa;
      }
      .all-products-stock-list:hover {
        background-color: #fafafa;
      }
      .all-products-stock-list:hover .img-size {
        display: none;
      }
      .all-products-stock-list:hover .customize-size {
        display: block;
      }



      .customize-material-info {
        width: 28px;
        height: 28px;
        margin: 0 auto;
        margin-bottom: 5px;
      }
      .stock-count-info .col-lg-12 {
        padding: 0;
      }
      .stock-count-info .col-lg-6 {
        padding: 0;
      }
      .customize-picker {
        cursor: pointer; 
      }
      .fa-check-circle {
        position: absolute;
        font-size: 15px;
        left: 50%;
        top: 13%;
        color: #FFF;
        transform: translateX(-50%);
      }



      .stock-banner {
        display: block;
      }
      .stock-banner-mobile {
        display: none;
      }


      @media (min-width: 1600px) and (max-width: 2000px) {
        .img-size {
            height: 265px;
        }
        .customize-size {
            height: 265px;
        }
      }

      @media (min-width: 800px) and (max-width: 1075px) {
        .best-sellers-info {
          width: 33.33% !important;
        }
        .all-products-stock-list {
          width: 33.33% !important;
        }
      }

      @media (min-width: 560px) and (max-width: 800px) {
        .best-sellers-info {
          width: 33.33% !important;
        }
        .all-products-stock-list {
          width: 33.33% !important;
        }
      }

      @media (min-width: 320px) and (max-width: 560px) {
        .best-sellers-info {
          width: 50% !important;
        }
        .all-products-stock-list {
          width: 50% !important;
        }
        .stock-banner {
          display: none;
        }
        .stock-banner-mobile {
          display: block;
        }
      }

  </style>

@endsection


@section('content')

  <div class="row">
    <div class="col-md-12 title-inspirations-page">
      <h2 style="text-transform:uppercase;">There's no waiting for special products!</h2>
      <h4>#lifestylebyluxxu</h4>
    </div>
  </div>

  <!-- BANNER IMG -->
  <!--
  <div class="row" style="margin-bottom: 15px;">
    <img src="https://via.placeholder.com/2000x550" class="img-responsive stock-banner">
    <img src="https://via.placeholder.com/800x600" class="img-responsive stock-banner-mobile">
  </div>
 -->
  <!-- ABOUT DESCRIPTION -->
  <div class="container best-sellers-stock" style="margin-bottom: 25px; margin-top: 10px;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      
      <div class="separator"><h3 class="background"><span style="color: #A58A62; font-size: 16px;">BEST SELLERS IN STOCK</span></h3></div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/empire-chandelier.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Brushed Gold">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/brushed-brass.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Brushed Gold</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/empire-chandelier" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">EMPIRE</h2>
                <h3 class="text-center">CHANDELIER</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Empire Chandelier"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/waterfall-pendant.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/waterfall-pendant" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">waterfall</h2>
                <h3 class="text-center">pendant</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Waterfall Pendant"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/waterfall-wall.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 customize-picker" data-main="Black Nickel">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/black-nickel-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Black Nickel</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 customize-picker" data-main="Brushed Gold">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/brushed-brass.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Brushed Gold</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/waterfall-wall" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Waterfall</h2>
                <h3 class="text-center">Wall</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Waterfall Wall"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 best-sellers-info">
          <div class="img-size">
            <img src="/images/furniture/thumbnails/charla-dining-chair.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <h2 class="text-center">Standard</h2>
            </div>
          </div>
            <a href="/furniture/charla-dining-chair" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">charla</h2>
                <h3 class="text-center">dining chair</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Charla Dining Chair"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now-furniture')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 best-sellers-info">
          <div class="img-size">
            <img src="/images/furniture/thumbnails/empire-side-table.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <h2 class="text-center">Standard</h2>
            </div>
          </div>
            <a href="/products/empire-side-table" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Empire Big</h2>
                <h3 class="text-center">Side Table</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Empire Big Side Table"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now-furniture')</div>
          </div>
        </div>

    </div>
  </div>  


  <!-- ALL PRODUCTS DESCRIPTION -->
  <div class="container all-products-stock" style="margin-bottom: 30px; margin-top: 10px;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      
      <div class="separator"><h3 class="background"><span style="color: #A58A62; font-size: 16px;">ALL PRODUCTS IN STOCK</span></h3></div>

        <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/empire-chandelier.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Brushed Gold">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/brushed-brass.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Brushed Gold</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/empire-chandelier" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">EMPIRE</h2>
                <h3 class="text-center">CHANDELIER</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Empire Chandelier"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div> -->

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/burj-chandelier.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/burj-chandelier" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Burj</h2>
                <h3 class="text-center">CHANDELIER</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Burj Chandelier"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/scala-chandelier.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/scala-chandelier" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Scala</h2>
                <h3 class="text-center">CHANDELIER</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Scala Chandelier"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/waterfall-chandelier.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/waterfall-chandelier" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Waterfall</h2>
                <h3 class="text-center">CHANDELIER</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Waterfall Chandelier"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/empire-suspension-gold.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 customize-picker" data-main="Nickel Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/nickel-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Nickel plated</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 customize-picker" data-main="Brushed Brass">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/brushed-brass.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Brushed Gold</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/waterfall-chandelier" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Empire</h2>
                <h3 class="text-center">Suspension</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Empire Suspension"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/explosion-suspension.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/explosion-suspension" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Explosion</h2>
                <h3 class="text-center">Suspension</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Explosion Suspension"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/harpia-suspension.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/harpia-suspension" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Harpia</h2>
                <h3 class="text-center">Suspension</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname2 = "Harpia Suspension"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/liberty-suspension.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/liberty-suspension" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Liberty</h2>
                <h3 class="text-center">Suspension</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Liberty Suspension"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/waterfall-suspension-round.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/waterfall-suspension-round" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Waterfall Round</h2>
                <h3 class="text-center">Suspension</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Waterfall Round Suspension"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/waterfall-rectangular-suspension.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/waterfall-suspension-rectangular" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Waterfall Retangular</h2>
                <h3 class="text-center">Suspension</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Waterfall Retangular Suspension"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/burj-pendant.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/burj-pendant" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Burj</h2>
                <h3 class="text-center">pendant</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Burj Pendant"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/draycott-pendant.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/draycott-pendant" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Draycott</h2>
                <h3 class="text-center">pendant</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Draycott Pendant"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/empire-pendant.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/empire-pendant" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">EMPIRE</h2>
                <h3 class="text-center">pendant</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Empire Pendant"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/liberty-pendant.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 customize-picker" data-main="Nickel Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/nickel-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Nickel Plated</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/liberty-pendant" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Liberty</h2>
                <h3 class="text-center">pendant</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Liberty Pendant"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/burj-wall.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 customize-picker" data-main="Brushed Gold">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/brushed-brass.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Brushed Gold</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 customize-picker" data-main="Black Nickel">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/black-nickel-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Black Nickel</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/burj-wall" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Burj</h2>
                <h3 class="text-center">Wall</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Burj Wall"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/draycott-wall-I.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/draycott-wall-I" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Draycott I</h2>
                <h3 class="text-center">Wall</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Draycott I Wall"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/empire-wall.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/empire-wall" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">EMPIRE</h2>
                <h3 class="text-center">Wall</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Empire Wall"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/gala-torch-wall.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/gala-torch-wall" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Gala Torch</h2>
                <h3 class="text-center">Wall</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Gala Torch Wall"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/liberty-wall-I.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 customize-picker" data-main="Brushed Gold">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/brushed-brass.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Brushed Gold</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 customize-picker" data-main="Nickel Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/nickel-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Nickel Plated</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 customize-picker" data-main="Brushed Brass">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/brushed-brass.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Brushed Brass</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/liberty-wall-I" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Liberty I</h2>
                <h3 class="text-center">Wall</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Liberty I Wall"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/liberty-wall-II.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 customize-picker" data-main="Brushed Gold">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/brushed-brass.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Brushed Gold</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 customize-picker" data-main="Nickel Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/nickel-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Nickel Plated</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/liberty-wall-II" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Liberty II</h2>
                <h3 class="text-center">Wall</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Liberty II Wall"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/tycho-wall.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/tycho-wall" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Tycho</h2>
                <h3 class="text-center">Wall</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Tycho Wall"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/waterfall-torch-wall.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/waterfall-torch-wall" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Waterfall torch</h2>
                <h3 class="text-center">Wall</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Waterfall Torch Wall"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/waterfall-wall.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 customize-picker" data-main="Black Nickel">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/black-nickel-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Black Nickel</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 customize-picker" data-main="Brushed Gold">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/brushed-brass.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Brushed Gold</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/waterfall-wall" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Waterfall</h2>
                <h3 class="text-center">Wall</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Waterfall Wall"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div> -->

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/wax-wall.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Polished Brass">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/polished-brass.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Polished Brass</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/wax-wall" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">wax</h2>
                <h3 class="text-center">Wall</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Wax Wall"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 all-products-stock-list">
          <div class="img-size">
            <img src="/images/products/thumbnails/mcqueen-wall.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customize-picker" data-main="Gold Plated">
                  <i class="far fa-check-circle hidden"></i>
                  <img src="/images/samples/gold-plated.jpg" class="img-responsive customize-material-info">
                  <h2 class="text-center">Gold Plated</h2>
                </div>
              </div>
            </div>
          </div>
            <a href="/products/mcqueen-wall" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">mcqueen</h2>
                <h3 class="text-center">Wall</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Mcqueen Wall"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now')</div>
          </div>
        </div>

        <!-- FURNITURE PRODUCTS -->

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 best-sellers-info">
          <div class="img-size">
            <img src="/images/furniture/thumbnails/spear-console.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <h2 class="text-center">Standard</h2>
            </div>
          </div>
            <a href="/furniture/spear-console" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Spear</h2>
                <h3 class="text-center">console</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Spear Console"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now-furniture')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 best-sellers-info">
          <div class="img-size">
            <img src="/images/furniture/thumbnails/vertigo-console.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <h2 class="text-center">Standard</h2>
            </div>
          </div>
            <a href="/furniture/vertigo-console" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Vertigo</h2>
                <h3 class="text-center">console</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Vertigo Console"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now-furniture')</div>
          </div>
        </div>

        <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 best-sellers-info">
          <div class="img-size">
            <img src="/images/furniture/thumbnails/empire-side-table.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <h2 class="text-center">Standard</h2>
            </div>
          </div>
            <a href="/products/empire-side-table" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Empire Big</h2>
                <h3 class="text-center">Side Table</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Empire Big Side Table"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now-furniture')</div>
          </div>
        </div> -->

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 best-sellers-info">
          <div class="img-size">
            <img src="/images/furniture/thumbnails/empire-side-table-small.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <h2 class="text-center">Standard</h2>
            </div>
          </div>
            <a href="/products/empire-side-table-small" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Empire Small</h2>
                <h3 class="text-center">Side Table</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Empire Small Side Table"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now-furniture')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 best-sellers-info">
          <div class="img-size">
            <img src="/images/furniture/thumbnails/empire-mirror.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <h2 class="text-center">Standard</h2>
            </div>
          </div>
            <a href="/furniture/empire-mirror" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Empire</h2>
                <h3 class="text-center">Mirror</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Empire Mirror"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now-furniture')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 best-sellers-info">
          <div class="img-size">
            <img src="/images/furniture/thumbnails/explosion-xl-mirror.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <h2 class="text-center">Standard</h2>
            </div>
          </div>
            <a href="/furniture/explosion-xl-mirror" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Empire XL</h2>
                <h3 class="text-center">Mirror</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Empire XL Mirror"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now-furniture')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 best-sellers-info">
          <div class="img-size">
            <img src="/images/furniture/thumbnails/beyond-console.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <h2 class="text-center">Standard</h2>
            </div>
          </div>
            <a href="/furniture/beyond-console" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Beyond</h2>
                <h3 class="text-center">Console</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Beyond Console"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now-furniture')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 best-sellers-info">
          <div class="img-size">
            <img src="/images/furniture/thumbnails/crackle-mirror.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <h2 class="text-center">Standard</h2>
            </div>
          </div>
            <a href="/furniture/crackle-mirror" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">crackle</h2>
                <h3 class="text-center">mirror</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Crackle Mirror"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now-furniture')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 best-sellers-info">
          <div class="img-size">
            <img src="/images/furniture/thumbnails/beyond-dining-table.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <h2 class="text-center">Standard</h2>
            </div>
          </div>
            <a href="/furniture/beyond-dining-table" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">beyond</h2>
                <h3 class="text-center">dining table</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Beyond Dining Table"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now-furniture')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 best-sellers-info">
          <div class="img-size">
            <img src="/images/furniture/thumbnails/littus-dining-table.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <h2 class="text-center">Standard</h2>
            </div>
          </div>
            <a href="/furniture/littus-dining-table" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">Littus</h2>
                <h3 class="text-center">dining table</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Littus Dining Table"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now-furniture')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 best-sellers-info">
          <div class="img-size">
            <img src="/images/furniture/thumbnails/majestic-xl-wall-light-mirror.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <h2 class="text-center">Standard</h2>
            </div>
          </div>
            <a href="/furniture/majestic-xl-wall-light-mirror" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">majestic XL</h2>
                <h3 class="text-center">mirror</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Majestic XL Mirror"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now-furniture')</div>
          </div>
        </div>

        <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 best-sellers-info">
          <div class="img-size">
            <img src="/images/furniture/thumbnails/charla-dining-chair.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <h2 class="text-center">Standard</h2>
            </div>
          </div>
            <a href="/furniture/charla-dining-chair" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">charla</h2>
                <h3 class="text-center">dining chair</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Charla Dining Chair"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now-furniture')</div>
          </div>
        </div> -->

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 best-sellers-info">
          <div class="img-size">
            <img src="/images/furniture/thumbnails/waltz-nightstand.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <h2 class="text-center">Standard</h2>
            </div>
          </div>
            <a href="/furniture/waltz-nightstand" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">waltz</h2>
                <h3 class="text-center">nightstand</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Waltz Nightstand"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now-furniture')</div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 best-sellers-info">
          <div class="img-size">
            <img src="/images/furniture/thumbnails/waltz-dresser.jpg" class="img-responsive stock-img-product">
          </div>
          <div class="customize-size">
            <div class="stock-count-info">
              <h1 class="text-center">Available in:</h1>
              <h2 class="text-center">Standard</h2>
            </div>
          </div>
            <a href="/furniture/waltz-dresser" target="_blank">
              <div class="best-seller-product">
                <h2 class="text-center">waltz</h2>
                <h3 class="text-center">dresser</h3>
              </div>
            </a>
          <div class="request text-center">
              <?php $prodname = "Waltz Dresser"; ?>
              <div class="buy-button product-thumb btn buy">@include('includes/forms/product-page/request-stock-buy-now-furniture')</div>
          </div>
        </div>

    </div>
  </div>

@endsection


@section('footer_scripts')

  <!-- Stock Picker -->
  <script>
    /* materials */
    $('.customize-picker').click(function(){
      $(this).toggleClass('check');
      $('.customize-picker').parent().removeClass('checkParent');
      $(this).parent().addClass('checkParent');
      if($(this).hasClass('check') && $(this).parent().hasClass('checkParent')) {
        $(this).parent().children('.customize-picker').not('.check').css('opacity','0.6');
        $(this).parent().children('.customize-picker').not($(this).css('opacity','1'));
        var material= $(this).attr('data-main');
        $(this).parent().parent().parent().parent().children('.request').find('#material').val(material);
        $(this).children('i').removeClass('hidden');
        $(this).parent().parent().parent().parent().children('.request').find('.text-material').html(material);
      }
      else {
        console.log('atum com tomate');
        $('.customize-picker').parent().children('.customize-picker').css('opacity','1');
        $('.customize-picker').parent().children('i').addClass('hidden');
        $(this).parent().children('.customize-picker').css('opacity','1');
        $(this).children('i').addClass('hidden');
        $('.text-material').css('background','#141414');
        $('.customize-picker').css('opacity','1');
        $(this).parent().children('.customize-picker').not('.check').css('opacity','0.6');
        $(this).parent().parent().parent().parent().children('.request').find('#material').val();
        $(this).parent().parent().parent().parent().children('.request').find('.text-material').html('');
      }

      $('.customize-picker').parent().each(function(index){
         if(!$(this).hasClass("checkParent")) {
          $(this).children('.customize-picker').removeClass('check').css('opacity','1');
          $(this).children().children('i').addClass('hidden');
          $(this).parent().parent().parent().children('.request').find('.text-material').html('');
        }
      });

      var chkArray = [];

      $('.customize-picker.check').each(function(){
        chkArray.push('<span style="float: right; margin-right: 8px; font-size:11px;">'+ $(this).attr('data-main')+'</span><br>');
      });
      var selected;
      selected = chkArray.join('');

      if (selected.length > 1) {
       $(this).parent().parent().parent().parent().children('.request').find('.material').val(selected);
       $(this).parent().parent().parent().parent().children('.request').find('.text-material').html(selected);
     }
     
    });
  </script>

@endsection