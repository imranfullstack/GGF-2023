@extends('admin.master')
@section('admin_content')

@section('projects_show') show @endsection


  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">
<br>
<h2>Project  Categorys</h2>
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
      <th scope="col">Post Count</th>
      <th scope="col" width="30%"></th>
    </tr>
  </thead>
  <tbody>


    @foreach($projectcat as $item)

      <tr>
        <th scope="row">1</th>
        <td>{{$item->name}}</td>
        <td>Otto</td>
        <td class="actiontable-dksld">
          <a href="http://127.0.0.1:8000/orgadmin/organisation/2/projects/view" class="view-btn-table">View</a> <span>|</span> <a href="http://127.0.0.1:8000/orgadmin/organisation/2/projects/view" class="view-btn-table">Edit</a>| <a href="" class="view-btn-table danger-skd">Delete</a>
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