@extends('orgadmin.master') 
@section('orgadmin_org_event') active-nav @endsection 
@section('org_admin_content')
<!-- ------ Banner Aria Start ------ -->
<div class="col-md-10 right-aria-sldksd">
  <div class="content-body-dskd">
    <br>

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">DASHBOARD</li>
    <li class="breadcrumb-item">PROJECT</li>
    <li class="breadcrumb-item active" aria-current="page"><b>{{$event->event_name}}</b></li>
  </ol>
</nav>

    <hr>
    <div class="find-people">
      <div class="find-people">





<form action="{{route('orgadmin.organisation.event.update',['id'=>$org->id,'eventid'=>$event->id])}}" enctype="multipart/form-data" method="post">
  @csrf

<table class="table table-borderless">
            <tbody>

              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc"> Event Name</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="event_name" value="{{$event->event_name}}">
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


        <a href="{{route('orgadmin.organisation.event.remove.cat',['catid'=>$cat->id,'id'=>$org->id,'eventid'=>$event->id])}}" class="badge badge-green">{{$cat->name}} <i class="fa fa-trash"></i></a>
      
    @endforeach 
  @endforeach
</div>

                  </div>
                </div>
                <!-- single Form Start-->



                <!-- single Form Start-->
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">

                    <select  id="mounth" multiple class="form-select" aria-label="Default select example" name="eventcat_id[]">
                        @foreach($projectcat as $cat) 
                          <option value=" {{$cat->id}}"> {{$cat->name}}</option> 
                         @endforeach
                    </select>


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
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <textarea class="form-control" rows="3" name="short_desc">{{$event->short_desc}}</textarea>
                        </div>
                        
                        @error('short_desc') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Long Version </th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <textarea class="form-control" rows="3" name="long_version">{{$event->long_version}}</textarea>
                        @error('long_version') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->


              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Date</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="date" class="form-control" name="date"  value="{{$event->date}}">
                        </div>
                        @error('date') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Cost Status</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <select class="form-select" name="cost_status">
                            <option>Value one</option>
                            <option>Value one</option>
                            <option>Value one</option>
                            <option>Value one</option>
                          </select>
                        </div>
                        @error('cost_status') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Price</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="number" class="form-control" placeholder="Enter Price" name="price"   value="{{$event->price}}">
                        </div>
                        @error('price') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Contact Person</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="contact_parson"  value="{{$event->contact_parson}}">
                        </div>
                        @error('contact_parson') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Contact Email</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="contact_email"  value="{{$event->contact_email}}">
                        </div>
                        @error('contact_email') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Contact Phone</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="contact_phone"  value="{{$event->contact_phone}}">
                        </div>
                        @error('contact_phone') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->



              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Location</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="location"  value="{{$event->location}}">
                        </div>
                        @error('location') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->



              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">What to bring</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="what_to_bring"  value="{{$event->what_to_bring}}">
                        </div>
                        @error('what_to_bring') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->


              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">What's needed</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="whats_needed"  value="{{$event->whats_needed}}">
                        </div>
                        @error('whats_needed') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->

              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Registration Form</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="registration_form"  value="{{$event->registration_form}}">
                        </div>
                        @error('registration_form') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Keyword</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="number" class="form-control" placeholder="Enter Number" aria-label="Username" aria-describedby="basic-addon1" name="keyword"  value="{{$event->event_name}}">
                        </div>
                      </div>
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
                    <input type="file" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="image">
                  </div>
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->

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

            </tbody>
          </table>

</form>


      </div>
      <br>
    </div>
  </div>
</div> @endsection()