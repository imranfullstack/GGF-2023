@extends('frontend.org-master')


<!-- ------ Page Nav -->
@section('pagenav')
    Service
@endsection
<!-- ------ Page Nav End-->


@section('main_content')
    @include('frontend.asset.org-page-nav')



    <section class="main-body">
        <div class="container">



            <div class="title-dkdksldkfdf2">
                <h2>Available Service - {{ $service->count() }}</h2>
            </div>


            <div class="row">
                <div class="project-section">
                    <div class="project-items-section">

                        @foreach ($service as $item)
                            <div class="project-item itemgridstyle">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="project-image-dksldkfd">
                                            <img src="{{ asset('img/upload/service/' . $item->image) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="content-box-ddks">
                                            <h4>{{ $item->name }}</h4>
                                            <div class="event-start-end">
                                                <p><b>Service Available: </b>
                                                    {{ Carbon\Carbon::parse($item->available_date)->format('d M Y') }}</p>
                                            </div>

                                            <p>{{ Str::limit($item->short_desc, 110, $end = ' ...') }} </p>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a type="button" class="btn-green apply-btn-style-dksld"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#service_info_popup_{{ $item->id }}">
                                                        More Information
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a type="button" class="btn-green apply-btn-style-dksld"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#service_info_qoute_{{ $item->id }}"
                                                        style="float: right;">
                                                        Get A Qoute
                                                    </a>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="col-md-3">

                                        <div class="service-dksdld">



                                            <iframe
                                                src="//maps.google.com/maps?q={{ $item->lat }},{{ $item->long }}&z=15&output=embed"
                                                width="100%" height="200"></iframe>


                                        </div>
                                    </div>
                                </div>
                            </div>




                            <!-- -------- Job Model Start------------- -->
                            <div class="modal fade  " id="service_info_popup_{{ $item->id }}" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="service_info_popup_{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="service_info_popup_{{ $item->id }}">Job Title:
                                                {{ $item->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="company-job-logo">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="{{ asset('img/upload/service/' . $item->image) }}"
                                                                width="100px">
                                                        </div>
                                                        <div class="col-md-9">
                                                            <h4>{{ $org->org_name }}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <p>{{ $item->long_version }}</p>
                                            <div class="job-body-skdlsd">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td width="50%">Name</td>
                                                            <td>{{ $item->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="50%">Short Description</td>
                                                            <td>{{ $item->short_desc }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Available Date</td>
                                                            <td> {{ Carbon\Carbon::parse($item->available_date)->format('d M Y') }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Price</td>
                                                            <td>{{ $item->price }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Contact Person</td>
                                                            <td>{{ $item->contact_person }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Contact Eamil</td>
                                                            <td>{{ $item->contact_email }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Contact Phone</td>
                                                            <td>{{ $item->contact_phone }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Location</td>
                                                            <td>{{ $item->location }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>


                                            <hr>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <a type="button" class="btn btn-green" data-bs-toggle="modal"
                                                data-bs-target="#service_info_qoute_{{ $item->id }}">
                                                Get A Qoute
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Model ENd For POPUP -->


                            <form action="{{ route('org.service.apply', ['serviceslug' => $item->slug, 'slug' => $org->slug]) }}"
                                method="post">
                                @csrf

                                <!-- -------- Job Model Start------------- -->
                                <div class="modal fade  " id="service_info_qoute_{{ $item->id }}"
                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                    aria-labelledby="service_info_qoute_{{ $item->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="service_info_qoute_{{ $item->id }}">
                                                    Service: {{ $item->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="company-job-logo">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <img src="{{ asset('img/upload/service/' . $item->image) }}"
                                                                    width="100px">
                                                            </div>
                                                            <div class="col-md-9">
                                                                <h4>{{ $org->org_name }}</h4>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="job-body-skdlsd">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <th>Name</th>
                                                                <td>
                                                                    <input type="text" class="form-control"
                                                                        name="name">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Email</th>
                                                                <td>
                                                                    <input type="text" class="form-control"
                                                                        name="email">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Phone</th>
                                                                <td>
                                                                    <input type="text" class="form-control"
                                                                        name="phone">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Address</th>
                                                                <td>
                                                                    <input type="text" class="form-control"
                                                                        name="address">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Preferred start date</th>
                                                                <td>
                                                                    <input type="date" class="form-control"
                                                                        name="preferred_start_date">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Preferred start time</th>
                                                                <td>
                                                                    <input type="time" class="form-control"
                                                                        name="preferred_start_time">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Preferred completion date</th>
                                                                <td>
                                                                    <input type="date" class="form-control"
                                                                        name="preferred_completion_date">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Preferred completion time</th>
                                                                <td>
                                                                    <input type="time" class="form-control"
                                                                        name="preferred_completion_time">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Special requests</th>
                                                                <td>
                                                                    <input type="text" class="form-control"
                                                                        name="special_requests">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>comments / question</th>
                                                                <td>
                                                                    <input type="text" class="form-control"
                                                                        name="comments_question">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>


                                                <hr>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>

                                                @if (Auth::user())
                                                    <button type="submit" class="btn btn-green"> <i
                                                            class="fab fa-paypal"></i> Pay With Paypal</button>
                                                @else
                                                    <a href="{{ route('login') }}" class="btn btn-green"> <i
                                                            class="fas fa-lock-alt"></i> Login </a>
                                                @endif


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Model ENd For POPUP -->


                            </form>
                        @endforeach
                    </div>
                </div>





            </div>



        </div>

    </section>
@endsection()
