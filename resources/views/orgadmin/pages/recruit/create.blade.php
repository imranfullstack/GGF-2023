@extends('orgadmin.master')

@section('orgadmin_org_recruit') active-nav @endsection
@section('org_admin_content')
<!-- ------ Banner Aria Start ------ -->



          <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">




<br>
  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">DASHBOARD</li>
      <li class="breadcrumb-item">recruit</li>
      <li class="breadcrumb-item active" aria-current="page"><b>
      Create</b></li>
    </ol>
  </nav>
<hr>


        <div class="find-people">

<form action="{{route('orgadmin.organisation.recruit.store',$org->id)}}" method="post" enctype="multipart/form-data">
  @csrf
<table class="table table-borderless">
            <tbody>

              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Title</th>
                  <td>
                      <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">

                          <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="title">

                        </div>
                      </div>
                <!-- single Form Start-->
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Categorys</th>
                  <td>
                     @php $recruitcat = App\Models\Recruitcat::orderby('id','desc')->get(); @endphp
                      <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">

                          <select  id="mounth" multiple class="form-select" aria-label="Default select example" name="recruitcat_id[]">
                              @foreach($recruitcat as $cat) 
                                <option value="{{$cat->id}}"> {{$cat->name}}</option> 
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
                  <th scope="row" width="20%" class="label-dksldc">Person Category</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                            <select class="form-select" name="parson_category">
                              <option value="1">Paid</option>
                              <option value="2">Not Paid</option>
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
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Rate of Pay</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="( Leave Blank of Volunteers )" aria-label="Username" aria-describedby="basic-addon1" name="rate_of_pay">
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->


              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Start / Finish Date</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">


                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <div class="row">
                            <div class="col-md-6">
                                <input type="date" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="start_date">
                            </div>
                            <div class="col-md-6">
                                <input type="date" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="end_date">
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- single Form Start-->


                        </div>
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
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->



              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Attach Application Form </th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <select class="form-select" name="attach_application">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                          </select>
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