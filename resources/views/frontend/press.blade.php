@extends('layouts.app')

@section('head_metas')

    <title>Press | Luxxu | Modern Design and Living</title>
    @if (Session::has('data'))
        <meta http-equiv="refresh" content="5;url=/download/{{ Session::get('data') }}">
    @endif
    <meta property="og:title" content="Press | Luxxu | Modern Design and Living"/>
    <meta property="og:description" content="" />
    <meta property="og:type" content="Press" />
    <meta property="article:author" content="Press | Luxxu | Modern Design and Living" />
    <meta property="article:published_time" content="" />
    <meta property="og:url" content="../press" />
    <meta property="og:site_name" content="{!! env('BRAND_NAME') !!}" />
    <meta name="description" content="" />

@endsection


@section('head_style')

    <style type="text/css">
      .sweet-alert {
        background-color: #fff;
        font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        width: 45%;
        border-radius: 0;
        text-align: center;
        max-height: 100% !important;
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%);
        overflow: hidden;
        z-index: 99999;
        padding-top: 20px;
        padding-bottom: 50px;
      }
      .sweet-alert h2 {
        font-size: 22px;
        margin: 20px 0;
      }

      h3.background span {
        font-weight: 600;
      }
      h3.background:before {
        border-top: 1px solid #554728;
      }

      .img-login-register {
        display: block;
      }
      .img-login-register-mobile {
        display: none;
      }
      .img-press-book {
        display: block;
      }
      .img-press-book-mobile {
        display: none;
      }
      .img-press-kit {
        display: block;
      }
      .img-press-kit-mobile {
        display: none;
      }

      .break-line-press-title {
        display: block;
      }

      .login-area {
        margin: 0;
        padding: 0;
        margin-bottom: 30px;
        position: relative;
      }
      .login-area-box {
        position: absolute;
        display: flex;
        height: 100%;
        justify-content: flex-end;
        padding: 0;
      }
      .login-content {
        background: #000;
        text-align: center;
        padding-top: 8%;
      }
      .login-content h2 {
          font-size: 60px;
          color: #ffffff;
          letter-spacing: 1px;
          font-family: "Bodoni", Georgia, Times, serif;
          font-weight: lighter;
      }
      .login-content-text {
        color: #fff;
          text-align: center;
          margin-bottom: 0px;
          font-size: 16px;
      }
      .register-link-modal {
        font-weight: 600;
        color: #968460;
        display: inline;
      }
      .register-area-box {
        position: absolute;
        height: 100%;
        display: block;
        padding: 0;
      }
      .register-area {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
      }
      .register-form {
        margin: 0 auto;
        text-align: center;
        padding-top: 15.5%;
        height: 100%;
        opacity: 0.9;
        transition: all 0.5s ease-in-out;
      }
      .register-form h2 {
        font-size: 60px;
        color: #000;
        letter-spacing: 1px;
        font-family: "Bodoni", Georgia, Times, serif;
        font-weight: lighter;
        margin-bottom: 9px;
      }
      .register-content-text {
      color: #000;
        text-align: center;
        margin-bottom: 0px;
        font-size: 16px;
      }
      .close-register {
        position: inherit;
          top: 0;
          right: 0;
          padding-top: 6px;
          padding-bottom: 5px;
          padding-right: 9px;
          padding-left: 9px;
          border: 1px solid;
          background: none;
          margin-top: 26px;
          margin-right: 26px;
          font-weight: bold;
          font-size: 13px;
          outline: #000;
      }

      .press-releases-area {
        margin-bottom: 30px;
      }
      .press-releases-content {
        margin-bottom: 40px;
      }
      .press-releases-content .img-responsive {
        margin: 0 auto;
      }
      a.btn-press-download {
        background: #000;
        width: 300px;
        padding: 8px;
        line-height: 18px;
        text-align: center;
        color: #FFF;
        letter-spacing: 1px;
        font-weight: 100;
        font-size: 11px;
        margin: 0 auto;
        margin-top: 16px;
      }
      a.btn-book-download {
          background: #000;
          width: 300px;
          padding: 8px;
          line-height: 18px;
          text-align: center;
          color: #FFF;
          letter-spacing: 1px;
          font-weight: 100;
          font-size: 11px;
          margin: 0 auto;
          margin-top: 16px;
      }
      .press-releases-description {
        margin-top: 8px;
      }
      .press-releases-year {
        font-size: 13px;
          font-weight: 600;
          text-align: center;
          color: #000;
          letter-spacing: 1px;
          padding: 10px;
          line-height: 0px;
          margin-bottom: 0px;
          text-transform: uppercase;
      }
      .press-releases-title {
        font-size: 12px;
          font-weight: normal;
          text-align: center;
          color: #968460;
          letter-spacing: 1px;
          padding: 8px;
          line-height: 17px;
          margin-bottom: 0px;
          text-transform: uppercase;
          height: 70px;
      }
      .press-book-img {
        padding: 0;
          margin: 0;
          position: relative;
          display: flex;
          align-items: center;
          border: 1px solid #FFF;
      }
      .press-book-download-form {
        position: absolute;
        text-align: center;
          padding: 15px;
          padding-top: 8%;
          margin: 0;
          background: #ffffffeb;
          width: 100%;
          height: 100%;
          display: none;
          border: 1px solid #000;
          justify-content: center;
          align-items: center;
          flex-flow: column;
      }
      .press-book-download-form h3 {
          font-size: 18px;
          color: #968460;
          letter-spacing: 1px;
          font-family: 'PT Sans', sans-serif;
          font-weight: normal;
          width: 50%;
          padding-bottom: 12px;
          margin-bottom: 30px;
          border-bottom: 1px solid #968460;
          margin: 0 auto;
      }
      .press-kit-img {
        padding: 0;
          margin: 0;
          position: relative;
          display: flex;
          align-items: center;
          border: 1px solid #FFF;
      }
      .press-kit-download-form {
        position: absolute;
          text-align: center;
          padding: 15px;
          padding-top: 8%;
          margin: 0;
          background: #ffffffeb;
          width: 100%;
          height: 100%;
          display: none;
          border: 1px solid #000;
          justify-content: center;
          align-items: center;
          flex-flow: column;
      }
      .press-kit-download-form h3 {
          font-size: 18px;
          color: #968460;
          letter-spacing: 1px;
          font-family: 'PT Sans', sans-serif;
          font-weight: normal;
          width: 50%;
          padding-bottom: 12px;
          margin-bottom: 30px;
          border-bottom: 1px solid #968460;
          margin: 0 auto;
      }
      .close-download-press {
        position: inherit;
          top: 0;
          right: 0;
          padding-top: 6px;
          padding-bottom: 5px;
          padding-right: 9px;
          padding-left: 9px;
          border: 1px solid;
          background: none;
          margin-top: 26px;
          margin-right: 26px;
          font-weight: bold;
          font-size: 13px;
          outline: #000;
      }



      .press-coverage-area {
        margin: 0;
        padding: 0;
        margin-bottom: 30px;
      }
      .coverage-partners {
        background-color: #ffffff;
        margin-bottom: 40px;
      }
      .coverpage-content {
        width: 20%;
      }
      .coverpage-content-full {
        width: 20%;
      }
      .coverpage-content a img {
        margin: 0 auto;
      }
      .coverpage-content-full a img {
        margin: 0 auto;
      }
      .coverpage-description {
        margin-top: 8px;
      }
      .coverpage-title {
        font-size: 13px;
        font-weight: 600;
        text-align: center;
        color: #000;
        letter-spacing: 1px;
        padding: 12px;
        line-height: 16px;
        margin-bottom: 6px;
        text-transform: uppercase;
      }
      .coverpage-state {
        font-size: 12px;
          font-weight: normal;
          text-align: center;
          color: #000;
          letter-spacing: 1px;
          padding: 8px;
          line-height: 0px;
          margin-bottom: 0px;
          text-transform: uppercase;
      }
      .coverpage-date {
        font-size: 11px;
          font-weight: normal;
          text-align: center;
          color: #968460;
          padding: 8px;
          line-height: 0px;
          margin-bottom: 0px;
          text-transform: uppercase;
      }
      .press-newsletter-area {
        margin-bottom: 60px;
        background: #ffffff;
      }

      .sub-footer {
        margin-bottom: 30px !important;
      }
    
      .press-contacts-area { margin-top: 40px; margin-bottom: 20px; text-align: center;}
      .press-contacts-area a { color: #000; display: inline; letter-spacing: 0px;}
      .press-contacts-area .press-social { margin: 15px 0px; }
      .press-contacts-area .press-social > div {
        vertical-align: middle;
        display: block;
        margin: 6px 0px;
      }
      .press-contacts-area .press-social .vcenter {
        vertical-align: middle;
        display: inline-block;
        margin: 0;
      }


    @media (min-width: 320px) and (max-width: 560px) {
      a.btn-press-download {
          background: #000;
          width: 230px;
          padding: 8px;
          line-height: 16px;
          text-align: center;
          color: #FFF;
          letter-spacing: 1px;
          font-weight: 100;
          font-size: 11px;
          margin: 0 auto;
          margin-top: 10px;
      }
      a.btn-book-download {
          background: #000;
          width: 230px;
          padding: 8px;
          line-height: 16px;
          text-align: center;
          color: #FFF;
          letter-spacing: 1px;
          font-weight: 100;
          font-size: 11px;
          margin: 0 auto;
          margin-top: 10px;
      }
      .press-releases-area {
          margin-bottom: 0px;
      }
      .coverpage-content {
          width: 50%;
          margin-bottom: 20px;
      }
      .coverpage-content-full {
          width: 100%;
          margin-bottom: 20px;
      }
      .coverpage-description {
        margin-bottom: 15px;
      }
      .coverpage-title {
        line-height: 16px !important;
          margin-bottom: 0px;
      }
      .coverpage-state {
        line-height: 0px !important;
          margin-bottom: 0px;
      }
      .coverpage-date {
        line-height: 0px !important;
          margin-bottom: 0px;
      }
        .img-login-register {
        display: none;
      }
      .img-login-register-mobile {
        display: block;
      }
      .close-download-press {
          padding-top: 4.5px;
          padding-bottom: 3px;
          padding-right: 7px;
          padding-left: 6.5px;
          margin-top: 11px;
          margin-right: 12px;
          font-size: 10px;
      }
    }

    @media (min-width: 560px) and (max-width: 760px) {
      .coverpage-content {
          width: 50%;
          margin-bottom: 20px;
      }
      .coverpage-content-full {
          width: 100%;
          margin-bottom: 20px;
      }
      .img-login-register {
        display: none;
      }
      .img-login-register-mobile {
        display: block;
      }
    }

    @media (min-width: 1401px) and (max-width: 1650px) {
      .login-content {
        padding-top: 5%;
      }
      .login-content h2 {
          font-size: 40px;
        }

      .register-form {
        padding-top: 10%;
      }
      .register-form h2 {
          font-size: 40px;
          margin-bottom: 0px;
        }
    }

    @media (min-width: 1200px) and (max-width: 1400px) {
      .login-content {
        padding-top: 3%;
      }
      .login-content h2 {
          font-size: 38px;
        }
        .login-content-text {
          font-size: 14px;
          line-height: 20px;
        }
        .login-content form button[type="submit"].btn_login {
          font-size: 12px !important;
        }

      .register-form {
        padding-top: 6%;
      }
      .register-form h2 {
          font-size: 38px;
          margin-bottom: 0px;
        }
        .register-content-text {
          font-size: 13px;
          line-height: 18px;
        }
        .register-form input#contact-tag {
          font-size: 12px !important;
        }
        .close-register {
          padding-top: 4px;
          padding-bottom: 4px;
          padding-right: 7px;
          padding-left: 7px;
          margin-top: 15px;
          margin-right: 15px;
          font-size: 11px;
      }
    }

    @media (min-width: 761px) and (max-width: 991px) {
      .break-line-press-title {
          display: none;
        }
      .login-content {
        padding-top: 2.5%;
      }
      .login-content h2 {
        font-size: 34px;
      }
      .login-content-text {
        font-size: 13px;
        line-height: 18px;
      }
      .register-form {
        padding-top: 2.5%;
      }
      .register-form h2 {
        font-size: 34px;
        margin-bottom: 0px;
      }
      .close-register {
        padding-top: 5px;
          padding-bottom: 3px;
          padding-right: 7px;
          padding-left: 7px;
          margin-top: 14px;
          margin-right: 14px;
          font-size: 12px;
      }
    }

    @media (min-width: 768px) and (max-width: 1199px) {
      .img-press-kit {
        display: none;
      }
      .img-press-kit-mobile {
        display: block;
      }
      .img-press-book {
        display: none;
      }
      .img-press-book-mobile {
        display: block;
      }
    }

    @media (min-width: 320px) and (max-width: 760px) {

      .sweet-alert {
          background-color: #fff;
          width: 80% !important;
          max-height: 100% !important;
          left: 0;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%);
          overflow: hidden;
          z-index: 99999;
          padding-top: 20px !important;
          padding-bottom: 50px !important;
      }
      .sweet-alert h2 {
          font-size: 20px !important;
        }


      .img-press-kit {
          display: none;
        }
      .img-press-kit-mobile {
          display: block;
        }
        .img-press-book {
          display: none;
        }
        .img-press-book-mobile {
          display: block;
        }

      .break-line-press-title {
          display: none;
        }
        .login-content {
          padding-top: 27%;
        }
        .login-content h2 {
          font-size: 27px;
          margin-bottom: 10px;
        }
        .login-content-text {
          font-size: 13px;
          line-height: 15px !important;
          padding: 25px;
        }
        .register-form {
          padding-top: 21%;
        }
        .register-form h2 {
          font-size: 27px;
          margin-bottom: 0px;
        }
        .close-register {
            padding-top: 3.5px;
            padding-bottom: 3px;
            padding-right: 7px;
            padding-left: 7px;
            margin-top: 13px;
            margin-right: 13px;
            font-size: 12px;
        }


        .press-releases-content {
            margin-bottom: 10px;
        }
        .press-releases-description {
            margin-top: 0px;
            margin-bottom: 15px;
        }
        .press-releases-year {
          padding: 7px;
        }
        .press-releases-title {
          line-height: 15px !important;
          padding: 0px;
        }


        .coverpage-title {
          padding: 2px;
        }
        .coverpage-state {
          margin-top: 5px;
        }
      }
  </style>

