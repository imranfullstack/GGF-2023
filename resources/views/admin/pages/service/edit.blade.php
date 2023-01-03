@extends('admin.master')
@section('admin_content')

@section('style')
    <!-- datatable Style  -->
    @include('orgadmin.asset.datatable-style')
    <!-- datatable Style  -->
@endsection
@section('service_show')
    show
@endsection()


<div class="col-md-10 right-aria-sldksd">
    <div class="content-body-dskd">
        <br>
        <h4>Edit Service </h4>
        <hr>
        <div class="table-aria-for-info-section">
            <div class="row">
                <div class="col-md-12">

<table class="table table-borderless">
            <tbody>

              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc"> Services Name</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                        	{{$service->name}}
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

               @php $servicecat = App\Models\Servicecat::orderby('id','desc')->get(); @endphp
                <!-- single Form Start-->
<!-- single Form Start-->
  <div class="sigle-form-input-sddksldc0sd">
    <div class="input-group mb-3">
        <div class="category-kdlsdkc">
          @foreach($service->servicehavecategory as $item)
            @foreach($item->servicecat as $cat)

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
                  <th scope="row" width="20%" class="label-dksldc">Short Description</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">{{$service->short_desc}}
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Long Version</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
							{{$service->long_version}}
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Available dates</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                        	{{ Carbon\Carbon::parse($item->available_date)->format('d M Y') }}
                        </div>
                      </div>
                    <!-- single Form Start-->
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->


              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Price</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                        	{{$service->price}} AUD
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
                        	{{$service->contact_person}}
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
                        	{{$service->contact_email}}
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
                        	{{$service->contact_phone}}
                        </div>
                        @error('contact_no') <span class="text-danger">{{$message}}</span> @enderror
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
                        	{{$service->location}}
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">keyword</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">

                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->


              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Enable Enquiry Form</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                            <select class="form-select" name="enquiry_form" disabled>
                              <option value="1" {{ ($service->enquiry_form == 1) ? 'selected' : ''}}>Yes</option>
                              <option value="0" {{ ($service->enquiry_form == 0) ? 'selected' : ''}}>No</option>
                            </select>
                        </div>
                        @error('enquiry_form') <span class="text-danger">{{$message}}</span> @enderror
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
                    <img src="{{asset('img/upload/service/'.$service->image)}}" width="80px" style="margin-right: 30px;">
                  </div>
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->

<form method="post" action="{{route('admin.service.update',$service->id)}}">
	@csrf
                  <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Status</th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <select class="form-select" name="status">
                      <option value="1" {{ ($service->status == 1) ? 'selected' : ''}}>Active</option>
                      <option value="2" {{ ($service->status == 2) ? 'selected' : ''}}>Paused</option>
                      <option value="3" {{ ($service->status == 3) ? 'selected' : ''}}>Closed</option>
                      <option value="4" {{ ($service->status == 4) ? 'selected' : ''}}>Suspended</option>
                    </select>
                  </div>
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
                  <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Suspend Message</th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                  	<textarea class="form-control" rows="3" name="suspended_note">{{$service->suspended_note}}</textarea>
                  </div>
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->

              <!-- ---- single Form Start --- -->


              <!-- ---- single Form Start --- -->
                <tr>
                  <td scope="row" width="20%" class="label-dksldc">
                      <button class="btn btn-success btn-green" type="submit">UPDATE</button>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->

</form>              
            </tbody>
          </table>
                
                </div>
            </div>
<br>
<br>
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
