
<!doctype html>
<html lang="en">
  <head>
  	@include('editor.asset.meta')
  	@include('editor.asset.fonts')
  	@include('editor.asset.css')
    <title>Dashboard || GGF  Provide Best Service</title>
  </head>
  <body>
<div class="body-aria">
	@include('editor.asset.header')
    <section class="body-aria">
        <div class="container-fluid">
          <div class="row">
          	@include('editor.asset.nav')
          	@yield('editor_content')
          </div>
        </div>
    </section>
</div>
  @include('editor.asset.scripts')
  </body>
</html>