@extends('orgadmin.master')
@section('style')
<style type="text/css">
  .border-secondary {
      border-color: #6e933e!important;
  }
  .card.mb-3.box-style-dksld {
      padding: 20px;
  }
  .card.mb-3.box-style-dksld {
      border: 1px solid #c1e98c;
      border-bottom: 5px solid #6e933e;
  }
  .card.mb-3.box-style-dksld img {
    width: 80px;
    height: 80px;
}
.card.mb-3.box-style-dksld a {
    color: #84b04a;
    padding-left: 7px;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 14px;
    text-decoration: none;
}
.card.mb-3.box-style-dksld h5.card-title {
    font-size: 19px;
}
.organisation-info.single-info-org-dksld {
    padding: 25px 25px;
    border: 1px solid #e5e5e5;
    margin: 15px 6px;
}
.organisation-info.single-info-org-dksld h4 {
    text-transform: uppercase;
    font-weight: 700;
    font-size: 20px;
}
span.org-name-title-dksld a {
    text-decoration: none;
    color: #3a393b;
}
</style>


@endsection()

@section('orgadmin_org_project') active-nav @endsection
@section('org_admin_content')
<!-- ------ Banner Aria Start ------ -->


          <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">




<br>
<h4>
    @if($org->logo)
      <img src="{{asset('img/upload/org/logo/'.$org->logo)}}" width="60px" height="60px" style="margin:0px 20px">
         <span>  {{$org->org_name}} </span> 
    @else
        <span>  {{$org->org_name}} </span> 
    @endif                    
</h4>
<hr>







<div class="organization-deltes-dksldc0">

	<div class="row">
		<div class="col-md-6">
			<div class="organisation-info single-info-org-dksld">
				<h4>Project Name : </h4>
				<p>{{$org->org_name}}</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="organisation-info single-info-org-dksld">
				<h4>Category:  </h4>
				<p>{{$org->org_email}}</p>
			</div>
		</div>


		<div class="col-md-6">
			<div class="organisation-info single-info-org-dksld">
				<h4>Short Description </h4>
				<p>Imran Hossain</p>
			</div>
		</div>


		<div class="col-md-6">
			<div class="organisation-info single-info-org-dksld">
				<h4>Long Version / Update: </h4>
				<p>{{$org->org_public_email}}</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="organisation-info single-info-org-dksld">
				<h4>Start & Finish date	 </h4>
				<p><b>Start Date:</b> 22/09/22 <span>|</span> <b>End Date:</b> 22/09/23</p>
				<p></p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="organisation-info single-info-org-dksld">
				<h4>Contact Person </h4>
				<p>Imran Hossain</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="organisation-info single-info-org-dksld">
				<h4>Contact Email	 </h4>
				<p>Imran Hossain</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="organisation-info single-info-org-dksld">
				<h4>Contact Phone	 </h4>
				<p>Imran Hossain</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="organisation-info single-info-org-dksld">
				<h4>Whats's Needed	 </h4>
				<p>Imran Hossain</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="organisation-info single-info-org-dksld">
				<h4>Registration form	 </h4>
				<p>Imran Hossain</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="organisation-info single-info-org-dksld">
				<h4>Upload Images </h4>
				<p>Imran Hossain</p>
			</div>
		</div>




<hr>

		<div class="col-md-4">
			<a href="" class="btn btn-green btn-block">Edit  Project</a>
		</div>
		<div class="col-md-4">
			<a href="{{route('orgadmin.organisation.project.index',$org->id)}}" class="btn btn-green btn-block">Back To List</a>
		</div>
		<div class="col-md-4">
			<a href="#" class="btn btn-danger btn-block">Delete project</a>
		</div>



	</div>
</div>








<br>
<br>







<!-- --------------- Explore GGF End----------------- -->


              </div>
          </div>

<!-- --------------- Explore GGF End----------------- -->
@endsection()

