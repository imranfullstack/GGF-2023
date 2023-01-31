@extends('frontend.org-master')


<!-- ------ Page Nav -->
@section('pagenav')
  Project
@endsection
<!-- ------ Page Nav End-->


@section('main_content')



@include('frontend.asset.org-page-nav')


<section class="main-body">
         <div class="container">


            <div class="title-dkdksldkfdf2">
                     <h2>Available Projects - {{$project->count()}}</h2>
                </div>

                
            <div class="row">
               <div class="project-section">
                  <div class="project-items-section">

@foreach($project as $item)    
                     <div class="project-item itemgridstyle">
                        <div class="row">
                           <div class="col-md-3">
                              <div class="project-image-dksldkfd">
                                 <img src="{{asset('img/upload/project/'.$item->image)}}">
                              </div>
                           </div>
                           <div class="col-md-8">
                              
                              <div class="content-box-ddks">
                                 <h4>{{$item->name}}</h4>
                                 <div class="event-start-end">
                                 	<p><b>Start Date:</b> {{ Carbon\Carbon::parse($item->start_date)->format('d M Y') }} | <b>End Date:</b> {{ Carbon\Carbon::parse($item->end_date)->format('d M Y') }}</p>
                                 	
                                 </div>

                                 <p>{{Str::limit($item->short_desc, 110, $end=' ...')}} </p>
                                 <a href="{{route('org.project.single',['projectslug'=>$item->slug,'slug'=>$org->slug])}}">More</a>
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