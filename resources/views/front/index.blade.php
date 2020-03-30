<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title', 'ازمون انلاین')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href{{ asset('fonts/icomoon/style.css') }}>
    <link rel="stylesheet" href={{ asset('fonts/line-icons/style.css') }}>
    <!-- MAIN CSS -->
    <link rel="stylesheet" href={{ asset('css/front-css.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
  </head>
  <body>

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">در حال لود شدن ...</span>
    </div>
  </div>


<div class="site-wrap">

@include('front.Units.mobile')
    <!-- NAVBAR -->
@include('front.Units.navbar')

    <!-- HOME -->

    <!-- ABOUT US -->
   @yield('main')
    <!-- SERVICES -->
  @include('front.Units.services')
    <!-- PORTFOLIO -->
   @include('front.Units.portfolio')
   @include('front.Units.posts')
    @include('front.Units.footer')
  </div>
    <script src={{ url('js/jquery.min.js ')}}></script>
    <script src={{ url('js/custom.js') }}></script>
    <script src={{ url('js/front-js.js') }}></script>
  </body>
</html>
