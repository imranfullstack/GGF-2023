@extends('orgadmin.master')
@section('style')
<!-- datatable Style  -->
@include('orgadmin.asset.datatable-style')
<!-- datatable Style  -->
@endsection
@section('orgadmin_org_service') active-nav @endsection
@section('org_admin_content')
<!-- ------ Banner Aria Start ------ -->
          <div class="col-md-10 right-aria-sldksd">
            <div class="content-body-dskd">
            
<br>
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">DASHBOARD</li>
    <li class="breadcrumb-item">service</li>
    <li class="breadcrumb-item active" aria-current="page"><b>
    Orders</b></li>
  </ol>
</nav>
<hr>

              <div class="find-people">

<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover">
  <thead>
    <tr class="bg-green">
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Project</th>
      <th scope="col">Status</th>
      <th scope="col">Name</th>
      <th scope="col"> Email</th>
      <th scope="col" ></th>
    </tr>
  </thead>
  <tbody>
@php 
	$i = 1;
@endphp  	
@foreach($service as $item)  	
  	<tr>
  		<td>{{$i++}}</td>
    <td>
         <img src="{{asset('img/upload/service/'.$item->service->image)}}" width="50px">
    </td>
  		<td>{{$item->service->name}}</td>
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
  		<td>{{$item->name}}</td>
  		<td>{{$item->email}}</td>
  		<td>
  			<a href="{{route('orgadmin.organisation.service.single.order',['orderid'=>$item->id,'id'=>$org->id])}}" class="btn btn-green">
  				<i class="fa fa-eye"></i>
  			</a>
  		</td>
  	</tr>
@endforeach  	

  </tbody>
</table>
<br>
<br>
    </div>
  </div>

</div>
                <br>
              </div>
            </div>
          </div>


@endsection()

@section('scripts')

@include('orgadmin.asset.datatable-script')


@endsection