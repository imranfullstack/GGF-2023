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
</style>



@endsection()

@section('orgadmin_org_dashboard') active-nav @endsection

@section('main_aria_content')


@php 
  $orgno = App\Models\Organisation::where('user_id',Auth::user()->id)->count();
  $event = App\Models\Event::where('user_id',Auth::user()->id)->count();
  $project = App\Models\Project::where('user_id',Auth::user()->id)->count();
  $service = App\Models\Service::where('user_id',Auth::user()->id)->count();
  $product = App\Models\Product::where('user_id',Auth::user()->id)->count();
  $post = App\Models\Post::where('user_id',Auth::user()->id)->count();
  $membercount = App\Models\User::all()->count();
@endphp  




<br>
<h4>DASHBOARD</h4>
<hr>
<br>
<div class="row">
  <!-- /// Single Count Item  -->
  <div class="col-md-4">
    <div class="card mb-3 box-style-dksld" style="max-width: 100%;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('img/icon/org.png')}}" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">ORGANISATIONS</h5>
          
            <p class="card-text">{{$orgno}} <a href="#">View</a></p>

            
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- /// Single Count Item  -->
  {{-- <div class="col-md-4">
    <div class="card mb-3 box-style-dksld" style="max-width: 100%;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('img/icon/editors.png')}}" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">EDITORS</h5>
            <p class="card-text">5 <a href="#">View</a></p>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- /// Single Count Item  -->
  {{-- <div class="col-md-4">

    <div class="card mb-3 box-style-dksld" style="max-width: 100%;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('img/icon/membersicon.png')}}" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">MEMBERS</h5>
            <p class="card-text">{{$membercount}}</p>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- /// Single Count Item  -->
  <div class="col-md-4">

    <div class="card mb-3 box-style-dksld" style="max-width: 100%;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('img/icon/eventicon.png')}}" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">EVENTS / EXP..</h5>
            <p class="card-text">{{$event}} </p>
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
          <img src="{{asset('img/icon/projectsicon.png')}}" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">PROJECTS</h5>
            <p class="card-text">{{$project}}</p>
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
          <img src="{{asset('img/icon/servicesicon.png')}}" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">SERVICES</h5>
            <p class="card-text">{{$service}}</p>
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
          <img src="{{asset('img/icon/productsicon.png')}}" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">PRODUCTS</h5>
            <p class="card-text">{{$product}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /// Single Count Item  -->
  {{-- <div class="col-md-4">

    <div class="card mb-3 box-style-dksld" style="max-width: 100%;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('img/icon/messagesicon.png')}}" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">MESSAGES</h5>
            <p class="card-text">5 <a href="#">View</a></p>
          </div>
        </div>
      </div>
    </div>
  </div> --}}


  <!-- /// Single Count Item  -->
  <div class="col-md-4">

    <div class="card mb-3 box-style-dksld" style="max-width: 100%;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('img/icon/posticon.png')}}" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">POSTS</h5>
            <p class="card-text">{{$post}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /// Single Count Item  -->

{{-- 
  <div class="col-md-4">

    <div class="card mb-3 box-style-dksld" style="max-width: 100%;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('img/icon/feedbacksicon.png')}}" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">FEEDBACK</h5>
            <p class="card-text">5 <a href="#">View</a></p>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
</div>



<br>
<br>



@endsection()                  