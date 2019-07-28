@extends('layouts.app')

@section('head_metas')

    <title>Interiors | Luxxu | Modern Design and Living</title>
    @if (Session::has('data'))
        <meta http-equiv="refresh" content="5;url=/download/{{ Session::get('data') }}">
    @endif
    <meta property="og:title" content="Interiors | Luxxu | Modern Design and Living"/>
    <meta property="og:description" content="" />
    <meta property="og:type" content="Interiors" />
    <meta property="article:author" content="Interiors | Luxxu | Modern Design and Living" />
    <meta property="article:published_time" content="" />
    <meta property="og:url" content="../interiors" />
    <meta property="og:site_name" content="{!! env('BRAND_NAME') !!}" />
    <meta name="description" content="" />

@endsection


@section('head_style')

    <style type="text/css">
      .item {
        margin-bottom: 8px;
      }

      .container-fluid.no-gutter {
        padding: 0px;
      }
      .container-fluid.no-gutter .row [class*='col-']:not(:first-child),
      .container-fluid.no-gutter .row [class*='col-']:not(:last-child)
      {
        padding-right: 0;
        padding-left: 0;
      }

      .item { 
        border: none;
      }

      /* Isotope Transitions
      ------------------------------- */
      .isotope,
      .isotope .item {
        -webkit-transition-duration: 0.8s;
           -moz-transition-duration: 0.8s;
            -ms-transition-duration: 0.8s;
             -o-transition-duration: 0.8s;
                transition-duration: 0.8s;
      }

      .isotope {
        -webkit-transition-property: height, width;
           -moz-transition-property: height, width;
            -ms-transition-property: height, width;
             -o-transition-property: height, width;
                transition-property: height, width;
      }

      .isotope .item {
        -webkit-transition-property: -webkit-transform, opacity;
           -moz-transition-property:    -moz-transform, opacity;
            -ms-transition-property:     -ms-transform, opacity;
             -o-transition-property:         top, left, opacity;
                transition-property:         transform, opacity;
      }
      .item-wrap {
        padding-right: 4px;
        padding-left: 4px;
      }
    </style>

@endsection


