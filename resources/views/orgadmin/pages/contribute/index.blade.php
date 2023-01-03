@extends('orgadmin.master')
@section('style')

@include('orgadmin.asset.datatable-style')

@endsection()


@section('orgadmin_org_contribute') active-nav @endsection
@section('org_admin_content')
<!-- ------ Banner Aria Start ------ -->


          <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">





<br>
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">DASHBOARD</li>
    <li class="breadcrumb-item active" aria-current="page"><b>
    Contribute</b></li>
  </ol>
</nav>
<hr>

<div class="row">
  <div class="add-btn-new">
    <a href="{{route('orgadmin.organisation.contribute.create',$org->id)}}" class="addbtn btn btn-success btn-green"> <i class="fas fa-plus"></i>  NEW </a>
  </div>
</div>


<br>
@include('orgadmin.asset.message')


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
        <a href="" class="view-btn-table">View</a> <span>|</span> <a href="{{route('orgadmin.organisation.contribute.edit',['contributeid'=>$item->id,'id'=>$org->id])}}" class="view-btn-table">Edit</a></span>
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

              </div>
          </div>

<!-- --------------- Explore GGF End----------------- -->
@endsection()


@section('scripts')
  @include('orgadmin.asset.datatable-script')
@endsection
