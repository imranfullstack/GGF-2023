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


@section('orgadmin_org_sprofile') active-nav @endsection
@section('org_admin_content')


<!-- ------ Banner Aria Start ------ -->
<div class="col-md-10 right-aria-sldksd">
  <div class="content-body-dskd">
    <br>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">DASHBOARD</li>
        <li class="breadcrumb-item active" aria-current="page"><b>
    Search Profile</b></li>
      </ol>
    </nav>
    <hr>
    <br>


<div class="row">


@foreach($befound as $item)

@php 
		$user = App\Models\User::where('id',$item->id)->first();
  		$befound = App\Models\Befound::where('user_id',$user->id)->first();
@endphp
		<!-- grid Profile -->
		<div class="col-md-6">
			<div class="single-grid">
				<div class="card mb-3" style="">
				  <div class="row g-0">
				    <div class="col-md-4">

@if($user->image)
				      <div class="profilepic" style="background: url({{asset('img/upload/pic/'.$user->image)}}) no-repeat center center/cover"></div>
@else
				      <div class="profilepic" style="background: url(https://www.nicepng.com/png/detail/136-1366211_group-of-10-guys-login-user-icon-png.png) no-repeat center center/cover"></div>

@endif


				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title">{{$user->name}}</h5>
				        <p class="card-text">

				        	{{$befound->short_desc}}
				    	</p>
				        <a class="btn btn-green"  href="{{route('orgadmin.organisation.s_profile.individual.profile',
				        ['userid'=>$user->id,'id'=>$org->id])}}" >visit Profile</a>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	<!-- grid Profile -->
@endforeach



	<div class="col-md-12">
<!-- 		<div class="pagination-dssd">
			<nav aria-label="Page navigation example">
			  <ul class="pagination">
			    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
			    <li class="page-item"><a class="page-link" href="#">1</a></li>
			    <li class="page-item"><a class="page-link" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item"><a class="page-link" href="#">Next</a></li>
			  </ul>
			</nav>
		</div> -->



		<br><br>
	</div>

          <!-- single Form Start-->
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<!-- --------------- Explore GGF End----------------- -->
@endsection()

