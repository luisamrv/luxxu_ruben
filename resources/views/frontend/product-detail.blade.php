@extends('layouts.app')

@section('head_metas')

    <title>{{ ucwords($product->name) }} {{ ucwords(str_replace('-', ' ', str_singular($product->sub_category->slug))) }} - Luxxu | Modern Design and Living</title>
    @if (Session::has('data'))
        <meta http-equiv="refresh" content="5;url=/download/{{ Session::get('data') }}">
    @endif
    <meta property="og:title" content="{{ ucwords($product->name) }} - Luxxu | Modern Design and Living"/>
    <meta property="og:description" content="{{$product->meta_description}}" />
    <meta property="og:type" content="product" />
    <meta property="article:author" content="Luxxu | Modern Design and Living" />
    <meta property="article:published_time" content="" />
    <meta property="og:url" content="../products/{{$product->slug}}" />
    <meta property="og:image" content="../images/products/{{$product->slug}}/{{$product->slug}}-01.jpg" />
    <meta property="og:site_name" content="{!! env('BRAND_NAME') !!}" />
    <meta name="description" content="{{$product->meta_description}}" />
    <meta name="keywords" content="{{$product->key_words}}" />
    
@endsection


@section('head_style')

    <!-- swiper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css">

    <!-- lightbox zoom -->
    <link href="{{asset('css/lightbox.css')}}" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- slidebar menu form -->
    <link rel="stylesheet" href="{{asset('css/slidebars.css')}}">
    
@endsection

