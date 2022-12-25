<!doctype html>
<html lang="en">
  <head>
    @include('user.asset.meta')
    @include('user.asset.fonts')
    @include('user.asset.css')
    <!-- Site Title -->
    <title>GGF || We Provide Best Service</title>
  </head>
  <body>

    @include('user.asset.header')
    @include('user.asset.page-nav')


    @yield('user_content')

    @include('user.asset.footer')


    @include('user.asset.scripts')
  </body>
</html>