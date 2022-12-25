@extends('orgadmin.master')
@section('style')
<!-- datatable Style  -->
@include('orgadmin.asset.datatable-style')
<!-- datatable Style  -->
@endsection

@section('orgadmin_org_recruit') active-nav @endsection
@section('org_admin_content')
<!-- ------ Banner Aria Start ------ -->


          <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">




<br>
  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">DASHBOARD</li>
      <li class="breadcrumb-item active" aria-current="page"><b>
      recruit</b></li>
    </ol>
  </nav>
<hr>

<div class="row">
  <div class="add-btn-new">
    <a href="{{route('orgadmin.organisation.recruit.create',$org->id)}}" class="addbtn btn btn-success btn-green"> <i class="fas fa-plus"></i>  NEW </a>
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
      <th scope="col">Job</th>
      <th scope="col">Location</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Status</th>
      <th scope="col" ></th>
    </tr>
  </thead>
  <tbody>

    @php $i = 1 @endphp
    @foreach($recruit as $item)

      <tr>
        <th scope="row">{{$i++}}</th>
        <td>{{$item->title}}</td>
        <td>{{$item->location}}</td>
        <td>{{$item->start_date}}</td>
        <td>{{$item->end_date}}</td>

      <td>
        @if($item->status == 1)
            <span class="badge bg-success">Active</span>
        @elseif($item->status == 2)
            <span class="badge bg-warning">Paused</span>
        @else
            <span class="badge bg-danger">Close</span>
        @endif



      </td>
        <td class="actiontable-dksld">
          <a href="{{route('org.recruit.index',$org->slug)}}" target="_blank" class="view-btn-table">View</a> <span>|</span> <a href="{{route('orgadmin.organisation.recruit.edit',['recruitid'=>$item->id,'id'=>$org->id])}}" class="view-btn-table">Edit</a></span> 
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

<!-- --------------- Explore GGF End----------------- -->
@endsection()

@section('scripts')

@include('orgadmin.asset.datatable-script')


@endsection