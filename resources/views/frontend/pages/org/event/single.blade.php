@extends('frontend.org-master')
@section('main_content')

<!-- ------ Page Nav -->
@section('pagenav')
	{{$event->event_name}}
@endsection
<!-- ------ Page Nav End-->

@section('style')

<style type="text/css">
  .top-slider img {
    width: 100%;
    height: 350px;
}
</style>
@endsection
@include('frontend.asset.org-page-nav')


<br>
@include('frontend.asset.message')
<br>
<section class="main-body">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="left-aria">
                  	<div class="div-aria-dksld">
                      <div class="row">
                        <div class="col-md-6">   
                          <h5>Exprience/ Event Name: </h5>
                          <b>
                          <p>{{$event->event_name}}</p></b>
                        </div>
                        <div class="col-md-6">   
                      <h5>DATE: </h5>
                      <p>
                        <b>
                    {{ Carbon\Carbon::parse($event->date)->format('d M Y') }}</b>
                      </p>
                        </div>
                      </div>
                  	</div>



                     <div class="top-slider">
                        <!-- Slider Aria Start -->

                            <div class="imgbanner115d" style="
                          background: url({{asset('img/upload/event/'.$event->image)}}) no-repeat center center/cover;
                          height: 350px;
                          width: 100%;
                        "></div>


                        <!-- Slider Aria End -->
                        <!-- Slider btn text Start -->
                        <div class="banner-btn-dkdls">
                           <p>
                           	{{$event->long_version}}
                      	 </p>
                        </div>
                     </div>

<br>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="right-aria">
                  	<div class="location-dksldc">

                     	<h5>Location: </h5>
                      <p>
                        <b>{{$event->location}}</b>
                      </p>
                  	</div>
                     <div class="map-right-ariaddfd">
                 


                         <iframe src="//maps.google.com/maps?q={{$event->lat}},{{$event->long}}&z=15&output=embed" width="100%" height="350"></iframe>

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
						      <th style="width: 25%" scope="row" class="left-tab-dksld"> Deteils</th>
						      <td>{{$event->short_desc}}</td>
						    </tr>
						    <tr>
						      <th scope="row" class="left-tab-dksld">Dates</th>
						      <td>
                    {{ Carbon\Carbon::parse($event->date)->format('d M Y') }}
                  </td>
						    </tr>
						    <tr>
						      <th scope="row" class="left-tab-dksld">Price</th>
						      <td>{{$event->price}} AUD</td>
						    </tr>
						    <tr>
						      <th scope="row" class="left-tab-dksld">Contact Person</th>
						      <td>{{$event->contact_parson}}</td>
						    </tr>
						    <tr>
						      <th scope="row" class="left-tab-dksld">Contact Email</th>
						      <td>{{$event->contact_email}}</td>
						    </tr>
						    <tr>
						      <th scope="row" class="left-tab-dksld">Contact Phone</th>
						      <td>{{$event->contact_phone}}</td>
						    </tr>
						    <tr>
						      <th scope="row" class="left-tab-dksld">What to Bring</th>
						      <td>{{$event->what_to_bring}}</td>
						    </tr>
						    <tr>
						      <th scope="row" class="left-tab-dksld">We need  ( can you help with this? )</th>
						      <td>{{$event->whats_needed}}</td>
						    </tr>
						  </tbody>
						</table>
                     </div>

                     <a style="cursor: pointer;" class="btn-dksld03d" data-bs-toggle="modal" data-bs-target="#exampleModal"> I’M INTERESTED</a>
      			</div>
      		</div>
      	</div>
      </div>



<form action="{{route('org.event.apply',['eventslug'=>$event->slug,'slug'=>$org->slug])}}" method="post">
	@csrf
	

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Event - {{$event->event_name}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      		<div class="event-table">

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
                <th scope="row">Phone</th>
                <td>
                  <input type="text" class="form-control" name="phone">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Address</th>
                <td>
                  <input type="text" class="form-control" name="address">
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
                <th scope="row">Age / details</th>
                <td>
                  <input type="number" class="form-control" name="age">
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
                <th scope="row">Arrival date</th>
                <td>
                  <input type="date" class="form-control" name="arrival_date">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Arrival time</th>
                <td>
                  <input type="time" class="form-control" name="arrival_time">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Departure Date</th>
                <td>
                  <input type="date" class="form-control" name="departure_date">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Departure time</th>
                <td>
                  <input type="time" class="form-control" name="departure_time">
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
                <th scope="row">Require pickup ( yes or no button) </th>
                <td>
                  <input type="text" class="form-control" name="require_pickup">
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
                <th scope="row">Questions</th>
                <td>
                  <textarea class="form-control" rows="3" name="question"></textarea>
                </td>
              </tr>
              <!-- single Form End-->
            </tbody>
          </table>     

      		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>




        @if(Auth::user())
            @if($event->cost_status == 0)
              <button type="submit" class="btn btn-green">  Book This Event</button>
            @else
              <button type="submit" class="btn btn-green">  <i class="fab fa-paypal"></i> Pay With Paypal</button>
            @endif
        @else
          <a href="{{route('login')}}" class="btn btn-green">  <i class="fas fa-lock-alt"></i> Login </a>
        @endif



        
      </div>
    </div>
  </div>
</div>


</form>

@endsection()