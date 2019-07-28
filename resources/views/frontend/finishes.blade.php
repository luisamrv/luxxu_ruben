@extends('layouts.app')

@section('head_metas')

    <title>Finishes | Luxxu | Modern Design and Living</title>
    @if (Session::has('data'))
        <meta http-equiv="refresh" content="5;url=/download/{{ Session::get('data') }}">
    @endif
    <meta property="og:title" content="Finishes | Luxxu | Modern Design and Living"/>
    <meta property="og:description" content="" />
    <meta property="og:type" content="Finishes" />
    <meta property="article:author" content="Finishes | Luxxu | Modern Design and Living" />
    <meta property="article:published_time" content="" />
    <meta property="og:url" content="../finishes" />
    <meta property="og:site_name" content="{!! env('BRAND_NAME') !!}" />
    <meta name="description" content="" />

@endsection


@section('head_style')

    <style type="text/css">
        .menu-samples {
          width: 11.1117%;
          text-align: center;
          margin-bottom: 20px;
        }
        .menu-samples a {
          font-size: 12px;
        }
        .menu-samples img {
          width: 90%;
          margin-bottom: 5px;
        }
        @media only screen and (max-width: 1199px) {
          .menu-samples {
            width: 11.11%;
            text-align: center;
            margin-bottom: 20px;
            float: left;
          }
        }
        @media only screen and (max-width: 900px) {
          .menu-samples {
            width: 20%;
            text-align: center;
            margin-bottom: 20px;
            float: left;
          }
        }
        @media only screen and (max-width: 575px) {
          .menu-samples {
            width: 25%;
            text-align: center;
            margin-bottom: 20px;
            float: left;
          }
        @media only screen and (max-width: 466px) {
          .menu-samples {
            width: 50%;
            text-align: center;
            margin-bottom: 20px;
            float: left;
          }
        }
    </style>

@endsection


@section('content')

    <div class="row">
        <div class="col-md-2 menu-samples">
          <a href="https://www.luxxu.net/finishes/#metal">
            <img src="/images/samples/menu/metal.jpg">
            <h5>METAL FINISHES</h5>
          </a>
        </div>
        <div class="col-md-2 menu-samples">
          <a href="https://www.luxxu.net/finishes/#crystal">
            <img src="/images/samples/menu/crystal.jpg">
            <h5>CRYSTAL GLASS</h5>
          </a>
        </div>
        <div class="col-md-2 menu-samples">
          <a href="https://www.luxxu.net/finishes/#swarovski">
            <img src="/images/samples/menu/swarovski.jpg">
            <h5>SWAROVSKI</h5>
          </a>
        </div>
        <div class="col-md-2 menu-samples">
          <a href="https://www.luxxu.net/finishes/#cord">
            <img src="/images/samples/menu/cord.jpg">
            <h5>CORDS</h5>
          </a>
        </div>
        <div class="col-md-2 menu-samples">
          <a href="https://www.luxxu.net/finishes/#marble">
            <img src="/images/samples/menu/marble.jpg">
            <h5>MARBLES</h5>
          </a>
        </div>
        <div class="col-md-2 menu-samples">
          <a href="https://www.luxxu.net/finishes/#wood">
            <img src="/images/samples/menu/wood.jpg">
            <h5>WOOD</h5>
          </a>
        </div>
        <div class="col-md-2 menu-samples">
          <a href="https://www.luxxu.net/finishes/#fabric">
            <img src="/images/samples/menu/fabric.jpg">
            <h5>FABRIC VELVET</h5>
          </a>
        </div>
        <div class="col-md-2 menu-samples">
          <a href="https://www.luxxu.net/finishes/#glass">
            <img src="/images/samples/menu/glass.jpg">
            <h5>GLASSES</h5>
          </a>
        </div>
        <div class="col-md-2 menu-samples">
          <a href="/finishes/#{{ $finishes->slug }}">
            <img src="/images/finishes/{{ $finishes->slug }}.jpg">
            <h5>{{ $finishes->name }}</h5>
          </a>
        </div>
    </div>

  <div class="row">
    
    <div class="separator" style="padding-top: 35px; margin-top: 0px; height: auto;" id="{{ $finishes->slug }}">
        <h3 class="background"> 
            <span style="text-transform: uppercase;">
                {{ $finishes->name }}
            </span>
        </h3>
    </div>
      
    <div id="form_sample_request">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label>
                <img src="/images/samples/{{ $sample->slug }}.jpg"/>
            </label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">
                {!! $sample->name !!}<br>
                <span class="sample-discription">
                    {!! $sample->description !!}
                <span>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/gold-plated.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold01">Gold Plated<br><span class="sample-discription">This finish has a real gold plated bath (14kt) with a fine layer of UV varnish that is applied over the surface to preserve its shine for years.<span></div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/brushed-brass.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold01">Brushed Brass<br><span class="sample-discription">A finely brushed brass finish with mellow highlights and a coat of UV varnish.<span></div>
          </div>



          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/polished-brass.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold01">POLISHED BRASS<br><span class="sample-discription"><!-- This effect is finely brushed and protected with a coat of UV varnish.  --><span></div>
          </div>


          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
           <label><img src="/images/samples/nickel-plated.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">Nickel Plated<br><span class="sample-discription">It is a warmer tone than chrome and it’s softly tarnished and protected with a layer of UV varnish. <span></div>
          </div>


          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/brushed-nickel.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">Brushed Nickel<br><span class="sample-discription">Created by gently rubbing nickel plated brass with an abrasive pad for a satin finish. It is not lacquered.<span></div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/black-nickel-plated.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">Black Nickel Plated<br><span class="sample-discription">A dark blackish finish, fairly flat and uniform, protected with a layer of UV varnish.<span></div>
          </div>


          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/brushed-black-nickel.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">Brushed Black Nickel<br><span class="sample-discription">A satin surface created by gently rubbing black nickel plated brass with an abrasive pad for a satin finish and protected with UV varnish.<span></div>
          </div>


          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/aged-brass.jpg"></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold01">Aged Brass<br><span class="sample-discription">A subtle brown patina over a satin-brushed surface that has the elegant appearance of aged brass.<span></div>
          </div>


          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/copper-plated.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">Copper Plated<br><span class="sample-discription">This finish has a bath of copper over antiqued and highlighted satin brass.<span></div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/brushed-copper.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold01">Brushed Copper<br><span class="sample-discription">This effect is finely brushed and protected with a coat of UV varnish. <span></div>
          </div>


          <div class="separator" style="padding-top: 35px; margin-top: 0px; height: auto;" id="crystal"><h3 class="background"> <span> CRYSTAL GLASS </span></h3></div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/ambar-colour-glass.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">Ambar Colour<!-- <br><span class="sample-discription">A satin surface created by gently rubbing black nickel plated brass with an abrasive pad for a satin finish and protected with UV varnish.<span> --></div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/clear-colour-glass.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">Clear Colour<!-- <br><span class="sample-discription">A satin surface created by gently rubbing black nickel plated brass with an abrasive pad for a satin finish and protected with UV varnish.<span> --></div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/ambar-colour-glass-01.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">Ambar Colour<!-- <br><span class="sample-discription">A satin surface created by gently rubbing black nickel plated brass with an abrasive pad for a satin finish and protected with UV varnish.<span> --></div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/clear-colour-glass-01.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">Clear Colour<!-- <br><span class="sample-discription">A satin surface created by gently rubbing black nickel plated brass with an abrasive pad for a satin finish and protected with UV varnish.<span> --></div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/crystal-tear.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">Crystal Tear<!-- <br><span class="sample-discription">A satin surface created by gently rubbing black nickel plated brass with an abrasive pad for a satin finish and protected with UV varnish.<span> --></div>
          </div>

          <div class="separator" style="padding-top: 35px; margin-top: 0px; height: auto;" id="swarovski"><h3 class="background"> <span>SWAROVSKI CRYSTALS</span></h3></div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/crystal-colour.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">Crystal Colour<!-- <br><span class="sample-discription">A satin surface created by gently rubbing black nickel plated brass with an abrasive pad for a satin finish and protected with UV varnish.<span> --></div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/ambar-colour.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">Gold Antique Colour<!-- <br><span class="sample-discription">A satin surface created by gently rubbing black nickel plated brass with an abrasive pad for a satin finish and protected with UV varnish.<span> --></div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/gold-antique-colour.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">Ambar Colour<!-- <br><span class="sample-discription">A satin surface created by gently rubbing black nickel plated brass with an abrasive pad for a satin finish and protected with UV varnish.<span> --></div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/black-colour.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">Black Colour<!-- <br><span class="sample-discription">A satin surface created by gently rubbing black nickel plated brass with an abrasive pad for a satin finish and protected with UV varnish.<span> --></div>
          </div>

          <div class="note col-lg-12 col-md-12 col-sm-12 col-xs-12">*Different Swarovski Crystal Colours Can Be Chosen Under-price Consultation.</div>

          <div class="separator" style="padding-top: 35px; margin-top: 0px; height: auto;" id="cord"><h3 class="background"> <span>CORDS</span></h3></div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/gold-textile.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">GOLD TEXTILE<!-- <br><span class="sample-discription">A satin surface created by gently rubbing black nickel plated brass with an abrasive pad for a satin finish and protected with UV varnish.<span> --></div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/black-textile.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">BLACK TEXTILE<!-- <br><span class="sample-discription">A satin surface created by gently rubbing black nickel plated brass with an abrasive pad for a satin finish and protected with UV varnish.<span> --></div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/white-textile.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">WHITE TEXTILE<!-- <br><span class="sample-discription">A satin surface created by gently rubbing black nickel plated brass with an abrasive pad for a satin finish and protected with UV varnish.<span> --></div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/silver-textile.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">SILVER TEXTILE<!-- <br><span class="sample-discription">A satin surface created by gently rubbing black nickel plated brass with an abrasive pad for a satin finish and protected with UV varnish.<span> --></div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/gold-rubber.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">GOLD RUBBER<!-- <br><span class="sample-discription">A satin surface created by gently rubbing black nickel plated brass with an abrasive pad for a satin finish and protected with UV varnish.<span> --></div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/black-rubber.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">BLACK RUBBER<!-- <br><span class="sample-discription">A satin surface created by gently rubbing black nickel plated brass with an abrasive pad for a satin finish and protected with UV varnish.<span> --></div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/silver-rubber.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">SILVER RUBBER<!-- <br><span class="sample-discription">A satin surface created by gently rubbing black nickel plated brass with an abrasive pad for a satin finish and protected with UV varnish.<span> --></div>
          </div> 

          <div class="separator" style="padding-top: 35px; margin-top: 0px; height: auto;" id="marble"><h3 class="background"> <span>MARBLES</span></h3></div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/estremoz-marble.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">ESTREMOZ<br><span class="sample-discription">White coloured marble with a prominent position in Portugal. The Estremoz marble presents a quite uniform background with a thin to medium grain, and a slight brownish vein.<span></div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/carrara-marble.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">CARRARA<br><span class="sample-discription">Carrara marble is one of the iconic luxury Italian marbles featuring shades and veins of greyish-white.<span></div>
          </div>



          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/nero-marquina-marble.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">NERO MARQUINA<br><span class="sample-discription">A deep black coloured marble, with a distinctive fine white veining pattern colour.<span></div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/green-marble.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">GREEN<br><!-- <span class="sample-discription"><span> --></div>
          </div>



          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/emperador-dark-marble.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12">EMPERADOR DARK<br><!-- <span class="sample-discription"><span> --></div>
          </div>


          <div class="separator" style="padding-top: 35px; margin-top: 0px; height: auto;" id="wood"><h3 class="background"> <span>WOOD</span></h3></div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/palisander.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">PALISANDER<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/palisander-matte.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">PALISANDER MATTE<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/pau-santo.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">PAU SANTO<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/poplar-root.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">POPLAR ROOT<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/walnut-root.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">WALNUT ROOT <br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/walnut-root-matte.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">WALNUT ROOT MATTE<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/ebony.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">EBONY<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/ebony-matte.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">EBONY MATTE<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>


          <div class="separator" style="padding-top: 35px; margin-top: 0px; height: auto;" id="fabric"><h3 class="background"> <span>FABRIC VELVET</span></h3></div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-26.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 26<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-1.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 1<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-2.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 2<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-3.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 3<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-4.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 4<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-5.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 5<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-6.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 6<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-9.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 9<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-7.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 7<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-8.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 8<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-10.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 10<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-11.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 11<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-12.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 12<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-13.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 13<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-14.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 14<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-15.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 15<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-16.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 16<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-17.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 17<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-18.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 18<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-19.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 19<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-20.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 20<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-21.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 21<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-22.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 22<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-23.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 23<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-24.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 24<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/utopian-fr-colour-25.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">UTOPIAN FR COLOUR 25<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>


          <div class="separator" style="padding-top: 35px; margin-top: 0px; height: auto;" id="glass"><h3 class="background"> <span>GLASSES</span></h3></div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/smoked-glass.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">SMOKED GLASS<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/black-glass.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">BLACK GLASS<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/bronze-mirror.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">BRONZE MIRROR<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>



          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/old-mirror.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">OLD MIRROR<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>


          <div class="separator" style="padding-top: 35px; margin-top: 0px; height: auto;" id="lacquer"><h3 class="background"> <span>LACQUERS</span></h3></div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/white-gloss-lacquer.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">WHITE GLOSS<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumbnail">
            <label><img src="/images/samples/black-gloss-lacquer.jpg"/></label>
            <div class="caption col-lg-6 col-md-5 col-sm-6 col-xs-12 gold02">BLACK GLOSS<br><!-- <span class="sample-discription"><span> -->
            </div>
          </div>


      </div>
    </div>
  </div><!-- end row -->

@endsection


@section('footer_scripts')

@endsection