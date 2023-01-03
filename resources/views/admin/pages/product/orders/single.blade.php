@extends('admin.master')
@section('admin_content')
@section('product_show') show @endsection()

  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">

<br>
<h4>Product Order Details</h4>
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


              <!-- single Form -->
              <tr>
                <th scope="row">Status</th>
                <td>
                  <select class="form-select" name="status" disabled>
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

                  <a href="{{route('admin.product.order',$order->product_id)}}" class="btn btn-green btn-block">GO BACK</a>
                </th>
              </tr>
              <!-- single Form End-->

          </tbody>
          </table>
    </div>
  </div>
  <br>

</div>


</div>
</div>
@endsection()