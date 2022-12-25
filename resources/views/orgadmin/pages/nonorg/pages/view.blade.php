@extends('orgadmin.pages.nonorg.master')
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
div#ID_myMultiInput {
    border: none;
    border-bottom: 3px solid #84b04a;
}
.kyewordstyle .bootstrap-tagsinput {
    border: none;
    border-bottom: 3px solid #84b04a;
}
.single-social ul {
    margin: 0;
    padding: 0;
}

.single-social ul li {
    display: inline;
    padding: 0px 11px;
}
</style>



  
<link rel='stylesheet' href='https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css'>
  
<style>
@charset "UTF-8";
.bootstrap-tagsinput {
  margin: 0;
  width: 100%;
  padding: 0.5rem 0.75rem 0;
  font-size: 1rem;
  line-height: 1.25;
  transition: border-color 0.15s ease-in-out;
}
.bootstrap-tagsinput.has-focus {
  background-color: #fff;
  border-color: #5cb3fd;
}
.bootstrap-tagsinput .label-info {
  display: inline-block;
  background-color: #84B04A;
  padding: 0 0.4em 0.15em;
  border-radius: 0.25rem;
  margin-bottom: 0.4em;
}
.bootstrap-tagsinput input {
  margin-bottom: 0.5em;
}

.bootstrap-tagsinput .tag [data-role=remove]:after {
  content: "×";
}
.single-social span {
    padding: 0px 10px;
}
.single-social {
    padding: 15px 0;
}

.title-heading-dlsd a{
  color: #000;
  text-decoration: none;
}


h2.title-heading-dlsd a {
    font-size: 31px;
    color: #FF2927;
}

.title-dsld hr{
	margin: 0;
	padding: 0;
}
.title-dsld h4 {
    margin: 0;
    padding: 20px 29px;
    background: #5a8523;
    color: #fff;
    text-transform: uppercase;
}
</style>



@endsection()


@section('orgadmin_org_list') active-nav @endsection

@section('main_aria_content')
<!-- ------ Banner Aria Start ------ -->

					<br>



<h2 class="title-heading-dlsd"> <a href="{{route('orgadmin.list')}}"> <i class="fas fa-angle-left"></i> </a>
	<span> Organisation: {{$org->org_name}}</span>
</h2>


					<hr>
				<br>



<div class="organization-deltes-dksldc0">

	<div class="row">
		<div class="col-md-6">
			<div class="organisation-info single-info-org-dksld">
				<h4>Organisation Name : </h4>
				<p>{{$org->org_name}}</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="organisation-info single-info-org-dksld">
				<h4>Organisation Email : </h4>
				<p>{{$org->org_email}}</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="organisation-info single-info-org-dksld">
				<h4>Organisation Public Email : </h4>
				<p>{{$org->org_public_email}}</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="organisation-info single-info-org-dksld">
				<h4>Organisation Account Email : </h4>
				<p>{{$org->account_email}}</p>
			</div>
		</div>
		<div class="col-md-12 title-dsld">
			<hr>
				<h4>Organisation Social : </h4>
			<hr>
		</div>
		<div class="col-md-7">
			<div class="organisation-info single-info-org-dksld">
				<div class="single-social">
					<ul >
						<li><b><i class="fab fa-facebook"></i>  <span>Website URL</span> - </b></li>
						<li><a href="#">{{$org->web_url}}</a></li>
					</ul>
				</div>
				<div class="single-social">
					<ul >
						<li><b><i class="fab fa-facebook"></i>  <span>FACEBOOK</span> - </b></li>
						<li><a href="#">{{$org->facebook_url}}</a></li>
					</ul>
				</div>
				<div class="single-social">
					<ul >
						<li><b><i class="fab fa-twitter"></i>  <span>TWITTER</span> - </b></li>
						<li><a href="#">{{$org->twitter_url}}</a></li>
					</ul>
				</div>
				<div class="single-social">
					<ul >
						<li><b><i class="fab fa-linkedin"></i>  <span>LINKEDIN</span> - </b></li>
						<li><a href="#">{{$org->linkedin_url}}</a></li>
					</ul>
				</div>

				<!-- ---- Single info -->
				<div class="single-social">
					<ul >
						<li><b><i class="fad fa-address-card"></i>  <span>Goverment Registration</span> - </b></li>
						<li><a href="#">{{$org->gov_registration}}</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<div class="organisation-info single-info-org-dksld">
				<!-- ---- Single info -->
				<div class="single-social">
					<ul >
						<li><b><i class="fas fa-phone-alt"></i> <span>PHONE</span></b></li>
						<li>{{$org->phone}}</li>
					</ul>
				</div>
				<!-- ---- Single info -->
				<!-- ---- Single info -->
				<div class="single-social">
					<ul >
						<li><b><i class="fas fa-globe-africa"></i> <span>ADDRESS</span></b></li>
						<li>{{$org->address}}</li>
					</ul>
				</div>
				<!-- ---- Single info -->
				<!-- ---- Single info -->
				<div class="single-social">
					<ul >
						<li><b><i class="fas fa-user"></i> <span>Contact Person</span></b></li>
						<li>{{$org->contact_person}}</li>
					</ul>
				</div>
				<!-- ---- Single info -->
				<!-- ---- Single info -->
				<div class="single-social">
					<ul >
						<li><b><i class="fas fa-user"></i> <span>Best Contact</span></b></li>
						
						<li><a href="#">{{$org->best_contact}}</a></li>
					</ul>
				</div>
				<!-- ---- Single info -->
				<div class="single-social">
					<ul >
						<li><b><i class="fad fa-address-card"></i>  <span>Contact Person Email</span> - </b></li>
						<li><a href="#">{{$org->contact_person_email}}</a></li>
					</ul>
				</div>
			</div>


		</div>


		<div class="col-md-5">
			<div class="title-dsld">
			<hr>
				<h4>Logo </h4>
			<hr>
			<br>
			<div class="organisation-info single-info-org-dksld">
					<img width="60%" height="250px" src="{{asset('img/upload/org/logo/'.$org->logo)}}">
			</div>
			<br>
			</div>


		</div>


		<div class="col-md-7">
			<div class="title-dsld">
			<hr>
				<h4>Short Description </h4>
			<hr>
			<br>
			<div class="organisation-info single-info-org-dksld">

				{{$org->summary}}
			<br>
			</div>
			</div>


		</div>

		<div class="col-md-12">
			<div class="title-dsld">
			<hr>
				<h4>Long Description </h4>
			<hr>
			<br>
			<div class="organisation-info single-info-org-dksld">

				{{$org->long_version}}
				<br>
				<br>
			</div>
			</div>


		</div>

		<div class="col-md-12">

		</div>



		<div class="col-md-12">
			<a href="{{route('orgadmin.list')}}" class="btn btn-green btn-block">Back To List</a>
		</div>



	</div>
</div>








<br>
<br>







<!-- --------------- Explore GGF End----------------- -->

@endsection()


@section('scripts')

  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js'></script>
<script src='https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js'></script>
      <script id="rendered-js" >
// http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/

$(document).ready(function () {

  $('input[name="keywords"]').tagsinput({
    trimValue: true,
    confirmKeys: [13, 44, 32],
    focusClass: 'my-focus-class' });


  $('.bootstrap-tagsinput input').on('focus', function () {
    $(this).closest('.bootstrap-tagsinput').addClass('has-focus');
  }).on('blur', function () {
    $(this).closest('.bootstrap-tagsinput').removeClass('has-focus');
  });

});
//# sourceURL=pen.js
    </script>

@endsection
