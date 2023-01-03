@extends('admin.master')
@section('admin_content')
@section('style')
  <!-- datatable Style  -->
     @include('orgadmin.asset.datatable-style')
  <!-- datatable Style  -->
@endsection
@section('recruit_show') show @endsection()


  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">

<br>
<h4>EDIT and View Recruit Information</h4>
<hr>



<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">
<table class="table table-borderless">
            <tbody>

              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Title</th>
                  <td>
                      <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">

                          {{$recruit->title}}

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


<div class="category-kdlsdkc">
  @foreach($recruit->recruithavecategory as $item)
    @foreach($item->jobcat as $cat)
        <a class="badge badge-green">{{$cat->name}} </a>
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
                  <th scope="row" width="20%" class="label-dksldc">Person Category</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                            <select class="form-select" name="parson_category" disabled>
                              <option value="1" {{ ($recruit->parson_category == 1) ? 'selected' : ''}}>Paid</option>
                              <option value="2" {{ ($recruit->parson_category == 2) ? 'selected' : ''}}>Not Paid</option>
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
                          {{$recruit->short_desc}}
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
                          {{$recruit->rate_of_pay}}
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
                        <div class=" ">


                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="">
                          <div class="row">
                            <div class="col-md-12">
                                {{ Carbon\Carbon::parse($recruit->start_date)->format('d M Y') }} 
 	<span><b>TO</b> </span>

                                {{ Carbon\Carbon::parse($recruit->end_date)->format('d M Y') }} 


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
                          {{$recruit->contact_parson}}
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
                          {{$recruit->contact_email}}
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
                         {{$recruit->contact_phone}}
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
                          {{$recruit->location}}
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
                          <select class="form-select" name="attach_application" disabled>
                            <option value="1" {{ ($recruit->attach_application == 1) ? 'selected' : ''}}>Yes</option>
                            <option value="0" {{ ($recruit->attach_application == 0) ? 'selected' : ''}}>No</option>
                          </select>
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
<form method="post" action="{{route('admin.recruit.update',$recruit->id)}}">
  @csrf
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Status</th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <select class="form-select" name="status">
                      <option value="1" {{ ($recruit->status == 1) ? 'selected' : ''}}>Active</option>
                      <option value="2" {{ ($recruit->status == 2) ? 'selected' : ''}}>Paused</option>
                      <option value="3" {{ ($recruit->status == 3) ? 'selected' : ''}}>Closed</option>
                      <option value="4" {{ ($recruit->status == 4) ? 'selected' : ''}}>Suspended</option>
                    </select>
                  </div>
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Suspended Note</th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                  	<textarea class="form-control" rows="3" name="suspended_note">{{$recruit->suspended_note}}</textarea>
                  </div>
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->

              <!-- ---- single Form Start --- -->
                <tr>
                  <td colspan="2" scope="row" width="20%" class="label-dksldc">
                      <button class="btn btn-success btn-block btn-green" type="submit">UPDATE</button>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->

</form>
            </tbody>
          </table>
    </div>
  </div>

</div>
<br>


</div>
</div>
@endsection()
@section('scripts')
@include('orgadmin.asset.datatable-script')
    <script src='https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js'></script>
    <script src='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js'></script>
    <script src='https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js'></script>
@endsection
