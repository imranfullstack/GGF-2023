@extends('user.master')
<!-- Page Nav -->
@section('dashboard-active')
    active
@endsection

<!-- Page Nav End-->





@section('style')
    <link rel='stylesheet'
        href='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/responsive/1.0.4/css/dataTables.responsive.css'>


    <style type="text/css">
        li.rightarrow-dksldc0c {
            display: none !important;
        }

        .border-secondary {
            border-color: #6e933e !important;
        }

        .card.mb-3.box-style-dksld {
            padding: 20px;
        }

        .card.mb-3.box-style-dksld {
            border: 1px solid #c1e98c;
            border-bottom: 5px solid #6e933e;
        }

        .card.mb-3.box-style-dksld img {
            width: 80px;
            height: 80px;
        }

        .card.mb-3.box-style-dksld a {
            color: #84b04a;
            padding-left: 7px;
            text-transform: uppercase;
            font-weight: 700;
            font-size: 14px;
            text-decoration: none;
        }

        .card.mb-3.box-style-dksld h5.card-title {
            font-size: 19px;
        }


        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #84b04a;
        }

        ul.tab-custom li.nav-item>button {
            font-weight: 700;
            color: #000;
            text-transform: uppercase;
        }

        .tab-body {
            margin: 50px 0px;
        }

        .text-center-dlsldkc0 tr td {
            padding: 20px 0;
        }

        .custom-dd25s3d6cd th {
            font-size: 17px;
        }

        tr.bg-dark.custom-dd25s3d6cd th:after {
            display: none;
        }

        .dataTables_paginate {
            float: right;
        }

        .btn-block {
            width: 100%;
        }

        .dataTables_paginate.paging_simple_numbers li a {
            padding: 6px 16px;
            color: #000;
            text-decoration: none;
            text-transform: uppercase;
            display: inline-block;
        }

        div#DataTables_Table_0_paginate ul.pagination li.paginate_button.active a {
            color: #ffffff !important;
            background: #6e933e;
        }

        .dataTables_length {
            display: none !important;
        }

        .dataTables_filter {
            display: none !important;
        }

        .dataTables_wrapper.form-inline.dt-bootstrap.no-footer .row {
            padding-top: 10px;
        }
    </style>



    <style type="text/css">
        a.first-title-dksld0c {
            font-size: 24px;
            margin: 0;
            line-height: 41px;
            padding: 0;
            text-decoration: none;
            color: #fff;
        }

        .title-dkdksldkfdf2.bg-dksld:before {
            background: #6e933e;
        }

        .title-dkdksldkfdf2.bg-dksld a.first-title-dksld0c {
            width: 38% !important;
            display: inline-block;
        }

        .title-dkdksldkfdf2.bg-dksld a.first-title-dksld0c span {
            float: right;
        }

        .input-body-fieldddd input.form-control.field-skdlsd {
            width: 75%;
        }

        .input-body-fieldddd .form-check.form-switch {
            width: 24%;
        }

        .input-body-fieldddd .form-check.form-switch,
        input.form-control.field-skdlsd {
            display: inline-block;
        }

        input.form-control.field-skdlsd {
            border: none;
        }

        .input-body-fieldddd {
            border-bottom: 2px solid #6e933e;
        }

        .single-form-aria-dksld {
            margin: 30px 0px;
        }

        .input-body-fieldddd input:focus {
            box-shadow: none;
        }

        .form-lable-name-dksld0c label {
            font-size: 19px;
            color: #000;
            font-weight: 700;
            text-transform: uppercase;
        }

        .border-dksldc {
            border: 3px solid #6663;
            margin-bottom: 22px;
        }

        ul.toggle-gff-dksld li {
            margin: 0;
            padding: 0;
            list-style: none;
            display: inline-block;
        }

        ul.toggle-gff-dksld {
            margin: 0;
            padding: 0;
            float: right;
        }

        ul.toggle-gff-dksld label {
            font-size: 18px;
            margin-bottom: 0;
            font-weight: 700;
            color: #666;
            text-transform: uppercase;
        }

        .input-body-fieldddd.text {
            border-bottom: none;
        }

        .input-body-fieldddd.text textarea.form-control {
            border: 3px solid #6e933e;
            max-width: 100%;
            min-width: 100%;
        }

        .form-check.form-switch .on-off-switch {
            float: right;
        }

        .btn-block {
            width: 100%;
        }

        .btn-check:checked+label.btn.btn-outline-success.success-avable.btn-block {
            background: #6e933e;
        }

        a.btn.btn-success.btn-green.right-blsdkc {
            float: right;
            padding: 15px 40px;
            text-transform: uppercase;
            font-weight: 700;
        }

        a.btn.btn-success.btn-green.left-blsdkc {
            padding: 15px 40px;
            text-transform: uppercase;
            font-weight: 700;
        }
    </style>


    <style>
        .uploadOuter {
            text-align: center;
            padding: 20px;
        }

        .uploadOuter strong {
            padding: 0 10px;
        }

        .dragBox {
            width: 100%;
            height: 100px;
            margin: 0 auto;
            position: relative;
            text-align: center;
            font-weight: bold;
            line-height: 95px;
            color: #999;
            border: 2px dashed #ccc;
            display: inline-block;
            transition: transform 0.3s;
        }

        .dragBox input[type="file"] {
            position: absolute;
            height: 100%;
            width: 100%;
            opacity: 0;
            top: 0;
            left: 0;
        }

        .draging {
            transform: scale(1.1);
        }

        #preview {
            text-align: center;
        }

        #preview img {
            max-width: 100%;
        }




        /*Status */
        span.badgec {
            padding: 4px 21px;
            font-size: 10px;
            display: inline-block;
            border-radius: 50px;
            font-weight: 700;
        }

        span.badge-contact {
            background: #7dcf0c;
            color: #fff;
        }

        span.badge-pendding {
            background: #cbb203;
            color: #fff;
        }

        span.badge-close {
            background: #f11919;
            color: #fff;
        }

        span.badge-approve {
            background: #5f911f;
            color: #fff;
        }
    </style>
