
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('head_metas')

    <link rel="SHORTCUT ICON" href="https://www.luxxu.net/luxxu-modern-lamps-favicon.png">
    <meta name="description" content="Luxxu | Modern Design and Living">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- CSS -->
   <!--  <link href="{{asset('css/style.css')}}" rel="stylesheet"> -->

    <!-- CSS -->
    <link href="{{asset('css/main.css')}}" rel="stylesheet">

    <!-- <link href="{{asset('css/style-home.css')}}" rel="stylesheet"> -->

    <!-- FONT-AWESOME -->
    <link href="{{asset('css/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" >

    <!-- MEGATRACKER -->
    <script type="text/javascript" src="{{asset('js/megaTracker.js')}}"></script>
    <script>var tracker=getUrl();</script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5942FNH');</script>
    <!-- End Google Tag Manager -->

    <!-- Analytics-->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.luxxu.net/js/google-analytics/ga.js','ga');

    ga('create', 'UA-61931596-1', 'auto');
    ga('send', 'pageview');
    </script>
    <!-- END Analytics -->

    <!-- FACEBOOK PIXEL CODE -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '690097644495002');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=690097644495002&ev=PageView&noscript=1"/></noscript>
    <!-- END FACEBOOK PIXEL CODE -->

    <!-- Global site tag (gtag.js) - Google Ads: 792153497 CODIGO COVET HOUSE-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-792153497"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'AW-792153497');
    </script>
    <!-- END gta.js -->

    {{-- @include('includes.tag-retargeting') --}}
    
    @yield('head_style')

</head>

<body>

    @include('includes.header')


    @yield('content')


    @include('includes.footer')




        <!-- Bootstrap 4 querys -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- SCRIPTS ext -->
        <script src="{{asset('js/parsley.min.js')}}"></script>
        <script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
        <script src="{{asset('js/jquery.carouFredSel.js')}}"></script>
        <script src="{{asset('js/functions.js')}}"></script>
        <script src="{{asset('js/megaTracker.js')}}"></script>
        <script src="https://www.luxxu.net/product-sheet/form/product-sheet.js" async></script>

        
        <!-- Swiper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>



        <?php
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = $_SERVER['REMOTE_ADDR'];

if(filter_var($client, FILTER_VALIDATE_IP))
{
  $ip = $client;
}
elseif(filter_var($forward, FILTER_VALIDATE_IP))
{
  $ip = $forward;
}
else
{
  $ip = $remote;
}

$access_key = 'f08032816123b6c2e9d748d0bde71c9a';

// Initialize CURL:
$ch = curl_init('//api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$api_result = json_decode($json, true);

$country = $api_result['country_code'];

?>

        <!--pop up georeferenciação-->
<script>
  $(document).ready(function(){
    var countrygeo = '<?php echo $country; ?>';
    if(countrygeo == 'US'){
      $('#popup-fairs').modal('show');
    }
  });
  jQuery('.image-b').click(function(){
   jQuery('#popup-fairs').modal('hide');
  });
</script>


<script type="text/javascript">
    $(".origin").val(tracker.url_origin);
    $(".referrer").val(tracker.referrer);
    $(".lead_path").val(tracker.flow);
</script>

    <script type="text/javascript">
        jQuery(document).ready(function(){
          jQuery('select[name="country"]').change(function(){
              if(jQuery(this).val() == 'United States'){
                  jQuery('select[name="state"]').prop('disabled', false);
                  jQuery('select[name="state"]').prop('required', true);
              }else{
                  jQuery('select[name="state"] option:first-child').prop('disabled', false);
                  jQuery('select[name="state"]').css('color', '#999');
                  jQuery('select[name="state"] option:selected').prop('selected', false);
                  jQuery('select[name="state"]').prop('disabled', true);
                  jQuery('select[name="state"]').prop('required', false);

              }
          });

        });

        window.onscroll = function() {myFunction()};

        var header = document.getElementById("fixedmenu");
        var sticky = header.offsetTop;

        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }
    </script>

  <script type="text/javascript">
    
    $("#country2").change(function () {
    var selected_option = $('#country2').val();
    if (selected_option === 'United States') {
    $('#statewrapper2').attr('pk','1').show();
    }
    if (selected_option != 'United States') {
    $("#statewrapper2").removeAttr('pk').hide();
    }
    })

  </script>

  <script type="text/javascript">

    $(".videoItem").on("click", function (event) {

        event.preventDefault();

        $(".main-video iframe").prop("src", $(event.currentTarget).attr("href"));

        //back to top

        $("html, body").animate({scrollTop: 0}, "slow");

        $('.videoInfo').hide();
            var target_category = $(this).attr('data-target-video');
            $('.videoInfo[data-category=' + target_category + ']').show();


        id = $(this).attr("id");

        createURL(id);

        updateGooglePlus(id);

        updateAddthisShare(id);

        var script = document.createElement('script');

        script.setAttribute('type', 'text/javascript');

        script.setAttribute('src', '//gdata.youtube.com/feeds/api/videos/' + id + '?v=2&alt=json-in-script&callback=youtubeFeedCallback');

        document.getElementById('txt').appendChild(script);

        updateTwitterValues(id);

        return false;

    });

