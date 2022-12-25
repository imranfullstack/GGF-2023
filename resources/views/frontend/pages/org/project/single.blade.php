@extends('frontend.org-master')


<!-- ------ Page Nav -->

<!-- ------ Page Nav -->
@section('pagenav')
   {{$project->name}}
@endsection
<!-- ------ Page Nav End-->
<!-- ------ Page Nav End-->


@section('main_content')



@include('frontend.asset.org-page-nav')


<br>

@include('frontend.asset.message')


<section class="main-body">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="left-aria">
                  	<div class="div-aria-dksld">

                            <div class="row">
                        <div class="col-md-6">   
                          <h5>Exprience/ Event Name: </h5>
                          <p><b>{{$project->name}}</b></p>


                        </div>
                        <div class="col-md-6">   
                      <h5>DATE:</h5>
                      <p><span>  <b>{{ Carbon\Carbon::parse($project->start_date)->format('d M Y') }} ||  {{ Carbon\Carbon::parse($project->end_date)->format('d M Y') }} </b></span></p>
                        </div>
                      </div>


                  	</div>



                     <div class="top-slider">
                        <div class="imgbanner115d" style="
                          background: url({{asset('img/upload/project/'.$project->image)}}) no-repeat center center/cover;
                          height: 350px;
                          width: 100%;
                        "></div>
                        <!-- Slider Aria End -->
                        <!-- Slider btn text Start -->
                        <div class="banner-btn-dkdls">
                           <p>
                                {{$project->long_version}}
                      	 </p>
                        </div>
                     </div>
                    <br>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="right-aria">
                  	<div class="location-dksldc">


                          <h5>Address/ Location </h5>
                          <p><b>{{$project->location}}</b></p>
                  	</div>
                     <div class="map-right-ariaddfd">                  
                         <iframe src="//maps.google.com/maps?q={{$project->lat}},{{$project->long}}&z=15&output=embed" width="100%" height="350"></iframe>

                     </div>
                  </div>
               </div>
  


            </div>



         </div>
         
      </section>
      
<div class="event-table">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-12">

                     <div class="event-table-dksld0c">
						<table class="table table-bordered">
						  <tbody>
						    <tr>
						      <th scope="row" class="left-tab-dksld">Short Description</th>
						      <td>{{$project->short_desc}}</td>
						    </tr>
                <tr>
                  <th scope="row" class="left-tab-dksld">Long Version/ Update </th>
                  <td>{{$project->long_version}}</td>
                </tr>
						    <tr>
						      <th scope="row" class="left-tab-dksld">Start And Finish Date</th>
						      <td>

                     	<span>  {{ Carbon\Carbon::parse($project->start_date)->format('d M Y') }} ||  {{ Carbon\Carbon::parse($project->end_date)->format('d M Y') }} </span>
						      </td>
						    </tr>
						    <tr>
						      <th scope="row" class="left-tab-dksld">Contact Persion</th>
						      <td>{{$project->contact_person}}</td>
						    </tr>
						    <tr>
						      <th scope="row" class="left-tab-dksld">Contact Email</th>
						      <td>{{$project->contact_email}}</td>
						    </tr>
						    <tr>
						      <th scope="row" class="left-tab-dksld">Contact Phone</th>
						      <td>{{$project->contact_phone}}</td>
						    </tr>
						    <tr>
						      <th scope="row" class="left-tab-dksld">Location</th>
						      <td>{{$project->location}}</td>
						    </tr>
                </tr>
                <tr>
                  <th scope="row" class="left-tab-dksld">What is Needed</th>
                  <td>{{$project->Whats_needed}}</td>
                </tr>
						  </tbody>
						</table>
                     </div>

                     <div class="btm-btn-project">
                     	<div class="row">
                     		<div class="col-md-6">
                     				<a href="{{route('org.project.index',$org->slug)}}" class="btn-dfsadf"> Project Portal </a>
                     		</div>
                     		<div class="col-md-6">
                     			<div class="right-side-project">
                     				<a href="#" class="btn-dksld03d" type="button" data-bs-toggle="modal" data-bs-target="#projectform">I AM INTERESTED</a>
                     			</div>
                     		</div>
                     	</div>
                     </div>

      			</div>
      		</div>
      	</div>
      </div>



<form action="{{route('org.project.apply',['projectslug'=>$project->slug,'slug'=>$org->slug])}}" method="post">
   @csrf

<!-- -------- Job Model Start------------- -->
<div class="modal fade  " id="projectform" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Project Title: {{$project->name}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<hr>

        <div class="job-body-skdlsd">




          <table class="table">
            <tbody>
              <!-- single Form -->
              <tr>
                <th scope="row" width="50%">Name</th>
                <td>
                  <input type="text" class="form-control" name="name">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Email</th>
                <td>
                  <input type="email" class="form-control" name="email">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Address</th>
                <td>
                  <input type="address" class="form-control" name="address">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Number of people</th>
                <td>
                  <input type="number" class="form-control" name="number_of_people">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Number of adults</th>
                <td>
                  <input type="number" class="form-control" name="number_of_adults">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Children 2 - 12</th>
                <td>
                  <input type="text" class="form-control" name="children2_12">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Infants 0 - 2</th>
                <td>
                  <input type="text" class="form-control" name="children0_2">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Can bring these resources</th>
                <td>
                  <input type="text" class="form-control" name="bring_resources">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Area of focus</th>
                <td>
                  <input type="text" class="form-control" name="Area_of_focus">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">What you hope to gain from being involved</th>
                <td>
                  <input type="text" class="form-control" name="being_involved">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">special requests</th>
                <td>
                  <input type="text" class="form-control" name="special_requests">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Requirements</th>
                <td>
                  <textarea class="form-control" rows="3" name="requirements"></textarea>
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Comments</th>
                <td>
                  <textarea class="form-control" rows="3" name="comments"></textarea>
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Question</th>
                <td>
                  <textarea class="form-control" rows="3" name="question"></textarea>
                </td>
              </tr>
              <!-- single Form End-->
            </tbody>
          </table>     


        </div>


        <hr>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>



 



        @if(Auth::user())
               <button type="submit" class="btn btn-green">
                Apply Now
              </button>
        @else
          <a href="{{route('login')}}" class="btn btn-green">  <i class="fas fa-lock-alt"></i> Login </a>
        @endif



      </div>

</form>
    </div>
  </div>
</div>      

@endsection