@extends('layouts.app')

@section('head_metas')

    <title>Luxxu | Modern Design and Living</title>
    @if (Session::has('data'))
        <meta http-equiv="refresh" content="5;url=/download/{{ Session::get('data') }}">
    @endif
    <meta property="og:title" content="Luxxu | Modern Design and Living"/>
    <meta property="og:description" content="mid century" />
    <meta property="og:type" content="Luxxu" />
    <meta property="article:author" content="Luxxu | Modern Design and Living" />
    <meta property="article:published_time" content="" />
    <meta property="og:url" content="../mid-century" />
    <meta property="og:site_name" content="{!! env('BRAND_NAME') !!}" />
    <meta name="description" content="mid century" />

@endsection


@section('head_style')

@endsection


@section('content')

  <div class="row header-trends-img">
    <img src="https://www.luxxu.net/landing-page/mid-century/view-more.jpg" class="img-responsive center-block">
    <div class="view-more-trends-mid-century">
      <p class="header-trends-italic text-center">trends</p>
      <p class="header-trends-title text-center">MID CENTURY</p>
      <!-- <a class="btn-header-trends">VIEW MORE</a> -->
    </div>
  </div>

  <div class="container">

    <div class="col-md-12 text-center">
      <p class="most-popular-title text-center">MOST POPULAR</p>
      <p class="most-popular-text text-center">Are you looking for clean lines, geometric shapes, and comfort with aesthetics perfection? Below we prepared a selection of our most mid-century style products.</p>
    </div>

  </div>

    <div class="col-md-12 most-popular-products">

      <div class="col-md-3 card-popular-product">
        <a href="https://www.luxxu.net/furniture/bellagio-dining-table.php?utm_source=LuxxuLighting&utm_medium=Website&utm_content=BrandProductImage&utm_campaign=PartnersLandingPage&utm_term=MidCentury">
          <img src="https://www.luxxu.net/images/furniture/thumbnails/bellagio-dining-table.jpg" class="img-responsive center-block">
          <p class="popular-product-title text-center">BELLAGIO</p>
          <p class="popular-product-category text-center">DINING TABLE</p>
          <div class="btn-get-product-price text-center">
            <span>GET PRICE</span>
          </div>
        </a>
      </div>

      <div class="col-md-3 card-popular-product">
        <a href="https://www.luxxu.net/furniture/waltz-bookcase.php?utm_source=LuxxuLighting&utm_medium=Website&utm_content=BrandProductImage&utm_campaign=PartnersLandingPage&utm_term=MidCentury">
          <img src="https://www.luxxu.net/images/furniture/thumbnails/waltz-bookcase.jpg" class="img-responsive center-block">
          <p class="popular-product-title text-center">WALTZ</p>
          <p class="popular-product-category text-center">BOOKCASE</p>
          <div class="btn-get-product-price text-center">
            <span>GET PRICE</span>
          </div>
        </a>
      </div>

      <div class="col-md-3 card-popular-product">
        <a href="https://www.luxxu.net/furniture/vertigo-side-table.php?utm_source=LuxxuLighting&utm_medium=Website&utm_content=BrandProductImage&utm_campaign=PartnersLandingPage&utm_term=MidCentury">
          <img src="https://www.luxxu.net/images/furniture/thumbnails/vertigo-side-table.jpg" class="img-responsive center-block">
          <p class="popular-product-title text-center">VERTIGO</p>
          <p class="popular-product-category text-center">SIDE TABLE</p>
          <div class="btn-get-product-price text-center">
            <span>GET PRICE</span>
          </div>
        </a>
      </div>

      <div class="col-md-3 card-popular-product">
        <a href="https://www.luxxu.net/furniture/waltz-nightstand.php?utm_source=LuxxuLighting&utm_medium=Website&utm_content=BrandProductImage&utm_campaign=PartnersLandingPage&utm_term=MidCentury">
          <img src="https://www.luxxu.net/images/furniture/thumbnails/waltz-nightstand.jpg" class="img-responsive center-block">
          <p class="popular-product-title text-center">WALTZ</p>
          <p class="popular-product-category text-center">NIGHTSTAND</p>
          <div class="btn-get-product-price text-center">
            <span>GET PRICE</span>
          </div>
        </a>
      </div>

    </div>

  <div class="row trends-moodboard">
    <a href="https://www.luxxu.net/trends/">
      <img src="https://www.luxxu.net/landing-page/mid-century/discover-more.jpg" class="img-responsive center-block pull-left">
      <div class="discover-more-trends hidden-xs">
        <p class="btn-discover-trends">DISCOVER MORE</p>
      </div>
    </a>
  </div>
  
  <div class="container" style="clear: both;">

    <div class="col-md-12 text-center">
      <p class="your-projects-title text-center">COMPLETE YOUR PROJECTS</p>
      <p class="your-projects-text text-center">If you haven’t find the exact piece of furniture or lighting you were looking for, take a look at the mid-century offer our sister brands have to give you.</p>
    </div>

  </div>

    <div class="col-md-12 your-projects-products" style="margin-bottom: 60px;">

      <div class="row">

        <div class="col-md-3 card-project-product">
          <a href="https://www.essentialhome.eu/products/casegoods/kahn-sideboard?utm_source=LuxxuLighting&utm_medium=Website&utm_content=ProductImage&utm_campaign=PartnersLandingPage&utm_term=MidCentury">
            <img src="https://essentialhome.eu/images/products/thumbnails/casegoods/kahn-sideboard.png" class="img-responsive center-block">
            <p class="project-products-title text-center">SIDEBOARD</p>
            <p class="project-products-category text-center">KAHN</p>
            <p class="project-products-brand text-center">ESSENTIAL HOME</p>
          </a>
        </div>

        <div class="col-md-3 card-project-product">
          <a href="https://www.essentialhome.eu/products/upholstery/collins-bar-chair?utm_source=LuxxuLighting&utm_medium=Website&utm_content=ProductImage&utm_campaign=PartnersLandingPage&utm_term=MidCentury">
            <img src="https://essentialhome.eu/images/products/thumbnails/upholstery/collins-bar-chair.png" class="img-responsive center-block">
            <p class="project-products-title text-center">BAR CHAIR</p>
            <p class="project-products-category text-center">COLLINS</p>
            <p class="project-products-brand text-center">ESSENTIAL HOME</p>
          </a>
        </div>

        <div class="col-md-3 card-project-product">
          <a href="https://www.essentialhome.eu/products/upholstery/marco-dining-chair?utm_source=LuxxuLighting&utm_medium=Website&utm_content=ProductImage&utm_campaign=PartnersLandingPage&utm_term=MidCentury">
            <img src="https://essentialhome.eu/images/products/thumbnails/upholstery/marco-dining-chair.png" class="img-responsive center-block">
            <p class="project-products-title text-center">DINING CHAIR</p>
            <p class="project-products-category text-center">MARCO</p>
            <p class="project-products-brand text-center">ESSENTIAL HOME</p>
          </a>
        </div>

        <div class="col-md-3 card-project-product">
          <a href="https://essentialhome.eu/products/upholstery/florence-armchair?utm_source=LuxxuLighting&utm_medium=Website&utm_content=ProductImage&utm_campaign=PartnersLandingPage&utm_term=MidCentury">
            <img src="https://essentialhome.eu/images/products/thumbnails/upholstery/florence-armchair.png" class="img-responsive center-block">
            <p class="project-products-title text-center">ARMCHAIR</p>
            <p class="project-products-category text-center">FLORENCE</p>
            <p class="project-products-brand text-center">ESSENTIAL HOME</p>
          </a>
        </div>

      </div>

      <div class="row">

        <div class="col-md-3 card-project-product">
          <a href="https://www.essentialhome.eu/products/casegoods/craig-console?utm_source=LuxxuLighting&utm_medium=Website&utm_content=ProductImage&utm_campaign=PartnersLandingPage&utm_term=MidCentury">
            <img src="https://essentialhome.eu/images/products/thumbnails/casegoods/craig-console.png" class="img-responsive center-block">
            <p class="project-products-title text-center">CONSOLE</p>
            <p class="project-products-category text-center">CRAIG</p>
            <p class="project-products-brand text-center">ESSENTIAL HOME</p>
          </a>
        </div>

        <div class="col-md-3 card-project-product">
          <a href="https://www.essentialhome.eu/products/casegoods/dandy-sideboard?utm_source=LuxxuLighting&utm_medium=Website&utm_content=ProductImage&utm_campaign=PartnersLandingPage&utm_term=MidCentury">
            <img src="https://essentialhome.eu/images/products/thumbnails/casegoods/dandy-sideboard.png" class="img-responsive center-block">
            <p class="project-products-title text-center">SIDEBOARD</p>
            <p class="project-products-category text-center">DANDY</p>
            <p class="project-products-brand text-center">ESSENTIAL HOME</p>
          </a>
        </div>

        <div class="col-md-3 card-project-product">
          <a href="https://www.essentialhome.eu/products/accessories/wilde-mirror?utm_source=LuxxuLighting&utm_medium=Website&utm_content=ProductImage&utm_campaign=PartnersLandingPage&utm_term=MidCentury">
            <img src="https://essentialhome.eu/images/products/thumbnails/accessories/wilde-mirror.png" class="img-responsive center-block">
            <p class="project-products-title text-center">MIRROR</p>
            <p class="project-products-category text-center">WILDE</p>
            <p class="project-products-brand text-center">ESSENTIAL HOME</p>
          </a>
        </div>

        <div class="col-md-3 card-project-product">
          <a href="https://www.essentialhome.eu/products/casegoods/monocles-cabinet?utm_source=LuxxuLighting&utm_medium=Website&utm_content=ProductImage&utm_campaign=PartnersLandingPage&utm_term=MidCentury">
            <img src="https://essentialhome.eu/images/products/thumbnails/casegoods/monocles-cabinet.png" class="img-responsive center-block">
            <p class="project-products-title text-center">CABINET</p>
            <p class="project-products-category text-center">MONOCLES</p>
            <p class="project-products-brand text-center">ESSENTIAL HOME</p>
          </a>
        </div>

      </div>

    </div>

@endsection


@section('footer_scripts')

@endsection