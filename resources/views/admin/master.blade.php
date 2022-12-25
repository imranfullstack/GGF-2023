
<!doctype html>
<html lang="en">
  <head>
  	@include('admin.asset.meta')
  	@include('admin.asset.fonts')
  	@include('admin.asset.css')
    <title>Dashboard || GGF  Provide Best Service</title>
  </head>
  <body>
<div class="body-aria">
	@include('admin.asset.header')
    <section class="body-aria">
        <div class="container-fluid">
          <div class="row">
          	@include('admin.asset.nav')
          	@yield('admin_content')
          </div>
        </div>
    </section>
</div>
  @include('admin.asset.scripts')
  </body>
</html>