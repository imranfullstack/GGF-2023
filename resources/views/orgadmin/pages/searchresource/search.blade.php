@extends('orgadmin.master')

@section('style')

    
        <style>


.col-md-3.col-lg-2.very-left-map {
    height: 90vh !important;
    overflow: auto;
}
#wrapper {
  padding-left: 50%;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
#wrapper.toggled {
  padding-left: 0px;
}
#sidebar-wrapper {
    position: fixed;
    left: 460px;
    width: 40%;
    height: 86.5%;
    margin-left: -184px;
    overflow-y: hidden;
    overflow-x: hidden;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
#wrapper.toggled #sidebar-wrapper {
    width: 0px;
}
#page-content-wrapper {  
    position: absolute;
    width: 50%;
}
#wrapper.toggled #page-content-wrapper {
  position: absolute;
  margin-right: -250px;
  width:100%;
}
/* Sidebar Styles */
.sidebar-nav {
  position: absolute;
  top: 0;
  width: 250px;
  margin: 0;
  padding: 0;
  list-style: none;
}
.sidebar-nav li {
  text-indent: 20px;
  line-height: 40px;
}
.sidebar-nav li a {
  display: block;
  text-decoration: none;
  color: #999999;
}
.sidebar-nav li a:hover {
  text-decoration: none;
  color: #fff;
  background: rgba(255, 255, 255, 0.2);
}
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: black;
    color: white;
    text-align: center;
}
.row {
    margin-right: 0px;
    margin-left: 0px;
}
h4.map-address-dksld {
    font-size: 18px;
    line-height: 30px;
    font-weight: 500;
    margin-bottom: 7px;
}
.right-side-content-aria-map h2 {
    font-size: 28px;
}
h4.map-phone {
    font-size: 16px;
}
a.btn.btn-map-btn {
    margin: 0;
    padding: 0;
    border-radius: unset;
    text-transform: uppercase;
    font-size: 14px;
}
ul.top-search-nav {
    margin: 0;
    padding: 0;
}
ul.top-search-nav li {
    display: inline-block;
    margin: 12px 5px;
    padding: 0;
}
/*-- Button*/
 .btn-check:checked+.btn-outline-primary, .btn-outline-primary.active{
    color: #fff;
    background-color: #84b04a;
    border-color: #84b04a;
}
.btn-outline-primary {
    color: #838383;
    border-color: #c5c5c59e;
    box-shadow: 1px 2px 8px 0px #84b04a;
    text-transform: uppercase;
    font-weight: 700;
    border-radius: 50px;
}
div#activmap-results-num {
    padding: 0px 31px;
    font-size: 31px;
}
.input-group {
    margin: 14px 0;
}
.button-top-search .btn-group {
    width: 100%;
}
.button-top-search .btn-danger:hover {
    color: #fff;
    background-color: #84b04a;
    border-color: #84b04a;
}
.button-top-search .btn-danger {
    color: #84b04a;
    background-color: #ffffff;
    border-color: #84b04a;
    font-weight: 700;
    text-transform: uppercase;
}
.button-top-search {
    margin-top: 10px;
}
.button-top-search .btn-check:checked+.btn-danger:focus, .btn-danger.active:focus {
    box-shadow: 0 0 0 0.25rem rgb(132 176 74);
}
.single-from-group label.form-check-label {
    font-weight: 700;
}
.single-from-group {
    padding: 10px 0px;
}
.btn-green {
    background: #fff !important;
    border: solid 1px #84b04a !important;
    color: #84b04a !important;
}
.btn-green:hover {
    background: #84b04a;
    border: solid 1px #84b04a;
    color: #fff;
}
.single-from-group .form-check-input:checked {
    background-color: #84b04a;
    border-color: #84b04a;
    color: #000;
}
div#activmap-places {
    padding-top: 35px;
}
h5#exampleModalLabel {
    text-transform: uppercase;
    font-weight: 700;
    font-size: 25px;
}
.modal-footer.style-dksld {
    justify-content: flex-start !important;
}
button.btn.btn-primary.btn-green-dd {
    font-size: 14px;
    background: #84b04a;
    font-weight: 700;
    text-transform: uppercase;
    border: none;
    padding: 15px 50px;
    border-radius: 20px;
}
button.btn-dark-dd {
    font-size: 14px;
    background: #3B3B3B;
    font-weight: 600;
    text-transform: uppercase;
    border: none;
    padding: 15px 50px;
    border-radius: 20px;
}
button.btn-style-ddd {
    background: none;
    border: none;
    font-weight: 700;
    font-size: 32px;
}
.btn-check:active+.btn-danger:focus, .btn-check:checked+.btn-danger:focus, .btn-danger.active:focus, .btn-danger:active:focus, .show>.btn-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.25rem rgb(132 176 74 / 53%) !important;
}
.btn-check:focus+.btn-danger, .btn-danger:focus {
    box-shadow: 0 0 0 0.25rem rgb(132 176 74 / 53%) !important;
}
h2.result-cound-skdsdf {
    text-transform: uppercase;
    color: #84b04a;
    font-size: 25px;
    margin-left: 40px;
}
button.btn.btn-danger.dropdown-toggle.dropdown-toggle-split:hover {
    background: none;
}
img.filtter-order {
    height: 26px;
    max-width: 33px;
}
.btn-group.search-dark {
    border: 1px solid #ffffff;
}
.btn-group.search-dark button.btn.btn-danger.btn-block {
    background: #dff5c0;
    border-right: none;
}
.btn-group.search-dark button.btn.btn-danger.dropdown-toggle.dropdown-toggle-split {
    border-left: #ffdead00;
    background: #dff5c0;
}

