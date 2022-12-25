@extends('frontend.org-master')

<!-- ------ Page Nav -->
@section('pagenav')
   {{$post->title}}
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
                           <img src="{{asset('img/upload/post/'.$post->image)}}">
                        </div>
                     </div>
                  </div>
                  <!-- Slider Aria End -->
                  <!-- Slider btn text Start -->
                  <div class="blog-desc">
                     <h2>{{$post->title}} </h2>
                     <p>{{$post->short_desc}}</p>
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
            		<h3>Recent Post</h3>
            		<hr>
            		<!-- single Post Start -->
            		<div class="single-recent-post">
            			<div class="card mb-3" style="max-width: 540px;">
						  <div class="row g-0">
						    <div class="col-md-4">
						      <img src="https://cdn.dribbble.com/users/808342/screenshots/14801725/media/d9a8ac34fb8592181876a8c290e5726c.jpg" class="img-fluid rounded-start" alt="...">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Card title</h5>
						        <p class="card-text">This is a wider card with supporting <a href="#">Read more</a></p>
						      </div>
						    </div>
						  </div>
						</div>
            		</div>
            		<!-- single Post End -->
            		<!-- single Post Start -->
            		<div class="single-recent-post">
            			<div class="card mb-3" style="max-width: 540px;">
						  <div class="row g-0">
						    <div class="col-md-4">
						      <img src="https://i.ytimg.com/vi/oGA5npbiMhs/maxresdefault.jpg" class="img-fluid rounded-start" alt="...">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Card title</h5>
						        <p class="card-text">This is a wider card with supporting <a href="#">Read more</a></p>
						      </div>
						    </div>
						  </div>
						</div>
            		</div>
            		<!-- single Post End -->
            		<!-- single Post Start -->
            		<div class="single-recent-post">
            			<div class="card mb-3" style="max-width: 540px;">
						  <div class="row g-0">
						    <div class="col-md-4">
						      <img src="https://cdn.dribbble.com/users/1963775/screenshots/15649635/media/4bbf9109b260c61fff5029b60c2911b5.png" class="img-fluid rounded-start" alt="...">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Card title</h5>
						        <p class="card-text">This is a wider card with supporting <a href="#">Read more</a></p>
						      </div>
						    </div>
						  </div>
						</div>
            		</div>
            		<!-- single Post End -->
            	</div>
            </div>
         </div>
      </div>
   </div>
</section>


@endsection