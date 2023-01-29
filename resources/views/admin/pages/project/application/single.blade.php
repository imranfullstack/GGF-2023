@extends('admin.master')
@section('admin_content')
@section('projects_show') show @endsection

  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">

<br>
<h4>SINGLE PROJECT APPLICATION</h4>
<hr>



@include('admin.asset.message')
<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">



      <table class="table table-hover">
  <thead>
    <tr class="bg-green">
      <th width="30%">Label</th>
      <th scope="col"></th>
    </tr>
  </thead>


<tbody>
              <!-- single Form -->
              <tr>
                <th scope="row" width="50%">Project</th>
                <td>
                  {{$apply->project->name}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
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
                <th scope="row">Age / Details</th>
                <td>
                  {{$apply->age}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Can bring these resources</th>
                <td>
                  {{$apply->bring_resources}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">What you hope to gain from being involved</th>
                <td>
                  {{$apply->being_involved}}
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
              <!-- single Form -->           
              <!-- single Form -->
              <tr>
                <th scope="row">Status</th>
                <td>
                  <select class="form-select" name="status" disabled>
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

                  <a href="{{route('admin.project.application',$apply->project_id)}}" class="btn btn-green btn-block">GO BACK</a>
                </th>
              </tr>
              <!-- single Form End-->


            </tbody>


</table>

    </div>
  </div>

</div>


</div>
</div>
@endsection()
