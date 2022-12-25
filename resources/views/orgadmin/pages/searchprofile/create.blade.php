@extends('orgadmin.master')

@section('orgadmin_org_sprofile') active-nav @endsection
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



<div class="find-people">

              <!-- single Form Start-->
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          <strong> Volunteer</strong>
                        </label>
                      </div>
                  </div>
                </div>
              <!-- single Form End-->

              <!-- single Form Start-->
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="employee">
                        <label class="form-check-label" for="employee">
                          <strong> Employee</strong>
                        </label>
                      </div>
                  </div>
                </div>
              <!-- single Form End-->



          <table class="table table-borderless">
            <tbody>

              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc"> Skills</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                    <!-- single Form Start-->
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Interests</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                    <!-- single Form Start-->
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Location</th>
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
                      <button class="btn btn-success btn-green">Search</button>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
            </tbody>
          </table>




        </div>

<br>

        </div>
      </div>

              </div>


@endsection()