@endsection


@section('content')

  <!-- LOGIN AREA -->
  <div class="row login-area">
    <img src="/images/press/luxxu-magazines-featured.jpg" class="img-responsive pull-left img-login-register">
    <img src="/images/press/luxxu-magazines-featured-mobile.jpg" class="img-responsive pull-left img-login-register-mobile">
    
    <!-- login -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 login-area-box">
      
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 hidden-xs">

      </div>

      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 login-content" style="z-index: 3;">
        <h2>PRESS<br class="break-line-press-title"> AREA</h2>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          @include('includes/forms/press/login')
        </div>
        <p class="login-content-text">Don’t have an account yet?<br>Register <a class="register-link-modal" onclick="openNav()">here</a>.</p>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 hidden-sm hidden-xs">

      </div>

    </div>
    <!-- end login -->

    <!-- register -->
    <div class="container register-area-box col-xs-12">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 register-area">

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="height: 100%;">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 register-form" style="background: rgb(255, 255, 255); position: absolute; left: 50%;">

              <h2>REGISTER</h2>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @include('includes/forms/press/register')
              </div>
              <p class="register-content-text">If you are registed.<br>Back to <a class="register-link-modal" onclick="closeNav()">login</a>.</p>

              <button class="close-register" onclick="closeNav()">X</button>

          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 register-form-2" style="background: rgb(177, 177, 177); height: 100%; position: absolute; right: 0px; opacity: 0.9;">

          </div>
        </div>


      </div>
    </div>
    <!-- end register -->

  </div>
  <!-- END LOGIN AREA -->
  
  <div class="container press-contacts-area">
    <div class="row">
      <div class="col-xs-12 col-lg-6 col-lg-offset-3">
        <h3><b>SOFIA OLIVEIRA |</b> PRESS RELATIONS MANAGER</h1>
        <div class="press-social">
          <div>
            <img src="//www.luxxu.net/images/icons/email.png" alt="email" class="vcenter" width="22">
              &nbsp;&nbsp;
              <p class="vcenter"> 
                <a href="mailto:press@luxxu.net">press@luxxu.net</a> | <a href="mailto:soliveira@luxxu.net">soliveira@luxxu.net</a>
              </p>
          </div>
          <div>
            <img src="//www.luxxu.net/images/icons/social/linkedin.jpg" alt="linkedin" class="vcenter" width="22">
            &nbsp;&nbsp;
            <p class="vcenter">
              <a href="https://linkedin.com/in/sofia-oliveira-/" target="_blank"> linkedin.com/in/sofia-oliveira-/</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- PRESS RELEASES, PRESS KIT E PRESS BOOK -->
  <div class="container press-releases-area">

    <div class="separator"><h3 class="background"><span>PRESS RELEASES</span></h3></div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 press-releases-content" style="margin-top: 15px;">
      <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
        <a href="/press/press-releases/bringing-luxury-to-offices-this-fall-2019/" target="_blank">
          <img src="/images/press/press-releases/2019/bringing-luxury-to-offices-this-fall.png" class="img-responsive">
          <div class="press-releases-description">
            <p class="press-releases-year">2019</p>
            <p class="press-releases-title">Bringing Luxury to Offices this Fall</p>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
        <a href="/press/press-releases/isaloni-2019/" target="_blank">
          <img src="/images/press/press-releases/2019/euroluce-2019.png" class="img-responsive">
          <div class="press-releases-description">
            <p class="press-releases-year">2019</p>
            <p class="press-releases-title">Euroluce 2019</p>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
        <a href="/press/press-releases/exceptional-design-trends-for-spring-summer-2019/" target="_blank">
          <img src="/images/press/press-releases/2019/trends.png" class="img-responsive">
          <div class="press-releases-description">
            <p class="press-releases-year">2019</p>
            <p class="press-releases-title">Exceptional Design Trends for Spring/Summer</p>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
        <a href="/press/press-releases/Luxxu-Takes-Over-Versailles-For-Equiphotel-Paris-2018/" target="_blank">
          <img src="/images/press/press-releases/2018/Press-Release-Luxxu-Takes-Over-Versailles-For-Equiphotel-Paris-2018.png" class="img-responsive">
          <div class="press-releases-description">
            <p class="press-releases-year">2018</p>
            <p class="press-releases-title">Luxxu Takes Over Versailles for EquipHotel Paris</p>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
        <a href="/press/press-releases/luxury-winter-wonderland-by-luxxu/" target="_blank">
          <img src="/images/press/press-releases/2018/luxury-winter-wonderland-by-luxxu.png" class="img-responsive">
          <div class="press-releases-description">
            <p class="press-releases-year">2018</p>
            <p class="press-releases-title">Luxury Winter Wonderland by LUXXU</p>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
        <a href="https://www.luxxu.net/press/press-releases/have-a-very-luxxu-christmas/" target="_blank">
          <img src="/images/press/press-releases/2018/christmas.png" class="img-responsive">
          <div class="press-releases-description">
            <p class="press-releases-year">2018</p>
            <p class="press-releases-title">Have a Very LUXXU Christmas</p>
          </div>
        </a>
      </div>

    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 25px;">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 press-kit-img">
          <img src="/images/press/luxxu-press-kit.jpg" class="img-responsive">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 press-kit-download-form">
            <h3>PRESS KIT REQUEST</h3>
            <button class="close-download-press" onclick="closeNav1()">X</button>
            @include('includes/forms/press/download-press-kit')
          </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <a onclick="openNav1()" class="btn-press-download">REQUEST OUR PRESS KIT</a>
        </div>

      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 25px;">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 press-book-img">
          <img src="/images/press/luxxu-press-book.jpg" class="img-responsive">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 press-book-download-form">
            <h3>PRESS BOOK REQUEST</h3>
            <button class="close-download-press" onclick="closeNav2()">X</button>
            @include('includes/forms/press/download-press-book')
          </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <a onclick="openNav2()" class="btn-book-download">REQUEST OUR PRESS BOOK</a>
        </div>

      </div>

    </div>
  </div>
  <!-- END PRESS RELEASES, PRESS KIT E PRESS BOOK -->

  <!-- PRESS COVERAGE -->
  <div class="press-coverage-area">
    
    <div class="container">
      <div class="separator">
        <h3 class="background">
          <span>PRESS COVERAGE</span>
        </h3>
      </div>
    </div>

    <div class="row coverage-partners">
      
      <!-- Swiper -->
      <div class="swiper-container partners-v1">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="/images/press/magazines-logos/1-marie-claire-maison-magazine.jpg" class="img-responsive"></div>
            <div class="swiper-slide"><img src="/images/press/magazines-logos/2-homes-and-gardens-magazine.jpg" class="img-responsive"></div>
            <div class="swiper-slide"><img src="/images/press/magazines-logos/3-chic-haus-magazine.jpg" class="img-responsive"></div>
            <div class="swiper-slide"><img src="/images/press/magazines-logos/4-elle-decoration-magazine.jpg" class="img-responsive"></div>
            <div class="swiper-slide"><img src="/images/press/magazines-logos/5-ad-magazine.jpg" class="img-responsive"></div>
            <div class="swiper-slide"><img src="/images/press/magazines-logos/6-financial-times-magazine.jpg" class="img-responsive"></div>
            <div class="swiper-slide"><img src="/images/press/magazines-logos/7-robb-report-magazine.jpg" class="img-responsive"></div>
            <div class="swiper-slide"><img src="/images/press/magazines-logos/8-prestige-magazine.jpg" class="img-responsive"></div>
            <div class="swiper-slide"><img src="/images/press/magazines-logos/9-bazaar-interiors-awards-magazine.jpg" class="img-responsive"></div>
            <div class="swiper-slide"><img src="/images/press/magazines-logos/10-vogue-arabia-magazine.png" class="img-responsive"></div>
            <div class="swiper-slide"><img src="/images/press/magazines-logos/11-elle-magazine.jpg" class="img-responsive"></div>
            <div class="swiper-slide"><img src="/images/press/magazines-logos/12-livingetc-magazine.jpg" class="img-responsive"></div>
          </div>
      </div>

    </div>

    <div class="container">
      
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 coverpage-content">
            <img src="/images/press/clipping/press-clipping-2.jpg" class="img-responsive">
            <div class="coverpage-description">
              <p class="coverpage-title">West Essex Life</p>
              <p class="coverpage-state">UK</p>
              <p class="coverpage-date">August 2017</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 coverpage-content">
            <img src="/images/press/clipping/press-clipping-3.jpg" class="img-responsive">
            <div class="coverpage-description">
              <p class="coverpage-title">Financial Times</p>
              <p class="coverpage-state">USA</p>
              <p class="coverpage-date">January 2019</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 coverpage-content">
            <img src="/images/press/clipping/press-clipping-4.jpg" class="img-responsive">
            <div class="coverpage-description">
              <p class="coverpage-title">Deluxe</p>
              <p class="coverpage-state">Vietnam</p>
              <p class="coverpage-date">2018</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 coverpage-content">
            <img src="/images/press/clipping/press-clipping-1.jpg" class="img-responsive">
            <div class="coverpage-description">
              <p class="coverpage-title">Obustrojstvo</p>
              <p class="coverpage-state">Russia</p>
              <p class="coverpage-date">December 2018</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 coverpage-content">
            <img src="/images/press/clipping/press-clipping-6.jpg" class="img-responsive">
            <div class="coverpage-description">
              <p class="coverpage-title">Elle</p>
              <p class="coverpage-state">Italy</p>
              <p class="coverpage-date">February 2019</p>
            </div>
        </div>

      </div>

    </div>

  </div>
  <!-- END PRESS COVERAGE -->

  <!-- PRESS NEWSLETTER -->
  <div class="row press-newsletter-area">
    <div class="container">
      <div class="separator">
        <h3 class="background">
          <span>PRESS NEWSLETTER</span>
        </h3>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 30px;">
         @include('includes/forms/press/subscribe-newsletter')
        </div>
    </div>
  </div>
  <!-- END PRESS NEWSLETTER -->