body {
    overflow: hidden;
}
#activmap-wrapper {
    height: 90vh !important;
}
.col-md-2.left-menu {
    margin: 0;
    padding: 0;
    z-index: 99;
}

.activmap-place:hover, .activmap-place.active {
    background: none !important;
    color: #000 !important;
}

.activmap-place {
    border-left: none !important;
}
h2.result-cound-skdsdf {
    margin: 0;
}
h2.result-cound-skdsdf {
    border-bottom: 3px solid #84b04a;
    width: 89%;
    padding-bottom: 11px;
}
</style>


@endsection


@section('orgadmin_org_s_resource') active-nav @endsection
@section('org_admin_content')





<div class="col-md-10 right-aria-sldksd">
  <div class="content-body-dskd">


<!-- --- Hide For Now  --- -->
        <div class="col-md-3 col-lg-2 very-left-map" style="display: none">
            
            <hr>
                <h4><i class="fa fa-search"></i> Search </h4>
            <hr>

            <!-- Activ'Map categories and tags -->
            <div class="panel-group" id="activmap-accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse-tourism">
                                <i class="fa fa-suitcase"></i> Tourism
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-tourism" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <!-- Add checked="checked" to show the markers of this filter on page loading -->
                            <input type="checkbox" name="marker_type[]" value="tourism_01" checked="checked"> Hotels<br>
                            <input type="checkbox" name="marker_type[]" value="tourism_02"> Monuments
                            <select name="marker_type[]">
                                <option value="">- Monument type -</option>
                                <option value="tourism_02_01" selected="selected">Places of worship</option>
                                <option value="tourism_02_02">Bridge</option>
                                <option value="tourism_02_03">Institution</option>
                            </select><br>
                            <input type="checkbox" name="marker_type[]" value="tourism_03" checked="checked"> Museums
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- --- Hide For Now  --- -->
<!-- -------------------- -->

<!--Exprience / Event Model -->




<div id="wrapper">
        <!-- Sidebar -->
        <div class="container-fluid">
            <div id="sidebar-wrapper">
                <div class="nav-left-dksld-search">

                    <!-- Places panel (auto removable) -->
                    <div id="activmap-places" class="hidden-xs">
                        <h2 class="result-cound-skdsdf">Results - 5</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" class="no-space-skjdlsd">
            <div class="container-fluid">


   
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div id="activmap-wrapper">
                <div id="activmap-container">
                    <!-- Map container REQUIRED -->
                    <div id="activmap-canvas"></div>
                </div>
            </div>  
        </div>  
    </div>  
             
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


</div>
</div>
</div>









@endsection()


@section('scripts')





<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDjS5QXqKr4vDPLOTUwFcmn8oDSjQIawNc'></script>


    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
          <!-- Activ'Map plugin -->
    <link rel="stylesheet" href="{{asset('frontend/css/activmap-classic.css')}}">
    <script src="{{asset('frontend/js/jquery-activmap.min.js')}}"></script>
    <script src="{{asset('frontend/js/markercluster.min.js')}}"></script>



        <script>
        $(function(){
            // Activ'Map plugin init
            // All options here: http://activmap.pandao.eu/doc/#options
            $('#activmap-wrapper').activmap({
                 places: [
                    
@foreach($resources as $data)                                    
                                    {title: '{{$data->title}}', phone: '013039685454',address: 'ede' , address: '{{$data->location_availability}}', url: 'http://127.0.0.1:8000/kapezynaf-62ab5affccdf0', tags: ['tourism_01'], lat:{{$data->latitude}}, lng: {{$data->longitude}}, img: 'https://toppng.com/uploads/preview/reen-new-resource-available-icon-career-resources-11568923210xbm319phdo.png', icon: '{{asset('frontend/images/icons/map.png')}}'},
@endforeach                                    

                ],
                icon: 's',
                lat: 51.5286416,       //latitude of the center
                lng: -0.1015987,       //longitude of the center
                posPanel: 'left',
                showPanel: true,
                radius: 0,
                cluster: true,
                country: 'uk',
                mapType: 'roadmap',
                request: 'large',
                locationTypes: ['geocode','establishment']
            }); 
        });
    </script>

          <script id="rendered-js" >
$("#menu-toggle").click(function (e) {
  e.preventDefault();
  var isIE11 = !!navigator.userAgent.match(/Trident.*rv\:11\./);
  $("#toggleIcon").toggleClass("fa fa-angle-double-down fa fa-angle-double-up");
  $("#wrapper").toggleClass("toggled");
  if (isIE11) {
    if ($("#wrapper").hasClass("toggled")) {
      $('#sidebar-wrapper').css("margin-left", "-268px");
    } else {
      $('#sidebar-wrapper').css("margin-left", "-250px");
    }
  }
});
//# sourceURL=pen.js
    </script>


@endsection