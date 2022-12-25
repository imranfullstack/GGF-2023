<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="{{asset('img/fav.png')}}">
    @include('frontend.asset.meta')
    @include('frontend.asset.fonts')
    @include('frontend.asset.css')

    <!-- Site Title -->
    <title>GGF || We Provide Best Service</title>
  </head>
  <body>

    @include('frontend.asset.header')


    @yield('main_content')

    @include('frontend.asset.footer')


    @include('frontend.asset.scripts')
  </body>
</html>