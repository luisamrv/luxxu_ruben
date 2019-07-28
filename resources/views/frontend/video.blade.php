@extends('layouts.app')

@section('head_metas')

    <title>Video | Luxxu | Modern Design and Living</title>
    @if (Session::has('data'))
        <meta http-equiv="refresh" content="5;url=/download/{{ Session::get('data') }}">
    @endif
    <meta property="og:title" content="Video | Luxxu | Modern Design and Living"/>
    <meta property="og:description" content="" />
    <meta property="og:type" content="Video" />
    <meta property="article:author" content="Video | Luxxu | Modern Design and Living" />
    <meta property="article:published_time" content="" />
    <meta property="og:url" content="../video" />
    <meta property="og:site_name" content="{!! env('BRAND_NAME') !!}" />
    <meta name="description" content="" />

@endsection


@section('head_style')


@endsection


@section('content')

  <div class="row">
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main_area">

        <!--       <img src="/images/news/events/isaloni-italy-apr-2016/isaloni-italy-apr-2016.jpg" class="img-responsive videoplayer-full" data-video="https://www.youtube.com/embed/1NwgvwUMGOE?autoplay=1&rel=0&controls=0&showinfo=0"/> -->
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 main-video">
          <iframe style="width:100%;" title="" width="874" height="492"  src="https://www.youtube.com/embed/6NcbsD17RDo" frameborder="0" allowfullscreen></iframe>
          <!-- <iframe title="" width="874" height="492" src="https://www.youtube.com/embed/roPyWmPIdvI?&theme=dark&color=white&autohide=2&modestbranding=1&showinfo=0&rel=0&iv_load_policy=3" frameborder="0" allowfullscreen></iframe> -->
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="row">
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" style="display: block;" data-category="6NcbsD17RDo">
              <h2 style="margin-top: -25px;">Luxxu Modern Design and Living!</h2>
              <p>From the conception of an idea, to sketching and shaping, Luxxu has begun to enlighten the world of design with the creation of luxury lighting fixtures.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="yu67lj8YZXA">
              <h2 style="margin-top: -25px;">Furniture Sketching Process by Luxxu Home</h2>
              <p>LUXXU uncovers a crucial Imperial complement, a Furniture Collection. Offering resembling noble materials and finishing’s where customization blossoms as brand capital. <br>
              Be our guest and get inspired by our renew collection of timeless pieces.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="9saAor7_0nU">
              <h2 style="margin-top: -25px;">Luxxu World by Luxxu Home</h2>
              <p>Be our guest and get inspired by our renew collection of timeless pieces.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="fmhcg5swzro">
              <h2 style="margin-top: -25px;">Luxxu Home Highlights at iSaloni 2018</h2>
              <p>Take a look at our presence at last edition of Salone del Mobile Milano.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="nrP3k5W7YSg">
              <h2 style="margin-top: -25px;">First Preview at iSaloni 2018 by Luxxu Home</h2>
              <p>Come visit us at iSaloni del Mobile Milano. We´re waiting for you at  Hall 6 Stand E 38.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="eccFSTIqnXI">
              <h2 style="margin-top: -25px;">Luxxu Highlights Maison et Objet 2018</h2>
              <p>We are at Hall 8 Stand: B103</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="fe85M1B6Ze4">
              <h2 style="margin-top: -25px;">Luxxu Modern & Design Living Tour at Maison et Objet 2018</h2>
              <p>We are at Hall 8 Stand: B103</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="fgahUCxiCzo">
              <h2 style="margin-top: -25px;">1 Day to go - Maison et Objet September 2017</h2>
              <p>Hi there, <br>
              We're only 1 day to Maison et Objet.<br>
              Come visit our modern and design living at Hall 5B - Stand C9.<br>
              From 8-12 September join us in Paris. <br>

              See you soon.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="zkjj8sjDHmg">
              <h2 style="margin-top: -25px;">2 Days to go - Maison et Objet September 2017</h2>
              <p>Hi there, <br>
              We're only 1 day to Maison et Objet.<br>
              Come visit our modern and design living at Hall 5B - Stand C9.<br>
              From 8-12 September join us in Paris. <br>

              See you soon.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="6PyPpfmR-no">
              <h2 style="margin-top: -25px;">3 Days to go - Maison et Objet September 2017</h2>
              <p>Hi there, <br>
              We're only 1 day to Maison et Objet.<br>
              Come visit our modern and design living at Hall 5B - Stand C9.<br>
              From 8-12 September join us in Paris. <br>

              See you soon.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="qPq1emggBgU">
              <h2 style="margin-top: -25px;">Visit us at Maison Objet September 2017</h2>
              <p>Luxxu returns to the world most renowned interior design trade show most luxurious than ever. In the city of lights, in maison et objet will be the perfect place to present the best of our collection.
              Between 8-12 of September, join us at Hall 5B Stand C9.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="01gt9n82KN0">
              <h2 style="margin-top: -25px;">Otto Brass Leather & Velvet Armchair</h2>
              <p>Otto armchair is LUXXU’s omen to its prosperous future, a luxurious design Empire. Made with noble materials, such as velvet and leather, the brass detail elevates this armchair into a masterpiece. Meaning greatness and fortune, this armchair is a statement in every imperial ambience.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="-FnYLEbqdsQ">
              <h2 style="margin-top: -25px;">Darian - Gold plated & Black lacquer Sideboard</h2>
              <p>The Luxxu Darian sideboard draws inspiration from the power of the shield and sphere of protection, as well as the dynamic from its irregular shape. A precise knowledge of production techniques and materials, each with different specialities, from metal-work to wood carving. It features a cluster of gold plated brass asymmetrical bars envelope a wood structure in black lacquer, the resulting works are a blend of artful and stout personality.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="TcRVFaNMLXU">
              <h2 style="margin-top: -25px;">Luxxu Customization Materials</h2>
              <p>In every interior design project, Luxxu provides you a unique form to create fine and elegant environments. Customize and adapt our lighting and furniture goods with this featuring sample box with:
              metal finishes, crystal glass finishes, swarovski crystals finishes, cords finishes, and marbles finishes. <br>

              A set of several combinations provided by Luxxu Customization Materials for upcoming modern interior design projects. </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="kZ4VHi192_E">
              <h2 style="margin-top: -25px;">Luxxu Darian Sideboard</h2>
              <p>The Darian sideboard draws inspiration from the power of the shield and sphere of protection, as well as the dynamic from its irregular shape. A precise knowledge of production techniques and materials, each with different specialities, from metal-work to wood carving. It features a cluster of gold plated brass asymmetrical bars envelope a wood structure in black lacquer, the resulting works are a blend of artful and stout personality.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="w8UGqMDuyiY">
              <h2 style="margin-top: -25px;">Isaloni 2017 Highlights - Luxxu</h2>
              <p>Luxxu at Isaloni 2017</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="bx0HuySyans">
              <h2 style="margin-top: -25px;">Luxxu Trends 2017</h2>
              <p>Luxxu Trends</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="GJbCDlHlRSs">
              <h2 style="margin-top: -25px;">First Preview - Luxxu at iSaloni 2017</h2>
              <p>Hi, once again Luxxu will be at iSaloni Milan 2017, one of the most 
              important trade shows of the world. Between the 04-09 April, let us inspire you at Euroluce. Don't miss the opportunity to look at our furniture and light novelties.<br>
              Join us at Hall 13, Stand H16, ciao!</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="uKcHqqwUoRo">
              <h2 style="margin-top: -25px;">Luxxu - Empire center table</h2>
              <p>This center table has an extravagant shape of refinement and style. It is carefully made in brass and nero marquina marble. This is a combination between classic and modern design, perfect for every interior setting.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="mp69dfHlGxQ">
              <h2 style="margin-top: -25px;">Luxxu - Empire Side Table Small</h2>
              <p>Made with the highest quality of brass and nero marquina marble, Empire side table wins a new form. It’s a versatile item which gives a sophisticated ambiance to any setting, from living room to an entrance or a bedroom.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="NlRKkiwoxuM">
              <h2 style="margin-top: -25px;">Luxxu - Empire Side Table Big</h2>
              <p>Empire State Building was the inspiration for this stunning side table. It adds a classic yet modern appeal to any space. Made with the highest quality of brass and nero marquina marble, this is ideal to create a spectacular and sophisticated living room, entrance or bedroom.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="F5HC7NoPqEQ">
              <h2 style="margin-top: -25px;">Luxxu invites you to iSaloni 2017</h2>
              <p>Hi, once again Luxxu will be at iSaloni Milan 2017, one of the most 
              important trade shows of the world. Between the 04-09 April, let us inspire you at Euroluce. Don't miss the opportunity to look at our furniture and light novelties.<br>
              Join us at Hall 13, Stand H16, ciao!</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="vBGB4oP9KrI">
              <h2 style="margin-top: -25px;">Luxxu - Beyond Console</h2>
              <p>The best handmade techniques find balance in a delicate work in wood softened with touches of brass that reflect warm and golden tones on its polished surface. An impressive display of elegance, Beyond console shows the exquisite capacity to fill a variety of ambiances thanks to its luxury presence.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="VZci1GDsy_M">
              <h2 style="margin-top: -25px;">Luxxu - Majestic Mirror</h2>
              <p>The glow takes the form of a golden plated brass circle and each of your ribbed crystal glass cylinders evokes a petrifying effect in any setting. This emancipation of lighting reflects fascinating design of the craftsmen to become a mirror of desire. So is the Majestic.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="uK9iyh_X1ak">
              <h2 style="margin-top: -25px;">Design Sketching Process</h2>
              <p>By Luxxu</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="WNIzt0Vwr6I">
              <h2 style="margin-top: -25px;">Draycott II Wall - Luxxu</h2>
              <p>Following the footsteps of Draycott I wall, this wall lamp contemplates all details of the Draycott Tower in two tubes. For all that, the design remains delicate and exquisite. Another wall lighting solution made of brass and crystal glass.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="bOAXMlwbBVg">
              <h2 style="margin-top: -25px;">Luxxu - Waterfall Torch Wall</h2>
              <p>Combined with the best of contemporary and modern design, made with the best brass, crystal glass and the ability of the craftsman, it’s perfectly fitting on your hospitality project.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="5IuHw8SHhrc">
              <h2 style="margin-top: -25px;">Luxxu - Tycho Small Wall</h2>
              <p>Following the creation line, the small version of Tycho Wall creates a cosmopolitan luxury environment that conveys an intimate lighting as its building inspiration and its reflection on the water. Brass with gold plated and crystal glass, ideal combination to be used with more than one piece.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="roPyWmPIdvI">
              <h2>Luxxu - Highlights at Maison et Objet 2017</h2>
              <p>
              This is a new lighting experience! A harmonious synthesis between innovation and tradition, the rare handwork techniques of the craftsman and contemporary creativity.
              The poetic design of each piece of art is inspired by magnanimous buildings and is able to transform any ambiance, leaving strong feelings.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="xC8WOg-15VU">
              <h2>Work Hard, Design Harder – Maison & Objet 2017</h2>
              <p>A long process and 19 more steps that takes covet group to get into maison et objet. Quite a journey build with designers, dreamers and believers into deliver the best portuguese furniture for exquisite interior design. </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="IUfpqjYy5Rg">
              <h2>LUXXU at Maison & Objet Paris 2017</h2>
              <p>Here's a quick review of our presence at the last Maison & Objet Paris. See you at the next design tradeshow. Be LUXXU!</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="oOrfWwePcp4">
              <h2>Join Luxxu at Maison et Objet 2017</h2>
              <p></p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="fgOJWK2P4uc">
              <h2>MO 17 I 1.Building a Legacy</h2>
              <p>Covet Design Group presents you our legacy throughout 14 years, with already 10 top interior design brands with more than 1000 products and 350 people. 
              At the same time, we are lauching a new series of episodes, A Step Into Maison et Objet, to show you our extraordinary journey into Maison et Objet Paris. At 2017, we are one of the biggest exhibitors.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="o_bRkoqMvjw">
              <h2>Luxxu invites you to Maison et Objet 2017</h2>
              <p></p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="GvTUthVF5hk">
              <h2>Chandelier Liberty by Luxxu</h2>
              <p>This master piece is inspired in one of the most known statue in the world, The Statue of Liberty. Like the lady carries enlightenment to the world, Luxxu pretends with this elegant design enlightenment all of your projects. Made in brass and crystal glass.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="zsPnMfNWgUE">
              <h2>Waterfall Round Suspension by LUXXU</h2>
              <p>Luxxu presents a circular shape of glamorous sensation of waterfalls. It’s a powerful creation made with gold plated brass combined with ribbed fine tubes of glass.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="SmRtB_5yTu4">
              <h2>Babel Chandelier by LUXXU</h2>
              <p>This inspiration requires a particular approach because is still a myth, “The babel Tower”. We brought the fantasy of detail to reality through these magnificent and lush crystals.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="UTx7juUL14M">
              <h2>Luxxu invites you to Decorex 2016</h2>
              <p>Decorex 2016</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="XDEmlhWFbh0">
              <h2>Empire Snooker by LUXXU</h2>
              <p>Created with glass and brass and finished with gold plated, this magnificent lighting piece is capable of giving a luxurious and glamorous look to any space.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="DdbZzPgO30E">
              <h2>Pendant Waterfall by LUXXU</h2>
              <p>Everything sparkles under this elegant pendant lamp. This master piece made with gold plated brass combined with ribbed fine tubes of crystal glass brings a natural feeling of waterfalls to any space.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="sR8HQ4vdBzY">
              <h2>Luxxu invites you to Maison&Objet</h2>
              <p>Join us at Maison et Objet Paris HALL 7 G14 H13 2-6 SEP 2016</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="_d6n80tQ7ko">
              <h2>Luxxu invites you to Maison&Objet</h2>
              <p>Join us at Maison et Objet Paris HALL 7 G14 H13 2-6 SEP 2016</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="jx7YSL3aq58">
              <h2>Come visit us at Maison&Objet 2016</h2>
              <p>Join us at Maison et Objet Paris HALL 7 G14 H13 2-6 SEP 2016</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="JIuX7eh5OxU">
              <h2>Pendant Burj by LUXXU</h2>
              <p>This exuberant piece inspired in the stunning Burj Al Arab Hotel is a symbol of modern age and luxury tied by a simple string.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="JYmA2ibQ8Yk">
              <h2>Pendant Lamp Draycott by LUXXU</h2>
              <p>Its structure has 3 tubes like the original inspiration made in brass and crystal glass. It transmits elegance and purity to every space. Because of its huge dimension, the reception or lobby areas can be a perfect space for this gorgeous masterpiece.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="sxDw6PGbMsM">
              <h2>Drycott & Empire XL Production by LUXXU</h2>
              <p>Take a look at our production of our masterpieces Drycott Pendant & Empire XL.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="7LhNMJA_yUU">
              <h2>Waterfall Wall by Luxxu</h2>
              <p>We are presenting one of the pieces of our collection - The Waterfall Wall. Discover the materials, finishes and other technical features of this piece.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="tL8V2dTghQs">
              <h2>Empire Wall by Luxxu</h2>
              <p>We are presenting one of the pieces of our collection - The Empire Wall. Discover the materials, finishes and other technical features
              of this piece.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="F4E_Zkysw54">
              <h2>Empire Side Table by LUXXU</h2>
              <p>Empire State building was the inspiration for this stunning side table. It adds a classic, yet modern appeal to any space. Made with the highest quality of brass and nero marquina marble, this is ideal to create a spectacular and sophisticated living room, entrance or bedroom.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="BZm9qM8dS20">
              <h2>Empire Center Table by LUXXU</h2>
              <p>This center table has an extravagant shape of refinement and style. It is carefully made in brass and nero marquina marble. This is a perfect combination between the classic and modern, design for every interior setting.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="77hhK-GZq-Q">
              <h2>Empire Wall by LUXXU</h2>
              <p>This is a natural decor piece that creates an exclusive atmosphere and it will fit perfectly in any space of your home. The Empire wall gets its inspiration on Empire State Building that’s why this creation is so powerful and capable to transform every space in a stunning scenario.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="iKrQ9aK5gpU">
              <h2>Waterfall Chandelier by LUXXU</h2>
              <p>This master piece made with gold plated brass combined with ribbed fine tubes of crystal glass brings a natural feeling of waterfalls to any space. The glamorous sensation of water in the tubes is handcraft made by glass master craftmen.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="RttLzD0eWEA">
              <h2>Luxxu Novelties at Isaloni 2016</h2>
              <p>Join us at Isaloni Hall 22 M</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="OERuZtTraqc">
              <h2>Come visit us at Isaloni 2016</h2>
              <p>Join us at HALL 22MD05</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="kzXmmmOaoc0">
              <h2>Luxxu Invites you to Isaloni 2016</h2>
              <p>We will be present at Isaloni 2016! Visit us at Hall 22 M05 , and take a look at our new design pieces. See you there?
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="BlFeWLMve3I">
              <h2>Chandelier Scala <span class="byluxxu">by LUXXU</span></h2>
              <p>Scala Chandelier is other master piece of Luxxu, poetically made, with the most beautiful Swarovski crystal, and the perfect details who combined a harmonious synthesis between classic and the contemporary, a unique piece that is capable of creating not only a perfect space but involve you in passionate emotions.</p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="Vby65dIGN_c">
              <h2>Wall Lamp Macqueen <span class="byluxxu">by LUXXU</span></h2>
              <p>Made of brass with gold plated and handmade butterflies and majestic flowers ending with the touch of beautiful Swarovski crystals. The wall version of McQueen Chandelier, this master piece causes a dramatic and eccentric sensation of beauty.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="cnxybxExDT4">
              <h2>Empire Center Table <span class="byluxxu">by LUXXU</span></h2>
              <p>This center table has an extravagant shape of refinement and style. It is carefully made in brass and nero marquina marble. This is a perfect combination between the classic and modern, design for every interior setting.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="LBUVdvVX9jY">
              <h2>Chandelier Trump <span class="byluxxu">by LUXXU</span></h2>
              <p>
                The design of this sconce was sculptured by the motives of the exterior windows in gold of this Iconic building. Trump promises to sparkle everything! Built in brass and sublime tears of crystal glass, is perfect for a refined living room.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="tBbTEEjGlmc">
              <h2>Luxxu Highlights at Maison & Objet 2016</h2>
              <p>
                Take a look at our presence at last Maison & Objet Paris. See you at next design tradeshow.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="1NwgvwUMGOE">
              <h2>Join Luxxu at Maison et Objet 2016</h2>
              <p>
                Come visit us at Maison et Objet <br>
                Hall 7 stand I16-J15<br><br><br>
                We will be waiting for you!
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="Dpjs1kiv2Vk">
              <h2>Wall Lamp Trump <span class="byluxxu">by LUXXU</span></h2>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="FYGOPPOsP3s">
              <h2>Pendant Trump <span class="byluxxu">by LUXXU</span></h2>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="sE9lga4RQoQ">
              <h2>Pendant Lamp Draycott <span class="byluxxu">by LUXXU</span></h2>
              <p>
                Discover our latest pendant lamp .
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="vjpU_4zYMlg">
              <h2>Chandelier Empire XL <span class="byluxxu">by LUXXU</span></h2>
              <p>
                This masterpiece is an extravagant shape full of modernity capable to transform every space in a stunning scenario. This is a natural decor piece that creates an exclusive atmosphere.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="nPtKjKYJG0g">
              <h2>Suspension Lamp Waterfall <span class="byluxxu">by LUXXU</span></h2>
              <p>
                This master piece made with gold plated brass combined with ribbed fine tubes of crystal glass brings a natural feeling of waterfalls to your luxury homes. 
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="cMuSY3d-Jjo">
              <h2>Burj Wall <span class="byluxxu">by LUXXU</span></h2>
              <p>
                This wall chandelier fixture fully made of gold plated brass transmits elegance and sophistication to your luxury interior design. With delicate handmade crystal glass tubes, this piece brings to every space a magical sensation and a beautiful ambient lighting.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="ei7Xr1f4W7c">
              <h2>Burj Pendant <span class="byluxxu">by LUXXU</span></h2>
              <p>
                This exuberant lighting design piece inspired in the stunning Burj Al Arab Hotel is a symbol of modern age and luxury tied by a simple string. Burj pendant offers a deco lighting design that can present elegant lighting solutions to you luxury homes.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="G-WkYPwzZ64">
              <h2>Waterfall Wall <span class="byluxxu">by LUXXU</span></h2>
              <p>
                Waterfall wall lamp is a beautiful lighting design that represents a natural sensation of waterfalls. An elegant and modern design piece made of gold plated brass and handmade crystal glass tubes.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="jYB6K0g4Tro">
              <h2>Empire Pendant <span class="byluxxu">by LUXXU</span></h2>
              <p>
                The Empire Pendant, is the new lighting design piece of our brand, created by our design team to your luxury homes. 
                This is a natural decor and modern design piece that creates an exclusive atmosphere and ambient lighting .
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="JfyLzVhAlHI">
              <h2>Empire Wall <span class="byluxxu">by LUXXU</span></h2>
              <p>
                The Empire Wall is a natural modern design piece that creates an exclusive atmosphere and it will fit perfectly in any space of your luxury homes. This piece gets its inspiration on Empire State Building that’s why this lighting design is so powerful and capable to transform every space in a stunning scenario with the best lighting possible.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="9aQ42QE4As8">
              <h2>Theatre Chandelier <span class="byluxxu">by LUXXU</span></h2>
              <p>
                Theatre chandelier is one of our most luxury pieces. The lighting design is traditional and creative at the same time, combined the rich details and the best luxury and handmade materials. A master piece made with casted brass finish and 200 Swarovski crystals that creates a perfect ambient lighting for your luxury homes.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="3ShB2Z3MB4k">
              <h2>Macqueen Chandelier <span class="byluxxu">by LUXXU</span></h2>
              <p>
                This amazing piece is inspired in one of the most irreverent designers ever, Alexander McQueen. So powerful like his exhibitions, this lighting design combines the best luxury and handmade materials. 
                Made of hammered brass with gold plated and handmade butterflies and majestic flowers ending with the touch of beautiful Swarovski crystals.Bold and feminine this modern design is a real lumen sculpture.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="E1heEicv8DU">
              <h2>Empire Chandelier <span class="byluxxu">by LUXXU</span></h2>
              <p>
                The Empire Chandelier is inspired in the stunning architectural building, the Empire State Building. Its masterpiece is an extravagant modern design full of contemporary forms and capable to transform every space in a stunning scenario. This is a natural decor piece that creates an exclusive atmosphere in your luxury homes. 
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="MaYOO5u9Xns">
              <h2>Mcqueen Wall Lamp <span class="byluxxu">by LUXXU</span></h2>
              <p>
                The wall version of McQueen Chandelier causes a dramatic and eccentric sensation of beauty.
                This lighting design is made of brass with gold plated and handmade butterflies and majestic flowers ending with the touch of beautiful Swarovski crystals. 
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="LiC5RCRjvD4">
              <h2>Filigree Technique <span class="byluxxu">by LUXXU</span></h2>
              <p>
                Discover how our artisans work with Filigree in our handmade modern design pieces.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="jsL371M1GP4">
              <h2>LUXXU invites you to Maison & Objet September 2015</h2>
              <p>
                LUXXU invites you to check out our stand at Hall 8 – STAND F 83 /G 84, Maison & Objet Paris from 4th to 8th of September. Come visit us, and discover our novelties of modern art and lighting design.<br><br>

                Come and meet us at COVET Lounge Studio.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="h8I-759l_98">
              <h2>Waterfall Wall Lamp <span class="byluxxu">by LUXXU</span></h2>
              <p>
                Everything sparkles under this elegant wall lamp. This deco lighting master piece made with gold plated brass combined with ribbed fine tubes of glass brings a natural feeling of waterfalls to your luxury homes. The glamorous sensation of water in the tubes is handcraft made by glass master craftmen.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="bxANu0v7s6k">
              <h2>Wall Burj Lamp <span class="byluxxu">by LUXXU</span></h2>
              <p>
                Everything sparkles under this elegant wall lamp. This deco lighting master piece made with gold plated brass combined with ribbed fine tubes of glass brings a natural feeling of waterfalls to your luxury homes. The glamorous sensation of water in the tubes is handcraft made by glass master craftmen.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="xHZokUa0Oz4">
              <h2>Burj & Waterfall Wall Lamps <span class="byluxxu">by LUXXU</span></h2>
              <p>
                Everything sparkles under this elegant wall lamp. This deco lighting master piece made with gold plated brass combined with ribbed fine tubes of glass brings a natural feeling of waterfalls to your luxury homes. The glamorous sensation of water in the tubes is handcraft made by glass master craftmen.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="rDCDzEPZkNY">
              <h2>Chandelier Theatre <span class="byluxxu">by LUXXU</span></h2>
              <p>
                Theatre chandelier is one of the most luxury piece in Luxxu. Is traditional and creative at the same time, this amazing piece combined the rich details, the exuberant form with the best luxury and handmade materials . A master piece made with gold plated brass finish and 200 Swarovski crystals. A perfect illumination for every luxury space.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="u22P_DPKa9s">
              <h2>Handmade Pieces <span class="byluxxu">by LUXXU</span></h2>
              <p>
                Take a look on handmade production that our team apply on our modern lamps.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="v0d5fjcUxPU">
              <h2>Chandelier Empire <span class="byluxxu">by LUXXU</span></h2>
              <p>
                One of our main gold is our Empire Chandelier, inspired in the stunning architectural building, the Empire State Building. Its masterpiece is an extravagant shape full of modernity capable to transform every space in a stunning scenario. This is a natural decor piece that creates an exclusive atmosphere.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="wF2d4y09ZLQ">
              <h2>Wall lamp Macqueen <span class="byluxxu">by LUXXU</span></h2>
              <p>
                Made of brass with gold plated and handmade butterflies and majestic flowers ending with the touch of beautiful Swarovski crystals. The wall version of McQueen Chandelier, this master piece causes a dramatic and eccentric sensation of beauty.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="UJSMVQJdXJs">
              <h2>Chandelier Burj <span class="byluxxu">by LUXXU</span></h2>
              <p>
                BURJ chandelier is inspired in one of the most stunning hotel in the world, the Burj Al Arab.
                Like the hotel this master piece is a symbol of modern age and luxury together. It’s also a strong structure, extremely decorative, fully made of gold plated brass, with a delicately handmade glass tubes.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="1pvk9KOijpo">
              <h2>Chandelier Scala <span class="byluxxu">by LUXXU</span></h2>
              <p>
                Scala Chandelier is other master piece of Luxxu, poetically made, with the most beautiful ￼Swarovski crystal, and the perfect details who combined a harmonious synthesis between classic and the contemporary,a unique piece that is capable of creating not only a perfect space but involve you in passionate emotions.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="fzi2UCw540M">
              <h2>Modern Lamps Collection <span class="byluxxu">by LUXXU</span></h2>
              <p>
                LUXXU’s world it’s all about exclusivity, ambience, sophistication gathering the classic and modern design expressing all the beauty of the Swarovski crystals.
              </p>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 videoInfo" data-category="LFwKxo-xzfQ">
              <h2>LUXXU at Isaloni 2015 - Come visit us!</h2>
              <p>
                Come visit us at our first experience at Isaloni, Milano. Join us at Pavilion 13 I Stand P20 N21
              </p>
            </div>
          </div>
        </div>
      </div>
      
      <div id="categories" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 video_wrapper">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "6NcbsD17RDo"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "yu67lj8YZXA"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "9saAor7_0nU"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "fmhcg5swzro"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "nrP3k5W7YSg"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "eccFSTIqnXI"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "fe85M1B6Ze4"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "fgahUCxiCzo"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "zkjj8sjDHmg"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "6PyPpfmR-no"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "qPq1emggBgU"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "01gt9n82KN0"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "-FnYLEbqdsQ"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "TcRVFaNMLXU"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "kZ4VHi192_E"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "w8UGqMDuyiY"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "bx0HuySyans"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "GJbCDlHlRSs"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "uKcHqqwUoRo"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "mp69dfHlGxQ"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "NlRKkiwoxuM"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "F5HC7NoPqEQ"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "vBGB4oP9KrI"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "VZci1GDsy_M"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "uK9iyh_X1ak"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "WNIzt0Vwr6I"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "bOAXMlwbBVg"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "5IuHw8SHhrc"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "roPyWmPIdvI"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "xC8WOg-15VU"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "IUfpqjYy5Rg"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "oOrfWwePcp4"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "fgOJWK2P4uc"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "o_bRkoqMvjw"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "GvTUthVF5hk"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "zsPnMfNWgUE"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "SmRtB_5yTu4"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "UTx7juUL14M"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "XDEmlhWFbh0"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "DdbZzPgO30E"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "sR8HQ4vdBzY"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "_d6n80tQ7ko"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "jx7YSL3aq58"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "JIuX7eh5OxU"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "JYmA2ibQ8Yk"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "sxDw6PGbMsM"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "7LhNMJA_yUU"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "tL8V2dTghQs"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "F4E_Zkysw54"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "BZm9qM8dS20"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "77hhK-GZq-Q"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "iKrQ9aK5gpU"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "OERuZtTraqc"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://www.luxxu.net/video/vist-us-isaloni-2016.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "kzXmmmOaoc0"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "BlFeWLMve3I"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "Vby65dIGN_c"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "cnxybxExDT4"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "LBUVdvVX9jY"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "tBbTEEjGlmc"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "1NwgvwUMGOE"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "Dpjs1kiv2Vk"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "FYGOPPOsP3s"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "sE9lga4RQoQ"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "vjpU_4zYMlg"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "nPtKjKYJG0g"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "cMuSY3d-Jjo"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "ei7Xr1f4W7c"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "G-WkYPwzZ64"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "jYB6K0g4Tro"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "JfyLzVhAlHI"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "9aQ42QE4As8"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "3ShB2Z3MB4k"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "E1heEicv8DU"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "MaYOO5u9Xns"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "LiC5RCRjvD4"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "jsL371M1GP4"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "h8I-759l_98"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "bxANu0v7s6k"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "xHZokUa0Oz4"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "rDCDzEPZkNY"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "u22P_DPKa9s"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "v0d5fjcUxPU"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "wF2d4y09ZLQ"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="h

                vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "UJSMVQJdXJs"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "1pvk9KOijpo"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "fzi2UCw540M"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 video-new-entry">
          <?php $videoID = "LFwKxo-xzfQ"; ?>
          <a href="https://www.youtube.com/embed/<?php echo $videoID ?>" id="<?php echo $videoID ?>" data-target-video="<?php echo $videoID ?>" class="videoItem">
            <div class="video-thumbnail">
                <i class="fa fa-play-circle-o"></i>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo $videoID ?>/maxresdefault.jpg" alt="Luxxu Modern Dining and Living - Video"/>
            </div>
          </a>
        </div>
        
    </div>
      
  </div>

@endsection


@section('footer_scripts')

@endsection