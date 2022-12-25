<div class="col-md-6">
  <div class="left-banner">


@if($org->banner_1)  
    <div class="top-banner-dksldc left-banner-dksd" style="background: url({{asset('img/upload/org/images/'.$org->banner_1)}}) no-repeat center center/cover;">
    </div>
@else
    <div class="top-banner-dksldc left-banner-dksd">
      <img src="{{asset('img/default.jpg')}}">
    </div>
@endif    


@if($org->banner_2)  

    <div class="btm-banner-dksd0c left-banner-dksd" style="background: url({{asset('img/upload/org/images/'.$org->banner_2)}}) no-repeat center center/cover;">
    </div>
@else
    <div class="btm-banner-dksd0c left-banner-dksd">
      <img src="{{asset('img/default.jpg')}}">
    </div>

@endif   
  </div>
</div>
<div class="col-md-6">
  <div class="right-banner">

@if($org->banner_3)  

    <div class="right-banner-image-dksld" style="background: url({{asset('img/upload/org/images/'.$org->banner_3)}}) no-repeat center center/cover;height: 310px">
    </div>


@else


    <div class="right-banner-image-dksld">
      <img src="{{asset('img/default.jpg')}}">
    </div>

@endif   
  </div>
</div>