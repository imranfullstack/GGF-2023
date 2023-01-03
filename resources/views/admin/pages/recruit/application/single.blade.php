@extends('admin.master')
@section('admin_content')
@section('recruit_show') show @endsection()


  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">

<br>
<h4>List Of Jobs Application</h4>
<hr>


@include('admin.asset.message')

<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">

<table class="table">
	<thead>
    <tr class="bg-green">
      <th width="40%">Label</th>
      <th scope="col"></th>
    </tr>
  </thead>
            <tbody>
              <!-- single Form -->
              <tr>
                <th scope="row">Job Title</th>
                <td>
                  {{$apply->job->title}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Name</th>
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
                <th scope="row">Age</th>
                <td>
                  {{$apply->age}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Indivisual Or Group</th>
                <td>
                  {{$apply->indivisual_or_group}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Upload Resume</th>
                <td>

@if($apply->upload_resume)                  
                  <a href="{{asset('img/upload/org/resume/'.$apply->upload_resume)}}">Click Here For View PDF</a>
@else
	<b>PDF Not Available</b>
@endif                  
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Summary Information About Yourself</th>
                <td>
                  {{$apply->about_yourself}}
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
                <th scope="row">Arrival Time</th>
                <td>
                  {{$apply->arrival_time}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Depature date</th>
                <td>
                  {{$apply->depature_date}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Depature date</th>
                <td>
                  {{$apply->depature_time}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Require pikup</th>
                <td>


<div class="form-check">
  <input class="form-check-input" type="radio" name="require_pikup" id="yes" checked="" value="1" disabled>
  <label class="form-check-label" for="yes">
    Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="require_pikup" id="no" value="0" disabled>
  <label class="form-check-label" for="no">
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
                  {{$apply->equpment_or_resources}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">requerments</th>
                <td>
                  {{$apply->requerments}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Comments</th>
                <td>
                  {{$apply->comment}}
                </td>
              </tr>
              <!-- single Form End-->
              <!-- single Form -->
              <tr>
                <th scope="row">Questions</th>
                <td>
                  {{$apply->question}}
                </td>
              </tr>
              <!-- single Form End-->
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
              <!-- single Form -->
              <tr>
                <th colspan="2">

                  <a href="{{route('admin.recruit.application',$apply->recruit_id)}}" class="btn btn-green btn-block">GO BACK</a>
                </th>
              </tr>
              <!-- single Form End-->
            </tbody>
          </table>
    <br>
    <br>
    </div>
  </div>

</div>


</div>
</div>
@endsection()