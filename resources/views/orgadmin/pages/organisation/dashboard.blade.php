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
</style>


@endsection()

@section('orgadmin_org_dash') active-nav @endsection
@section('org_admin_content')
<!-- ------ Banner Aria Start ------ -->


@php 
  $event = App\Models\Event::where('user_id',Auth::user()->id)->where('organisation_id',$org->id)->count();
  $project = App\Models\Project::where('user_id',Auth::user()->id)->where('organisation_id',$org->id)->count();
  $service = App\Models\Service::where('user_id',Auth::user()->id)->where('organisation_id',$org->id)->count();
  $product = App\Models\Product::where('user_id',Auth::user()->id)->where('organisation_id',$org->id)->count();
  $post = App\Models\Post::where('user_id',Auth::user()->id)->where('organisation_id',$org->id)->count();
@endphp  

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
<br>
<div class="row">

  <!-- /// Single Count Item  -->
  <div class="col-md-4">
    <div class="card mb-3 box-style-dksld" style="max-width: 100%;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('img/icon/editors.png')}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">EDITORS</h5>
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
          <img src="{{asset('img/icon/membersicon.png')}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">MEMBERS</h5>
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
          <img src="{{asset('img/icon/projectsicon.png')}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">PROJECTS</h5>
            <p class="card-text">{{$project}} <a href="#">View</a></p>
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
          <img src="{{asset('img/icon/eventicon.png')}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">EVENTS / EXP..</h5>
            <p class="card-text">{{$event}} <a href="#">View</a></p>
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
          <img src="{{asset('img/icon/posticon.png')}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">POSTS</h5>
            <p class="card-text">{{$post}} <a href="#">View</a></p>
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
          <img src="{{asset('img/icon/productsicon.png')}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">PRODUCTS</h5>
            <p class="card-text">{{$product}} <a href="#">View</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /// Single Count Item  -->
  <!-- /// Single Count Item  -->
  <div class="col-md-4">

    <div class="card mb-3 box-style-dksld" style="max-width: 100%;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('img/icon/messagesicon.png')}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">MESSAGES</h5>
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
          <img src="{{asset('img/icon/servicesicon.png')}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">SERVICES</h5>
            <p class="card-text">{{$service}} <a href="#">View</a></p>
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
          <img src="{{asset('img/icon/feedbacksicon.png')}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">FEEDBACK</h5>
            <p class="card-text">5 <a href="#">View</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<br>
<br>



              </div>
          </div>

<!-- --------------- Explore GGF End----------------- -->
@endsection()