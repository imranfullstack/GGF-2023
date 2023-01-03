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
         <span>  {{$org->org_name}} </span> 
    @else
        <span>  {{$org->org_name}} </span> 
    @endif                    
</h2>
<hr>


        <div class="find-people">


<form method="post" action="{{route('orgadmin.organisation.event.store',$org->id)}}" enctype="multipart/form-data">
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
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="event_name">
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





              @php 
                $eventcat = App\Models\Eventcat::orderby('id','desc')->where('status',1)->get(); 
              @endphp
                <!-- single Form Start-->
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">

                    <select  id="mounth" multiple class="form-select" aria-label="Default select example" name="eventcat_id[]">
                        @foreach($eventcat as $cat) 
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
                          <textarea class="form-control" rows="3" name="short_desc"></textarea>
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
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="long_version">
                        </div>
                        @error('long_version') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->

<div class="tab-container">
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Date</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="date" class="form-control" name="date">
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
                        <div class="input-group mb-3 tab-navigation">
                          <select class="form-select" name="cost_status" id="select-box">
                            <option value="0" selected>Free</option>
                            <option value="1">Charged</option>
                          </select>
                        </div>
                        @error('cost_status') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->



  
              <!-- ---- single Form Start --- -->
                <tr id="tab-1" class="tab-content">
                  <th scope="row" width="20%" class="label-dksldc">Price</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="number" class="form-control" placeholder="Enter Price" name="price">
                        </div>
                        @error('price') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
</div>
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Limit</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="number" class="form-control" placeholder="Maximum user limit" name="limit">
                        </div>
                        @error('limit') <span class="text-danger">{{$message}}</span> @enderror
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
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="contact_parson">
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
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="contact_email">
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
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="contact_phone">
                        </div>
                        @error('contact_phone') <span class="text-danger">{{$message}}</span> @enderror
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
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="what_to_bring">
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
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="whats_needed">
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
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="registration_form">
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
                          <input type="number" class="form-control" placeholder="Enter Number" aria-label="Username" aria-describedby="basic-addon1" name="keyword">
                        </div>
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
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="location">
                        </div>
                        @error('location') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Select Location</th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                        <!--map div-->
                        <div id="map" style="width: 100%;height: 400px;"></div>
                          <input name="lat" type="hidden" id="lat" readonly="yes"><br>
                          <input name="long" type="hidden" id="lng" readonly="yes">
                   </div>
                  </div>
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Upload Images</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="file" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="image">
                        </div>
                      </div>
                  </td>
                </tr>
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
<br>

        </div>
      </div>

              </div>


@endsection()

@section('scripts')
@include('orgadmin.asset.map-select-js')


<script type="text/javascript">
  
    //hide all tabs first
$('.tab-content').hide();
//show the first tab content
$('#tab-2').show();

$('#select-box').change(function () {
   dropdown = $('#select-box').val();
  //first hide all tabs again when a new option is selected
  $('.tab-content').hide();
  //then show the tab content of whatever option value was selected
  $('#' + "tab-" + dropdown).show();                                    
});


</script>
@endsection()