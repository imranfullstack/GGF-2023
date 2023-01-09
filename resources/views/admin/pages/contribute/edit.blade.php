@extends('admin.master')
@section('admin_content')
@section('style')
<!-- datatable Style  -->
@include('orgadmin.asset.datatable-style')
<!-- datatable Style  -->
@endsection
@section('contribute_show') show @endsection()

  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">

<br>
<h4>Edit  contribute</h4>
<hr>



<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">



<table class="table table-borderless">
            <tbody>


              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Contribute Title</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                        	{{$contribute->title}}
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->

              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Category  Of Offering</th>
                  <td>
                      <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
Category will come here
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

                        	{{$contribute->short_desc}}
                        </div>
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
                        	{{$contribute->long_version}}
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Location Availability</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                        	{{$contribute->city}}
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->



                        
                      
                  
                
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">File Name</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                        	{{$contribute->file_name}}
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">File Upload</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                        	<!-- {{$contribute->file_upload}} -->
                        	file will come here
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Contact parson</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                        	{{$contribute->contact_parson}}
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
                        	{{$contribute->contact_email}}
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
                        	{{$contribute->contact_phone}}
                        </div>
                      </div>


                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Keywords</th>
                  <td>
                   
                   keyword will come here


                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
<form method="post" action="{{route('admin.contribute.update',$contribute->id)}}">
  @csrf              
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Status</th>
                  <td>
                    <select class="form-select" name="status">
                      <option value="1" {{ ($contribute->status == 1) ? 'selected' : ''}}>Active</option>
                      <option value="2" {{ ($contribute->status == 2) ? 'selected' : ''}}>Paused</option>
                      <option value="3" {{ ($contribute->status == 3) ? 'selected' : ''}}>Closed</option>
                      <option value="4" {{ ($contribute->status == 4) ? 'selected' : ''}}>Suspended</option>
                    </select>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Suspended Note</th>
                  <td>
                    <textarea class="form-control" rows="3" name="suspend_message">{{$contribute->suspend_message}}</textarea>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <td colspan="2">
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <button class="btn btn-success btn-green btn-block">UPDATE</button>
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->

</form>

            </tbody>
          </table>



    </div>
  </div>

</div>


</div>
</div>
@endsection()

@section('scripts')
  @include('orgadmin.asset.datatable-script')



<script src='https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js'></script>
<script src='https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js'></script>

@endsection
