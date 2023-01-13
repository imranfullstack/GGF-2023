@extends('orgadmin.master')
@section('orgadmin_org_project') active-nav @endsection 
@section('org_admin_content')
<!-- ------ Banner Aria Start ------ -->
<div class="col-md-10 right-aria-sldksd">
  <div class="content-body-dskd">
    <br>
    <h2>
      <span class="org-name-title-dksld">
        <img src="https://w7.pngwing.com/pngs/457/164/png-transparent-friends-of-the-urban-forest-urban-forestry-tree-tags-leaf-text-logo-thumbnail.png" class="top-logo-icon"> {{$org->org_name}}
      </span>
    </h2>
    <hr>
    <div class="find-people">
      <div class="find-people">
    <form action="{{route('orgadmin.organisation.project.store',$org->id)}}" method="post" enctype="multipart/form-data">
      @csrf
        <table class="table table-borderless">
          <tbody>
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc"> Project Name</th>
              <td>
                <!-- single Form Start-->
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="name">
                  </div>
                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <!-- single Form Start-->
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Categorys</th>
              <td>





               @php $projectcat = App\Models\Projectcat::orderby('id','desc')->where('status',1)->get(); @endphp
                <!-- single Form Start-->
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">

                    <select  id="mounth" multiple class="form-select" aria-label="Default select example" name="projectcat_id[]">
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
                    <textarea class="form-control" rows="3" name="short_desc" maxlength="500" placeholder="Max 500 characters"></textarea>
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

                    <textarea class="form-control" rows="3" name="long_version" maxlength="10000"></textarea>
                  </div>
                    @error('long_version') <span class="text-danger">{{$message}}</span> @enderror
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Start &amp; Finish date</th>
              <td>
                <!-- single Form Start-->
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <div class="row">
                      <div class="col-md-6">
                        <input type="date" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="start_date">
                        @error('start_date') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                      <div class="col-md-6">
                        <input type="date" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="end_date">
                        @error('end_date') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                    </div>
                  </div>
                </div>
                <!-- single Form Start-->
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Contact Person</th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="contact_person">
                  </div>
                        @error('contact_person') <span class="text-danger">{{$message}}</span> @enderror
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
              <th scope="row" width="20%" class="label-dksldc">Whats's Needed</th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="Whats_needed">
                  </div>
                        @error('Whats_needed') <span class="text-danger">{{$message}}</span> @enderror
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Registration form</th>
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
              <th scope="row" width="20%" class="label-dksldc">Select Location</th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                        <div id="map" style="width: 100%;height: 400px;"></div>
                  <div class="input-group mb-3" style="display: none;">
                        <!--map div-->
                          <input name="lat" type="text" id="lat" readonly="yes"><br>
                          <input name="long" type="text" id="lng" readonly="yes">
                   </div>
                  </div>
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
              <td scope="row" width="20%" class="label-dksldc">
                <button class="btn btn-success btn-green" value="submit">Save</button>
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
</div> 

@endsection()

@section('scripts')
@include('orgadmin.asset.map-select-js')
@endsection()