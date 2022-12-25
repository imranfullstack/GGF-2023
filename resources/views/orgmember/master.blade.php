
<!doctype html>
<html lang="en">
  <head>
  	@include('orgmember.asset.meta')
  	@include('orgmember.asset.fonts')
  	@include('orgmember.asset.css')
    <title>Dashboard || GGF  Provide Best Service</title>
  </head>
  <body>
<div class="body-aria">
	@include('orgmember.asset.header')
    <section class="body-aria">
        <div class="container-fluid">
          <div class="row">
          	@include('orgmember.asset.nav')
          	@yield('orgmember_content')
          </div>
        </div>
    </section>
</div>
  @include('orgmember.asset.scripts')
  </body>
</html>