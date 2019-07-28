@extends('layouts.app')

@section('head_metas')

    <title>Design Books | Luxxu | Modern Design and Living</title>
    @if (Session::has('data'))
        <meta http-equiv="refresh" content="5;url=/download/{{ Session::get('data') }}">
    @endif
    <meta property="og:title" content="Design Books | Luxxu | Modern Design and Living"/>
    <meta property="og:description" content="" />
    <meta property="og:type" content="Design Books" />
    <meta property="article:author" content="Design Books | Luxxu | Modern Design and Living" />
    <meta property="article:published_time" content="" />
    <meta property="og:url" content="../design-books" />
    <meta property="og:site_name" content="{!! env('BRAND_NAME') !!}" />
    <meta name="description" content="" />

@endsection


@section('head_style')

    <style type="text/css">
        .container {
            padding-left: 0px;
            padding-right: 0px;
        }

        .row, #fixedmenu {
            margin: 0;
        }

        .sub-menu-mobile {
            display: grid;
        }
        
        @media (min-width: 320px) and (max-width: 720px) {
            .container {
            padding-left: 15px;
            padding-right: 15px;
            }
        }
    </style>

@endsection


@section('content')

    <div id="form-ebooks-banner" class="modal-infographic" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="form-popup-header text-center">
                        <h1>Free Download</h1>
                    </div>
                </div>
                <div class="modal-body">
                    @include('includes/forms/ebooks/download-banner')
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 nopadding">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 nopadding">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <a id="ebooks-banner">
                        <img src="https://www.luxxu.net/interiors/design-books/media/banner-infographic.jpg" alt="Catalogue" class="img-responsive">
                    </a>
                </div>
                <div class="tab-content col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">

                    <!-- ebook
                 <div class="ebook  col-lg-6  col-md-6 col-sm-12  col-xs-12">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 nopadding">
                            <div>
                                <img src="/inspirations/design-books/media/high-point-market-2018.png" class="img-responsive img-pad" alt="High Point Market 2018">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-form">
                                    <div class="content-item content-ebook" name="High Point Market" id="High-Point-Market">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7  col-md-7 col-sm-7 col-xs-12 nopadding">

                            <div class="description-ebook">
                                <h2 class=" ">
                                    <strong>HPMKT TRENDS 2018</strong>
                                </h2>
                                <p class="wbz-text-1">Find out what makes High Point Market the must-see event in <a href="https://www.luxxu.net/all-products/?utm_source=Ebooks-page&utm_medium=downloads&utm_campaign=EbookWords" target="_blank" class="text-link">home furnishings</a>. Experience just some of the energy and excitement that makes Market Week fashion week for home furnishings. Get inspiring with the <a href="https://www.luxxu.net/all-products/?utm_source=Ebooks-page&utm_medium=downloads&utm_campaign=EbookWords" target="_blank" class="text-link">selections</a> of the Style Spotters ! </p>
                            </div>

                        </div>
                    </div>
                  /ebook -->


                  <!-- ebook -->
                    <div class="ebook  col-lg-6  col-md-6 col-sm-12  col-xs-12">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 nopadding">
                            <div>
                                <img src="/interiors/design-books/media/modern-collection-design-space.jpg" class="img-responsive img-pad" alt="modern-collection-design-space">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-form">
                                    <div class="content-item content-ebook" name="Modern Collection Design Space" id="modern-collection-design-space">
                                        @include('includes/forms/ebooks/download-ebook')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7  col-md-7 col-sm-7 col-xs-12 nopadding">
                            <!--text-->
                            <div class="description-ebook">
                                <h2 class=" ">
                                    <strong>Modern Collection Design Space</strong>
                                </h2>
                                <p class="wbz-text-1">Introduced by the first time at Salone del Mobile 2019, this new pieces are a part of a luxury “complete-house” decor concept.Both our lighting and furniture collections are growing and this ebook will give you first-hand access to all our novelties that will definitely inspire your next interior design project. <!-- Maintaining our identity of handcrafted luxury, we present an extension of our collection, with entirely new products such as a closet, a valet stand or a champagne bucket, all of wich integrate our vision of what LUXXU represents: more than a brand, a lifestyle. --></p>
                            </div>

                        </div>
                    </div>


                  <!-- ebook -->
                    <div class="ebook  col-lg-6  col-md-6 col-sm-12  col-xs-12">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 nopadding">
                            <div>
                                <img src="/interiors/design-books/media/paris-design-guide.jpg" class="img-responsive img-pad" alt="paris-design-guide">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-form">
                                    <div class="content-item content-ebook" name="Paris Design Guide" id="paris-design-guide">
                                        <@include('includes/forms/ebooks/download-ebook')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7  col-md-7 col-sm-7 col-xs-12 nopadding">
                            <!--text-->
                            <div class="description-ebook">
                                <h2 class=" ">
                                    <strong>Paris Design Guide</strong>
                                </h2>
                                <p class="wbz-text-1">That’s right, the ultimate lifestyle and design events take place in Paris. September will be a month full of meetings for the one who love design. Discover the calendar of Paris Design Week, the best stands from Maison et Objet 2018 and a selection of interieur designers you must know!</p>
                            </div>

                        </div>
                    </div>
                  <!-- ebook -->
                    <div class="ebook  col-lg-6  col-md-6 col-sm-12  col-xs-12">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 nopadding">
                            <div>
                                <img src="/interiors/design-books/media/LX-London-a-design-destination.jpg" class="img-responsive img-pad" alt="LX-London-a-design-destination">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-form">
                                    <div class="content-item content-ebook" name="London a design destination" id="LX-London-a-design-destination">
                                        @include('includes/forms/ebooks/download-ebook')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7  col-md-7 col-sm-7 col-xs-12 nopadding">
                            <!--text-->
                            <div class="description-ebook">
                                <h2 class=" ">
                                    <strong>London Design Destination</strong>
                                </h2>
                                <p class="wbz-text-1">London, a Design Destination. Luxxu selected for you a selection of 5 must thing to do at London ! Find out the best places to go and discover there. Be ready to live an Experience Design this autumn!</p>
                            </div>

                        </div>
                    </div>
                  <!-- ebook -->
                    <div class="ebook  col-lg-6  col-md-6 col-sm-12  col-xs-12">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 nopadding">
                            <div>
                                <img src="/interiors/design-books/media/luxxu-our-passion-for-design.jpg" class="img-responsive img-pad" alt="Luxxu-Our-Passion-For-Design">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-form">
                                    <div class="content-item content-ebook" name="Luxxu Our Passion For Design" id="Luxxu-Our-Passion-For-Design">
                                        @include('includes/forms/ebooks/download-ebook')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7  col-md-7 col-sm-7 col-xs-12 nopadding">
                            <!--text-->
                            <div class="description-ebook">
                                <h2 class=" ">
                                    <strong>Our Passion For Design</strong>
                                </h2>
                                <p class="wbz-text-1">Everything  we  create,  we  believe  in  redesigning your  definition  of  art.  Therefore,  you  will  find  our passion  for  design  as  an  everlasting  aesthetic language shared by every element we create.
                                Constantly  looking  to  elevate  our  craftsman expertise,  we  are  bringing  together  their  wisdom with  a  daring  and  talented  creativity.  Since  our beginnings,  we  never  ceased  to  work  and  refine our  design  with  passion  in  order  to  deliver  the best experience to our customers.</p>
                            </div>

                        </div>
                    </div>
                    <!-- /ebook -->
                  <!-- ebook -->
                    <div class="ebook  col-lg-6  col-md-6 col-sm-12  col-xs-12">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 nopadding">
                            <div>
                                <img src="/interiors/design-books/media/icff-2018.jpg" class="img-responsive img-pad" alt="Luxxu's-Color-Trends-2018">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-form">
                                    <div class="content-item content-ebook" name="New York Design Guide 2018" id="ICFF-2018">
                                        @include('includes/forms/ebooks/download-ebook')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7  col-md-7 col-sm-7 col-xs-12 nopadding">
                            <!--text-->
                            <div class="description-ebook">
                                <h2 class=" ">
                                    <strong>New York Design Guide 2018</strong>
                                </h2>
                                <p class="wbz-text-1">The trendiest
                                Luxury International Design showcasing the latest in exclusive luxury interiors, contemporary design and high-end furniture. ICFF is a sought-after show for Architects, Interior Designers and Developers in the residential, retail, commercial and hospitality sectors. Beside this, you can get to know the top hotels, restaurants and trending events during this month at NY.</p>
                            </div>

                        </div>
                    </div>
                    <!-- /ebook -->
                    <div class="ebook  col-lg-6  col-md-6 col-sm-12  col-xs-12">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 nopadding">
                            <div>
                                <img src="/interiors/design-books/media/Luxxu's-Color-Trends-2018.png" class="img-responsive img-pad" alt="Luxxu's-Color-Trends-2018">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-form">
                                    <div class="content-item content-ebook" name="Luxxu Color Trends 2018" id="Luxxu-Color-Trends-2018">
                                        @include('includes/forms/ebooks/download-ebook')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7  col-md-7 col-sm-7 col-xs-12 nopadding">
                            <!--text-->
                            <div class="description-ebook">
                                <h2 class=" ">
                                    <strong>Luxxu's Color Trends - Choices for 2018</strong>
                                </h2>
                                <p class="wbz-text-1">The trendiest
                                    <a href="https://www.luxxu.net/all-products/
