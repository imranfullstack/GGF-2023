@extends('frontend.org-master')

<!-- ------ Page Nav -->
@section('pagenav')
   Event
@endsection
<!-- ------ Page Nav End-->
@section('main_content')



@include('frontend.asset.org-page-nav')



<section class="main-body">
         <div class="container">



 				<div class="title-dkdksldkfdf2">
                     <h2>Available Events - {{$event->count()}}</h2>
                </div>


            <div class="row">
               <div class="project-section">
                  <div class="project-items-section">

@foreach($event as $item)    
                     <div class="project-item itemgridstyle">
                        <div class="row">
                           <div class="col-md-3">
                              <div class="project-image-dksldkfd">
                                 <img src="{{asset('img/upload/event/'.$item->image)}}">
                              </div>
                           </div>
                           <div class="col-md-6">
                              
                              <div class="content-box-ddks">
                                 <h4>{{$item->event_name}}</h4>
                                 <div class="event-start-end">
                                 	<p><b>Start Date:</b> {{$item->date}}  || <b>End Date:</b> 26-69-54</p>
                                 </div>

                                 <p>{{Str::limit($item->short_desc, 110, $end=' ...')}} </p>


                                 <div class="row">
                                 	<div class="col-md-6">

                                  <a href="{{route('org.event.single',['eventslug'=>$item->slug,'slug'=>$org->slug])}}">more</a>
                                 	</div>
                                 </div>



                              </div>
                           </div>
                           <div class="col-md-3">
                              
                              <div class="service-dksdld">
                                 
                             		 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14201246.092620756!2d132.81045183983952!3d-26.562068027192343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1643652289020!5m2!1sen!2sbd" width="100%" height="200px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                              </div>
                           </div>
                        </div>
                     </div>








@endforeach                     
                  </div>
               </div>

    



            </div>



         </div>
         
      </section>



@endsection()