@extends('admin.master')
@section('style')
<!-- datatable Style  -->
@include('orgadmin.asset.datatable-style')
<!-- datatable Style  -->
@endsection
@section('admin_content')
@section('orgtype_show') show @endsection



          <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">




<br>
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">DASHBOARD</li>
    <li class="breadcrumb-item active" aria-current="page"><b> Organisation Type</b></li>
  </ol>
</nav>
<hr>

<div class="row">
  <div class="add-btn-new">

<!-- Button trigger modal -->
<button type="button" class=" addbtn btn btn-success btn-green" data-bs-toggle="modal" data-bs-target="#exampleModal">
  <i class="fas fa-plus"></i> NEW
</button>
  </div>
</div>





<form action="{{route('admin.orgtype.store')}}" method="post">
	@csrf
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Add new type</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	      	<input type="text"  name="name" class="form-control">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-green">Add New</button>
	      </div>
	    </div>
	  </div>
	</div>
</form>



<br>

@include('admin.asset.message')

<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover">
  <thead>
    <tr class="bg-green">
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Status</th>
      <th scope="col">Organisatin</th>
      <th scope="col" ></th>
    </tr>
  </thead>
  <tbody>
  	@php
  	$i = 1;
  	@endphp
@foreach($type as $item)  	
    <tr>
    	<td>{{$i++}}</td>
    	<td>{{$item->name}}</td>
    	<td>


    	@if($item->status == 1)
            <span class="badge bg-success">Active</span>
        @else
            <span class="badge bg-danger">not Active</span>
        @endif



    	</td>
    	<td>dd</td>
    	<td style="text-align: right;">

      		<!-- Button trigger modal -->
<a  style="cursor: pointer;"  class="view-btn-table" data-bs-toggle="modal" data-bs-target="#type-{{$item->id}}">
   Edit
</a>


    	</td>
    </tr>



	
	<!-- Modal -->
	<div class="modal fade" id="type-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Add new typed</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>

<form action="{{route('admin.orgtype.update',$item->id)}}" method="post">
	@csrf
	      <div class="modal-body">
	      	<input type="text"  name="name" class="form-control" value="{{$item->name}}">
	      	<br>
	      	<select name="status" class="form-select">
	      		<option value="1" {{ ($item->status == 1) ? 'selected' : ''}}>Active</option>
	      		<option value="2" {{ ($item->status == 0) ? 'selected' : ''}}>Not Active</option>
	      	</select>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-green">Update</button>
	      </div>

</form>	      
	    </div>
	  </div>
	</div>

@endforeach    


  </tbody>
</table>
    </div>
  </div>

</div>
<br><br>
              </div>
          </div>



@endsection()


@section('scripts')
  @include('orgadmin.asset.datatable-script')



<script src='https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js'></script>
<script src='https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js'></script>

@endsection

