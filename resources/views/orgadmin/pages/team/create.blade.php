@extends('orgadmin.master')
@section('orgadmin_org_team') active-nav @endsection
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



          <table class="table table-borderless">
            <tbody>

              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc"> Project name</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Enter details" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                    <!-- single Form Start-->
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Categories</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                    <!-- single Form Start-->
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Short description</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Long version & updates</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
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
                                <input type="date" class="form-control" placeholder="Start date" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="col-md-6">
                                <input type="date" class="form-control" placeholder="End date" aria-label="Username" aria-describedby="basic-addon1">
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
                  <th scope="row" width="20%" class="label-dksldc">Contact person</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Contact email</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Contact phone</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
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
                          <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Whats's needed</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
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
                        	<select class="form-select">
                        		<option>YES</option>
                        		<option>NO</option>
                        	</select>
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Upload images</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="file" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->


              <!-- ---- single Form Start --- -->
                <tr>
                  <td scope="row" width="20%" class="label-dksldc">
                      <button class="btn btn-success btn-green">Save</button>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
            </tbody>
          </table>



<br>

        </div>
      </div>

              </div>


@endsection()