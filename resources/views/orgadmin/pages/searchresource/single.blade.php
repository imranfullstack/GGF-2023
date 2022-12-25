@extends('orgadmin.master')
@section('style')
<style type="text/css">
.form-check {
    display: block;
    width: 100%;
    margin: 13px 0px;
}
span#basic-addon2 {
    width: 10%;
}

.profilepic {
    height: 100%;
    width: 100%;
}
.pagination-dssd {
    float: right;
    margin-top: 20px;
}
</style>



@endsection()


@section('orgadmin_org_s_resource') active-nav @endsection
@section('org_admin_content')


<!-- ------ Banner Aria Start ------ -->
<div class="col-md-10 right-aria-sldksd">
  <div class="content-body-dskd">
    <br>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">DASHBOARD</li>
        <li class="breadcrumb-item">Search resources</li>
        <li class="breadcrumb-item active" aria-current="page"><b>
    
    		{{$resources->title}}
    	</b></li>
      </ol>
    </nav>
    <hr>
    <br>


<div class="row">
      			<div class="col-md-12">
                     <div class="event-table-dksld0c">
						<table class="table table-bordered">
						  <tbody>
						    <tr>
						      <th scope="row" class="left-tab-dksld">Short Description</th>
						      <td>{{$resources->short_desc}}</td>
						    </tr>
						    <tr>
						      <th scope="row" class="left-tab-dksld">Long Version</th>
						      <td>{{$resources->long_version}}</td>
						    </tr>
						    <tr>
						      <th scope="row" class="left-tab-dksld">Location Availability</th>
						      <td>{{$resources->location_availability}}</td>
						    </tr>
						    <tr>
						      <th scope="row" class="left-tab-dksld">City</th>
						      <td>{{$resources->city}}</td>
						    </tr>
						    <tr>
						      <th scope="row" class="left-tab-dksld">Contact Person</th>
						      <td>{{$resources->contact_parson}}</td>
						    </tr>
						    <tr>
						      <th scope="row" class="left-tab-dksld">Contact Email</th>
						      <td>{{$resources->contact_email}}</td>
						    </tr>
                      <tr>
                        <th scope="row" class="left-tab-dksld">Contact Phone</th>
						      <td>{{$resources->contact_phone}}</td>
                      </tr>
						  </tbody>
						</table>
                     </div>

      			</div>
      		</div>
<br>
      		<div class="more-infod-sds">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                    <div class="drop-zone">
                      <span class="drop-zone__prompt">
                         <h2>Drag and drop your file</h2>
                         <p>other instructions</p>
                         <i class="fas fa-plus"></i>
                      </span>
                      <input type="file" name="myFile" class="drop-zone__input">
                    </div>
               </div>
               <div class="col-md-7">
                  <br>
                  <br>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">URL</span>
                    <input type="url" class="form-control" placeholder="Enter URL" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                  <div class="input-group mb-3">
                    
                    <input type="File" class="form-control" placeholder="Enter URL" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
               </div>
            </div>

                     <div class="btn-form-dksld">
                        <a href="#" class="btn-dksld03d">Save</a>
                        <br>
                     </div>
         </div>

      </div>
      </div>
      </div>
    </div>
  </div>
</div>

<!-- --------------- Explore GGF End----------------- -->
@endsection()

