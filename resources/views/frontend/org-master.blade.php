<!doctype html>
<html lang="en">
  <head>
    @include('frontend.asset.meta')
    @include('frontend.asset.fonts')
    @include('frontend.asset.css')
    <!-- Site Title -->
    <title>GGF || Connecting Green People</title>
  </head>
  <body>

    @include('frontend.asset.org-header')


    @yield('main_content')

    @include('frontend.asset.footer')

    @include('frontend.asset.scripts')
  </body>
</html>