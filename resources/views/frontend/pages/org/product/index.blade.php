@extends('frontend.org-master')


<!-- ------ Page Nav -->
@section('pagenav')
  Product
@endsection
<!-- ------ Page Nav End-->

@section('style')
  <style type="text/css">
    .project-image-dksldkfd img {
        width: 100%;
        height: 177px;
    }
  </style>
@endsection


@section('main_content')

@include('frontend.asset.org-page-nav')





<section class="main-body">
         <div class="container">


               <!-- for job possition Section Start -->
               <div class="job-position-dksld0c">
                  <div class="title-dkdksldkfdf2">
                     <h2>Total Product - {{$product->count()}}</h2>
                  </div>
				</div>
            <div class="row">
               <div class="project-section">
                  <div class="project-items-section">
@foreach($product as $item)                  	
                     <!-- -------- Single Item Start-------- -->
                     <div class="project-item itemgridstyle">
                        <div class="row">
                           <div class="col-md-3">
                              <div class="project-image-dksldkfd">
                                 <img src="{{asset('img/upload/product/'.$item->thumbnail)}}">
                              </div>
                           </div>
                           <div class="col-md-9">
                              
                              <div class="content-box-ddks">
                              	<div class="product-t-p">
                              		<div class="row">
                              			<div class="col-md-6">
                              				<h5>{{$item->name}}

                                        @if($item->stock <= 0)
                                          Out Of Stock
                                        @else
                                          Stock ( {{$item->stock}} )
                                        @endif
                                          


                                      </h5>
                              			</div>
                              			<div class="col-md-6 price">
                              				<h5>{{$item->price}}</h5>
                              			</div>
                              		</div>
                              	</div>
                                 <p>
                                 	{{$item->short_desc}}
                                 </p>


                      				<div class="btn-btm-purchase">
					                    <!-- Button trigger modal -->
										<a type="button" class="btn-greend-ds" href="{{route('org.product.single',['productslug'=>$item->slug,'slug'=>$org->slug])}}">
										  Details
										</a>
                      				</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- -------- Single Item end-------- -->



<!-- Modal -->
<div class="modal fade" id="buynowbtn_{{$item->id}}" tabindex="-1" aria-labelledby="buynowbtn_{{$item->id}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="buynowbtn_{{$item->id}}">Product - {{$item->name}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<div class="product-body-popup">

          <table class="table">
            <tbody>
            	<h5>SHIPPING ADDRESS</h5>
              <tr>
                <th scope="row">Name</th>
                <td>
                	<input type="text" class="form-control" name="">
                </td>
              </tr>
              <tr>
                <th scope="row">Address</th>
                <td>
                	<input type="text" class="form-control" name="">
                </td>
              </tr>
              <tr>
            </tbody>
          </table>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


@endforeach                     


                  </div>
               </div>

    



            </div>



         </div>
         
      </section>


@endsection