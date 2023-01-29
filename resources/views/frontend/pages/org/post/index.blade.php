@extends('frontend.org-master')
@section('main_content')

    <!-- ------ Page Nav -->
@section('pagenav')
    Post
@endsection
<!-- ------ Page Nav End-->
<!-- ------ Page Nav -->
@section('style')
    <style>
        .project-item-post {
            display: block;
            box-shadow: 0px 5px 3px 0px #34343426;
            padding: 34px 21px;
            margin: 43px 0;
        }

    </style>
@endsection
<!-- ------ Page Nav End-->

@include('frontend.asset.org-page-nav')

<section class="main-body">
    <div class="container">
        <div class="row">
            <div class="project-section">
                <div class="project-items-section">
                    <style>
                        .banner-style-dld-post {
                            height: 213px;
                            width: 100%;
                        }
                    </style>
                    @foreach ($post as $item)
                        <!-- -------- Single Item Start-------- -->
                        <div class="project-item-post">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="project-image-dksldkfd">
                                        <div class="banner-style-dld-post"
                                            style="
                                    background: url({{ asset('img/upload/post/' . $item->image) }}) no-repeat center center /cover;
                                 ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">

                                    <div class="content-box-ddks">
                                        <h4>{{ $item->title }} </h4>
                                        <h6> {{ $item->created_at->format('d M Y') }}</h6>
                                        <p>

                                            {{ Str::limit($item->short_desc, 250, $end = ' ...') }}

                                            <br>

                                            <!-- Post And Organisation Slug Here -->
                                            <a
                                                href="{{ route('org.post.single', ['postslug' => $item->slug, 'slug' => $org->slug]) }}">Read
                                                More</a>
                                        </p>
                                        <div class="social-news-feed">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-facebook-messenger"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fas fa-link"></i>
                                                    </a>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- -------- Single Item end-------- -->
                    @endforeach
                </div>
            </div>





        </div>



    </div>

</section>



@endsection()