@endsection


@section('footer_scripts')

  <!-- Swiper JS -->
  <script src="js/swiper.min.js"></script>
 
  <!-- Login / Register -->
  <script type="text/javascript">
    function openNav() {
      jQuery(".register-area-box").css({'transition':'all 0.5s ease-in-out','display':'block'});
    jQuery(".register-form").css({'left':'0px', 'transition':'all 0.5s ease-in-out','display':'block'});
    jQuery(".register-form-2").css({'z-index':'5'});
  }

  function openNav1 () {
    jQuery(".press-kit-download-form").css({'display':'flex'});
  }

  function openNav2 () {
    jQuery(".press-book-download-form").css({'display':'flex'});
  }

  function closeNav() {
    jQuery(".register-form").css({'left':'50%', 'transition':'all 0.5s ease-in-out'});
    jQuery(".register-form-2").css({'z-index':'0'});
  }

  function closeNav1() {
    jQuery(".press-kit-download-form").css({'display':'none'});
  }

  function closeNav2() {
    jQuery(".press-book-download-form").css({'display':'none'});
  }
  </script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container.partners-v1', {
      slidesPerView: 6,
      spaceBetween: 40,
      loop: true,
      loopedSlides:13,
      autoplay: {
        delay: 2200,
        disableOnInteraction: false,
      },
      breakpoints: {
        1200: {
          slidesPerView: 5,
          spaceBetween: 10,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 10,
        },
        640: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        320: {
          slidesPerView: 2,
          spaceBetween: 5,
        }
      }
    });
  </script>

@endsection