@extends('frontend.org-master')


<!-- ------ Page Nav -->
@section('pagenav')
  Jobs
@endsection
<!-- ------ Page Nav End-->


@section('main_content')
@include('frontend.asset.org-page-nav')


<div class="main-aria">
	<div class="container">

               <!-- for job possition Section Start -->
               <div class="job-position-dksld0c">
                  <div class="title-dkdksldkfdf2">
                     <h2>Available Jobs - {{$recruit->count()}}</h2>
                  </div>






                  <div class="job-position-items">
@foreach($recruit as $item)  	
                     <!-- Single Position Item Start -->
                     <div class="single-position-item">
                        <div class="row">
                           <div class="col-md-2">
                              <div class="left-job-sd">
                                <img src="https://img.favpng.com/14/3/17/job-business-recruitment-employment-career-png-favpng-cE1evh9MjfHgAtJ94pccV4gyZ.jpg">
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="content-box-ddks">
                                 <h4>{{$item->title}}</h4>
                                 <p>
                                    {{ Str::limit($item->short_desc, 120, $end = '...') }}
                                 </p>

<a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop_{{$item->id}}">
  Read More
</a>

                                 <span></span>
                              </div>
                           </div>
                           <div class="col-md-5 btn-apply">
                              <div class="textcenter-dksldkfdsa0fc">
                                <p><b>Dateline:</b> {{ Carbon\Carbon::parse($item->end_date)->format('d M Y') }}
                                </p>
                                 <p><b>Location:</b> {{$item->location}}</p>
                                <p><b>Payment:</b> 20020 BDT</p>
                                                  <!-- Button trigger modal -->
<a type="button" class="btn-green apply-btn-style-dksld" data-bs-toggle="modal" data-bs-target="#job_popup_apply_{{$item->id}}">
  Apply
</a>

                              </div>
                           </div>
                        </div>
                     </div>
                     
<hr>                
                     <!-- Single Position Item End -->
<!-- -------- Job Model Start------------- -->
<div class="modal fade  " id="staticBackdrop_{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Job Title: {{$item->title}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="company-job-logo">
            <div class="container-fluid">
          <div class="row">
              <div class="col-md-3">
                <img src="{{asset('img/upload/org/logo/'.$org->logo)}}" width="100px">
              </div>
              <div class="col-md-9">
                <h4>{{$org->org_name}}</h4>
                <hr>
                <b>Job Open:</b>  {{ Carbon\Carbon::parse($item->start_date)->format('d M Y') }} || <b>Dateline</b> {{ Carbon\Carbon::parse($item->end_date)->format('d M Y') }}
              </div>
            </div>
          </div>
        </div>
<hr>
<p>{{$item->short_desc}}</p>
        <div class="job-body-skdlsd">
          <table class="table">
            <tbody>
              <tr>
                <th scope="row">rate of pay</th>
                <td>{{$item->rate_of_pay}}</td>
              </tr>
              <tr>
                <th scope="row">Job Opened</th>
                <td> {{ Carbon\Carbon::parse($item->start_date)->format('d M Y') }}</td>
              </tr>
              <tr>
                <th scope="row">Job Dateline</th>
                <td>{{ Carbon\Carbon::parse($item->end_date)->format('d M Y') }}</td>
              </tr>
              <tr>
                <th scope="row">Contact Parson</th>
                <td>{{$item->contact_parson}}</td>
              </tr>
              <tr>
                <th scope="row">Contact Email</th>
                <td>{{$item->contact_email}}</td>
              </tr>
              <tr>
                <th scope="row">Contact Number</th>
                <td>{{$item->contact_phone}}</td>
              </tr>
              <tr>
                <th scope="row">Job Location</th>
                <td>{{$item->location}}</td>
              </tr>
              <tr>
                <th scope="row">Job Location</th>
                <td>
                  @foreach($item->recruithaves as $cat)
                      <span >{{$cat->recruitcats->name}}</span> |
                  @endforeach
                </td>
              </tr>
            </tbody>
          </table>
        </div>


        <hr>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a type="button" class="btn btn-green" data-bs-toggle="modal" data-bs-target="#job_popup_apply_{{$item->id}}">
          Apply Now
        </a>


      </div>
    </div>
  </div>
</div>








<div class="modal fade  " id="job_popup_apply_{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="job_popup_apply_{{$item->id}}" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="job_popup_apply_{{$item->id}}">Job Title: {{$item->title}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="company-job-logo">
            <div class="container-fluid">
          <div class="row">
              <div class="col-md-3">
                <img src="{{asset('img/upload/org/logo/'.$org->logo)}}" width="100px">
              </div>
              <div class="col-md-9">
                <h4>{{$org->org_name}}</h4>
                <hr>
                <b>Job Open:</b>  {{ Carbon\Carbon::parse($item->start_date)->format('d M Y') }} || <b>Dateline</b> {{ Carbon\Carbon::parse($item->end_date)->format('d M Y') }}
              </div>
            </div>
          </div>
        </div>
<hr>
<p>{{$item->short_desc}}</p>



    
        <div class="job-body-skdlsd">
<form action="{{route('org.recruit.store',['jobslug'=>$item->slug,'slug'=>$org->slug])}}" method="post" enctype="multipart/form-data">
  @csrf
          <table class="table">
            <tbody>
              <!-- single Form -->
              <tr>
                <th scope="row">Name</th>
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
                <th scope="row">Age</th>
                <td>
                  <input type="text" class="form-control" name="age">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Indivisual Or Group</th>
                <td>
                  <input type="text" class="form-control" name="indivisual_or_group">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Upload Resume</th>
                <td>
                  <input type="file" class="form-control" name="upload_resume" accept="application/pdf">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Summary Information About Yourself</th>
                <td>
                  <textarea class="form-control" rows="3" name="about_yourself"></textarea>
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
                <th scope="row">Arrival Time</th>
                <td>
                  <input type="time" class="form-control" name="arrival_time">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Depature date</th>
                <td>
                  <input type="date" class="form-control" name="depature_date">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Depature date</th>
                <td>
                  <input type="time" class="form-control" name="depature_time">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Require pikup</th>
                <td>


<div class="form-check">
  <input class="form-check-input" type="radio" name="require_pikup" id="yes" checked value="1">
  <label class="form-check-label" for="yes">
    Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="require_pikup" id="no" value="0">
  <label class="form-check-label" for="no" >
    No
  </label>
</div>


                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Equpment Or Resources you need</th>
                <td>
                  <input type="text" class="form-control" name="equpment_or_resources">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">requerments</th>
                <td>
                  <input type="text" class="form-control" name="requerments">
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Comments</th>
                <td>
                  <textarea class="form-control" rows="3" name="comment"></textarea>
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Questions</th>
                <td>
                  <input type="text" class="form-control" name="question">
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
              <button type="submit" class="btn btn-green" >Apply</button>
            @else
              <a href="{{route('login')}}" class="btn btn-green">  <i class="fas fa-lock-alt"></i> Login </a>
            @endif
      </div>

</form>                
    </div>
  </div>
</div>
@endforeach                     

<!-- -------- Job Model End------------- -->

             
	</div>
</div>
             
<div class="col-md-12">
	<div class="read-more-section right">
		<a href="{{route('org.index',$org->slug)}}" class="btn-green apply-btn-style-dksld">go Back</a>
	</div>
</div>
</div>
</div>


@endsection()