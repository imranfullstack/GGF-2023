@extends('frontend.master')

@section('style')
    <style type="text/css">
        .row.g-0 {
            box-shadow: 1px 0px 7px 0px #0e0e0e75;
        }

        .card {
            border: none;
        }
    </style>
@endsection

@section('main_content')
    <!-- ------ Banner Aria Start ------ -->

    @php
        $banner = App\Models\Homebanner::first();
    @endphp
@if($banner)
    <section class="banner-aira" style="background: {{ $banner->banner_bg }}">

        <div class="container">

            <div class="baner-main-section">

                <div class="row baner-main-aria">

                    <div class="col-md-6">

                        <div class="left-content-aria-banner-1536dcsd">

                            <h1>{{ $banner->title }}</h1>

                            <p>{{ $banner->desc }}</p>

                            <!-- <a href="#" class="banner-btn-069905dc">GET STARTED</a> -->

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="banner-right">

                            <div class="map-blog">

                                <img src="{{ asset('/img/upload/home/banner/' . $banner->banner_image) }}">

                            </div>

                        </div>

                    </div>



                    <div class="col-md-12">



                        <div class="button-right-sldkd">

                            <a href="{{ route('filter.index') }}" class="banner-btn-069905dc"
                                style="background: {{ $banner->banner_btn_bg }}">{{ $banner->button_text }}</a>

                        </div>



                    </div>

                </div>

            </div>

        </div>

    </section>
@else


@endif    

    <!-- ------ Banner Aria End------ -->



    <!-- --------------- Explore GGF ----------------- -->



    <section class="explore-ggf-section">

        <div class="container">



            <div class="section-title">

                <div class="row">

                    <div class="col-md-12">

                        <div class="left-title-aria">

                            <h1> <span><i class="fas fa-circle"></i></span> Organisations / Projects</h1>
                            <br>

                        </div>

                    </div>

                </div>

            </div>





            <div class="expiore-ggf-section-d5d6c">

                <div class="row">





                    @foreach ($organisation as $org)
                        <!-- ----- Single Post ------- -->

                        <div class="col-md-4 orgmainhomes">





                            <div class="card mb-3" style="max-width: 540px;">

                                <div class="row g-0">

                                    <div class="col-md-4">

                                        @if ($org->banner_1)
                                            <div class="imageorghome"
                                                style="
      background: url({{ asset('img/upload/org/images/' . $org->banner_1) }}) no-repeat center center/cover;
      height: 100%;
      width: 100%;">
                                            </div>
                                        @else
                                            <div class="imageorghome"
                                                style="

      background: url({{ asset('img/default.jpg') }}) no-repeat center center/cover;



    height: 185px;

    width: 100%;

      ">
                                            </div>
                                        @endif

                                    </div>

                                    <div class="col-md-8 border-sldf">

                                        <div class="card-body">

                                            <h5 class="card-title"><a href="{{ route('org.index', $org->slug) }}">
                                                    {{ Str::limit($org->org_name, 12, $end = '...') }}
                                                </a></h5>

                                            <p class="card-text">

                                                {{ Str::limit($org->summary, 20, $end = '...') }}

                                            </p>

                                            <a href="{{ route('org.index', $org->slug) }}" class="homeorg">Read More</a>

                                        </div>

                                    </div>

                                </div>

                            </div>





                        </div>

                        <!-- ----- Single Post ------- -->
                    @endforeach





                </div>
            </div>
        </div>
    </section>



    <!-- --------------- Explore GGF ----------------- -->

    <section class="explore-ggf-section">

        <div class="container">



            <div class="section-title">

                <div class="row">

                    <div class="col-md-12">

                        <div class="left-title-aria">

                            <h1> <span> <i class="fas fa-circle"></i> </span>Events</h1>

                            <br>

                        </div>

                    </div>

                </div>

            </div>

            <div class="expiore-ggf-section-d5d6c">

                <div class="ddd">

                    <table class="table table-striped text-center-dlsldkc0">

                        <thead>

                            <tr class="bg-dark custom-dd25s3d6cd">


                                <th scope="col">Image</th>

                                <th scope="col">Event</th>

                                <th scope="col">Date</th>

                                <th scope="col">Organisation</th>

                                <th scope="col"></th>

                            </tr>

                        </thead>

                        <tbody>

                            @php
                                
                                $i = 1;
                                
                            @endphp

                            @foreach ($event as $item)
                                <tr>


                                    <td>

                                        <img src="{{ asset('img/upload/event/' . $item->image) }}" width="50px">

                                    </td>

                                    <td class="eventname"><b>{{ $item->event_name }}</b></td>

                                    <td>

                                        {{ Carbon\Carbon::parse($item->start_date)->format('d M Y') }} <b>-</b>
                                        {{ Carbon\Carbon::parse($item->end_date)->format('d M Y') }} </td>

                                    <td>
                                        @if ($item->organisation)
                                            <a href="{{ route('org.index', $item->organisation->slug) }}"
                                                class="link-table">{{ $item->organisation->org_name }}
                                            </a>
                                        @else
                                            <span class="text-danger">ORGANISATION REMOVED</span>
                                        @endif
                                    </td>





                                    <td>

                                        @if ($item->organisation)
                                            <a href="{{ route('org.event.single', ['eventslug' => $item->slug, 'slug' => $item->organisation->slug]) }}"
                                                class="btn btn-green">More</a>
                                        @else
                                            <span class="text-danger">ORGANISATION REMOVED</span>
                                        @endif
                                    </td>


                                </tr>
                            @endforeach







                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </section>

    <!-- --------------- Explore GGF End----------------- -->

    <!-- --------------- Explore GGF ----------------- -->

    <!--   <section class="explore-ggf-section">

                        <div class="container">



                          <div class="section-title">

                            <div class="row">

                              <div class="col-md-12">

                                <div class="left-title-aria">

                                    <h1> <span><i class="fas fa-circle"></i></span>Resources</h1>

                                </div>

                              </div>

                            </div>

                          </div>

                          <div class="expiore-ggf-section-d5d6c">

                            <div class="ddd">

                              <table class="table table-striped text-center-dlsldkc0">

                                <thead>

                                  <tr class="bg-dark custom-dd25s3d6cd">

                                    <th scope="col">Name</th>

                                    <th scope="col">Deteils</th>

                                    <th scope="col"></th>

                                  </tr>

                                </thead>

                                <tbody>

                                  <tr>

                                    <td>01/12/2032</td>

                                    <td>Loram Ipsum dolor sit amet</td>

                                    <td>Business Name</td>

                                  </tr>

                                  <tr>

                                    <td>01/12/2032</td>

                                    <td>Loram Ipsum dolor sit amet</td>

                                    <td>Business Name</td>

                                  </tr>

                                  <tr>

                                    <td>01/12/2032</td>

                                    <td>Loram Ipsum dolor sit amet</td>

                                    <td>Business Name</td>

                                  </tr>

                                  <tr>

                                    <td>01/12/2032</td>

                                    <td>Loram Ipsum dolor sit amet</td>

                                    <td>Business Name</td>

                                  </tr>

                                  <tr>

                                    <td>01/12/2032</td>

                                    <td>Loram Ipsum dolor sit amet</td>

                                    <td>Business Name</td>

                                  </tr>

                                </tbody>

                              </table>

                            </div>

                          </div>

                        </div>

                      </section> -->

    <!-- --------------- Explore GGF End----------------- -->
@endsection()
