@extends('admin.master')
@section('admin_content')
@section('style')
<!-- datatable Style  -->
@include('orgadmin.asset.datatable-style')
<!-- datatable Style  -->
@endsection
@section('projects_show') show @endsection

  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">

<br>
<h4>LIST OF PROJECT APPLICATION</h4>
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
      <th scope="col">Project name</th>
      <th scope="col">Status</th>
      <th scope="col">Applicant Person</th>
      <th scope="col">Applicant Email</th>
      <th scope="col" width=""></th>
    </tr>
  </thead>
  <tbody>
@php 
  $i =1;
@endphp
@foreach($application as $item)
<tr>
  <td>{{$i++}}</td>
  <td>
    <img src="{{asset('img/upload/Project/'.$item->project->image)}}" width="50px">
  </td>
  <td>{{$item->project->name}}</td>
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
    <a href="{{route('admin.project.single.application',$item->id)}}" class="btn btn-green">
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


</div>
</div>
@endsection()

@section('scripts')
  @include('orgadmin.asset.datatable-script')



<script src='https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js'></script>
<script src='https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js'></script>

@endsection
