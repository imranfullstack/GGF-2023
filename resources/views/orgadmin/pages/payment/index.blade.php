@extends('orgadmin.master')
@section('style')

<style type="text/css">
	.total-balence {
    text-align: center;
}

.total-balence span {
    color: #000;
    font-weight: 700;
    font-size: 30px;
}
a.payment-btn {
    background: #6e933e;
    display: inline-block;
    padding: 10px 30px;
    color: #fff;
    text-decoration: none;
    border-radius: 50px;
    margin-top: 26px;
}

a.payment-btn:hover {
    background: #416610;
    transition: .3s;
}
span.payment-reject {
    background: #bd0000;
    padding: 5px 22px;
    display: inline-block;
    color: #fff;
    text-transform: uppercase;
    font-size: 10px;
    border-radius: 50px;
    font-weight: 700;
}
span.payment-approve {
    background: #589b03;
    padding: 5px 22px;
    display: inline-block;
    color: #fff;
    text-transform: uppercase;
    font-size: 10px;
    border-radius: 50px;
    font-weight: 700;
}
span.payment-pendding  {
    background: #b9ac18;
    padding: 5px 22px;
    display: inline-block;
    color: #fff;
    text-transform: uppercase;
    font-size: 10px;
    border-radius: 50px;
    font-weight: 700;
}
.total-balence.wallet span {
    font-weight: 500;
    font-size: 20px;
    text-transform: uppercase;
}


.content-body-dskd a {
    display: inline-block;
}

.content-body-dskd h2 {
    display: inline-block;
}
a.btn.btn-green.bank-mananage {
    margin-left: 16px;
    font-size: 12px;
    text-transform: uppercase;
}
.width-bold{
  font-weight: 700;
}


</style>


<!-- datatable Style  -->
@include('orgadmin.asset.datatable-style')
<!-- datatable Style  -->
@endsection()


@section('orgadmin_org_payment') active-nav @endsection
@section('org_admin_content')
<!-- ------ Banner Aria Start ------ -->


          <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">




<br>
<h2>
    @if($org->logo)
      <img src="{{asset('img/upload/org/logo/'.$org->logo)}}" width="60px" height="60px" style="margin:0px 20px">
         <span>  {{$org->org_name}} </span> 
    @else
        <span>  {{$org->org_name}} </span> 
    @endif     


</h2><a href="{{route('orgadmin.organisation.bank.index',$org->id)}}" class="btn btn-green bank-mananage">Manage Bank</a>
<hr>


<br>


@include('orgadmin.asset.message')


<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-6">

@php
	
  $productbal = App\Models\Productbalence::where('organisation_id',$org->id)->first();


	$eventbal = App\Models\Eventbalance::where('organisation_id',$org->id)->first();
	$servicebal = App\Models\Servicebalance::where('organisation_id',$org->id)->first();
@endphp

    	<div class="total-balence wallet" style="text-align: left;">
    

    		@if($productbal)

    			<span> Product Wallet : <b>{{$productbal->product_bal}} AUD</b></span>
    		@else
				<span>  Product Wallet : <b>0 AUD</b> </span>
    		@endif
    		<hr>
    		@if($eventbal)
    			<span> Exprience & Events Wallet: <b>{{$eventbal->event_bal}} AUD</b></span>
    		@else
				<span>  Exprience & Events Wallet : <b>0 AUD</b> </span>
    		@endif
    		<hr>
    		@if($eventbal)
    			<span> Service Wallet : <b>{{$servicebal->service_bal}} AUD</b></span>
    		@else
				<span>  Service Wallet : <b>0 AUD</b> </span>
    		@endif
    	</div>
<br>
<br>
    </div>
    <div class="col-md-6">

    	<div class="total-balence" style="float: right;text-align: right;">
    		<span> Available Balance: 
          @if($productbal && $eventbal && $servicebal)
            {{$productbal->product_bal + $eventbal->event_bal + $servicebal->service_bal}}
          @elseif($productbal && $eventbal) 
          product and event bal
            {{$productbal->product_bal + $eventbal->event_bal }}
          @elseif($servicebal && $eventbal) 
            {{$eventbal->event_bal + $servicebal->service_bal}}
          @elseif($productbal && $servicebal) 
          product and service
            {{$productbal->product_bal +  $servicebal->service_bal}}
          @elseif($productbal ) 
            {{$productbal->product_bal}}
          @elseif($eventbal)
            {{ $eventbal->event_bal }}
          @elseif($servicebal)
            {{$servicebal->service_bal}}
          @else
          0
          @endif
          
          AUD</span>
    		<br>
    		<a href="{{route('orgadmin.organisation.payment.req',$org->id)}}" class="payment-btn">GET PAID NOW</a>
    	</div>
<br>
<br>
    </div>

<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover">
  <thead>
    <tr class="bg-green">
      <th scope="col">#</th>
      <th scope="col">Assigned</th>
      <th scope="col">Status</th>
      <th scope="col">Ammount</th>
      <th scope="col" ></th>
    </tr>
  </thead>
  <tbody>
@php
  $i = 1;
@endphp
@foreach($payment as $item)
  	<tr>
  		<td>{{$i++}}</td>
  		<td>
{{ $item->created_at->format('d/m/Y')}}
      </td>
  		<td>
        @if($item->status == 0)
          <span class="payment-pendding">Pendding</span>
        @elseif($item->status == 1)
          <span class="payment-approve">Approve</span>
        @else
          <span class="payment-reject">Reject</span>
        @endif
  		</td>
  		<td>{{$item->ammount}} AUD</td>
  		<td>
        <button type="button" class="btn btn-green" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{$item->id}}">
          View
        </button>
  		</td>
  	</tr>


@php
  
  $bank = App\Models\Orgmanagebank::where('id',$item->bank)->first();

@endphp
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop-{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Bank Transfer Request</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label width-bold">Transfer Request Date</label>
            <p>
                {{ $item->created_at->format('d/m/Y')}}
            </p>
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label width-bold">Bank Name</label>
            <p>
                {{$bank->bank_name}}
            </p>
          </div>


          <!-- Start -->
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label width-bold"> Ammount</label>
            <p>{{$item->ammount}} AUD</p>
          </div>
          <!-- End -->


          <!-- Start -->
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label width-bold">Bank Account Holder</label>
            <p>
              {{$bank->bank_account_name}}
            </p>
          </div>
          <!-- Start -->
          <!-- Start -->
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label width-bold"> Account BSB Number</label>
            <p>
              {{$bank->bank_bsb_no}}
            </p>
          </div>
          <!-- Start -->
          <!-- Start -->
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label width-bold"> Account Number</label>
            <p>
              {{$bank->bank_ac_no}}
            </p>
          </div>
          <!-- Start -->
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label width-bold"> Withdraw Status</label>
            <p>
              {{$item->status}}
            </p>
          </div>
          <!-- End -->
          <!-- Start -->
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label width-bold"> Ammount Withdraw Wallet</label>
            <p>{{$item->wallet}}</p>
          </div>
          <!-- End -->
        </form>
      </div>
    </div>
  </div>
</div>


@endforeach    

<!--   	<tr>
  		<td>1</td>
  		<td>23/12/2022</td>
  		<td>
  		</td>
  		<td>260 AUD</td>
  		<td>
  			<a href="#">View</a>
  		</td>
  	</tr>

  	<tr>
  		<td>1</td>
  		<td>23/12/2022</td>
  		<td>
  		</td>
  		<td>260 AUD</td>
  		<td>
  			<a href="#">View</a>
  		</td>
  	</tr> -->

  </tbody>
</table>
    </div>
  </div>
<br>
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
