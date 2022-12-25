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

</style>
@endsection()


@section('orgadmin_org') active-nav @endsection


@section('org_admin_content')
<!-- ------ Banner Aria Start ------ -->

          <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">




<br>
<h2>Our Organisations </h2>
<hr>
<br>
<div class="row">
  <!-- /// Single Count Item  -->
  <div class="col-md-4">
    <div class="card mb-3 box-style-dksld" style="max-width: 100%;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="https://mbanotesworld.com/wp-content/uploads/2021/07/forms-of-business-organization-1.png" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">ORGANISATION</h5>

@php 
  $orgno = App\Models\Organisation::where('user_id',Auth::user()->id)->count();
@endphp            
            <p class="card-text">{{$orgno}} <a href="#">View</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- /// Single Count Item  -->
  <div class="col-md-4">
    <div class="card mb-3 box-style-dksld" style="max-width: 100%;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="https://fupping.com/wp-content/uploads/2018/06/Personal.png" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Org Editor</h5>
            <p class="card-text">5 <a href="#">View</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /// Single Count Item  -->
  <div class="col-md-4">

    <div class="card mb-3 box-style-dksld" style="max-width: 100%;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="https://www.yourmembership.com/wp-content/uploads/2018/03/Blog031618-OneSecret-card.png" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Org Member</h5>
            <p class="card-text">5 <a href="#">View</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- /// Single Count Item  -->

</div>

<hr>

<div class="organisations-btn-group">

	<a href="{{route('orgadmin.organisation.list')}}" class="btn btn-green btn-block">Organisations List</a>
	<a href="{{route('orgadmin.organisation.create')}}" class="btn btn-green btn-block">Create New Organisations</a>

</div>





<br>
<br>



              </div>
          </div>

<!-- --------------- Explore GGF End----------------- -->
@endsection()