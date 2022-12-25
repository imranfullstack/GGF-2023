<!doctype html>
<html lang="en">
  <head>
		  @include('orgadmin.pages.nonorg.asset.meta')
		  @include('orgadmin.pages.nonorg.asset.fonts')
		  @include('orgadmin.pages.nonorg.asset.css')
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


		      header.header-aria a.btn.btn-success.btn-green.btn-top-style {
		          font-weight: 500;
		          text-transform: uppercase;
		          padding: 10px 20px;
		      }
		      header.header-aria a.btn.btn-success.btn-green.btn-top-style i.fas.fa-sort-down {
		          font-size: 17px;
		          padding-left: 50px;
		      }

      
		  </style>
    <title>Dashboard || GGF  Provide Best Service</title>
  </head>
  <body>
<div class="body-aria">
  @include('orgadmin.pages.nonorg.asset.header')
    <section class="body-aria">
        <div class="container-fluid">
          <div class="row">
  				@include('orgadmin.pages.nonorg.asset.nav')

          <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">
              		@yield('main_aria_content')
	             	 </div>
	              </div>
	          </div>
	        </div>
	    </section>
	</div>
  @include('orgadmin.pages.nonorg.asset.scripts')
  </body>
</html>