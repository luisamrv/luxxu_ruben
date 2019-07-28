@extends('layouts.app')

@section('head_metas')

    <title>All Products | Luxxu | Modern Design and Living</title>
    @if (Session::has('data'))
        <meta http-equiv="refresh" content="5;url=/download/{{ Session::get('data') }}">
    @endif
    <meta property="og:title" content="All Products | Luxxu | Modern Design and Living"/>
    <meta property="og:description" content="" />
    <meta property="og:type" content="All Products" />
    <meta property="article:author" content="All Products | Luxxu | Modern Design and Living" />
    <meta property="article:published_time" content="" />
    <meta property="og:url" content="../all-products" />
    <meta property="og:site_name" content="{!! env('BRAND_NAME') !!}" />
    <meta name="description" content="" />

@endsection


@section('head_style')

@endsection


@section('content')


  <div class="container">

    <div class="row text-center mt-4">

      @foreach($categories as $category)


        <div class="col-lg-2 col-md-3 col-sm-4 col-4 p-1 text-center" style="font-size: 10px !important; letter-spacing: 0.4pt;">
          <a href="#">
            <img srcset="{{asset('images/products/thumbnails/menu')}}/{{$category->slug}}.jpg" class="img-fluid">
            <p class="count-products text-center"> PRODUCTS</p>
            <p class="title-menu-visual text-center">{{ strtoupper(str_replace("-"," ",$category->slug)) }}</p>
          </a>
        </div>

      @endforeach

      </div>

    </div>
    <!-- end menu -->

    <div class="container mb-5">

      <!-- best sellers -->
      @if(count($best_sellers) > 0)

      <div class="row main_area area_products">

        <div class="row col-md-12" id="best-sellers">
          <div class="separator">
            <h3 class="background">
              <span>BEST SELLERS</span>
            </h3>
          </div>
        </div>

        @foreach($best_sellers as $best_seller)

          <div class="col-lg-2 col-md-2 col-sm-3 col-4 product_thumb">
            <a href="/products/{{$best_seller->slug}}">
              <img srcset="{{asset('images/products/thumbnails')}}/{{$best_seller->slug}}.jpg" class="img-fluid">
              <div class="product-caption text-uppercase">
                {{ $best_seller->name }}
              </div>
              <div class="product-caption-sub text-uppercase">
                {{ ucwords($best_seller->sub_category->sub_category_languages[0]->name) }}
              </div>
            </a>
          </div>

        @endforeach

      @endif
      <!-- end -->

      <!-- Products by category -->
      @foreach( $categories as $key => $category)

        <div class="row col-md-12" id="{{ $key }}" name="{{ $key }}">
          <div class="separator">
            <h3 class="background">
              <span>{{ strtoupper(str_replace("-"," ",$category->slug)) }}</span>
            </h3>
          </div>
        </div>

        @foreach ( $category->sub_categories as $sub_category )

          @foreach($sub_category->products as $product)
          <div class="col-lg-2 col-md-2 col-sm-3 col-4 text-center product_thumb">
            <a href="/products/{{$product->slug}}">
              <img srcset="{{asset('images/products/thumbnails')}}/{{$product->slug}}.jpg" class="img-fluid">
              <div class="product-caption">{{ strtoupper($product->name) }}</div>
              <div class="product-caption-sub">{{ strtoupper($product->sub_category->sub_category_languages[0]->name) }}</div>
            </a>
            @if($product->is_new)
              <div class="new-badge" style="right: 0px; top: 0px;">
                <img srcset="../images/general/new.png">
              </div>
            @endif
          </div>
          @endforeach
        @endforeach
      <!-- end -->

      @endforeach

    </div>

  </div>

@endsection


@section('footer_scripts')


@endsection
