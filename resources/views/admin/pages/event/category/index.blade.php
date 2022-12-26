@extends('admin.master')
@section('admin_content')
@section('style')
<!-- datatable Style  -->
@include('orgadmin.asset.datatable-style')
<!-- datatable Style  -->
@endsection
@section('event_show') show @endsection


  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">
<br>
<h4>EXPERIENCES & EVENTS  Categorys</h4>
<hr>

<div class="row">
  <div class="add-btn-new">
    <a href="{{route('admin.event.category.create')}}" class="addbtn btn btn-success btn-green"> <i class="fas fa-plus"></i>   NEW CATEGORY</a>
  </div>
</div>


<br>

@include('admin.asset.message')

<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover">
  <thead>
    <tr class="bg-green">
      <th scope="col">#</th>
      <th scope="col">Category name</th>
      <th scope="col">Total Count</th>
      <th scope="col">Status</th>
      <th scope="col" width="30%"></th>
    </tr>
  </thead>
  <tbody>

@php
  $i = 1;
@endphp
    @foreach($eventcet as $item)


@php
  $eventcount = App\Models\Eventhavecategory::where('eventcat_id',$item->id)->count();

@endphp    

      <tr>
        <th scope="row">{{$i++}}</th>
        <td>{{$item->name}} </td>
        <td>
          <span class="badge badge-success">{{$eventcount}}</span>
        </td>
        <td>
          @if($item->status == 1)
            <span class="badge badge-success">Active</span>
          @else
           <span class="badge badge-danger">Disable</span>
          @endif
        </td>
        <td class="actiontable-dksld">
          <a href="{{route('admin.event.category.edit',$item->id)}}" class="view-btn-table">Edit</a>
          <span>|| </span>
          @if($item->status == 0)
          <a href="{{route('admin.event.category.active',$item->id)}}" class="view-btn-table danger-skd">Active</a>
          @else
          <a href="{{route('admin.event.category.disable',$item->id)}}" class="view-btn-table danger-skd">Disable</a>
          @endif
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
@endsection


@section('scripts')
  @include('orgadmin.asset.datatable-script')



<script src='https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js'></script>
<script src='https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js'></script>

@endsection