?utm_source=Ebooks-page&utm_medium=downloads&utm_campaign=EbookWords" target="_blank" class="text-link">2018 colors</a> in the
                                    <a href="https://www.luxxu.net/all-products/
?utm_source=Ebooks-page&utm_medium=downloads&utm_campaign=EbookWords" target="_blank" class="text-link">LUXXUry world</a> ! Combining gold with black or with white composse the perfect color
                                    pallets. The rule for the next year when it comes to
                                    <a href="https://www.luxxu.net/all-products/
?utm_source=Ebooks-page&utm_medium=downloads&utm_campaign=EbookWords" target="_blank" class="text-link">decorating</a> with color is to keep it bold and daring! </p>
                            </div>

                        </div>
                    </div>
                    <!-- /ebook -->
                    <!-- ebook -->
                    <div class="ebook  col-lg-6  col-md-6 col-sm-12  col-xs-12">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 nopadding">
                            <div>
                                <img src="/interiors/design-books/media/modern-collections-design-space.png" class="img-responsive img-pad" alt="Inspiration Book">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-form">
                                    <div class="content-item content-ebook" name="Modern Collections To Design Your Living Space" id="Modern-Collections-To-Design-Your-Living-Space">
                                        @include('includes/forms/ebooks/download-ebook')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7  col-md-7 col-sm-7 col-xs-12 nopadding">
                            <!--text-->
                            <div class="description-ebook">
                                <h2 class=" ">
                                    <strong>Modern Collection Design Space</strong>
                                </h2>
                                <p class="wbz-text-1">In a world where minimalism has been taking over, these
                                    <a href="https://www.luxxu.net/all-products/?utm_source=Ebooks-page&utm_medium=downloads&utm_campaign=EbookWords" target="_blank"
                                        class="text-link">luxury designs</a> still want to prove the beauty of using strong colors and opulent
                                    aesthetics. And although their concept is daring, timeless details will allow versatility
                                    throughout different styles and seasons. Take a look inside and discover a new world
                                    of modern furniture by
                                    <a href="https://www.luxxu.net/all-products/?utm_source=Ebooks-page&utm_medium=downloads&utm_campaign=EbookWords" target="_blank"
                                        class="text-link">Luxxu</a> with the latest luxury pieces such as
                                    <a href="https://www.luxxu.net/furniture/charla-two-seat-sofa.php?utm_source=Ebooks-page&utm_medium=downloads&utm_campaign=EbookWords"
                                        target="_blank" class="text-link">Charla sofa</a> or
                                    <a href="https://www.luxxu.net/products/tycho-round-suspension.php?utm_source=Ebooks-page&utm_medium=downloads&utm_campaign=EbookWords"
                                        target="_blank" class="text-link">Tycho suspension lamp</a>. </p>
                            </div>

                        </div>
                    </div>

                    <!-- /ebook -->


                    <!-- ebook -->
                    <div class="ebook  col-lg-6  col-md-6 col-sm-12  col-xs-12">
                        <div class="col-lg-5  col-md-5 col-sm-5 col-xs-12 nopadding">
                            <div>
                                <img src="/interiors/design-books/media/winter-christmas-trends.png" class="img-responsive img-pad" alt="Interior Designers">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-form">
                                    <div class="content-item content-ebook" name="Winter Christmas Trends" id="Winter-Christmas-Trends">
                                        @include('includes/forms/ebooks/download-ebook')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7  col-md-7 col-sm-7 col-xs-12 nopadding">
                            <!--text-->
                            <div class="description-ebook">
                                <h2 class=" ">
                                    <strong>Christmas Trends</strong>
                                </h2>
                                <p class="wbz-text-1">Get into the holiday spirit and discover the latest
                                    <a href="https://www.luxxu.net/all-products/?utm_source=Ebooks-page&utm_medium=downloads&utm_campaign=EbookWords" target="_blank"
                                        class="text-link">trends</a> for a
                                    <a href="https://www.luxxu.net/all-products/?utm_source=Ebooks-page&utm_medium=downloads&utm_campaign=EbookWords" target="_blank"
                                        class="text-link">luxurious</a> and
                                    <a href="https://www.luxxu.net/all-products/?utm_source=Ebooks-page&utm_medium=downloads&utm_campaign=EbookWords" target="_blank"
                                        class="text-link">unique Christmas</a>. Luxxu presents you the latest
                                    <a href="https://www.luxxu.net/furniture/?utm_source=Ebooks-page&utm_medium=downloads&utm_campaign=EbookWords" target="_blank"
                                        class="text-link">furniture pieces</a> and
                                    <a href="https://www.luxxu.net/lighting/?utm_source=Ebooks-page&utm_medium=downloads&utm_campaign=EbookWords" target="_blank"
                                        class="text-link">chandeliers</a> for your christmas decor ideas ! Find inspiring pieces such us
                                    <a href="https://www.luxxu.net/furniture/beyond-dining-table.php?utm_source=Ebooks-page&utm_medium=downloads&utm_campaign=EbookWords"
                                        target="_blank" class="text-link">Beyond dining table</a> or even
                                    <a href="https://www.luxxu.net/products/babel-chandelier.php?utm_source=Ebooks-page&utm_medium=downloads&utm_campaign=EbookWords"
                                        target="_blank" class="text-link">Babel chandelier</a>. </a>.
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- /ebook -->
                    <!-- ebook -->
                    <div class="ebook  col-lg-6  col-md-6 col-sm-12  col-xs-12">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 nopadding">
                            <div>
                                <img src="/interiors/design-books/media/inspiration-book-min.png" class="img-responsive img-pad" alt="Inspiration Book">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-form">
                                    <div class="content-item content-ebook" name="Inspirations Book" id="Interior-Design-Inspirations-Book-by-Luxxu">
                                        @include('includes/forms/ebooks/download-ebook')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7  col-md-7 col-sm-7 col-xs-12 nopadding">
                            <!--text-->
                            <div class="description-ebook">
                                <h2 class=" ">
                                    <strong>Inspiration Book Luxxu</strong>
                                </h2>
                                <p class="wbz-text-1">Luxxu’s Inspiration Book is an harmonious synthesis between innovation and tradition, the
                                    rare
                                    <a href="https://www.luxxu.net/all-products/?utm_source=Ebookspage&utm_medium=inspirations&utm_campaign=EbookWords" target="_blank"
                                        class="text-link">handwork techniques</a> of the craftsman and contemporary creativity. Discover
                                    <a class="text-link" href="https://www.luxxu.net?utm_source=Ebookspage&utm_medium=inspirations&utm_campaign=EbookWords" target="_blank">Luxxu’s</a> design projects and get inspired by our luxurious pieces!</p>
                            </div>

                        </div>


                    </div>
                    <!-- /ebook -->

                    <!-- ebook -->
                    <div class="ebook  col-lg-6  col-md-6 col-sm-12  col-xs-12">
                        <div class="col-lg-5  col-md-5 col-sm-5 col-xs-12 nopadding">
                            <div>
                                <img src="/interiors/design-books/media/interior-designers-min.png" class="img-responsive img-pad" alt="Interior Designers">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-form">
                                    <div class="content-item content-ebook" name="Top 100 Interior Designers" id="100-interior-designers-boca-do-lobo-selection">
                                        @include('includes/forms/ebooks/download-ebook')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7  col-md-7 col-sm-7 col-xs-12 nopadding">
                            <!--text-->
                            <div class="description-ebook">
                                <h2 class=" ">
                                    <strong>Top 100 Interior Designers</strong>
                                </h2>
                                <p class="wbz-text-1">
                                    <a href="https://www.luxxu.net/all-products/?utm_source=Ebookspage&utm_medium=inspirations&utm_campaign=EbookWords" target="_blank"
                                        class="text-link">TOP 100 Interior Designers</a> emerged not simply as a ranking of the
                                    <a href="https://www.luxxu.net/all-products/?utm_source=Ebookspage&utm_medium=inspirations&utm_campaign=EbookWords" target="_blank"
                                        class="text-link">best decorators</a> and professionals, rather than a necessity and obligation to appreciate
                                    the ones who give essence to the spaces and emotions to inspire everyone who is part
                                    of this beautiful and challenging world of
                                    <a href="https://www.luxxu.net/all-products/?utm_source=Ebookspage&utm_medium=inspirations&utm_campaign=EbookWords" target="_blank"
                                        class="text-link">interior design</a>.
                                </p>
                            </div>

                        </div>
                    </div>
                    <!-- /text -->
                    <!-- /ebook -->
                    <!-- ebook -->
                    <div class="ebook  col-lg-6  col-md-6 col-sm-12  col-xs-12">
                        <div class="col-lg-5  col-md-5 col-sm-5 col-xs-12 nopadding">
                            <div>
                                <img src="/interiors/design-books/media/home-decor-ideas-min.png" class="img-responsive img-pad" alt="Home Decor Ideas">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-form">
                                    <div class="content-item content-ebook" name="100 Home Decor Ideas" id="ebook-100-home-decor-ideas">
                                        @include('includes/forms/ebooks/download-ebook')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7  col-md-7 col-sm-7 col-xs-12 nopadding">
                            <!--text-->
                            <div class="description-ebook">
                                <h2 class=" ">
                                    <strong>Home Decor Ideas</strong>
                                </h2>
                                <p class="wbz-text-1">Looking for some home decor ideas?
                                    <a class="text-link" href="https://www.luxxu.net?utm_source=Ebookspage&utm_medium=inspirations&utm_campaign=EbookWords" target="_blank">Luxxu</a> have you covered! This
                                    <a href="https://www.luxxu.net/all-products/?utm_source=Ebookspage&utm_medium=inspirations&utm_campaign=EbookWords" target="_blank"
                                        class="text-link">Modern Design Home Decor Ideas</a>, gives you inspiration for any room of your house.
                                    If you're having doubts on what to choose, we'll help! Modern Design Home Decor Ideas
                                    aims to give you the best tips to make your home unique and exclusive!
                                </p>
                            </div>

                        </div>
                        <!-- /text -->
                    </div>
                    <!-- /ebook -->


                    <!-- ebook -->
                    <div class="ebook  col-lg-6  col-md-6 col-sm-12  col-xs-12">
                        <div class="col-lg-5  col-md-5 col-sm-5 col-xs-12 nopadding">
                            <div>
                                <img src="/interiors/design-books/media/dining-room-decor-min.png" class="img-responsive img-pad" alt="Dining Room Ideas">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-form">
                                    <div class="content-item content-ebook" name="100 Dining Room Ideas" id="100-Dining-Room-Ideas">
                                        @include('includes/forms/ebooks/download-ebook')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7  col-md-7 col-sm-7 col-xs-12">
                            <!--text-->
                            <div class="description-ebook">
                                <h2 class=" ">
                                    <strong>Dining Room Ideas</strong>
                                </h2>
                                <p class="wbz-text-1">Making the right choice when it comes to a
                                    <a href="https://www.luxxu.net/all-products/?utm_source=Ebookspage&utm_medium=inspirations&utm_campaign=EbookWords" target="_blank"
                                        class="text-link">luxury dining room</a> can be a difficult task! To help you in this,
                                    <a href="https://www.luxxu.net/?utm_source=Ebookspage&utm_medium=inspirations&utm_campaign=EbookWords" target="_blank" class="text-link">Luxxu</a> brings to you this ebook full of tips and ideas to inspire you to create the
                                    perfect dining room!
                                </p>
                            </div>

                        </div>
                        <!-- /text -->
                    </div>
                    <!-- /ebook -->
                    <!-- ebook -->
                    <div class="ebook  col-lg-6  col-md-6 col-sm-12 col-xs-12">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 nopadding">
                            <div>
                                <img src="/interiors/design-books/media/living-room-decor-min.png" class="img-responsive img-pad" alt="Living Room Ideas">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-form">
                                    <div class="content-item content-ebook" name="100 Living Room Ideas" id="LivingRoomIdeas">
                                        @include('includes/forms/ebooks/download-ebook')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 nopadding">
                            <!--text-->
                            <div class="description-ebook">
                                <h2 class=" ">
                                    <strong>Living Room Ideas</strong>
                                </h2>
                                <p class="wbz-text-1">
                                    <a href="https://www.luxxu.net/?utm_source=Ebookspage&utm_medium=inspirations&utm_campaign=EbookWords" target="_blank" class="text-link">Luxxu</a> presents you,
                                    <a href="https://www.luxxu.net/all-products/?utm_source=Ebookspage&utm_medium=inspirations&utm_campaign=EbookWords" target="_blank"
                                        class="text-link">Modern Design Living Room Ideas</a>, an incredible source with the best interior desing
                                    ideas for your living room. Just download it to discover the best brands and projects
                                    and get inspired!
                                </p>
                            </div>

                        </div>
                        <!-- /text -->

                    </div>
                    <!-- /ebook -->
                    <!-- ebook -->
                    <div class="ebook  col-lg-6  col-md-6 col-sm-12 col-xs-12">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 nopadding">
                            <div>
                                <img src="/interiors/design-books/media/hotel-restaurant-min.png" class="img-responsive img-pad" alt="Best Hotel and Restaurant">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-form">
                                    <div class="content-item content-ebook" name="100 Best Hotel And Restaurant" id="ebook-100-best-hotel-and-restaurant">
                                        @include('includes/forms/ebooks/download-ebook')
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 nopadding">
                            <!--text-->
                            <div class="description-ebook">
                                <h2 class=" ">
                                    <strong>The World's Best Hotel and Restaurants</strong>
                                </h2>
                                <p class="wbz-text-1">
                                    <a class="text-link" href="https://www.luxxu.net?utm_source=Ebookspage&utm_medium=inspirations&utm_campaign=EbookWords" target="_blank">Luxxu</a> brings to you the World’s Best Hotels and Restaurants is the ultimate source
                                    of inspiration for interior designers who are looking for the perfect
                                    <a href="https://www.luxxu.net/all-products/?utm_source=Ebookspage&utm_medium=inspirations&utm_campaign=EbookWords" target="_blank"
                                        class="text-link">contract project</a>. Focused on commercial interior architecture and design, this ebook
                                    intends to speak to interior designers, architects who collaborate on the design of
                                    <a href="https://www.luxxu.net/all-products/?utm_source=Ebookspage&utm_medium=inspirations&utm_campaign=EbookWords" target="_blank"
                                        class="text-link">contemporary hospitality</a>.</p>


                            </div>

                        </div>
                    </div>

                    <!-- ebook -->
                    <div class="ebook  col-lg-6  col-md-6 col-sm-12 col-xs-12">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 nopadding">
                            <div>
                                <img src="/interiors/design-books/media/luxury-chandeliers-min.png" class="img-responsive img-pad" alt="Luxury Chandeliers">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-form">
                                    <div class="content-item content-ebook" name="100 Chandeliers by Luxxu" id="ebook-100-chandelier-by-luxxu-blog">
                                        @include('includes/forms/ebooks/product-ebook')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 nopadding">
                            <!--text-->
                            <div class="description-ebook">
                                <h2 class=" ">
                                    <strong>100 Chandeliers by Luxxu</strong>
                                </h2>
                                <p class="wbz-text-1">
                                    On the following pages, you will find a selection of 100
                                    <a class="text-link" target="_blank" href="https://www.luxxu.net/lighting/?utm_source=Ebookspage&utm_medium=inspirations&utm_campaign=EbookWords">Luxury Chandeliers</a> that will inspire you to improve your home deco. Be inspired by
                                    a variety of styles that goes from overexcited luxury to the most contemporary style.
                                    Get to know
                                    <a class="text-link" target="_blank" href="https://www.luxxu.net?utm_source=Ebookspage&utm_medium=inspirations&utm_campaign=EbookWords">Luxxu’s</a> sellection!
                            </div>

                        </div>
                        <!-- /text -->
                    </div>
                    <!-- /ebook -->



                    <!-- ebook -->
                    <div class="ebook  col-lg-6  col-md-6 col-sm-12 col-xs-12">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 nopadding">
                            <div>
                                <img src="/interiors/design-books/media/dining-tables-min.png" class="img-responsive img-pad" alt="Dining Tables">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-form">
                                    <div class="content-item content-ebook" name="60 Modern Dining Tables" id="60-modern-dining-tables">
                                        @include('includes/forms/ebooks/product-ebook')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 nopadding">
                            <!--text-->
                            <div class="description-ebook">
                                <h2 class=" ">
                                    <strong>Dining Tables</strong>
                                </h2>
                                <p class="wbz-text-1">
                                    <a href="https://www.luxxu.net/all-products/?utm_source=Ebookspage&utm_medium=inspirations&utm_campaign=EbookWords" target="_blank"
                                        class="text-link">Modern Design Dining Tables</a> is the ultimate source of inspiration for everyone looking
                                    for the perfect piace to create a unique dining room set. Get inspiret by this incredible
                                    sellection!
                                </p>
                            </div>

                        </div>
                        <!-- /text -->
                    </div>
                    <!-- /ebook -->

                    <!-- ebook -->
                    <div class="ebook  col-lg-6  col-md-6 col-sm-12 col-xs-12">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 nopadding">
                            <div>
                                <img src="/interiors/design-books/media/wall-mirrors-min.png" class="img-responsive img-pad" alt="Wall Mirrors">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-form">
                                    <div class="content-item content-ebook" name="100 Must See Wall Mirror Ideas" id="100-mustsee-wallmirrors-ideas">
                                        @include('includes/forms/ebooks/product-ebook')
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 nopadding">
                            <!--text-->
                            <div class="description-ebook">
                                <h2 class=" ">
                                    <strong>Wall Mirrors</strong>
                                </h2>
                                <p class="wbz-text-1">A mirror can be a determinant ellement on a room’s decor!
                                    <a class="text-link" href="https://www.luxxu.net?utm_source=Ebookspage&utm_medium=inspirations&utm_campaign=EbookWords" target="_blank">Luxxu</a> has prepared this ebook that will show you the latest trends and the best tips
                                    on wall mirrors, featuring pieces from the greatest designers and design brands in the
                                    world like Jonthan Adler or Boca do Lobo.
                                </p>
                            </div>

                        </div>
                        <!-- /text -->

                    </div>
                    <!-- /ebook -->

                    <!-- ebook -->
                    <div class="ebook  col-lg-6  col-md-6 col-sm-12 col-xs-12">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 nopadding ">
                            <div>
                                <img src="/interiors/design-books/media/floor-lamps-decor-min.png" class="img-responsive img-pad" alt="Floor Lamps">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-form">
                                    <div class="content-item content-ebook" name="100 Contemporary Floor Lamps" id="ebook-100-contemporary-floor-lamps">
                                        @include('includes/forms/ebooks/product-ebook')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 nopadding">
                            <!--text-->
                            <div class="description-ebook">
                                <h2 class=" ">
                                    <strong>Floor Lamps Decor</strong>
                                </h2>
                                <p class="wbz-text-1">With this
                                    <a href="https://www.luxxu.net/all-products/?utm_source=Ebookspage&utm_medium=inspirations&utm_campaign=EbookWords" target="_blank"
                                        class="text-link">Modern Design Floor Lamps Decor</a>, we will show you the latest lighting trends and
                                    the most incredible designs from best international designers and brands, because modern
                                    lighting fixtures are an essential element in every
                                    <a href="https://www.luxxu.net/all-products/?utm_source=Ebookspage&utm_medium=inspirations&utm_campaign=EbookWords" target="_blank"
                                        class="text-link">interior design project</a>.
                                </p>
                            </div>

                        </div>
                        <!-- /text -->

                        <!--  </div>-->
                        <!-- /ebook -->
                    </div>


                    <div class="col-lg-12 col-md-12 col-xs-12" style="margin-bottom: 30px;">
                        <a href="https://www.luxxu.net/landing-page/download-catalogue?utm_source=ebooks-luxxu&utm_medium=ebook-page&utm_content=banner-ebook-page&utm_campaign=Ebook">
                            <img src="https://www.luxxu.net/interiors/design-books/media/catalogue-banner.jpg" alt="Catalogue" class="img-responsive">
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

@endsection


@section('footer_scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <script>
        // Get the modal
        var modal = document.getElementById('form-ebooks-banner');

        // Get the button that opens the modal
        var btn = document.getElementById("ebooks-banner");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        $(document).ready(function () {
            $("#form-ebooks-banner").on("show.bs.modal", function (e) {
                var link = $(e.relatedTarget);
                $(this).find(".modal-body").load(link.attr("datalink"));
            });
        });
    </script>

@endsection