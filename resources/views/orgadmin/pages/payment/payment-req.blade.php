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
button.payment-btn {
    background: #6e933e;
    display: inline-block;
    padding: 10px 30px;
    color: #fff;
    text-decoration: none;
    border-radius: 50px;
    margin-top: 26px;
    border: none;
}

button.payment-btn:hover {
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
.widthpayment {
    width: 35%;
    margin: 0 auto;
    margin-top: 18px;
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
</h2>
<hr>


<br>


@include('orgadmin.asset.message')


<form action="{{route('orgadmin.organisation.payment.store',$org->id)}}" method="post">
  @csrf
  
<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">
@php
	$productbal = App\Models\Productbalence::where('organisation_id',$org->id)->first();
	$eventbal = App\Models\Eventbalance::where('organisation_id',$org->id)->first();
    $servicebal = App\Models\Servicebalance::where('organisation_id',$org->id)->first();
@endphp
    	<div class="total-balence">
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
    		<input type="number" value="500" name="ammount" class="form-control widthpayment" >
      <!-- Select Wallet -->
      		<select class="form-select widthpayment" name="wallet">
      			<option disabled selected>Select Wallet</option>
            		@if($productbal)
            			<option value="1">Product Wallet   ( Balance - {{$productbal->product_bal}} AUD ) </option>
            		@endif
            		@if($eventbal)
            			<option value="2">Event Wallet-  ( Balance -  {{$eventbal->event_bal}} AUD ) </option>
            		@endif
                @if($servicebal)
                    <option value="3"> Service Wallet-  ( Balance -  {{$servicebal->service_bal}} AUD ) </option>
                @endif
      		</select>
      <!-- Select Bank Code -->
      		<select class="form-select widthpayment" name="selectbank">
      			<option disabled selected>Select bank</option>
            @foreach($bank as $item)
        			<option value="{{$item->id}}">
                  {{$item->bank_name}} || AC: {{$item->bank_ac_no}}
              </option>
            @endforeach
      		</select>
    		<br>
    		<button type="submit" class="payment-btn">GET PAID NOW</button>
    	</div>
<br>
<br>
    </div>

  </div>

</div>

</form>
              </div>
          </div>

<!-- --------------- Explore GGF End----------------- -->
@endsection()


@section('scripts')
  @include('orgadmin.asset.datatable-script')
@endsection