@section('content')

    <div class="row main">
      <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 nopadding">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 nopadding">
              <div id="filters" class="button-group col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <h1 class="widget-title">Room Types</h1>
                <button class="btn btn-primary" data-filter="*">ALL INTERIORS</button>
                <button class="btn btn-primary" data-filter=".entryways">ENTRYWAYS</button>
                <button class="btn btn-primary" data-filter=".living-rooms">LIVING ROOMS</button>
                <button class="btn btn-primary" data-filter=".dining-rooms">DINING ROOMS</button>
                <!--<button class="btn btn-primary" data-filter=".bar">BAR</button>
                <button class="btn btn-primary" data-filter=".gamming-rooms">GAMMING ROOMS</button>
                <button class="btn btn-primary" data-filter=".kitchens">KITCHENS</button>
                <button class="btn btn-primary" data-filter=".offices">OFFICES</button>-->
                <button class="btn btn-primary" data-filter=".bedrooms">BEDROOMS</button>
                <!--<button class="btn btn-primary" data-filter=".kids">KIDS</button>-->
                <button class="btn btn-primary" data-filter=".bathrooms">BATHROOMS</button>
                <button class="btn btn-primary" data-filter=".hotel-lobbies">HOTEL LOBBIES</button>
                <!--<button class="btn btn-primary" data-filter=".bed-hotel">BED HOTEL</button>
                <button class="btn btn-primary" data-filter=".restaurants">RESTAURANTS</button>
                <button class="btn btn-primary" data-filter=".outdoor">OUTDOOR</button>-->
                  <a href="https://www.luxxu.net/interiors/design-books/" target="_blank" class="widget-title" style="color:black;font-size:10pt;">DESIGN BOOKS</a>
                  <a href="https://www.luxxu.net/interiors/design-books/?utm_source=Banner-Interiors&utm_medium=Interiors&utm_content=Banner-Interiors-Ebook&utm_campaign=Ebook" target="_blank">
                    <img src="https://www.luxxu.net/interiors/design-books/media/design-books.jpg" alt="Design Books" class="img-responsive img-design-books">
                  </a>
              </div>
              
              <div class="container-fluid no-gutter col-xs-12 col-sm-12 col-md-10 col-lg-10">
                <div id="posts" class="row">
                    <div id="1" class="item living-rooms col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/living-rooms/draycott-I-wall.php">
                            <img class="img-responsive" src="/images/interiors/living-room-01.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="2" class="item living-rooms col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/living-rooms/guggenheim-chandelier.php">
                            <img class="img-responsive" src="/images/interiors/living-room-02.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="3" class="item living-rooms col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/living-rooms/liberty-I-wall.php">
                            <img class="img-responsive" src="/images/interiors/living-room-03.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="4" class="item living-rooms col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/living-rooms/burj-chandelier.php">
                            <img class="img-responsive" src="/images/interiors/living-room-04.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="5" class="item living-rooms col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/living-rooms/draycott-I-wall-01.php">
                            <img class="img-responsive" src="/images/interiors/living-room-05.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="6" class="item living-rooms col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/living-rooms/waterfall-rectangular-suspension.php">
                            <img class="img-responsive" src="/images/interiors/living-room-06.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="7" class="item living-rooms col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/living-rooms/waterfall-wall.php">
                            <img class="img-responsive" src="/images/interiors/living-room-07.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="8" class="item hotel-lobbies col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/hotel-lobbies/scala-chandelier.php">
                            <img class="img-responsive" src="/images/interiors/hotel-lobby-01.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="9" class="item hotel-lobbies col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/hotel-lobbies/waterfall-torch-wall.php">
                            <img class="img-responsive" src="/images/interiors/hotel-lobby-02.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="10" class="item entryways col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/entryways/draycott-II-wall.php">
                            <img class="img-responsive" src="/images/interiors/entryway-01.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="11" class="item entryways col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/entryways/waterfall-wall.php">
                            <img class="img-responsive" src="/images/interiors/entryway-02.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="12" class="item entryways col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/entryways/empire-XL-chandelier.php">
                            <img class="img-responsive" src="/images/interiors/entryway-03.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="13" class="item dining-rooms col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/dining-rooms/empire-suspension.php">
                            <img class="img-responsive" src="/images/interiors/dining-room-01.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="14" class="item dining-rooms col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/dining-rooms/tycho-round-suspension.php">
                            <img class="img-responsive" src="/images/interiors/dining-room-02.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="15" class="item dining-rooms col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/dining-rooms/empire-snooker.php">
                            <img class="img-responsive" src="/images/interiors/dining-room-03.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="16" class="item bedrooms col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/bedrooms/draycott-pendant.php">
                            <img class="img-responsive" src="/images/interiors/bedroom-01.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="17" class="item bedrooms col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/bedrooms/mcqueen-wall.php">
                            <img class="img-responsive" src="/images/interiors/bedroom-02.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="18" class="item bathrooms col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/trump-chandelier.php">
                            <img class="img-responsive" src="/images/interiors/bathroom-01.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="19" class="item bathrooms col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/trump-chandelier-01.php">
                            <img class="img-responsive" src="/images/interiors/bathroom-02.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="20" class="item bathrooms col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/waterfall-pendant.php">
                            <img class="img-responsive" src="/images/interiors/bathroom-03.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="21" class="item entryways col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/entryways/babel-chandelier.php">
                            <img class="img-responsive" src="/images/interiors/entryway-04.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="22" class="item entryways col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/entryways/beyond-console.php">
                            <img class="img-responsive" src="/images/interiors/entryway-05.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="23" class="item entryways col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/entryways/burj-wall.php">
                            <img class="img-responsive" src="/images/interiors/entryway-06.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="24" class="item entryways col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/entryways/darian-sideboard.php">
                            <img class="img-responsive" src="/images/interiors/entryway-07.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="25" class="item living-rooms col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/living-rooms/empire-chandelier.php">
                            <img class="img-responsive" src="/images/interiors/living-room-08.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="26" class="item living-rooms col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/living-rooms/empire-pendant.php">
                            <img class="img-responsive" src="/images/interiors/living-room-09.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="27" class="item living-rooms col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/living-rooms/empire-side-table-small.php">
                            <img class="img-responsive" src="/images/interiors/living-room-10.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="28" class="item living-rooms col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/living-rooms/empire-wall.php">
                            <img class="img-responsive" src="/images/interiors/living-room-11.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="29" class="item hotel-lobbies col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/hotel-lobbies/majestic-suspension.php">
                            <img class="img-responsive" src="/images/interiors/hotel-lobby-03.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="30" class="item entryways col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/entryways/tycho-wall.php">
                            <img class="img-responsive" src="/images/interiors/entryway-08.jpg">
                          </a>
                        </div>
                    </div>
                    <div id="31" class="item entryways col-sm-3">
                        <div class="item-wrap">
                          <a href="/interiors/entryways/waterfall-pendant.php">
                            <img class="img-responsive" src="/images/interiors/entryway-09.jpg">
                          </a>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
      </div>
    </div>

@endsection


@section('footer_scripts')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/1.5.25/jquery.isotope.min.js"></script>
  
  <script>
    $( window ).load(function() {
    /* activate jquery isotope */
    var $container = $('#posts').isotope({
      itemSelector : '.item',
      isFitWidth: true
    });

    $(window).smartresize(function(){
      $container.isotope({
        columnWidth: '.col-sm-3'
      });
    });
    
    $container.isotope({ filter: '*' });

    // filter items on button click
    $('#filters').on( 'click', 'button', function() {
      var filterValue = $(this).attr('data-filter');
      $container.isotope({ filter: filterValue });
    });
  });
  </script>

@endsection