@extends('admin.master')
@section('admin_content')

@section('projects_show') show @endsection


  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">
<br>
<h4>LIST OF PROJECT CATEGORY</h4>
<hr>

<div class="row">
  <div class="add-btn-new">
    <a href="{{route('admin.project.category.create')}}" class="addbtn btn btn-success btn-green"> <i class="fas fa-plus"></i>   NEW CATEGORY</a>
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


    @foreach($projectcat as $item)


@php
  $catcount = App\Models\Projecthavecategory::where('projectcat_id',$item->id)->count();
@endphp
      <tr>
        <th scope="row">1</th>
        <td>{{$item->name}}</td>

        <td>
          <span class="badge badge-green">{{$catcount}}</span>
        </td>


        <td>
          @if($item->status == 1 )
          <span class="badge badge-green">Active</span>
            @else
          <span class="badge badge-danger">Deactive</span>
          @endif
        </td>
     
        <td class="actiontable-dksld">

          <a href="{{route('admin.project.category.edit',$item->id)}}" class="view-btn-table">Edit</a>
            <span> | </span>     

          @if($item->status == 1 )
            <a href="{{route('admin.project.category.deactive',$item->id)}}" class="view-btn-table danger-skd">Deactive</a>
              @else
            <a href="{{route('admin.project.category.active',$item->id)}}" class="view-btn-table danger-skd">Active</a>
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