@endsection
@section('user_content')
    @php
        
        $project = App\Models\Projectapply::orderby('id', 'desc')
            ->where('user_id', Auth::user()->id)
            ->get();
        $jobs = App\Models\Jobapply::orderby('id', 'desc')
            ->where('user_id', Auth::user()->id)
            ->get();
        $event = App\Models\Eventapply::orderby('id', 'desc')
            ->where('user_id', Auth::user()->id)
            ->get();
        $product = App\Models\Productbuy::orderby('id', 'desc')
            ->where('user_id', Auth::user()->id)
            ->get();
        $service = App\Models\Serviceapply::orderby('id', 'desc')
            ->where('user_id', Auth::user()->id)
            ->get();
        
    @endphp





    <div class="body-aria">

        <div class="container">



            <section>
                <br><br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="first-collaps-part">
                                <div class="service-aria-business-dkskdf0c23d">
                                    <div class="title-dkdksldkfdf2 bg-dksld">
                                        <a data-bs-toggle="collapse" href="#collapseExample" role="button"
                                            aria-expanded="false" aria-controls="collapseExample"
                                            class="first-title-dksld0c collapsed"> DASHBOARD <span>
                                                <i class="fas fa-caret-down"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accordion-collapse collapse" id="collapseExample">
                                    <div class="tab-body-dksld">
                                        <div class=" col-md-12">
                                            <div class="row">
                                                <!-- /// Single Count Item  -->
                                                <div class="col-md-4">
                                                    <div class="card mb-3 box-style-dksld" style="max-width: 100%;">
                                                        <div class="row g-0">
                                                            <div class="col-md-4">
                                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNT_mkof5zX2jt589B12i7osjtpF84CjjinQp_H3qmiUI_Ea_84lgdQUmGkFi2ru231Wo&amp;usqp=CAU"
                                                                    class="img-fluid rounded-start" alt="...">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">PROJECTS</h5>
                                                                    <p class="card-text">{{ $project->count() }} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /// Single Count Item  -->
                                                <!-- /// Single Count Item  -->
                                                <div class="col-md-4">
                                                    <div class="card mb-3 box-style-dksld" style="max-width: 100%;">
                                                        <div class="row g-0">
                                                            <div class="col-md-4">
                                                                <img src="https://media.sproutsocial.com/uploads/2020/03/twitter-dms.jpg"
                                                                    class="img-fluid rounded-start" alt="...">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">JOBS</h5>
                                                                    <p class="card-text"> {{ $jobs->count() }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /// Single Count Item  -->
                                                <div class="col-md-4">
                                                    <div class="card mb-3 box-style-dksld" style="max-width: 100%;">
                                                        <div class="row g-0">
                                                            <div class="col-md-4">
                                                                <img src="https://elearningindustry.com/wp-content/uploads/2020/10/the-3-types-of-learner-feedback-tools-and-goals.jpg"
                                                                    class="img-fluid rounded-start" alt="...">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">EVENTS</h5>
                                                                    <p class="card-text">{{ $event->count() }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /// Single Count Item  -->
                                                <div class="col-md-4">
                                                    <div class="card mb-3 box-style-dksld" style="max-width: 100%;">
                                                        <div class="row g-0">
                                                            <div class="col-md-4">
                                                                <img src="https://www.clipartmax.com/png/middle/173-1730336_food-items-food-products-icon-png.png"
                                                                    class="img-fluid rounded-start" alt="...">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">PRODUCTS</h5>
                                                                    <p class="card-text">{{ $product->count() }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /// Single Count Item  -->
                                                <div class="col-md-4">
                                                    <div class="card mb-3 box-style-dksld" style="max-width: 100%;">
                                                        <div class="row g-0">
                                                            <div class="col-md-4">
                                                                <img src="https://y26uq11r8xr1zyp0d3inciqv-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/181-1.jpg"
                                                                    class="img-fluid rounded-start" alt="...">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">SERVICES</h5>
                                                                    <p class="card-text">{{ $service->count() }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /// Single Count Item  -->
                                                <div class="col-md-4">
                                                    <div class="card mb-3 box-style-dksld" style="max-width: 100%;">
                                                        <div class="row g-0">
                                                            <div class="col-md-4">
                                                                <img src="https://elearningindustry.com/wp-content/uploads/2020/10/the-3-types-of-learner-feedback-tools-and-goals.jpg"
                                                                    class="img-fluid rounded-start" alt="...">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">FEEDBACK</h5>
                                                                    <p class="card-text">0</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <br>
                                                    <a href="{{ route('user.profile') }}" class="btn btn-green btn-block">
                                                        EDIT PROFILE</a>
                                                </div>
                                            </div>
                                            <div class="border-dksldc"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="first-collaps-part">
                                <div class="service-aria-business-dkskdf0c23d">
                                    <div class="title-dkdksldkfdf2 bg-dksld">
                                        <a data-bs-toggle="collapse" href="#projecttabs-d03d" role="button"
                                            aria-expanded="false" aria-controls="collapseExample"
                                            class="first-title-dksld0c"> PROJECTS<span>
                                                <i class="fas fa-caret-down"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse" id="projecttabs-d03d">
                                    <div class="tab-body-dksld">
                                        <div class="col-md-12">


                                            <div class="row">


                                                <table class="table table-striped text-center-dlsldkc0">
                                                    <thead>
                                                        <tr class="bg-dark custom-dd25s3d6cd">
                                                            <th scope="col" width="2%">Sl</th>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Project</th>
                                                            <th scope="col">Organisation</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">More</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $i = 1;
                                                        @endphp
                                                        @foreach ($project as $item)
                                                            <tr>
                                                                <td>{{ $i++ }}</td>
                                                                <td><img src="{{ asset('img/upload/project/' . $item->project->image) }}"
                                                                        width="50px"></td>
                                                                <td class="eventname"><b>{{ $item->project->name }}</b>
                                                                </td>
                                                                <td><a href="{{ route('org.index', $item->project->organisation->slug) }}"
                                                                        class="link-table">{{ $item->project->organisation->org_name }}</a>
                                                                </td>
                                                                <td>
                                                                    {{ Carbon\Carbon::parse($item->project->start_date)->format('d/m/y') }}
                                                                    -
                                                                    {{ Carbon\Carbon::parse($item->project->end_date)->format('d/m/y') }}
                                                                </td>

                                                                <td>
                                                                    @if ($item->status == 0)
                                                                        <span class="badgec badge-pendding">Pendding</span>
                                                                    @elseif($item->status == 1)
                                                                        <span class="badgec badge-contact">Contacted</span>
                                                                    @elseif($item->status == 2)
                                                                        <span class="badgec badge-approve">Approve</span>
                                                                    @elseif($item->status == 3)
                                                                        <span class="badgec badge-close">Closed</span>
                                                                    @endif
                                                                </td>

                                                                <td>
                                                                    <a href="{{ route('user.project.single.project', $item->id) }}"
                                                                        class="btn btn-green">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </td>

                                                            </tr>
                                                        @endforeach



                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="first-collaps-part">
                                <div class="service-aria-business-dkskdf0c23d">
                                    <div class="title-dkdksldkfdf2 bg-dksld">
                                        <a data-bs-toggle="collapse" href="#jobscollups" role="button"
                                            aria-expanded="false" aria-controls="collapseExample"
                                            class="first-title-dksld0c"> JOBS <span>
                                                <i class="fas fa-caret-down"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse" id="jobscollups">
                                    <div class="tab-body-dksld">
                                        <div class="col-md-12">


                                            <div class="row">


                                                <table class="table table-striped text-center-dlsldkc0">
                                                    <thead>
                                                        <tr class="bg-dark custom-dd25s3d6cd">
                                                            <th scope="col">Sl</th>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Jobs</th>
                                                            <th scope="col">Application Date</th>
                                                            <th scope="col">Organisation</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">More</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $i = 1;
                                                        @endphp
                                                        @foreach ($jobs as $item)
                                                            <tr>
                                                                <td>{{ $i++ }}</td>
                                                                <td><img src="{{ asset('img/upload/org/logo/' . $item->job->organisation->logo) }}"
                                                                        width="30px"></td>
                                                                <td class="eventname"><b>{{ $item->job->title }}</b></td>
                                                                <td> {{ $item->created_at->format('d M Y') }} </td>
                                                                <td><a href="{{ route('org.index', $item->job->organisation->slug) }}"
                                                                        class="link-table">{{ $item->job->organisation->org_name }}</a>
                                                                </td>


                                                                <td>
                                                                    @if ($item->status == 0)
                                                                        <span class="badgec badge-pendding">Pendding</span>
                                                                    @elseif($item->status == 1)
                                                                        <span class="badgec badge-contact">Contacted</span>
                                                                    @elseif($item->status == 2)
                                                                        <span class="badgec badge-approve">Approve</span>
                                                                    @elseif($item->status == 3)
                                                                        <span class="badgec badge-close">Closed</span>
                                                                    @endif
                                                                </td>


                                                                <td><a href="{{ route('user.recruit.single.recruit', $item->id) }}"
                                                                        class="btn btn-green">More</a></td>
                                                            </tr>
                                                        @endforeach

                                                        <!--  -->

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="first-collaps-part">
                                <div class="service-aria-business-dkskdf0c23d">
                                    <div class="title-dkdksldkfdf2 bg-dksld">
                                        <a data-bs-toggle="collapse" href="#eventtabs-sldk" role="button"
                                            aria-expanded="false" aria-controls="collapseExample"
                                            class="first-title-dksld0c"> EVENTS <span>
                                                <i class="fas fa-caret-down"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse" id="eventtabs-sldk">
                                    <div class="tab-body-dksld">
                                        <div class="col-md-12">



                                            <div class="row">



                                                <table class="table table-striped text-center-dlsldkc0">
                                                    <thead>
                                                        <tr class="bg-dark custom-dd25s3d6cd">
                                                            <th scope="col">Sl</th>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Event</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Organisation</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">More</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php $i = 1; @endphp
                                                        @foreach ($event as $item)
                                                            <tr>
                                                                <td>{{ $i++ }}</td>
                                                                <td>
                                                                    <img src="{{ asset('img/upload/event/' . $item->event->image) }}"
                                                                        width="50px">
                                                                </td>
                                                                <td class="eventname">
                                                                    <b>{{ $item->event->event_name }}</b></td>
                                                                <td>{{ Carbon\Carbon::parse($item->event->date)->format('d M Y') }}
                                                                </td>

                                                                <td><a href="{{ route('org.index', $item->event->organisation->slug) }}"
                                                                        class="link-table">{{ $item->event->organisation->org_name }}</a>
                                                                </td>

                                                                <td>
                                                                    @if ($item->status == 0)
                                                                        <span class="badgec badge-pendding">Pendding</span>
                                                                    @elseif($item->status == 1)
                                                                        <span class="badgec badge-contact">Contacted</span>
                                                                    @elseif($item->status == 2)
                                                                        <span class="badgec badge-approve">Approve</span>
                                                                    @elseif($item->status == 3)
                                                                        <span class="badgec badge-close">Closed</span>
                                                                    @endif
                                                                </td>

                                                                <td><a href="{{ route('user.event.single.event', $item->id) }}"
                                                                        class="btn btn-green">More</a></td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>


                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>





            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="first-collaps-part">
                                <div class="service-aria-business-dkskdf0c23d">
                                    <div class="title-dkdksldkfdf2 bg-dksld">
                                        <a data-bs-toggle="collapse" href="#products-sldk" role="button"
                                            aria-expanded="false" aria-controls="collapseExample"
                                            class="first-title-dksld0c"> Products <span>
                                                <i class="fas fa-caret-down"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse" id="products-sldk">
                                    <div class="tab-body-dksld">
                                        <div class="col-md-12">



                                            <div class="row">

                                                <table class="table table-striped text-center-dlsldkc0">
                                                    <thead>
                                                        <tr class="bg-dark custom-dd25s3d6cd">
                                                            <th scope="col">Sl</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Event</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Qty</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">More</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php $i = 1; @endphp
                                                        @foreach ($product as $item)
                                                            <tr>
                                                                <td>{{ $i++ }}</td>
                                                                <td>{{ Carbon\Carbon::parse($item->created_at)->format('d M Y') }}
                                                                </td>
                                                                <td><img src="{{ asset('img/upload/product/' . $item->product->thumbnail) }}"
                                                                        width="50px"></td>
                                                                <td class="eventname"><b>{{ $item->product->name }}</b>
                                                                </td>
                                                                <td>{{ $item->status }} </td>
                                                                <td>{{ $item->product->price }} AUD</td>
                                                                <td>{{ $item->quantity }}</td>


                                                                <td>
                                                                    @if ($item->status == 0)
                                                                        <span class="badgec badge-pendding">Pendding</span>
                                                                    @elseif($item->status == 1)
                                                                        <span class="badgec badge-contact">Contacted</span>
                                                                    @elseif($item->status == 2)
                                                                        <span class="badgec badge-approve">Approve</span>
                                                                    @elseif($item->status == 3)
                                                                        <span class="badgec badge-close">Closed</span>
                                                                    @endif
                                                                </td>


                                                                <td><a href="{{ route('user.product.single.product', $item->id) }}"
                                                                        class="btn btn-green">More</a></td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="first-collaps-part">
                                <div class="service-aria-business-dkskdf0c23d">
                                    <div class="title-dkdksldkfdf2 bg-dksld">
                                        <a data-bs-toggle="collapse" href="#services-sldk" role="button"
                                            aria-expanded="false" aria-controls="collapseExample"
                                            class="first-title-dksld0c"> Services<span>
                                                <i class="fas fa-caret-down"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse" id="services-sldk">
                                    <div class="tab-body-dksld">
                                        <div class="col-md-12">





                                            <div class="row">




                                                <table class="table table-striped text-center-dlsldkc0">
                                                    <thead>
                                                        <tr class="bg-dark custom-dd25s3d6cd">
                                                            <th scope="col">Sl</th>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Event</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Organisation</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">More</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php $i = 1; @endphp
                                                        @foreach ($service as $item)
                                                            <tr>
                                                                <td>{{ $i++ }}</td>
                                                                <td><img src="{{ asset('img/upload/service/' . $item->service->image) }}"
                                                                        width="50px"></td>
                                                                <td class="eventname"><b>{{ $item->service->name }}</b>
                                                                </td>
                                                                <td>{{ Carbon\Carbon::parse($item->service->available_date)->format('d M Y') }}
                                                                </td>
                                                                <td><a href="{{ route('org.index', $item->service->organisation->slug) }}"
                                                                        class="link-table">{{ $item->service->organisation->org_name }}</a>
                                                                </td>


                                                                <td>
                                                                    @if ($item->status == 0)
                                                                        <span class="badgec badge-pendding">Pendding</span>
                                                                    @elseif($item->status == 1)
                                                                        <span class="badgec badge-contact">Contacted</span>
                                                                    @elseif($item->status == 2)
                                                                        <span class="badgec badge-approve">Approve</span>
                                                                    @elseif($item->status == 3)
                                                                        <span class="badgec badge-close">Closed</span>
                                                                    @endif
                                                                </td>


                                                                <td><a href="{{ route('user.service.single.service', $item->id) }}"
                                                                        class="btn btn-green">More</a></td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>


                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </section>




















        </div>
    </div>
@endsection()


@section('scripts')
    <script src='https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js'></script>
    <script src='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js'></script>
    <script src='https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js'></script>
    <script id="rendered-js">
        $('table').DataTable();
    </script>
@endsection
