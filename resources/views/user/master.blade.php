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
    {{-- @include('user.asset.page-nav') --}}

    <div class="main_content">
      <div class="row">
        <div class="col-md-2">
            @include('user.asset.navmenu')
        </div>
        <div class="col-md-10">
            @yield('user_content')
            @include('user.asset.footer')
        </div>
      </div>
    </div>



    @include('user.asset.scripts')
  </body>
</html>