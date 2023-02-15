@extends('frontend.master')

@section('style')
    <style>
        footer.footer {

            display: none;

        }

        .col-md-3.col-lg-2.very-left-map {

            height: 82vh !important;

            overflow: auto;

        }

        #menu-toggle {

            color: white;

            position: absolute;

            top: 46px;

            left: -45.75px;

            transform: rotate(90deg);

            background: #84b04a;

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

            left: 250px;

            width: 50%;

            height: 86.5%;

            margin-left: -250px;

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

            width: 100%;

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

        .sidebar-nav li a:active,
        .sidebar-nav li a:focus {

            text-decoration: none;

        }

        .sidebar-nav>.sidebar-brand {

            height: 65px;

            font-size: 18px;

            line-height: 60px;

        }

        .sidebar-nav>.sidebar-brand a {

            color: #999999;

        }

        .sidebar-nav>.sidebar-brand a:hover {

            color: #fff;

            background: none;

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

        .btn-check:checked+.btn-outline-primary,
        .btn-outline-primary.active {

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

        .button-top-search .btn-check:checked+.btn-danger:focus,
        .btn-danger.active:focus {

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

        a.btn-dark-dd {

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

        .btn-check:active+.btn-danger:focus,
        .btn-check:checked+.btn-danger:focus,
        .btn-danger.active:focus,
        .btn-danger:active:focus,
        .show>.btn-danger.dropdown-toggle:focus {

            box-shadow: 0 0 0 0.25rem rgb(132 176 74 / 53%) !important;

        }

        .btn-check:focus+.btn-danger,
        .btn-danger:focus {

            box-shadow: 0 0 0 0.25rem rgb(132 176 74 / 53%) !important;

        }

        h2.result-cound-skdsdf {


            color: #84b04a;

            font-size: 30px;

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



        .image-map img {

            width: 152px;

            height: 142px;

            float: left;

        }



        .box456d {

            height: 235px;

            overflow: auto;

        }

        .focus-event .single-from-group {

            width: 33%;

            display: inline-block;

        }





        .col-md-4.location-dksld {

            position: relative;

        }

        .col-md-4.location-dksld:before {

            position: absolute;

            content: "comming Soon";

            background: #ffffffe3;

            width: 98%;

            height: 97%;

            top: 0;

            bottom: 0;

            left: 0;

            color: #000;

            display: flex;

            flex-direction: column;

            justify-content: center;

            text-align: center;

            font-size: 28px;

            text-transform: uppercase;

        }
    </style>
@endsection

@section('main_content')
    @php
        
        $org = App\Models\Organisation::orderby('id', 'desc')
            ->where('status', 1)
            ->get();
        
    @endphp




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

            <div class="panel panel-default">

                <div class="panel-heading">

                    <h4 class="panel-title">

                        <!-- Replace class "collapse" with "collapsed" to close this panel on page loading -->

                        <a class="collapse" data-toggle="collapse" href="#collapse-services">

                            <i class="fa fa-bank"></i> Services

                        </a>

                    </h4>

                </div>

                <!-- Remove "in" from this class to close the panel on page loading -->

                <div id="collapse-services" class="panel-collapse collapse in">

                    <div class="panel-body">

                        <input type="checkbox" name="marker_type[]" value="services_01"> Culture<br>

                        <input type="checkbox" name="marker_type[]" value="services_02"> Health<br>

                        <input type="checkbox" name="marker_type[]" value="services_03"> Places of worship<br>

                        <input type="checkbox" name="marker_type[]" value="services_04"> Safety<br>

                        <input type="checkbox" name="marker_type[]" value="services_05"> Schools<br>

                        <input type="checkbox" name="marker_type[]" value="services_06"> Sports

                    </div>

                </div>

            </div>

            <div class="panel panel-default">

                <div class="panel-heading">

                    <h4 class="panel-title">

                        <!-- Replace class "collapse" with "collapsed" to close this panel on page loading -->

                        <a class="collapse" data-toggle="collapse" href="#collapse-shops">

                            <i class="fa fa-shopping-cart"></i> Shops

                        </a>

                    </h4>

                </div>

                <!-- Remove "in" from the class to close this panel on page loading -->

                <div id="collapse-shops" class="panel-collapse collapse in">

                    <div class="panel-body">

                        <input type="checkbox" name="marker_type[]" value="shops_01"> Beauty<br>

                        <input type="checkbox" name="marker_type[]" value="shops_02"> Clothes &amp; Jewels<br>

                        <input type="checkbox" name="marker_type[]" value="shops_03"> Food<br>

                        <input type="checkbox" name="marker_type[]" value="shops_04"> Services

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- --- Hide For Now  --- -->

    <!-- -------------------- -->



    @php
        
        $focus = App\Models\Focused::orderby('name', 'asc')
            ->where('status', 1)
            ->get();
        
        $structure = App\Models\Ogranisationtype::orderby('name', 'asc')
            ->where('status', 1)
            ->get();
        
        $provide = App\Models\Provide::orderby('name', 'asc')
            ->where('status', 1)
            ->get();
        
        $lookingfor = App\Models\Lookingfor::orderby('name', 'asc')
            ->where('status', 1)
            ->get();
        

        $product = App\Models\Productcat::orderby('name', 'asc')->get();
        
        $eventcat = App\Models\Eventcat::orderby('name', 'asc')->get();
        
        $projectcat = App\Models\Projectcat::orderby('name', 'asc')->get();
        
        $project = App\Models\Project::orderby('id', 'desc')
            ->where('status', 1)
            ->get();
        
        $service = App\Models\Servicecat::orderby('id', 'desc')->get();
        
    @endphp



    <form method="get" action="{{ route('filter.org.filtter') }}">

        @csrf

        <!--Exprience / Event Model -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-dialog modal-xl">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLabel"><span class="bdl-skdlc">Search: </span>   ORGANISATIONS</h5>

                    </div>

                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-4 boxfixed-dksd">

                                <div class="title-model-style">

                                    <h5>Focus</h5>

                                </div>

                                <hr>

                                @foreach ($focus as $item)
                                    <!-- -------- Single Form Group -->

                                    <div class="single-from-group">

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" name="focus[]"
                                                value="{{ $item->id }}" id="focus{{ $item->id }}">

                                            <label class="form-check-label" for="focus{{ $item->id }}">

                                                {{ $item->name }}

                                            </label>

                                        </div>

                                    </div>

                                    <!-- -------- Single Form Group -->
                                @endforeach









                            </div>

                            <div class="col-md-4 boxfixed-dksd">

                                <div class="title-model-style">

                                    <h5>Structure</h5>



                                </div>

                                <hr>

                                @foreach ($structure as $item)
                                    <!-- -------- Single Form Group -->

                                    <div class="single-from-group">

                                        <div class="form-check">

                                            <input class="form-check-input" name="structure[]" type="checkbox"
                                                value="{{ $item->id }}" id="stracture{{ $item->id }}">

                                            <label class="form-check-label" for="stracture{{ $item->id }}">

                                                {{ $item->name }}

                                            </label>

                                        </div>

                                    </div>

                                    <!-- -------- Single Form Group End-->
                                @endforeach

                            </div>

                            <div class="col-md-4 location-dksld boxfixed-dksd">

                                <div class="title-model-style">

                                    <h5>Location </h5>

                                </div>

                                <hr>

                                <!-- -------- Single Form Group -->

                                <div class="single-from-group">

                                    <div class="form-check">

                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault22">

                                        <label class="form-check-label" for="flexCheckDefault22">

                                            Single Base / Location

                                        </label>

                                    </div>

                                </div>

                                <!-- -------- Single Form Group End-->

                                <!-- -------- Single Form Group -->

                                <div class="single-from-group">

                                    <div class="form-check">

                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault3">

                                        <label class="form-check-label" for="flexCheckDefault3">

                                            Multiple Location

                                        </label>

                                    </div>

                                </div>

                                <!-- -------- Single Form Group End-->

                                <!-- -------- Single Form Group -->

                                <div class="single-from-group">

                                    <div class="form-check">

                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault23">

                                        <label class="form-check-label" for="flexCheckDefault23">

                                            Where Requered

                                        </label>

                                    </div>

                                </div>

                                <!-- -------- Single Form Group End-->

                            </div>
                            <div class="col-md-4 location-dksld boxfixed-dksd">

                                <hr>
                                <div class="title-model-style">

                                    <h5>Looking For </h5>

                                </div>

                                <hr>



                                <div class="box456d">

                                    @foreach ($lookingfor as $item)
                                        <!-- -------- Single Form Group -->

                                        <div class="single-from-group">

                                            <div class="form-check">

                                                <input class="form-check-input" type="checkbox" name="lookingfor[]"
                                                    value="{{ $item->id }}" id="lookingfor{{ $item->id }}">

                                                <label class="form-check-label" for="lookingfor{{ $item->id }}">

                                                    {{ $item->name }}

                                                </label>

                                            </div>

                                        </div>

                                        <!-- -------- Single Form Group End-->
                                    @endforeach

                                </div>





                            </div>


                            <div class="col-md-4 boxfixed-dksd">

                                <hr>

                                <div class="title-model-style">

                                    <h5>Provides</h5>

                                </div>

                                <hr>

                                @foreach ($provide as $item)
                                    <!-- -------- Single Form Group -->

                                    <div class="single-from-group">

                                        <div class="form-check">

                                            <input class="form-check-input" name="provide[]" type="checkbox"
                                                value="{{ $item->id }}" id="provide{{ $item->id }}">

                                            <label class="form-check-label" for="provide{{ $item->id }}">

                                                {{ $item->name }}

                                            </label>

                                        </div>

                                    </div>

                                    <!-- -------- Single Form Group End-->
                                @endforeach

                            </div>

                            <div class="col-md-4">

                                <hr>

                                <div class="title-model-style">

                                    <h5>Products</h5>

                                </div>

                                <hr>

                                <!-- -------- Single Form Group -->

                                <div class="single-from-group">

                                    <select class="form-select" name="product[]">

                                        <option disabled selected> --- Select Product ---</option>

                                        @foreach ($product as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>

                                </div>

                                <!-- -------- Single Form Group End-->

                                <hr>

                                <div class="title-model-style">

                                    <h5>Services</h5>

                                </div>

                                <hr>

                                <!-- -------- Single Form Group -->

                                <div class="single-from-group">

                                    <select class="form-select" name="service[]">

                                        <option disabled selected>--- Select Service ---</option>

                                        @foreach ($service as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>

                                </div>

                                <!-- -------- Single Form Group End-->

                            </div>

                        </div>

                    </div>

                    <div class="modal-footer style-dksld">

                        <button type="submit" class="btn btn-primary btn-green-dd">Apply</button>
                        <button type="reset" class="btn btn-danger btn-dark-dd">Reset</button>

                        <button type="button" class="btn btn-danger btn-dark-dd" data-bs-dismiss="modal">Close</button>

                    </div>

                </div>

            </div>

        </div>



    </form>

    <form method="get" action="{{ route('filter.event.filtter') }}">

        @csrf



        <!--Organization Model -->

        <div class="modal fade" id="exampleModal55" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">

            <div class="modal-dialog modal-dialog modal-xl">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLabel"><span class="bdl-skdlc">Search: </span>   EXPERIENCES & EVENTS</h5>

                    </div>

                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-12 focus-event boxfixed-dksd fullwidth">



                                <label><b>SEARCH</b></label>

                                <br>

                                <input type="text" name="keyword" class="form-control">

                                <br>


                                @foreach ($eventcat as $item)
                                    <!-- -------- Single Form Group -->

                                    <div class="single-from-group">

                                        <div class="form-check">

                                            <input class="form-check-input" name="event[]" type="checkbox"
                                                value="{{ $item->id }}" id="event-{{ $item->id }}">

                                            <label class="form-check-label" for="event-{{ $item->id }}">

                                                {{ $item->name }}

                                            </label>

                                        </div>

                                    </div>

                                    <!-- -------- Single Form Group End-->
                                @endforeach









                            </div>





                        </div>

                    </div>



                    <div class="modal-footer style-dksld">

                        <button type="submit" class="btn btn-primary btn-green-dd">Apply</button>

                        <button type="reset" class="btn btn-danger btn-dark-dd">Reset</button>

                        <button type="button" class="btn btn-danger btn-dark-dd" data-bs-dismiss="modal">Close</button>

                    </div>

                </div>

            </div>

        </div>

    </form>



    <form method="get" action="{{ route('filter.project.filtter') }}">

        @csrf





        <!--Organization Model -->

        <div class="modal fade" id="exampleModa66" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">

            <div class="modal-dialog modal-dialog modal-xl">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLabel"> <span>SEARCH:</span> FILTER</h5>



                    </div>

                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-12 focus-event boxfixed-dksd fullwidth">

                                <label><b>SEARCH</b></label>
                                <br />

                                <input type="text" name="keyword" class="form-control">

                                <br>



                                @foreach ($projectcat as $item)
                                    <!-- -------- Single Form Group -->

                                    <div class="single-from-group">

                                        <div class="form-check">

                                            <input class="form-check-input" name="project[]" type="checkbox"
                                                value="{{ $item->id }}" id="project-{{ $item->id }}">

                                            <label class="form-check-label" for="project-{{ $item->id }}">

                                                {{ $item->name }}

                                            </label>

                                        </div>

                                    </div>

                                    <!-- -------- Single Form Group End-->
                                @endforeach







                            </div>



                        </div>

                    </div>



                    <div class="modal-footer style-dksld">

                        <button type="submit" class="btn btn-primary btn-green-dd">Apply</button>


                        <button type="reset" class="btn btn-danger btn-dark-dd">Reset</button>
                        <button type="button" class="btn btn-danger btn-dark-dd" data-bs-dismiss="modal">Close</button>

                    </div>

                </div>

            </div>

        </div>



    </form>



    <!-- -------------------- -->

    <div class="search-filtter-section">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-6">





                    <div class="row">

                        <div class="col-md-4">

                            <div class="button-top-search">

                                <!-- Example split danger button -->

                                <div class="btn-group search-dark">

                                    <button class="btn btn-danger" ype="button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Organisations</button>



                                </div>

                                <!-- Example split danger button -->

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="button-top-search">





                                <!-- Example split danger button -->

                                <div class="btn-group">

                                    <button class="btn btn-danger btn-block" ype="button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal55">Expriences / Events</button>

                                </div>

                                <!-- Example split danger button -->





                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="button-top-search">

                                <!-- Example split danger button -->

                                <div class="btn-group">

                                    <button class="btn btn-danger btn-block" ype="button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModa66">Projects</button>

                                </div>

                                <!-- Example split danger button -->

                            </div>

                        </div>

                    </div>







                </div>

                <div class="col-md-1">



                </div>

            </div>

        </div>

    </div>



    <div id="wrapper">

        <!-- Sidebar -->

        <div class="container-fluid">

            <div id="sidebar-wrapper">

                <div class="nav-left-dksld-search">



                    <!-- Places panel (auto removable) -->
@if($org->count() >= 1)
                    <div id="activmap-places" class="hidden-xs">
                        
                        <h2 class="result-cound-skdsdf">Results -
                            {{ $org->count() }}
                        </h2>
                    </div>
@else
                    <div class="no-found-message">
                        
                        <h1 class="text-danger">Sorry No Organisation Found</h1>
                    </div>
@endif                    

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



                <button id="menu-toggle" class="btn btn-secondary">

                    <i id="toggleIcon" class="fa fa-angle-double-down"> </i> Map View

                </button>

            </div>

        </div>

        <!-- /#page-content-wrapper -->



    </div>

    <!-- /#wrapper -->





    </div>
@endsection





@section('scripts')
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDjS5QXqKr4vDPLOTUwFcmn8oDSjQIawNc'></script>





    <!-- Optional JavaScript; choose one of the two! -->



    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

    <!-- Activ'Map plugin -->

    <link rel="stylesheet" href="{{ asset('frontend/css/activmap-classic.css') }}">

    <script src="{{ asset('frontend/js/jquery-activmap.min.js') }}"></script>

    <script src="{{ asset('frontend/js/markercluster.min.js') }}"></script>



    <!-- -----MAP--- -->


    <script>
        $(function() {

            // Activ'Map plugin init

            // All options here: http://activmap.pandao.eu/doc/#options

            $('#activmap-wrapper').activmap({

                places: [

                    @foreach ($org as $item)



               

                        {
                            title: '{{ $item->org_name }}',
                            orgtype: '',
                            short_desc: '{{ $item->summary }}',
                            url: '{{ route('org.index', $item->slug) }}',
                            tags: ['tourism_01'],
                            lat: {{ $item->lat }},
                            lng: {{ $item->long }},
                            img: '{{ asset('img/upload/org/logo/' . $item->logo) }}',
                            icon: '{{ asset('frontend/images/icons/map.png') }}'
                        },
                    @endforeach

                ],

                icon: 's',

                lat: 51.5286416, //latitude of the center

                lng: -0.1015987, //longitude of the center

                posPanel: 'left',

                showPanel: true,

                radius: 0,

                cluster: true,

                country: 'uk',

                mapType: 'roadmap',

                request: 'large',

                locationTypes: ['geocode', 'establishment']

            });

        });
    </script>



    <script id="rendered-js">
        $("#menu-toggle").click(function(e) {

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
