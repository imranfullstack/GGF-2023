@extends('frontend.org-master')
@section('main_content')
<!-- ------ Page Nav -->
@section('pagenav')
{{$product->name}} 
@endsection
<!-- ------ Page Nav End-->
@section('style')
	<style type="text/css">
		.project-image-dksldkfd img {
		    width: 100%;
		    height: 177px;
		}
    span.cat-single-dlsdk {
      background: #84b04a;
      color: #fff;
      font-weight: 600;
      padding: 4px 25px;
      display: inline-block;
      margin: 6px 3px;
      font-size: 15px;
      border-radius: 50px;
  }
  h5.locationandemail-skdlsd i {
      padding: 8px 9px;
      display: inline-block;
      color: #6abb00;
  }
  span.stock-product {
    font-size: 13px;
    color: #000;
    font-weight: 700;
    text-transform: uppercase;
}
	</style>
@endsection
@include('frontend.asset.org-page-nav')





<section class="main-body">
         <div class="container">

            <div class="row">
               <div class="project-section">
                  <div class="project-items-section">               	
                     <!-- -------- Single Item Start-------- -->
                     <div class="project-item">
                        <div class="row">
                           <div class="col-md-3">
                              <div class="project-image-dksldkfd">
                                 <img src="{{asset('img/upload/product/'.$product->thumbnail)}}">
                              </div>
                           </div>
                           <div class="col-md-9">
                              
                              <div class="content-box-ddks">
                              	<div class="product-t-p">
                              		<div class="row">
                              			<div class="col-md-6">
                              				<h5>{{$product->name}} 
                                        @if($product->stock >= 0)
                                           <span class="stock-product">( In Stock: {{$product->stock}} )</span>
                                        @elseif($product->stock <= 0)
                                            Out Of Stock
                                        @endif
                                          

                                          </h5>
                              			</div>
                              			<div class="col-md-6 price">
                              				<h5>{{$product->price}} AUD</h5>
                              			</div>
                              		</div>
                              	</div>
                            
                                <br>
                                <h5 class="locationandemail-skdlsd"> <i class="fa fa-map-marker-alt"></i> {{$product->location}}  <i class="fa fa-envelope"></i> {{$product->contact_email}}</h5>

                                 <p>
                                  {{$product->long_version}}
                                 </p>


@php
  $category = App\Models\Producthavecategory::where('product_id',$product->id)->get();

@endphp                                
                              <div class="category-product">
                                <h5 class="locationandemail-skdlsd">Labels:
                                    @foreach($category as $item)
                                      @foreach($item->productcat as $data)
                                  <span class="cat-single-dlsdk">
                                      {{$data->name}}
                                  </span>
                                      @endforeach
                                    @endforeach

                                </h5>


                              </div>


                      				<div class="btn-btm-purchase">
					                    <!-- Button trigger modal -->
									@if(Auth::user())
                    <a type="button" class="btn-green apply-btn-style-dksld" data-bs-toggle="modal" data-bs-target="#buynowbtn_{{$product->id}}">
                      PURCHASE
                    </a>
                  @else
                  <a href="{{route('login')}}" class="btn-green apply-btn-style-dksld">
                      Login
                    </a>
                  @endif
                      				</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- -------- Single Item end-------- -->


<form action="{{route('org.product.buy',['productslug'=>$product->slug,'slug'=>$org->slug])}}" method="post">
  @csrf

<!-- Modal -->
<div class="modal fade" id="buynowbtn_{{$product->id}}" tabindex="-1" aria-labelledby="buynowbtn_{{$product->id}}" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="buynowbtn_{{$product->id}}">Ogranistion - {{$org->org_name}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<div class="product-body-popup">

          <div class="row">
              <div class="col-md-3">
                <img src="{{asset('img/upload/org/logo/'.$org->logo)}}" width="100px">
              </div>
              <div class="col-md-9">
                <h4>Product: {{$product->name}}</h4>
                <hr>
                <b>Product Description</b> <br> 
                {{$product->short_desc}}
              </div>
            </div>

            <hr>

          <table class="table">
            <tbody>
            	<h5>SHIPPING ADDRESS</h5>
              <tr>
                <th scope="row">Name</th>
                <td>
                	<input type="text" class="form-control" name="name">
                </td>
              </tr>
              <tr>
                <th scope="row">Email</th>
                <td>
                	<input type="email" class="form-control" name="email">
                </td>
              </tr>
              <tr>
                <th scope="row">Phone</th>
                <td>
                  <input type="text" class="form-control" name="phone">
                </td>
              </tr>              
              <tr>
                <th scope="row">Quantity</th>
                <td>
                  <input type="number" class="form-control" name="quantity">
                </td>
              </tr>         
              <tr>
                <th scope="row">Delivery address</th>
                <td>
                  <input type="text" class="form-control" name="delivery_address">
                </td>
              </tr>         
              <tr>
                <th scope="row">Comments / Questions </th>
                <td>
                  <textarea class="form-control" rows="3" name="comment_question"></textarea>
                </td>
              </tr>
              <tr>
            </tbody>
          </table>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>



        @if(Auth::user())
          <button type="submit" class="btn btn-green">  <i class="fab fa-paypal"></i> Pay With Paypal</button>
        @else
          <a href="{{route('login')}}" class="btn btn-green">  <i class="fas fa-lock-alt"></i> Login </a>
        @endif



      </div>
    </div>
  </div>
</div>


</form>
                  


                  </div>
               </div>

    



            </div>



         </div>
         
      </section>


@endsection