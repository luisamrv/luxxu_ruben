@extends('layouts.app')

@section('head_metas')

    <title>Luxxu | Modern Design and Living</title>
    @if (Session::has('data'))
        <meta http-equiv="refresh" content="5;url=/download/{{ Session::get('data') }}">
    @endif
    <meta property="og:title" content="Luxxu | Modern Design and Living"/>
    <meta property="og:description" content="modern luxury" />
    <meta property="og:type" content="Luxxu" />
    <meta property="article:author" content="Luxxu | Modern Design and Living" />
    <meta property="article:published_time" content="" />
    <meta property="og:url" content="../modern-luxury" />
    <meta property="og:site_name" content="{!! env('BRAND_NAME') !!}" />
    <meta name="description" content="modern luxury" />

@endsection


@section('head_style')

@endsection


@section('content')

  <div class="row header-trends-img">
    <img src="https://www.luxxu.net/landing-page/classic/view-more.jpg" class="img-responsive center-block">
    <div class="view-more-trends-classic">
      <p class="header-trends-italic text-center">trends</p>
      <p class="header-trends-title text-center">CLASSIC</p>
      <!-- <a class="btn-header-trends">VIEW MORE</a> -->
    </div>
  </div>

  <div class="container">

    <div class="col-md-12 text-center">
      <p class="most-popular-title text-center">MOST POPULAR</p>
      <p class="most-popular-text text-center">You prefer timeless pieces, with simple lines and noble materials but all this with a modern twist. Below we present you a selection of products that will be a perfect match for you.</p>
    </div>

  </div>

    <div class="row col-md-12 most-popular-products">

      <div class="col-md-3 card-popular-product">
        <a href="https://www.luxxu.net/products/guggenheim-chandelier.php?utm_source=LuxxuLighting&utm_medium=Website&utm_content=BrandProductImage&utm_campaign=PartnersLandingPage&utm_term=ModernLuxury">
          <img src="https://www.luxxu.net/images/products/thumbnails/guggenheim-chandelier.jpg" class="img-responsive center-block">
          <p class="popular-product-title text-center">GUGGENHEIM</p>
          <p class="popular-product-category text-center">CHANDELIER</p>
          <div class="btn-get-product-price text-center">
            <span>GET PRICE</span>
          </div>
        </a>
      </div>

      <div class="col-md-3 card-popular-product">
        <a href="https://www.luxxu.net/products/empire-square-chandelier.php?utm_source=LuxxuLighting&utm_medium=Website&utm_content=BrandProductImage&utm_campaign=PartnersLandingPage&utm_term=ModernLuxury">
          <img src="https://www.luxxu.net/images/products/thumbnails/empire-square-chandelier.jpg" class="img-responsive center-block">
          <p class="popular-product-title text-center">EMPIRE SQUARE</p>
          <p class="popular-product-category text-center">CHANDELIER</p>
          <div class="btn-get-product-price text-center">
            <span>GET PRICE</span>
          </div>
        </a>
      </div>

      <div class="col-md-3 card-popular-product">
        <a href="https://www.luxxu.net/furniture/littus-dining-table.php?utm_source=LuxxuLighting&utm_medium=Website&utm_content=BrandProductImage&utm_campaign=PartnersLandingPage&utm_term=ModernLuxury">
          <img src="https://www.luxxu.net/images/furniture/thumbnails/littus-dining-table.jpg" class="img-responsive center-block">
          <p class="popular-product-title text-center">LITTUS</p>
          <p class="popular-product-category text-center">DINNING TABLE</p>
          <div class="btn-get-product-price text-center">
            <span>GET PRICE</span>
          </div>
        </a>
      </div>

      <div class="col-md-3 card-popular-product">
        <a href="https://www.luxxu.net/furniture/crackle-mirror.php?utm_source=LuxxuLighting&utm_medium=Website&utm_content=BrandProductImage&utm_campaign=PartnersLandingPage&utm_term=ModernLuxury">
          <img src="https://www.luxxu.net/images/furniture/thumbnails/crackle-mirror.jpg" class="img-responsive center-block">
          <p class="popular-product-title text-center">CRACKLE</p>
          <p class="popular-product-category text-center">MIRROR</p>
          <div class="btn-get-product-price text-center">
            <span>GET PRICE</span>
          </div>
        </a>
      </div>

    </div>

  <div class="row trends-moodboard">
    <a href="https://www.luxxu.net/trends/">
      <img src="https://www.luxxu.net/landing-page/classic/discover-more.jpg" class="img-responsive center-block pull-left">
      <div class="discover-more-trends-classic hidden-xs">
        <p class="btn-discover-trends">DISCOVER MORE</p>
      </div>
    </a>
  </div>
  
  <div class="container" style="clear: both;">

    <div class="col-md-12 text-center">
      <p class="your-projects-title text-center">COMPLETE YOUR PROJECTS</p>
      <p class="your-projects-text text-center">If you haven’t find the exact piece of furniture or lighting you were looking for, take a look at the classic offer our sister brands have to give you.</p>
    </div>

  </div>

    <div class="col-md-12 your-projects-products">

      <div class="row">

        <div class="col-md-4 card-project-product">
          <a href="https://www.bocadolobo.com/en/limited-edition/seating-others/odette-sofa/?utm_source=LuxxuLighting&utm_medium=Website&utm_content=ProductImage&utm_campaign=PartnersLandingPage&utm_term=ModernLuxury">
            <img src="https://www.bocadolobo.com/images/all-products/odette-sofa-boca-do-lobo.jpg" class="img-responsive center-block">
            <p class="project-products-title text-center">ODETTE</p>
            <p class="project-products-category text-center">SOFA</p>
          </a>
        </div>

        <div class="col-md-4 card-project-product">
          <a href="https://www.bocadolobo.com/en/limited-edition/seating-others/imperfectio-sofa/?utm_source=LuxxuLighting&utm_medium=Website&utm_content=ProductImage&utm_campaign=PartnersLandingPage&utm_term=ModernLuxury">
            <img src="https://www.bocadolobo.com/images/all-products/imperfectio-sofa-boca-do-lobo.jpg" class="img-responsive center-block">
            <p class="project-products-title text-center">IMPERFECTIO</p>
            <p class="project-products-category text-center">SOFA</p>
          </a>
        </div>

        <div class="col-md-4 card-project-product">
          <a href="https://www.bocadolobo.com/en/limited-edition/seating-others/soleil-sofa/?utm_source=LuxxuLighting&utm_medium=Website&utm_content=ProductImage&utm_campaign=PartnersLandingPage&utm_term=ModernLuxury">
            <img src="https://www.bocadolobo.com/images/all-products/soleil-sofa-boca-do-lobo.jpg" class="img-responsive center-block">
            <p class="project-products-title text-center">SOLEIL</p>
            <p class="project-products-category text-center">SOFA</p>
          </a>
        </div>

      </div>

      <div class="row">

        <div class="col-md-4 card-project-product">
          <a href="https://www.bocadolobo.com/en/limited-edition/coffee-and-side-tables/diamond-center-table/?utm_source=LuxxuLighting&utm_medium=Website&utm_content=ProductImage&utm_campaign=PartnersLandingPage&utm_term=ModernLuxury">
            <img src="https://www.bocadolobo.com/images/all-products/diamond-center-table-boca-do-lobo.jpg" class="img-responsive center-block">
            <p class="project-products-title text-center">DIAMOND</p>
            <p class="project-products-category text-center">CENTER TABLE</p>
          </a>
        </div>

        <div class="col-md-4 card-project-product">
          <a href="https://www.bocadolobo.com/en/limited-edition/coffee-and-side-tables/metamorphosis-center-table/?utm_source=LuxxuLighting&utm_medium=Website&utm_content=ProductImage&utm_campaign=PartnersLandingPage&utm_term=ModernLuxury">
            <img src="https://www.bocadolobo.com/images/all-products/metamorphosis-center-table-boca-do-lobo.jpg" class="img-responsive center-block">
            <p class="project-products-title text-center">METAMORPHOSIS</p>
            <p class="project-products-category text-center">CENTER TABLE</p>
          </a>
        </div>

        <div class="col-md-4 card-project-product">
          <a href="https://www.bocadolobo.com/en/limited-edition/coffee-and-side-tables/monet-patina-center-table/?utm_source=LuxxuLighting&utm_medium=Website&utm_content=ProductImage&utm_campaign=PartnersLandingPage&utm_term=ModernLuxury">
            <img src="https://www.bocadolobo.com/images/all-products/monet-patina-center-table-boca-do-lobo.jpg" class="img-responsive center-block">
            <p class="project-products-title text-center">MONET PATINA</p>
            <p class="project-products-category text-center">CENTER TABLE</p>
          </a>
        </div>

      </div>

    </div>

@endsection


@section('footer_scripts')

@endsection