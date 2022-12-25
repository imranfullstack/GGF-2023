      <div class="map-right-ariaddfd">

                       <iframe src="//maps.google.com/maps?q={{$org->lat}},{{$org->long}}&z=15&output=embed" width="100%" height="320"></iframe>



                     </div>
                     <br>
@php 
  $post = App\Models\Post::where('organisation_id',$org->id)->first();
@endphp

@if($post)  
                        <hr>                   
                     <div class="right-blog-skdlskld">
                        <h5>Latest News</h5>

@php 
	$blog = App\Models\Post::orderby('id','desc')->where('organisation_id',$org->id)->where('status',1)->limit(1)->get();
@endphp                     
@foreach($blog as $item)   


 <div class="single-blog-business-page">
 <div class="card" style="width: 100%;">


@if($item->image)
  <div class="img-blog-sd" style="background: url({{asset('img/upload/post/'.$item->image)}})  no-repeat center center/cover">
    </div>

@else
  <img src="https://clicxy.com/wp-content/uploads/2016/04/dummy-post-horisontal.jpg">
@endif


  <div class="card-body">
    <h5 class="card-title"><a href="{{route('org.post.single',['postslug'=>$item->slug,'slug'=>$org->slug])}}">{{$item->title}}</a></h5>
    <p class="card-text">{{Str::limit($item->short_desc, 70, $end='...')}}</p>
  </div>
</div>
</div>


@endforeach                        


<div class="col-md-12">
	<div class="read-more-section blog left">
		<a href="{{route('org.post.index',$org->slug)}}" class="btn-green apply-btn-style-dksld">All News</a>
	</div>
</div>   


                     </div>
                   
@endif 