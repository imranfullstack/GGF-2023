
<!doctype html>
<html lang="en">
  <head>
  	@include('orgeditor.asset.meta')
  	@include('orgeditor.asset.fonts')
  	@include('orgeditor.asset.css')
    <title>Dashboard || GGF  Provide Best Service</title>
  </head>
  <body>
<div class="body-aria">
	@include('orgeditor.asset.header')
    <section class="body-aria">
        <div class="container-fluid">
          <div class="row">
          	@include('orgeditor.asset.nav')
          	@yield('orgeditor_content')
          </div>
        </div>
    </section>
</div>
  @include('orgeditor.asset.scripts')
  </body>
</html>