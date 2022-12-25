@extends('orgadmin.master')



@section('orgadmin_org_event') active-nav @endsection


@section('org_admin_content')
<!-- ------ Banner Aria Start ------ -->


          <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">




<br>

<h2>
    @if($org->logo)
      <img src="{{asset('img/upload/org/logo/'.$org->logo)}}" width="60px" height="60px" style="margin:0px 20px">
         <span>  PROJECT APPLICATION</span> 
    @else
        <span>  {{$org->org_name}} </span> 
    @endif                    
</h2>
<hr>



<br>

@include('orgadmin.asset.message')


<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">


      <table class="table">
            <tbody>
              <!-- single Form -->
              <!-- single Form -->
              <tr>
                <th scope="row" width="50%">Event</th>
                <td>
                  {{$apply->event->event_name}}
                </td>
              </tr>
              <!-- single Form End-->
              <tr>
                <th scope="row" width="50%">Name</th>
                <td>
                  {{$apply->name}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Email</th>
                <td>
                  {{$apply->email}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Phone</th>
                <td>
                  {{$apply->phone}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Address</th>
                <td>
                  {{$apply->address}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Number of people</th>
                <td>
                  {{$apply->number_of_people}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Age</th>
                <td>
                  {{$apply->age}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Number of People</th>
                <td>
                  {{$apply->number_of_adults}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Number of adults</th>
                <td>
                  {{$apply->number_of_adults}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Children 2 - 12</th>
                <td>
                  {{$apply->children2_12}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Infants 0 - 2</th>
                <td>
                  {{$apply->children0_2}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Arrival date</th>
                <td>
                  {{$apply->arrival_date}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Arrival time</th>
                <td>
                  {{ Carbon\Carbon::parse($apply->arrival_time)->format('h:i A') }}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Departure Date</th>
                <td>
                  {{$apply->departure_date}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Departure time</th>
                <td>


                  {{ Carbon\Carbon::parse($apply->departure_time)->format('h:i A') }}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">special requests</th>
                <td>
                  {{$apply->special_requests}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Require pickup ( yes or no button) </th>
                <td>
                  {{$apply->require_pickup}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Requirements</th>
                <td>
                  {{$apply->requirements}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Comments</th>
                <td>
                  {{$apply->comments}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Question</th>
                <td>
                  {{$apply->question}}
                </td>
              </tr>
              <!-- single Form End-->


<form action="{{route('orgadmin.organisation.event.status.application',['applicationid'=>$apply->id,'id'=>$org->id])}}" method="post">
  @csrf              
              <!-- single Form -->
              <tr>
                <th scope="row">Status</th>
                <td>
                  <select class="form-select" name="status">
                    <option value="0" {{ ($apply->status == 0) ? 'selected' : ''}}>Pendding</option>
                    <option value="2" {{ ($apply->status == 2) ? 'selected' : ''}}>Contacted</option>
                    <option value="1" {{ ($apply->status == 1) ? 'selected' : ''}}>Approve</option>
                    <option value="3" {{ ($apply->status == 3) ? 'selected' : ''}}>Closed</option>
                  </select>
                </td>
              </tr>
              <!-- single Form -->
              <tr>
                <th colspan="2">

                  <button type="submit" class="btn btn-green btn-block">Save</button>
                </th>
              </tr>
              <!-- single Form End-->

</form>   

            </tbody>
          </table>


<br>
<br>
    </div>
  </div>

</div>

              </div>
          </div>

<!-- --------------- Explore GGF End----------------- -->
@endsection()

