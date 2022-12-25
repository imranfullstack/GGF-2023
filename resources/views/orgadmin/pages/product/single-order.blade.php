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
    <li class="breadcrumb-item">Orders</li>
    <li class="breadcrumb-item active" aria-current="page"><b>
    {{$order->product->name}}</b></li>
  </ol>
</nav>
<hr>


@include('orgadmin.asset.message')


<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">

<table class="table">

	  <thead>
    <tr class="bg-green">
      <th  colspan="2">LABEL</th>
    </tr>
  </thead>
            <tbody>
            	
              <tr>
                <th scope="row">Product Name</th>
                <td>
                	{{$order->product->name}}
                </td>
              </tr>
              <tr>
                <th scope="row">Name</th>
                <td>
                	{{$order->name}}
                </td>
              </tr>
              <tr>
                <th scope="row">Email</th>
                <td>
                	{{$order->email}}
                </td>
              </tr>
              <tr>
                <th scope="row">Phone</th>
                <td>
                	{{$order->phone}}
                </td>
              </tr>              
              <tr>
                <th scope="row">Quantity</th>
                <td>
                	{{$order->quantity}}
                </td>
              </tr>         
              <tr>
                <th scope="row">Delivery address</th>
                <td>
                	{{$order->delivery_address}}
                </td>
              </tr>         
              <tr>
                <th scope="row">Special Requests</th>
                <td>
                	{{$order->special_request}}
                </td>
              </tr>   
              <tr>
                <th scope="row">Requirements</th>
                <td>
                	{{$order->requirement}}
                </td>
              </tr>
              <tr>
                <th scope="row">Comments</th>
                <td>
                	{{$order->comment}}
                </td>
              </tr>
              <tr>
                <th scope="row">Question</th>
                <td>
                	{{$order->question}}
                </td>
              </tr>

<form action="{{route('orgadmin.organisation.product.status.order',['orderid'=>$order->id,'id'=>$org->id])}}" method="post">
  @csrf  

              <!-- single Form -->
              <tr>
                <th scope="row">Status</th>
                <td>
                  <select class="form-select" name="status">
                    <option value="0" {{ ($order->status == 0) ? 'selected' : ''}}>Pendding</option>
                    <option value="2" {{ ($order->status == 2) ? 'selected' : ''}}>Contacted</option>
                    <option value="1" {{ ($order->status == 1) ? 'selected' : ''}}>Approve</option>
                    <option value="3" {{ ($order->status == 3) ? 'selected' : ''}}>Closed</option>
                  </select>
                </td>
              </tr>
              <!-- single Form -->
              <tr>
                <th colspan="2">

                  <button type="submit" class="btn btn-green btn-block">Save</button>
                </th>
              </tr>
              <!-- single Form End-->
</form>


          </tbody>
          </table>

<br>
<br>
    </div>
  </div>

</div>

              </div>
          </div>
<!-- --------------- Explore GGF End----------------- -->
@endsection()


@section('scripts')
  @include('orgadmin.asset.datatable-script')
@endsection

