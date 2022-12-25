
<!doctype html>
<html lang="en">
  <head>
  	@include('orgadmin.asset.meta')
  	@include('orgadmin.asset.fonts')
  	@include('orgadmin.asset.css')
          <style type="text/css">
        img.dashbaord-logo-css {
          width: 30%;
          margin: 0 auto;
      }
      .logo {
          text-align: left;
          padding: 10px 16px;
      }
      li.nav-item.dropdown {
          list-style: none;
          margin: 0;
          padding: 0;
      }
      ul.dropdown-menu.show {
          border: 3px solid #6e933e91;
      }
      .logo span i {
          color: #fff;
          font-size: 40px;
          padding-top: 0;
          display: inline-block;
      }
      .btn-success {
          border-color: #6e933e;
      }
      header.header-aria a.btn.btn-success.btn-green.btn-top-style {
          font-weight: 700;
          text-transform: uppercase;
          padding: 10px 20px;
      }
      header.header-aria a.btn.btn-success.btn-green.btn-top-style i.fas.fa-sort-down {
          font-size: 17px;
          padding-left: 50px;
      }

img.dashbaord-logo-css {
    width: 30%;
    margin: 0 0 0 35px;
}

      </style>
    <title>Dashboard || GGF  Provide Best Service</title>
  </head>
  <body>
<div class="body-aria">
	@include('orgadmin.asset.header')
    <section class="body-aria">
        <div class="container-fluid">
          <div class="row">
          	@include('orgadmin.asset.nav')
          	@yield('org_admin_content')
          </div>
        </div>
    </section>
</div>
  @include('orgadmin.asset.scripts')
  </body>
</html>