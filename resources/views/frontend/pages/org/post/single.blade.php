@extends('frontend.org-master')

<!-- ------ Page Nav -->
@section('pagenav')
    {{ $post->title }}
@endsection
<!-- ------ Page Nav End-->
<!-- ------ Page Nav -->
@section('style')
    <style>
        img.img-fluid.rounded-start {
            width: 90%;
            height: 100%;
        }

        span.date-dksld {
            padding: 11px 0;
            display: inline-block;
            font-weight: 600;
            font-size: 14px;
            color: #84b04a;
            text-transform: uppercase;
        }

        .card.mb-3.border-dkslfdsaf {
            border: none;
            box-shadow: -3px 6px 5px 0px #84b04a40;
            padding-bottom: 0;
        }

        h5.card-title {
            color: #000;
            text-decoration: none !important;
        }

        .card.mb-3.border-dkslfdsaf a {
            text-decoration: none;
        }

        p.card-text {
            color: #686767;
        }
    </style>
@endsection
<!-- ------ Page Nav End-->


@section('main_content')
    @include('frontend.asset.org-page-nav')

    <section class="main-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="left-aria">
                        <div class="top-slider">
                            <!-- Slider Aria Start -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="right-banner-image-dksld">
                                        @if ($post->image)
                                            <img src="{{ asset('img/upload/post/' . $post->image) }}">
                                        @else
                                            <img src="{{ asset('img/default.jpg') }}">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- Slider Aria End -->
                            <!-- Slider btn text Start -->
                            <div class="blog-desc">
                                <h2>{{ $post->title }} </h2>

                                <div>
                                    <div class="col-md-12">
                                        {{ Carbon\Carbon::parse($post->created_at)->format('d M Y') }} || Category:
                                        @php
                                            $pst_cat = App\Models\Posthavecategory::where('post_id', $post->id)->get();
                                        @endphp
                                        @foreach ($pst_cat as $item)
                                            @php
                                                $namecat = App\Models\Postcat::where('id', $item->postcat_id)->first();
                                            @endphp
                                            <span class="badge badge-green">{{ $namecat->name }} </span>
                                        @endforeach
                                    </div>
                                </div>
                                <p>{{ $post->short_desc }}</p>
                            </div>

                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-aria">
                        <div class="recent-post">
                            {{-- <h3>OTHER POST</h3> --}}
                            {{-- <hr> --}}
                            @php
                                $post = App\Models\Post::where('organisation_id', $org->id)->get();
                            @endphp

                            @foreach ($post as $item)
                                <!-- single Post Start -->
                                <div class="single-recent-post">
                                    <div class="card mb-3 border-dkslfdsaf" style="max-width: 540px;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <a
                                                    href="{{ route('org.post.single', ['postslug' => $item->slug, 'slug' => $org->slug]) }}">
                                                    @if ($item->image)
                                                        <img src="{{ asset('img/upload/post/' . $item->image) }}"
                                                            class="img-fluid rounded-start">
                                                    @else
                                                        <img src="{{ asset('img/default.jpg') }}">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">

                                                    <a
                                                        href="{{ route('org.post.single', ['postslug' => $item->slug, 'slug' => $org->slug]) }}">
                                                        <h5 class="card-title">
                                                            {{ Str::limit($item->title, 20, $end = '...') }}
                                                        </h5>
                                                        <span class="date-dksld">
                                                            {{ Carbon\Carbon::parse($item->created_at)->format('d M Y') }}
                                                        </span>
                                                        <p class="card-text">
                                                            {{ Str::limit($item->short_desc, 25, $end = '...') }}</p>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single Post End -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
