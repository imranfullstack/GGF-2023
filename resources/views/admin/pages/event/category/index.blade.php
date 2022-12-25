@extends('admin.master')
@section('admin_content')
@section('event_show') show @endsection


  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">
<br>
<h2>Post  Categorys</h2>
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

          <span>Active</span>
          <span>Disable</span>
        </td>
        <td class="actiontable-dksld">
          <a href="{{route('admin.event.category.edit',$item->id)}}" class="view-btn-table">Edit</a>
          <span>|| </span>
          <a href="" class="view-btn-table danger-skd">Disable</a>
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