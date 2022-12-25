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
.single-data-aria {
    padding: 15px 0;
}

.single-data-aria label {
    color: #000;
    font-weight: 600;
    margin-bottom: 11px;
}
.btn-blank {
    width: 100%;
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

<button type="button" class="btn btn-green bank-mananage" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add bank
</button>


<hr>

<form method="post" action="{{route('orgadmin.organisation.bank.store',$org->id)}}">
  @csrf

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <!-- single Input Aria -->
          <div class="single-data-aria">
            <label>Bank Name</label>
            <input type="text" class="form-control" name="bank_name" required>
          </div>
          <!-- single input aria End-->
          <!-- single Input Aria -->
          <div class="single-data-aria">
            <label>Bank Account Name</label>
            <input type="text" class="form-control" name="bank_account_name" required>
          </div>
          <!-- single input aria End-->
          <!-- single Input Aria -->
          <div class="single-data-aria">
            <label>Bank BSB No.</label>
            <input type="text" class="form-control" name="bank_bsb_no" required>
          </div>
          <!-- single input aria End-->
          <!-- single Input Aria -->
          <div class="single-data-aria">
            <label>Bank Account Number</label>
            <input type="text" class="form-control" name="bank_ac_no" required>
          </div>
          <!-- single input aria End-->
          <!-- single Input Aria -->
          <div class="single-data-aria">
            <label>Bank B Pay ID</label>
            <input type="text" class="form-control" name="bank_b_pay_id" required>
          </div>
          <!-- single input aria End-->
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">CLOSE</button> -->
        <button type="submit" class="btn btn-green btn-blank">SAVE BANK</button>
      </div>
    </div>
  </div>
</div>


</form>
<br>


@include('orgadmin.asset.message')


<div class="table-aria-for-info-section">


<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover">
  <thead>
    <tr class="bg-green">
      <th scope="col">#</th>
      <th scope="col">Bank Name</th>
      <th scope="col">Account Name</th>
      <th scope="col">Ammount No.</th>
      <th scope="col" ></th>
    </tr>
  </thead>
  <tbody>
@php
  $i = 1;
@endphp
@foreach($bank as $data)
  	<tr>
  		<td>{{$i++}}</td>
  		<td>{{$data->bank_name}}</td>
      <td>{{$data->bank_account_name}}</td>
      <td>{{$data->bank_ac_no}}</td>
  		<td>
        <button type="button" class="btn btn-green" data-bs-toggle="modal" data-bs-target="#datamodal-{{$data->id}}">
          View
        </button>
  		</td>
  	</tr>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="datamodal-{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal {{$data->id}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
  <div class="modal-body">
          <!-- single Input Aria -->
          <div class="single-data-aria">
            <label>Bank Name</label>
            <input type="text" class="form-control"  disabled value="{{$data->bank_name}}">
          </div>
          <!-- single input aria End-->
          <!-- single Input Aria -->
          <div class="single-data-aria">
            <label>Bank Account Name</label>
            <input type="text" class="form-control" disabled value="{{$data->bank_account_name}}">
          </div>
          <!-- single input aria End-->
          <!-- single Input Aria -->
          <div class="single-data-aria">
            <label>Bank BSB No.</label>
            <input type="text" class="form-control" required="" disabled value="{{$data->bank_bsb_no}}">
          </div>
          <!-- single input aria End-->
          <!-- single Input Aria -->
          <div class="single-data-aria">
            <label>Bank Account Number</label>
            <input type="text" class="form-control" required="" disabled value="{{$data->bank_ac_no}}">
          </div>
          <!-- single input aria End-->
          <!-- single Input Aria -->
          <div class="single-data-aria">
            <label>Bank B Pay ID</label>
            <input type="text" class="form-control"  disabled value="{{$data->bank_b_pay_id}}">
          </div>
          <!-- single input aria End-->
      </div>
      <div class="modal-footer">
        <form method="post" action="{{route('orgadmin.organisation.bank.destroy',$org->id)}}">
          @csrf
          <input type="hidden" value="{{$data->id}}"  name="bankid">
        <button type="submit" class="btn btn-danger btn-blank"><i class="fa fa-trash"></i>  Remove This Bank </button>

        </form>
      </div>
    </div>
  </div>
</div>

@endforeach    


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
