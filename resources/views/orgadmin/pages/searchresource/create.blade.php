@extends('orgadmin.master')

@section('orgadmin_org_s_resource') active-nav @endsection
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
                      <th scope="row" width="20%" class="label-dksldc"> Organisation Type</th>
                      <td>
                          <div class="sigle-form-input-sddksldc0sd">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                          </div>
                      </td>
                    </tr>
                  <!-- ---- single Form Start --- -->
                  <!-- ---- single Form Start --- -->
                    <tr>
                      <th scope="row" width="20%" class="label-dksldc"> Focus</th>
                      <td>
                          <div class="sigle-form-input-sddksldc0sd">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                          </div>
                      </td>
                    </tr>
                  <!-- ---- single Form Start --- -->
                  <!-- ---- single Form Start --- -->
                    <tr>
                      <th scope="row" width="20%" class="label-dksldc"> Projects</th>
                      <td>
                          <div class="sigle-form-input-sddksldc0sd">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                          </div>
                      </td>
                    </tr>
                  <!-- ---- single Form Start --- -->
                  <!-- ---- single Form Start --- -->
                    <tr>
                      <th scope="row" width="20%" class="label-dksldc"> Provides</th>
                      <td>
                          <div class="sigle-form-input-sddksldc0sd">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                          </div>
                      </td>
                    </tr>
                  <!-- ---- single Form Start --- -->
                  <!-- ---- single Form Start --- -->
                    <tr>
                      <th scope="row" width="20%" class="label-dksldc"> Looking for</th>
                      <td>
                          <div class="sigle-form-input-sddksldc0sd">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                          </div>
                      </td>
                    </tr>
                  <!-- ---- single Form Start --- -->
                  <!-- ---- single Form Start --- -->
                    <tr>
                      <th scope="row" width="20%" class="label-dksldc"> Offering expriences / Events</th>
                      <td>
                          <div class="sigle-form-input-sddksldc0sd">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                          </div>
                      </td>
                    </tr>
                  <!-- ---- single Form Start --- -->
                  <!-- ---- single Form Start --- -->
                    <tr>
                      <th scope="row" width="20%" class="label-dksldc"> Offer Products</th>
                      <td>
                          <div class="sigle-form-input-sddksldc0sd">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                          </div>
                      </td>
                    </tr>
                  <!-- ---- single Form Start --- -->
                  <!-- ---- single Form Start --- -->
                    <tr>
                      <th scope="row" width="20%" class="label-dksldc"> Offer Services</th>
                      <td>
                          <div class="sigle-form-input-sddksldc0sd">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                          </div>
                      </td>
                    </tr>
                  <!-- ---- single Form Start --- -->
                  <!-- ---- single Form Start --- -->
                    <tr>
                      <th scope="row" width="20%" class="label-dksldc"> Hiring</th>
                      <td>
                          <div class="sigle-form-input-sddksldc0sd">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                          </div>
                      </td>
                    </tr>
                  <!-- ---- single Form Start --- -->
                  <!-- ---- single Form Start --- -->
                    <tr>
                      <th scope="row" width="20%" class="label-dksldc"> Location</th>
                      <td>
                          <div class="sigle-form-input-sddksldc0sd">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                          </div>
                      </td>
                    </tr>
                  <!-- ---- single Form Start --- -->
                  <!-- ---- single Form Start --- -->
                    <tr>
                      <th scope="row" width="20%" class="label-dksldc"> Events Planed</th>
                      <td>
                          <div class="sigle-form-input-sddksldc0sd">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1">
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