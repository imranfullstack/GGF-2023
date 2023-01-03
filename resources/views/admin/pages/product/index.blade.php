@extends('admin.master')
@section('admin_content')
@section('style')
  <!-- datatable Style  -->
     @include('orgadmin.asset.datatable-style')
  <!-- datatable Style  -->
@endsection
@section('product_show') show @endsection()

  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">

<br>
<h4>List of Product's </h4>
<hr>



@include('admin.asset.message')
<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">
     <table class="table table-hover">
  <thead>
    <tr class="bg-green">
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Product Name</th>
      <th scope="col">Organisation Name</th>
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
        <a href="{{route('org.index',$item->organisation->slug)}}"  class="view-btn-table" target="_blank">
            {{$item->organisation->org_name}}
        </a>
      </td>
      <td>



    @if($item->status == 1)
            <span class="badge bg-success">Active</span>
        @elseif($item->status == 2)
            <span class="badge bg-warning">Paused</span>
        @elseif($item->status == 4)
            <span class="badge bg-danger">Suspended</span>
        @else
            <span class="badge bg-danger">Close</span>
        @endif




      </td>
      <td>{{$item->price}} AUD</td>
        @php
          $application = App\Models\Productbuy::where('product_id',$item->id)->count();
        @endphp

      <td>

            <a href="{{route('admin.product.order',$item->id)}}">
                <span class="badge bg-green">{{$application}} </span>
            </a>
      </td>

      <td>{{$item->stock}}</td>
      <td class="actiontable-dksld">
        <a href="{{route('org.product.single',['productslug'=>$item->slug,'slug'=>$item->organisation->slug])}}" class="view-btn-table" target="_blank">View Product</a>
          <span>|</span>
        <a href="{{route('admin.product.edit',$item->id)}}" class="view-btn-table">Edit Product</a>
      </td>
    </tr>
@endforeach    


  </tbody>
</table>
    </div>
  </div>

</div>


</div>
</div>
@endsection()

@section('scripts')
  @include('orgadmin.asset.datatable-script')



<script src='https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js'></script>
<script src='https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js'></script>

@endsection
