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
    <li class="breadcrumb-item">Product</li>
    <li class="breadcrumb-item active" aria-current="page"><b>
    Orders</b></li>
  </ol>
</nav>
<hr>


@include('orgadmin.asset.message')

<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover">
  <thead>

    <tr class="bg-green">
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Product</th>
      <th scope="col">QTY</th>
      <th scope="col">Name</th>
      <th scope="col">Payment</th>
      <th scope="col">Status</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @php $i =1 @endphp
@foreach($orders as $item)
  <tr>
    <td>{{$i++}}</td>
    <td>
         <img src="{{asset('img/upload/product/'.$item->product->thumbnail)}}" width="50px">
    </td>
    <td>
      {{$item->product->name}}
    </td>
    <td>

      {{$item->quantity}}
    </td>
    <td>{{$item->name}}</td>
    <td>

        @if($item->payment_status == 1)
            <span class="badge bg-success">Paid</span>
        @else
            <span class="badge bg-danger">Not Paid</span>
        @endif


    </td>
    <td>

    @if($item->status == 0)
      <span class="badge bg-primary">Pendding</span>
    @elseif($item->status == 1)
      <span class="badge bg-success">Approve</span>

    @elseif($item->status == 2)
      <span class="badge bg-info">Contacted</span>
    @elseif($item->status == 3)
      <span class="badge bg-danger">Closed</span>
    @endif


    </td>
    <td>
      <a href="{{route('orgadmin.organisation.product.single.order',['orderid'=>$item->id,'id'=>$org->slug])}}" class="btn btn-green"> 
        <i class="fa fa-eye"></i>
      </a>
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

