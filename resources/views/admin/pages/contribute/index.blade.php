@extends('admin.master')
@section('admin_content')
@section('style')
<!-- datatable Style  -->
@include('orgadmin.asset.datatable-style')
<!-- datatable Style  -->
@endsection
@section('contribute_show') show @endsection()

  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">

<br>
<h4>list of  contribute</h4>
<hr>



<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">


      <table class="table table-hover">
  <thead>
    <tr class="bg-green">
      <th scope="col">#</th>
      <th scope="col">Contribute Title</th>
      <th scope="col">Status</th>
      <th scope="col">Contact Parson</th>
      <th scope="col">Location</th>
      <th scope="col" width="30%"></th>
    </tr>
  </thead>
  <tbody>


@php $i = 1; @endphp
@foreach($contribute as $item)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$item->title}}</td>
      <td>{{$item->status}}</td>
      <td>{{$item->contact_parson}}</td>
      <td>{{$item->location_availability}}</td>
      <td class="actiontable-dksld">
        <a href="" class="view-btn-table">View contribute</a> 
        <span>|</span>
        <a href="{{route('admin.contribute.edit',$item->id)}}" class="view-btn-table">Edit contribute</a></span>
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
