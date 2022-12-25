@extends('admin.master')
@section('admin_content')
@section('event_show') show @endsection

  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">

<br>
<h4>VIEW AND UPDATE EVENT</h4>
<hr>

@php 
  $org =  App\Models\Organisation::where('id',$event->organisation_id)->first();
@endphp

<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">
 

<table class="table table-borderless">
            <tbody>

              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc"> Event Name</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          {{$event->event_name}}
                        </div>
                        @error('event_name') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                    <!-- single Form Start-->
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Event Categorys</th>
          <td>





               @php $projectcat = App\Models\Eventcat::orderby('id','desc')->get(); @endphp




                <!-- single Form Start-->
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">


<div class="category-kdlsdkc">
  @foreach($event->eventhavecategory as $item)

    @foreach($item->eventcat as $cat)


        <a href="{{route('orgadmin.organisation.event.remove.cat',['catid'=>$cat->id,'id'=>$org->id,'eventid'=>$event->id])}}" class="badge badge-green">{{$cat->name}} </a>
      
    @endforeach 
  @endforeach
</div>

                  </div>
                </div>
                <!-- single Form Start-->





              </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Short Description</th>
                  <td>
                    {{$event->short_desc}}
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Long Version </th>
                  <td>
                      {{$event->long_version}}
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->


              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Date</th>
                  <td>
                     {{$event->date}}
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Price</th>
                  <td>
                    {{$event->price}} AUD
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Contact Person</th>
                  <td>
                    {{$event->contact_parson}}
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Contact Email</th>
                  <td>
                     {{$event->contact_email}}
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Contact Phone</th>
                  <td>
                    {{$event->contact_phone}}
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->



              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Location</th>
                  <td>
                     {{$event->location}}
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->



              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">What to bring</th>
                  <td>
                    {{$event->what_to_bring}}
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->


              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">What's needed</th>
                  <td>
                    {{$event->whats_needed}}
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->

              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Registration Form</th>
                  <td>
                      {{$event->registration_form}}
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Keyword</th>
                  <td>
                     {{$event->event_name}}
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->



            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Upload Images</th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <img src="{{asset('img/upload/event/'.$event->image)}}" width="80px" style="margin-right: 30px;">
                  </div>
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
<form method="post" action="{{route('admin.event.update',$event->id)}}">
  @csrf
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Status</th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <select class="form-select" name="status">
                      <option value="1" {{ ($event->status == 1) ? 'selected' : ''}}>Active</option>
                      <option value="2" {{ ($event->status == 2) ? 'selected' : ''}}>Paused</option>
                      <option value="3" {{ ($event->status == 3) ? 'selected' : ''}}>Closed</option>
                      <option value="4" {{ ($event->status == 4) ? 'selected' : ''}}>Suspended</option>
                    </select>
                  </div>
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->

              <!-- ---- single Form Start --- -->

              <!-- ---- single Form Start --- -->
                <tr>
                  <td scope="row" width="20%" class="label-dksldc">
                      <button class="btn btn-success btn-green" type="submit">Save</button>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
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
@endsection()