
@if($org->products == 1) 
           <div class="business-product-aria-section">
                  
                  <div class="title-dkdksldkfdf2">
                     <h2>Products</h2>
                  </div>

                  <div class="product-items">
@php 
	
	$product = App\Models\Product::orderby('id','desc')->where('organisation_id',$org->id)->limit(4)->get();
	
@endphp  
                    <div class="row">


@foreach($product as $item)

                     <!-- -------- Single Item Start-------- -->
                     <div class="project-item">
                        <div class="row">
                           <div class="col-md-2">
                              <div class="project-image-dksldkfd">

                            @if($item->thumbnail)
                                <div class="product-img" style="background: url({{asset('img/upload/product/'.$item->thumbnail)}})no-repeat center center/cover; width: 100%;height: 150px"></div>
                            @else 
                                <div class="product-img" style="background: url({{asset('img/default.jpg')}})no-repeat center center/cover; width: 100%;height: 150px"></div>
                             @endif

                              </div>
                           </div>
                           <div class="col-md-10">
                              
                              <div class="content-box-ddks">
                              	<div class="product-t-p">
                              		<div class="row">
                              			<div class="col-md-6">
                              				<h5>{{$item->name}} - 

                                        @if($item->stock <= 1)
                                          Out Of Stock
                                        @else
                                          Stock ( {{$item->stock}} )
                                        @endif
                                          

                                      </h5>
                              			</div>
                              			<div class="col-md-6 price">
                              				<h5>{{$item->price}} AUD</h5>
                              			</div>
                              		</div>
                              	</div>
                                <div class="product-body">

                                 <p>{{$item->short_desc}}</p>
                                </div>


                      				<div class="btn-btm-purchase">

                                     @if($item->stock <= 1)
                                          <a class="btn-green apply-btn-style-dksld">OUT OF STOCK</a>
                                        @else
                                          <a href="{{route('org.product.single',['productslug'=>$item->slug,'slug'=>$org->slug])}}" class="btn-green apply-btn-style-dksld">
                                            Details
                                          </a>
                                        @endif


					                    <!-- Button trigger modal -->
								
                      				</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- -------- Single Item end-------- -->
                    	<!-- Single Product Start -->
@endforeach   

</div>                 	
                    	<!-- Single Product Start -->



<div class="col-md-12">
	<div class="read-more-section right">
		<a href="{{route('org.product.index',$org->slug)}}" class="btn-green apply-btn-style-dksld">Read More</a>
	</div>
</div>




   



                    </div>
                  </div>


               </div>
@endif               