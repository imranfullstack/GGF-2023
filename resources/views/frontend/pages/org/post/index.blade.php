@extends('frontend.org-master')
@section('main_content')

<!-- ------ Page Nav -->
@section('pagenav')
   Post
@endsection
<!-- ------ Page Nav End-->


@include('frontend.asset.org-page-nav')


<section class="main-body">
         <div class="container">
            <div class="row">
               <div class="project-section">
                  <div class="project-items-section">

@foreach($post as $item)    
<hr>              	
                     <!-- -------- Single Item Start-------- -->
                     <div class="project-item">
                        <div class="row">
                           <div class="col-md-3">
                              <div class="project-image-dksldkfd">
                                 <img src="{{asset('img/upload/post/'.$item->image)}}">
                              </div>
                           </div>
                           <div class="col-md-9">
                              
                              <div class="content-box-ddks">
                                 <h4>{{$item->title}} {{$item->slug}}</h4>
                                 <h6>Date: {{$item->created_at->format('d M Y')}}</h6>
                                 <p>

                                 	{{Str::limit($item->short_desc, 250, $end=' ...')}}

<br>

<!-- Post And Organisation Slug Here -->
                                 	<a href="{{route('org.post.single',['postslug'=>$item->slug,'slug'=>$org->slug])}}">Read More</a>
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