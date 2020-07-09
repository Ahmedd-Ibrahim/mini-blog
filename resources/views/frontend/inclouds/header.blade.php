<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>pro @yield('title')</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
{{--

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}



  <!-- Favicons -->
  <link href="{{asset('frontend/assets/img/favicon.png')}}" rel="icon">
<link href="{{asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <!-- Google Fonts -->
<link href="{{url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}" rel="stylesheet">
  <!-- Vendor CSS Files -->

<link href="{{asset('assets/icofont/icofont.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/venobox/venobox.css')}}" rel="stylesheet">
<link href="{{asset('assets/remixicon/remixicon.css')}}" rel="stylesheet">
<link href="{{asset('assets/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/aos/aos.css')}}" rel="stylesheet">
<link href="{{asset('assets/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"  id="bootstrap-css">
<script src="{{asset('assets/jquery/jquery.min.js')}}" rel="stylesheet" > </script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" rel="stylesheet" > </script>
  <!-- Template Main CSS File -->


<link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/main.css')}}" rel="stylesheet">
<link href="{{asset('css/styles.css')}}" rel="stylesheet">

</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="{{url('index')}}">{{__('header.MOSTASHARY')}}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
    {{-- <a href="index.html" class="logo"><img src="{{asset('imgs/logo.png')}}" alt="" class="img-fluid"></a> --}}

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li class="{{Route::current()->getName() ==='index' ? 'active' : '' }}"><a href="{{url('index')}}">{{__('header.Home')}}</a></li>
        <li class="{{Route::current()->getName() ==='about' ? 'active' : '' }}"><a href="{{url('about')}}">{{__('header.About')}}</a></li>
          {{-- <li  class="{{Route::current()->getName() ==='translation' ? 'active' : '' }}"><a href="{{url('translation')}}">{{__('header.Translation')}}</a></li> --}}
          <li class="{{Route::current()->getName() ==='portfolio' ? 'active' : '' }}"><a href="{{url('portfolio')}}">{{__('header.Our custmoer')}}</a></li>
{{--
          <li class="drop-down"><a>{{__('header.Services')}}</a>
            <ul>
                <li><a href="{{'services'}}">{{__('Our Services')}}</a></li>
              <li><a href="#">Translation</a></li>
              <li class="drop-down"><a href="#">Services translation</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
        <li class=" {{Route::current()->getName() ==='contact' ? 'active' : '' }}"><a href="{{url('contact')}}">{{__('header.Contact')}}</a></li>
        <li class="{{Route::current()->getName() ==='blog' ? 'active' : '' }}" ><a href="{{url('blog')}}">{{__('header.blog')}}</a></li>
        <li class="drop-down"><a href="#">{{__('header.language')}}</a>

            <ul>
            <li><a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">Arabic</a></li>
                <li><a href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a></li>

              </ul>
            <li>

        </ul>
      </nav><!-- .nav-menu -->

    <a href="{{url('about')}}" class="get-started-btn scrollto">{{__('header.Get Started')}}</a>

    </div>
  </header><!-- End Header -->
