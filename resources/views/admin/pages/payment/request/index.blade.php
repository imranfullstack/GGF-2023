@extends('admin.master')
@section('admin_content')
@section('style')
<!-- datatable Style  -->
@include('orgadmin.asset.datatable-style')
<!-- datatable Style  -->
@endsection

@section('payment_show')  show @endsection()


  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">

<br>
<h4>Withdrow Request LIST</h4>
<hr>



@include('admin.asset.message')
<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">


      <table class="table table-hover">
  <thead>
    <tr class="bg-green">
      <th scope="col">#</th>
      <th scope="col">Organisation</th>
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
@php
	$org = App\Models\Organisation::where('id',$item->organisation_id)->first();
@endphp  	
  	<tr>
  		<td>{{$i++}}</td>
  		<td>
  			<a href="{{route('org.index',$org->slug)}}" target="_blank"  class="view-btn-table">
  					{{$org->org_name}}
  			</a>

  		</td>
      <td>
        {{ Carbon\Carbon::parse($item->created_at)->format('d M Y') }}
      </td>
  		<td>
        @if($item->status == 0)
          <span class="badge badge-warning">Pendding</span>
        @elseif($item->status == 1)
          <span class="badge badge-green">Approved</span>
        @else
          <span class="badge badge-danger">Declined</span>
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

			        @if($item->status == 0)
			          <span class="badge badge-warning">Pendding</span>
			        @elseif($item->status == 1)
			          <span class="badge badge-green">Approve</span>
			        @else
			          <span class="badge badge-danger">Reject</span>
			        @endif
            </p>
          </div>
          <!-- End -->
          <!-- Start -->
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label width-bold"> Ammount Withdraw Wallet</label>
<p>
	@if($item->wallet == 1)
		<span class="badge badge-green">Product Wallet</span>
	@elseif($item->wallet == 2)
		<span class="badge badge-green">Exprience & Event Wallet</span>
	@elseif($item->wallet == 3)
		<span class="badge badge-green">Service Wallet</span>
	@endif
</p>
          </div>
          <!-- End -->
<form method="post" action="{{route('admin.payment.request.store',$item->id)}}">
  @csrf
          <!-- Start -->
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label width-bold"> Change Status</label>

            <select class="form-select" name="status">
              <option value="0" selected>Pending</option>
              <option value="1">Approved</option>
              <option value="2">Declined</option>
            </select>
          </div>
          <!-- End -->
          <!-- Start -->
          <div class="mb-3">
            <button class="btn btn-green btn-block">Save</button>
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