@section('content')

    <div class="page-opacity"></div>
        <div class="row header-product">
            <div class="container">
                <div class="row m-0">
                    <div class="col-lg-6 swiper-container float-left">
                        <div class="swiper-wrapper">

                            @php
                                $directory = "images/products/".$product->slug."/";
                                $filecount = count(glob($directory . '*.{jpg}', GLOB_BRACE));
                                $directory_thumb = "images/products/".$product->slug."/details/";
                                $filecount_thumb = count(glob($directory_thumb . '*.{jpg}', GLOB_BRACE));
                            @endphp

                            @for($i = 1; $i <= $filecount; $i++)
                            <div class="swiper-slide">
                                @if($i < 10)
                                    <img src="{{asset('images/products')}}/{{$product->slug}}/{{$product->slug}}-0{{$i}}.jpg" class="img-fluid center-block">
                                @else
                                    <img src="{{asset('images/products')}}/{{$product->slug}}/{{$product->slug}}-{{$i}}.jpg" class="img-fluid center-block">  
                                @endif 
                            </div>
                            @endfor

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="col-lg-6 info-product float-left">
                      <p class="product-title text-uppercase">
                        {{ $product->name }}
                      </p>
                      <p class="product-subtitle text-uppercase">
                        {{ strtoupper(str_replace('-', ' ', str_singular($product->sub_category->slug))) }}
                      </p>
                      <p class="product-description">
                        {!! $product->product_languages[0]->description !!}
                      </p>
                   
                            <div class="row mt-2 p-0">
                                <div class="col-5 buttons-product-page p-0">
                                    <a class="js-toggle-right-slidebar col-12 text-white">GET PRICE</a>
                                </div>
                                <div class="col-5 buttons-product-page p-0 ml-2">
                                    <a class="js-toggle-right-slidebar col-12 text-white">INQUIRE</a>
                                </div>
                                <!-- 
                                <div class="col-md-5 col-12 product-download-hr">
                                    <div class="btn-download-hr"> <a href="https://www.luxxu.net/press.php"><span>DOWNLOAD HR IMAGES</span><img src="/images/arrow.png" height="10" style="padding-left: 2px;"></span></a></div>
                                </div> 
                                -->
                            </div>


                            <div off-canvas="slidebar-2 right shift">

                                <div class="col-12 inquire-head">
                                    <h1>CONTACT</h1>
                                    <a class="js-close-right-slidebar">X</a>
                                </div>
                                
                                <div class="col-12 inquire-menu">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item active"> 
                                            <a class="nav-link active" href="#inquire" role="tab" data-toggle="tab">INQUIRE</a> 
                                        </li>
                                        <li class="nav-item"> 
                                            <a class="nav-link" href="#get-price" role="tab" data-toggle="tab">GET PRICE</a> 
                                        </li>
                                        <!--
                                        <li class="nav-item"> 
                                            <a class="nav-link" href="#live-chat" role="tab" data-toggle="tab">LIVE CHAT</a> 
                                        </li> 
                                        -->
                                    </ul>
                                </div>

                                <div class="col-12 inquire-content tab-content text-center">
                                    <div role="tabpanel" class="tab-pane fade in active col-12 pl-0 pr-0" id="inquire">
                                        <?php $prodname = "$product->name"; ?> 
                                        @include('includes.forms.product-page.request-info-2019')
                                    </div>
                                
                                    <div role="tabpanel" class="tab-pane fade" id="get-price">
                                        <?php $prodname = "$product->name"; ?>  
                                        @include('includes.forms.product-page.request-price-2019')
                                    </div>

                                </div>

                            </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Details + Tec Info -->
        <div class="container more-info-product mt-4">

                <div class="row details-product-img">
                    <div class="line-title mb-2">

                        @for($i = 1; $i <= $filecount_thumb; $i++)
                            
                            <div class="col-md-5 detail-img">

                                <a href="{{asset('images/products')}}/{{$product->slug}}/details/{{$product->slug}}-detail-0{{$i}}.jpg" class="img-responsive center-block" data-lightbox="image-1" data-title="{{strtoupper($product->name)}} - {{ strtoupper(str_replace('-', ' ', str_singular($product->sub_category->slug))) }}">
                                    <img srcset="{{asset('images/products')}}/{{$product->slug}}/details/{{$product->slug}}-detail-0{{$i}}.jpg" class="img-fluid center-block">
                                </a>

                            </div>

                        @endfor

                    </div>
                </div>

                <div class="row details-product-info">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="product-detail-info text-left mb-4">
                            {!! $product->product_languages[0]->tec_info !!}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 text-left">
                        <div class="product-detail-info text-left mb-4">
                            {!! $product->product_languages[0]->dimensions !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 hidden-sm hidden-xs"></div>
                        <div class="col-md-6 col-sm-12 col-12 product-download-pdf mb-5 pl-1 pr-1">
                            <!-- Display Popup Button -->
                            <button id="btn-download-pdf" onclick="div_show()">DOWNLOAD PRODUCT SHEET</button>
                            <!-- Body Starts Here -->
                            <div id="btn_white_product-sheet">
                                <!-- Popup Div Starts Here -->
                                <div id="popupContact">
                                    <!-- Contact Us Form -->
                                    <?php $downloadsheet = "https://www.luxxu.net/product-sheet/draycott-pendant.pdf"; ?>
                                    @include('includes.forms.product-page.product-sheet')
                                </div>
                                <!-- Popup Div Ends Here -->
                            </div>
                        </div>
                    </div>
                </div>

        </div>
        <!-- end -->


        <!-- CUSTOMIZE PARALAX -->
        <div class="row p-0 mb-5">
            <div class="col-12 paralax-pub">
                <div class="paralax-content">
                    <h2 class="paralax-title">HIGH END CUSTOM DESIGN</h2>
                    <p class="paralax-topic col-12">The perfect match for your project</p>
                    <a id="modalButtton" class="costumize-link" data-toggle="modal" data-target="#myModal">
                        <div class="btn-samples col-12">
                            <span>CUSTOMIZE <img srcset="/images/arrow.png" height="12"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- CUSTOMIZE MODAL -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="row modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 id="modal-title">CUSTOMIZE</h4>
                    </div>
                    <div class="row modal-body">
                        <div class="col-md-9 col-12">


                            <form class="demo-form col-md-12 col-12" action="/includes/process/request-customize-info.php" method="POST">
                                <div class="form-section">


                                <p>* Select all the filters by category to <br class="select-custom-text">customize your product</p>
                                  <div class="panel-group" id="accordion">
                                    <!-- <div class="panel panel-default">
                                      <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#customize">MARBLES <i class="fas fa-chevron-down"></i><span class="text-marble"></span></a>
                                        </h4>
                                      </div>

                                      <div id="customize" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <ul>
                                                <li data-main="estremoz" class="customize-marble">
                                                    <i class="far fa-check-circle hidden"></i>
                                                    <img class="customize-filter img-responsive center-block" src="https://www.luxxu.net/images/samples/estremoz-marble.jpg">
                                                    <figcaption>estremoz</figcaption>
                                                </li>
                                                <li data-main="carrara" class="customize-marble">
                                                    <i class="far fa-check-circle hidden"></i>
                                                    <img class="customize-filter img-responsive center-block" src="https://www.luxxu.net/images/samples/carrara-marble.jpg">
                                                    <figcaption>carrara</figcaption>
                                                </li>
                                                <li data-main="nero-marquina" class="customize-marble">
                                                    <i class="far fa-check-circle hidden"></i>
                                                    <img class="customize-filter img-responsive center-block" src="https://www.luxxu.net/images/samples/nero-marquina-marble.jpg">
                                                    <figcaption>nero marquina</figcaption>
                                                </li>
                                                <li data-main="green" class="customize-marble">
                                                    <i class="far fa-check-circle hidden"></i>
                                                    <img class="customize-filter img-responsive center-block" src="https://www.luxxu.net/images/samples/estremoz-marble.jpg">
                                                    <figcaption>green</figcaption>
                                                </li>
                                                <li data-main="emperador-dark" class="customize-marble">
                                                    <i class="far fa-check-circle hidden"></i>
                                                    <img class="customize-filter img-responsive center-block" src="https://www.luxxu.net/images/samples/emperador-dark.jpg">
                                                    <figcaption>emperador dark</figcaption>
                                                </li>
                                            </ul>
                                        </div>
                                      </div>
                                    </div> -->

                                    <div class="panel panel-default">
                                      <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">CRYSTAL GLASS <i class="fas fa-chevron-down"></i><span class="text-crystal"></span></a>
                                        </h4>
                                      </div>

                                      <div id="collapseTwo" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <ul>
                                                <li data-main="ambar-colour-ribbed" class="customize-crystal">
                                                    <i class="far fa-check-circle hidden"></i>
                                                    <img class="customize-filter img-responsive center-block" src="https://www.luxxu.net/images/samples/ambar.jpg">
                                                    <figcaption>ambar colour: ribbed</figcaption>
                                                </li>
                                                <li data-main="clear-colour-ribbed" class="customize-crystal">
                                                    <i class="far fa-check-circle hidden"></i>
                                                    <img class="customize-filter img-responsive center-block" src="https://www.luxxu.net/images/samples/crystal.jpg">
                                                    <figcaption>clear colour: ribbed</figcaption>
                                                </li>
                                                <li data-main="ambar-colour" class="customize-crystal">
                                                    <i class="far fa-check-circle hidden"></i>
                                                    <img class="customize-filter img-responsive center-block" src="https://www.luxxu.net/images/samples/ambar.jpg">
                                                    <figcaption>ambar colour</figcaption>
                                                </li>
                                                <li data-main="clear-colour" class="customize-crystal">
                                                    <i class="far fa-check-circle hidden"></i>
                                                    <img class="customize-filter img-responsive center-block" src="https://www.luxxu.net/images/samples/crystal.jpg">
                                                    <figcaption>clear-colour</figcaption>
                                                </li>
                                            </ul>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="panel panel-default">
                                      <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">METAL FINISHES <i class="fas fa-chevron-down"></i><span class="text-metal"></span></a>
                                        </h4>
                                      </div>

                                      <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li data-main="gold-plated" class="customize-metal">
                                                    <i class="far fa-check-circle hidden"></i>
                                                    <img class="customize-filter img-responsive center-block" src="https://www.luxxu.net/images/samples/gold-plated.jpg">
                                                    <figcaption>gold plated</figcaption>
                                                </li>
                                                <li data-main="brushed-brass" class="customize-metal">
                                                    <i class="far fa-check-circle hidden"></i>
                                                    <img class="customize-filter img-responsive center-block" src="https://www.luxxu.net/images/samples/brushed-brass.jpg">
                                                    <figcaption>brushed brass</figcaption>
                                                </li>
                                                <li data-main="nickel-plated" class="customize-metal">
                                                    <i class="far fa-check-circle hidden"></i>
                                                    <img class="customize-filter img-responsive center-block" src="https://www.luxxu.net/images/samples/nickel-plated.jpg">
                                                    <figcaption>nickel plated</figcaption>
                                                </li>
                                                <li data-main="brushed-nickel" class="customize-metal">
                                                    <i class="far fa-check-circle hidden"></i>
                                                    <img class="customize-filter img-responsive center-block" src="https://www.luxxu.net/images/samples/brushed-nickel.jpg">
                                                    <figcaption>brushed nickel</figcaption>
                                                </li>
                                                <li data-main="black-nickel-plated" class="customize-metal">
                                                    <i class="far fa-check-circle hidden"></i>
                                                    <img class="customize-filter img-responsive center-block" src="https://www.luxxu.net/images/samples/black-nickel-plated.jpg">
                                                    <figcaption>black nickel plated</figcaption>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li data-main="brushed-black-nickel" class="customize-metal">
                                                    <i class="far fa-check-circle hidden"></i>
                                                    <img class="customize-filter img-responsive center-block" src="https://www.luxxu.net/images/samples/brushed-black-nickel.jpg">
                                                    <figcaption>brushed black nickel</figcaption>
                                                </li>
                                                <li data-main="aged-brass" class="customize-metal">
                                                    <i class="far fa-check-circle hidden"></i>
                                                    <img class="customize-filter img-responsive center-block" src="https://www.luxxu.net/images/samples/aged-brass.jpg">
                                                    <figcaption>aged brass</figcaption>
                                                </li>
                                                <li data-main="cooper-plated" class="customize-metal">
                                                    <i class="far fa-check-circle hidden"></i>
                                                    <img class="customize-filter img-responsive center-block" src="https://www.luxxu.net/images/samples/copper-plated.jpg">
                                                    <figcaption>cooper plated</figcaption>
                                                </li>
                                                <li data-main="brushed-cooper" class="customize-metal">
                                                    <i class="far fa-check-circle hidden"></i>
                                                    <img class="customize-filter img-responsive center-block" src="https://www.luxxu.net/images/samples/brushed-copper.jpg">
                                                    <figcaption>brushed cooper</figcaption>
                                                </li>
                                            </ul>
                                        </div>
                                      </div>
                                    </div>

                                
                                    <!-- <label for="marble"></label> -->
                                    <label for="crystal"></label>
                                    <label for="metal"></label>
                                    <div class="hidden">
                                        <!-- <input type="text" name="marble" id="marble" class="hidden" required=""> -->
                                        <input type="text" name="crystal" id="crystal" class="hidden" required="">
                                        <input type="text" name="metal" id="metal" class="hidden" required="">
                                    </div>
                                  </div>
                                </div>

                                  <div class="form-section">

                                    <?php $prodname = "Draycott Pendant"; ?>  
                                    @include('includes.forms.product-page.request-customize-info')

                                  </div>


                                  <div class="form-navigation">
                                    <button type="button" class="previous btn btn-info pull-left">&lt; Back & Customize</button>
                                    <button type="button" class="next btn btn-info pull-right">Get Custom Product Info &gt;</button>
                                    <!-- <input type="submit" class="btn btn-default pull-right"> -->
                                    <span class="clearfix"></span>
                                  </div>
                                </form>

                            </div>

                            <div class="customize-img col-md-3">
                                <img src="{{asset('images/products')}}/{{$product->slug}}/{{$product->slug}}-01.jpg" class="img-fluid center-block">
                            </div>

                        </div>

                </div>

            </div>
          </div>
          <!-- end of Modal -->


          <!-- Related Products -->
          <div class="container similar-products">
            <h3 class="text-center pb-1 font-weight-bold">LET US SUGGEST YOU</h3>
            <div class="row mt-3 mb-5">

                @foreach($product->similar->product_similars as $similar)

                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 similar-info p-0 mb-4">
                        <a href="/products/{{$similar->product->slug}}" class="text-uppercase">
                            <img src="{{asset('images/products/thumbnails')}}/{{$similar->product->slug}}.jpg" class="img-fluid">
                            <!-- <span class="ticket-press-top">AS SEEN IN PRESS</span> -->
                            <p class="text-center">
                                <b>{{ $similar->product->name }} | </b>{{ ucwords($similar->product->sub_category->sub_category_languages[0]->name) }}
                            </p>
                            <div class="btn-view-more text-center">
                                <span>VIEW MORE</span>              
                            </div>
                        </a>
                    </div>

                @endforeach

            </div>
        </div>
        <!-- end -->

        <!-- Video -->
        <div class="row video-content p-0 mb-5">
            <a href="https://www.youtube.com/watch?v=JYmA2ibQ8Yk" target="_blank">
                <img src="/images/video.jpg" class="img-fluid">
            </a>
        </div>
        <!-- end -->

@endsection


@section('footer_scripts')

    <!-- lightbox zoom -->
    <script src="{{asset('js/lightbox.js')}}"></script>

    <!-- steps parsley -->
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
        $('.demo-form').parsley().whenValidate({
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

    <!-- PRODUCT PAGE -->

      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper('.swiper-container', {
          loop: true,
          autoplay: {delay:6000},
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
        });
      </script>

      <!-- lightbox zoom -->
      <script>
          lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
          })
      </script>

      <!-- Modal Customize -->
      <script>
        
        $('#myModal').on('hidden.bs.modal', function() {
          $('.collapse').collapse('hide');
        });
        $('#myModal').on('shown.bs.modal', function() {
          $('#customize').collapse('show');
        });

        $('#accordion').find('.panel-default:has(".in")').addClass('panel-primary');

        $('#accordion').on('show.bs.collapse', function(e) {
          $(e.target).closest('.panel-default').addClass(' panel-primary');
          $('.collapse').collapse('hide');
        }).on('hide.bs.collapse', function(e) {
          $(e.target).closest('.panel-default').removeClass(' panel-primary');
        })

      </script>

      <!-- Customize Filter -->
      <script>
        /* marble */
        $('.customize-marble').click(function(){
          $('.text-marble').css('background','#141414');
          var marble= $(this).attr('data-main');
          console.log(marble);
          $('#marble').val(marble);
          $('.customize-marble').children('i').addClass('hidden');
          $(this).children('i').removeClass('hidden');
          $('.text-marble').html(marble);
        });

        $('.next.btn.btn-info').click(function(){
          if($('.text-marble').html() == ''){
            $('.text-marble').hide();
          }
        });

        /* crystal */
        $('.customize-crystal').click(function(){
          $('.text-crystal').css('background','#141414');
          var crystal= $(this).attr('data-main');
          console.log(crystal);
          $('#crystal').val(crystal);
          $('.customize-crystal').children('i').addClass('hidden');
          $(this).children('i').removeClass('hidden');
          $('.text-crystal').html(crystal);
        });

        $('.next.btn.btn-info').click(function(){
          if($('.text-crystal').html() == ''){
            $('.text-crystal').hide();
          }
        });

        /* metal */
        $('.customize-metal').click(function(){
          $('.text-metal').css('background','#141414');
          var metal= $(this).attr('data-main');
          console.log(metal);
          $('#metal').val(metal);
          $('.customize-metal').children('i').addClass('hidden');
          $(this).children('i').removeClass('hidden');
          $('.text-metal').html(metal);
        });

        $('.next.btn.btn-info').click(function(){
          if($('.text-metal').html() == ''){
            $('.text-metal').hide();
          }
        });

        /* swarovski */
        $('.customize-swarovski').click(function(){
          $('.text-swarovski').css('background','#141414');
          var swarovski= $(this).attr('data-main');
          console.log(swarovski);
          $('#swarovski').val(swarovski);
          $('.customize-swarovski').children('i').addClass('hidden');
          $(this).children('i').removeClass('hidden');
          $('.text-swarovski').html(swarovski);
        });

        $('.next.btn.btn-info').click(function(){
          if($('.text-swarovski').html() == ''){
            $('.text-swarovski').hide();
          }
        });

      </script>
    <!-- END product page -->


    <!-- FORM SCRIPTS -->

    <script type="text/javascript">
      $(document).on('click', '.close-price-wrapper', function(event) { 
          event.preventDefault(); 
          $(".product-price-cta").click(); 
      });
      $('.product-price-cta').click(
          function(){
              $('.wrapper-request-info').css('display','none');
          });
    </script>

    <script type="text/javascript">
        document.getElementById("request-price-tag").onclick = function() 
        {ga('send', 'event', 'Botão', 'Clicar', 'BuyNow')};
    </script>
                        
      <script type="text/javascript">
        $("#country").change(function () {
            var selected_option = $('#country').val();
            if (selected_option === 'United States') {
                $('#statewrapper').attr('pk','1').show();
            }
            if (selected_option != 'United States') {
                $("#statewrapper").removeAttr('pk').hide();
            }
        })
      </script>
    <!-- end -->

@endsection