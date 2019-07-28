
@extends('layouts.app')


@section('head_metas')
  <title>Luxxu | Modern Design and Living</title>
@endsection


@section('head_style')

    <!-- swiper slider -->
    <link rel="stylesheet" href="/css/swiper.min.css">
    
@endsection


@section('content')

  <!-- MENU LX + LX HOME -->
  <div class="row m-0">

    <div class="col-xl-6 col-lg-6 col-md-6 col-6 p-0 menu-img-content luxxu-home-banner pr-1">
      <img srcset="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="/images/homepage/2019/banner-menu-home.jpg" class="img-fluid img-menu-laptop">
      <img src="/images/homepage/2019/banner-menu-home-mobile.jpg" class="img-fluid img-menu-mobile">
      <div class="menu-img-text">
        <h3 class="text-center">LUXXU<br class="break-title"> HOME</h3>
        <a href="/furniture?utm_source=LuxxuLighting&amp;utm_medium=grid&amp;utm_content=furniturepage&amp;utm_campaign=homepage" class="see-collection">
          SEE COLLECTION
        </a>
      </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-6 p-0 menu-img-content luxxu-modern-banner pl-1">
      <img srcset="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="/images/homepage/2019/banner-menu-luxxu.jpg" class="img-fluid img-menu-laptop">
      <img src="/images/homepage/2019/banner-menu-luxxu-mobile.jpg" class="img-fluid img-menu-mobile">
      <div class="menu-img-text">
        <h3 class="text-center">LUXXU<br class="break-title"> MODERN LAMPS</h3>
        <a href="/lighting?utm_source=LuxxuLighting&amp;utm_medium=grid&amp;utm_content=lightingpage&amp;utm_campaign=homepage" class="see-collection">
          SEE COLLECTION
        </a>
      </div>
    </div>

  </div>
  <!-- end -->


  <!-- WEEKS FAVOURITE -->
  <div class="container mb-4 mt-2">
     
    <div class="row">
      
      <div class="separator">
        <h3 class="background"><span class="weeks-favourite">WEEKS FAVOURITES</span></h3>
      </div>
    
      <div class="col-xl-3 col-lg-3 col-md-6 col-6 card-popular-product">
        <a href="/products/charla-dining-chair?utm_source=LuxxuLighting&amp;utm_medium=Website&amp;utm_content=BrandProductImage&amp;utm_campaign=Homepage">
          <img src="/images/furniture/thumbnails/charla-dining-chair.jpg" class="img-fluid mx-auto">
          <p class="popular-product-title text-center">CHARLA</p>
          <p class="popular-product-category text-center">DINING CHAIR</p>
          <div class="btn-get-product-price text-center">
            <span>VIEW MORE</span>
          </div>
        </a>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-6 card-popular-product">
        <a href="/products/prisma-stool?utm_source=LuxxuLighting&amp;utm_medium=Website&amp;utm_content=BrandProductImage&amp;utm_campaign=Homepage">
          <img src="/images/furniture/thumbnails/prisma-stool.jpg" class="img-fluid mx-auto">
          <p class="popular-product-title text-center">PRISMA</p>
          <p class="popular-product-category text-center">STOOL</p>
          <div class="btn-get-product-price text-center">
            <span>VIEW MORE</span>
          </div>
        </a>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-6 card-popular-product">
        <a href="/products/waterfall-pendant?utm_source=LuxxuLighting&amp;utm_medium=Website&amp;utm_content=BrandProductImage&amp;utm_campaign=Homepage">
          <img src="/images/products/thumbnails/waterfall-pendant.jpg" class="img-fluid mx-auto">
          <p class="popular-product-title text-center">WATERFALL</p>
          <p class="popular-product-category text-center">PENDANT</p>
          <div class="btn-get-product-price text-center">
            <span>VIEW MORE</span>
          </div>
        </a>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-6 card-popular-product">
        <a href="/products/tycho-round-suspension?utm_source=LuxxuLighting&amp;utm_medium=Website&amp;utm_content=BrandProductImage&amp;utm_campaign=Homepage">
          <img src="/images/products/thumbnails/tycho-round-suspension.jpg" class="img-fluid mx-auto">
          <p class="popular-product-title text-center">TYCHO ROUND</p>
          <p class="popular-product-category text-center">SUSPENSION</p>
          <div class="btn-get-product-price text-center">
            <span>VIEW MORE</span>
          </div>
        </a>
      </div>
    </div>
  </div>
  <!-- end -->

  <!-- SLIDER BANNERS
  <div class="row">
    <div class="swiper-container">

      <div class="swiper-wrapper">

        <div class="swiper-slide"> 
          <a href="https://www.luxxu.net/virtual-tour/isaloni-april-2019/?utm_source=Luxxu&utm_medium=websiteslideshow&utm_content=campaignisaloni2019&utm_campaign=homepage" target="_blank">          
            <img src="/images/homepage/slide/virtual-tour-isaloni-2019.jpg" class="img-fluid img-slide-laptop">
            <img src="/images/homepage/slide/virtual-tour-isaloni-2019-mobile.jpg" class="img-fluid img-slide-mobile">
            <div class="slide-caption">
              <div class="slide-title">
                <h3>WATERFALL</h3> 
              <div>
                <h5>TABLE LAMP</h5>
              </div>
            </div>
            <div class="slide-description">
              A delicate masterpiece with an exquisite design, <br> inspired by the natural sensation of waterfalls
            </div>
            <div class="discover-more">
              DISCOVER MORE
            </div>
          </div>
        </a>

      </div>

      <div class="swiper-slide"> 
        <a href="https://www.luxxu.net/products/waterfall-table-lamp.php?utm_source=Luxxu&utm_medium=websiteslideshow&utm_content=waterfalltabletable&utm_campaign=homepage" target="_blank">
        <img src="/images/homepage/2018/slide_01.jpg" class="img-fluid img-slide-laptop">
        <img src="/images/homepage/2018/slide_01_mobile.jpg" class="img-fluid img-slide-mobile">
          <div class="slide-caption">
            <div class="slide-title">
              <h3>WATERFALL</h3> 
              div>
                <h5>TABLE LAMP</h5>
              </div>
            </div>
            <div class="slide-description">
              A delicate masterpiece with an exquisite design, <br> inspired by the natural sensation of waterfalls
            </div>
            <div class="discover-more">
              DISCOVER MORE
            </div>
          </div>
        </a>
      </div>

    </div>

    <div class="swiper-pagination"></div>
            
    <div class="swiper-button-next swiper-button-black"></div>
    <div class="swiper-button-prev swiper-button-black"></div> 

  </div>
  -->


  <!-- BANNERS CAMPAINGS -->
  <div class="container p-0">
    <div class="row">

    <div class="col-12 p-0">

      <div class="col-lg-8 mb-2 p-1 float-left"> 
        <a href="https://www.luxxu.net/video/?utm_source=Luxxu&amp;utm_medium=grid&amp;utm_content=videopage&amp;utm_campaign=homepage">
          <div class="pages-home">
            <h3 style="font-size: 35px;">HANDMADE PRODUCTION</h3>
            <h5>THE HIGHEST QUALITY AND ATTENTION TO DETAIL IN EVERY DESIGN</h5>
          </div>
          <img srcset="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="/images/homepage/2018/video.jpg" class="img-fluid">
        </a>
      </div>
      
      <div class="col-lg-4 col-md-6 p-1 float-left"> 
        <a href="/brand-ambassadors?utm_source=Luxxu&amp;utm_medium=grid&amp;utm_content=brandambassadorspage&amp;utm_campaign=homepage">
          <div class="pages-home">
            <h3>MEET YOUR AMBASSADOR</h3>
            <h5 style="text-transform: uppercase;">Get in direct contact with the responsible <br class="break-line">for your market</h5>
          </div>
          <img srcset="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="/images/homepage/2019/meet-ambassadors.jpg" class="img-fluid">
        </a>
      </div>
      
      <div class="col-lg-4 col-md-6 p-1 float-left"> 
        <a href="/stock?utm_source=Luxxu&amp;utm_medium=grid&amp;utm_content=stockpage&amp;utm_campaign=homepage">
          <div class="pages-home">
            <h3 style="">LIFE IS SHORT!</h3>
            <h5 style="text-transform: uppercase;">There's no waiting for special products</h5>
          </div>
          <img srcset="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="/images/homepage/2019/stock-banner.jpg" class="img-fluid">
        </a>
      </div>

    </div>
      
      <!-- 
      <div class="col-lg-4 col-md-6">
        <a href="https://www.luxxu.net/about?utm_source=Luxxu&utm_medium=grid&utm_content=aboutpage&utm_campaign=homepage">
          <div class="pages-home">
            <h3>ABOUT US</h3>
            <h5>HIGH-END CREATIONS THAT REDEFINE LUXURY DESIGN</h5>
          </div>
          <img srcset="/images/homepage/2018/about.jpg" class="img-fluid">
        </a>
      </div> 
      -->
    
    </div>
  </div>
  <!-- end -->

  <!-- Banner Ebook -->
  <div class="container mb-5 p-0">
    <div class="row p-1"> 
      <a href="#banner-new-products" target="_blank" id="banner-new-products pr-1 pl-1">
        <img srcset="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="/images/homepage/2019/new-products.jpg" class="img-fluid img-new-products-laptop">
        <img srcset="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="/images/homepage/2019/new-products-mobile.jpg" class="img-fluid img-new-products-mobile">
      </a>
    </div>

    <!-- Form Ebook -->
    <div class="row">
      <div class="container mb-4">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12 form-schedule-ebook form-appointment-ebook" id="form-appointment-ebook">
          <div class="separator">
            <h3 class="background"><span>DOWNLOAD EBOOK NEW PRODUCTS</span></h3>
          </div>
          @include('includes/forms/ebooks/new-products')
        </div>
      </div>
    </div>
  </div>
  <!-- end -->

@endsection


@section('footer_scripts')

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 0,
        loop: true,
        autoplay: {
          delay: 5000,
        },
        speed: 500,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        // navigation: {
        //    nextEl: '.swiper-button-next',
        //    prevEl: '.swiper-button-prev',
        // }
    });
  </script>
  <!-- END Swiper -->

  <!-- Ebook New Products -->
  <script type="text/javascript">
      $(document).ready(function(){
        // Add smooth scrolling to all links
          $("#banner-new-products").on('click', function(event) {

              // Make sure this.hash has a value before overriding default behavior
              if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                  scrollTop: $(hash).offset().top
                }, 1000, function(){

                  // Add hash (#) to URL when done scrolling (default click behavior)
                  window.location.hash = hash;
                });
              } // End if

              $(".form-schedule-ebook").removeClass("form-appointment-ebook");

            });
      });
  </script>

@endsection