</script>

 <script>            
    jQuery(document).ready(function() {
        var offset = 220;
        var duration = 500;
        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > offset) {
                jQuery('.back-to-top').fadeIn(duration);
            } else {
                jQuery('.back-to-top').fadeOut(duration);
            }
        });
        
        jQuery('.back-to-top').click(function(event) {
            event.preventDefault();
            jQuery('html, body').animate({scrollTop: 0}, duration);
            return false;
        })
    });
</script>

<script type="text/javascript">
        $=jQuery.noConflict();
        $(document).ready(function() { 
            $(".slideToggle").click(function () {
                $(this).next().slideToggle();
                var id = $(this).parents(".product-thumb").attr('id');
                $('.form_enquiry').prepend('<input type="hidden" name="id_product" value="'+id+'"></input>');
            });
        });
</script>

<script type="text/javascript">
  //close divs pop up pag de produto
    $(document).on('click', '.close-price-wrapper2', function(event) {
    event.preventDefault();
    $(".product-info-cta").click();
    });
    $('.product-info-cta').click(
    function(){
    $('.wrapper-request-price').css('display','none');
    });

    // $(document).scroll(function () {
    //   var y = $(document).scrollTop(),
    //      header = $("#fixedmenu");
    //   if (y >= 100) {
    //       header.addClass('sticky');
    //   } else {
    //       header.removeClass('sticky');
    //   }
    // });
</script>

<!-- begin SnapEngage code -->
<script type="text/javascript">
  (function() {
    var se = document.createElement('script'); se.type = 'text/javascript'; se.async = true;
    se.src = '//storage.googleapis.com/code.snapengage.com/js/4daeec30-6eb1-43cd-80e9-9f68dfb51d69.js';
    var done = false;
    se.onload = se.onreadystatechange = function() {
      if (!done&&(!this.readyState||this.readyState==='loaded'||this.readyState==='complete')) {
        done = true;
      }
    };
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(se, s);
  })();

</script>
<!-- end SnapEngage code -->

<script>
  
  jQuery('.product-info-cta').click(function(){
    SnapEngage.openProactiveChat(true,true);
   });
  
  jQuery('.product-price-cta').click(function(){
    SnapEngage.openProactiveChat(true,true);
   });
</script>





    <!-- slidebar menu form -->
    <script src="/js/slidebars.js"></script>
    <script src="/js/scripts.js"></script>

    <!-- page opacity -->
    <script>
      $('.js-toggle-right-slidebar').click(function() {
        $('.page-opacity').fadeIn();
      });

      $('.js-close-right-slidebar').click(function() {
        $('.page-opacity').fadeOut();
      });
    </script>

    <!-- imgs not visible -->
    <script type="text/javascript">
      function init() {
      var imgDefer = document.getElementsByTagName('img');
      for (var i = 0; i < imgDefer.length; i++) {
        if (imgDefer[i].getAttribute('data-src')) {
          imgDefer[i].setAttribute('srcset',imgDefer[i].getAttribute('data-src'));
        }
      }
    }
    window.onload = init;
    </script>

        
    @yield('footer_scripts')

</body>

</html>
