@extends('orgadmin.master')
@section('style')
<!-- datatable Style  -->
@include('orgadmin.asset.datatable-style')
<!-- datatable Style  -->
@endsection



@section('orgadmin_org_product') active-nav @endsection
@section('org_admin_content')
<!-- ------ Banner Aria Start ------ -->


          <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">




<br>
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">DASHBOARD</li>
    <li class="breadcrumb-item active" aria-current="page"><b>
    Product</b></li>
  </ol>
</nav>
<hr>

<div class="row">
  <div class="add-btn-new">
    <a href="{{route('orgadmin.organisation.product.create',$org->id)}}" class="addbtn btn btn-success btn-green"> <i class="fas fa-plus"></i>  NEW </a>
  </div>
</div>


<br>

@include('orgadmin.asset.message')

<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover">
  <thead>
    <tr class="bg-green">
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Product Name</th>
      <th scope="col">Status</th>
      <th scope="col">Price</th>
      <th scope="col">Orders</th>
      <th scope="col">Stock</th>
      <th scope="col" ></th>
    </tr>
  </thead>
  <tbody>
@php $i = 1 @endphp
@foreach($product as $item)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>


        @if($item->thumbnail)
        <img src="{{asset('img/upload/product/'.$item->thumbnail)}}" width="50px" height="30px">
        @else
        <img src="{{asset('img/default.jpg')}}" width="50px">
        @endif
      </td>
      <td>{{$item->name}}</td>
      <td>



    @if($item->status == 1)
            <span class="badge bg-success">Active</span>
        @elseif($item->status == 2)
            <span class="badge bg-warning">Paused</span>
        @else
            <span class="badge bg-danger">Close</span>
        @endif




      </td>
      <td>{{$item->price}} AUD</td>
        @php
          $application = App\Models\Productbuy::where('id',$item->id)->count();
        @endphp

      <td>

            <a href="{{route('orgadmin.organisation.product.orders',$org->id)}}">
                <span class="badge bg-green">{{$application}} </span>
            </a>
      </td>

      <td>{{$item->stock}}</td>
      <td class="actiontable-dksld">
        <a href="{{route('org.product.single',['productslug'=>$item->slug,'slug'=>$org->slug])}}" class="view-btn-table" target="_blank">View</a> <span>|</span> <a href="{{route('orgadmin.organisation.product.edit',['productid'=>$item->id,'id'=>$org->id])}}" class="view-btn-table">Edit</a></span> 
      </td>
    </tr>
@endforeach    


  </tbody>
</table>
    </div>
  </div>

</div>
<br><br>
              </div>
          </div>

<!-- --------------- Explore GGF End----------------- -->
@endsection()


@section('scripts')
  @include('orgadmin.asset.datatable-script')
@endsection

