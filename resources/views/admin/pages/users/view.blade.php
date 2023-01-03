@extends('admin.master')
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


<style type="text/css">
	
	/***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: https://j.mp/metronictheme
Licensed under MIT
***/

body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}


.profile-userpic {
    text-align: center;
}

.profile-usermenu {
    margin: 15px 0;
}
a, button, code, div, img, input, label, li, p, pre, select, span, svg, table, td, textarea, th, ul {
    -webkit-border-radius: 0!important;
    -moz-border-radius: 0!important;
    border-radius: 0!important;
}
.dashboard-stat, .portlet {
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
}
.portlet {
    margin-top: 0;
    margin-bottom: 25px;
    padding: 0;
    border-radius: 4px;
}
.portlet.bordered {
    border-left: 2px solid #e6e9ec!important;
}
.portlet.light {
    padding: 12px 20px 15px;
    background-color: #fff;
}
.portlet.light.bordered {
    border: 1px solid #e7ecf1!important;
}
.list-separated {
    margin-top: 10px;
    margin-bottom: 15px;
}
.profile-stat {
    padding-bottom: 20px;
    border-bottom: 1px solid #f0f4f7;
}
.profile-stat-title {
    color: #7f90a4;
    font-size: 25px;
    text-align: center;
}
.uppercase {
    text-transform: uppercase!important;
}

.profile-stat-text {
    color: #5b9bd1;
    font-size: 10px;
    font-weight: 600;
    text-align: center;
}
.profile-desc-title {
    color: #7f90a4;
    font-size: 17px;
    font-weight: 600;
}
.profile-desc-text {
    color: #7e8c9e;
    font-size: 14px;
}
.margin-top-20 {
    margin-top: 20px!important;
}
[class*=" fa-"]:not(.fa-stack), [class*=" glyphicon-"], [class*=" icon-"], [class^=fa-]:not(.fa-stack), [class^=glyphicon-], [class^=icon-] {
    display: inline-block;
    line-height: 14px;
    -webkit-font-smoothing: antialiased;
}
.profile-desc-link i {
    width: 22px;
    font-size: 19px;
    color: #abb6c4;
    margin-right: 5px;
}
.profile-userbuttons {
    margin-bottom: 15px;
}
span.badge.bg-green {
    background: #6e933e;
    border-radius: 54px !important;
    text-transform: lowercase;
    padding: 4px 17px;
    font-weight: 300;
}

</style>


@endsection()




@section('admin_content')

@php 

  $individual = App\Models\Individualinfo::where('user_id',$user->id)->first();
  $join = App\Models\Userjoin::where('user_id',$user->id)->first();
  $befound = App\Models\Befound::where('user_id',$user->id)->first();
  $keyskill = App\Models\Befoundkeyskill::where('user_id',$user->id)->get();
  $interest = App\Models\Befoundkeyinterest::where('user_id',$user->id)->get();

@endphp 


<!-- ------ Banner Aria Start ------ -->
<div class="col-md-10 right-aria-sldksd">
  <div class="content-body-dskd">
    <br>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">DASHBOARD</li>
        <li class="breadcrumb-item active" aria-current="page">
          <b> Search Profile</b>
        </li>
      </ol>
    </nav>
    <hr>
    <div class="row">
      <!-- grid Profile -->
      <div class="col-md-12">
        <div class="kk">
          <div class="row profile">
            <div class="col-md-3">
              <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">

                  @if($user->image)

                  <img src="{{asset('img/upload/pic/'.$user->image)}}" class="img-responsive" alt="">


@else
                  <img src="https://www.nicepng.com/png/detail/136-1366211_group-of-10-guys-login-user-icon-png.png" class="img-responsive" alt="">
           

@endif


                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                  <div class="profile-usertitle-name">{{$user->name}} </div>
                  <div class="profile-usertitle-job"> Developer </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">
                  <button type="button" class="btn btn-green btn-sm">Message</button>

@if($befound)
                  <a target="_blank" class="btn btn-danger btn-sm" href="{{asset('img/upload/resume/'.$befound->resume)}}">Download CV</a>
@endif                  
                </div>
                <!-- END SIDEBAR BUTTONS -->
                <div class="portlet light bordered">
                  <div>
                    <div class="margin-top-20 profile-desc-link">
                      <i class="fa fa-globe"></i>
                      <a href="mailto:{{$user->email}}">{{$user->email}}</a>
                    </div>
                    @if($individual)
                      @if($individual->phone)
                        <div class="margin-top-20 profile-desc-link">
                          <i class="fa fa-phone"></i>
                          <a href="aa">{{$individual->phone}}</a>
                        </div>
                      @endif
                    @endif

                    @if($join)
                      @if($join->organisation_id)
                      <div class="margin-top-20 profile-desc-link">
                        <i class="fa fa-globe"></i>
                        <a href="https://www.apollowebstudio.com">{{$join->organisation_id}}</a>
                      </div>
                      @endif
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="profile-content">
                <h3>Description</h3>
                <hr>
@if($befound)
                {{$befound->short_desc}}
@endif                

                <hr>
                <h6>KEYSKILL</h6>
                @foreach($keyskill as $item)
                  <span class="badge bg-green">{{$item->name}}</span>
                @endforeach
                <hr>


                <h6>INTEREST</h6>
                @foreach($interest as $item)
                  <span class="badge bg-green">{{$item->name}}</span>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- grid Profile -->
      <!-- single Form Start-->
    </div>
  </div>
</div>
</div>
</div>
</div>
<!-- --------------- Explore GGF End----------------- -->
@endsection()

