@extends('orgadmin.master')


@section('style')
<!-- datatable Style  -->
@include('orgadmin.asset.datatable-style')
<!-- datatable Style  -->
<style type="text/css">
  span.badge.bg-green {
    background: #6e933e;
}
</style>
@endsection



@section('orgadmin_org_event') active-nav @endsection
@section('org_admin_content')
<!-- ------ Banner Aria Start ------ -->


          <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">




<br>

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">DASHBOARD</li>
    <li class="breadcrumb-item" > Experiences & Events</li>
  </ol>
</nav>
<hr>

<div class="row">
  <div class="add-btn-new">
    <a href="{{route('orgadmin.organisation.event.create',$org->id)}}" class="addbtn btn btn-success btn-green"> <i class="fas fa-plus"></i>  NEW </a>
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
      <th scope="col">Image</th>
      <th scope="col">Project name</th>
      <th scope="col">Status</th>
      <th scope="col">Date</th>
      <th scope="col">Application</th>
      <th scope="col" width="30%"></th>
    </tr>
  </thead>
  <tbody>
    @php $i = 1; @endphp
    @foreach($event as $item)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>
        
        @if($item->image)
        <img src="{{asset('img/upload/event/'.$item->image)}}" width="50px">
        @else
        <img src="{{asset('img/default.jpg')}}" width="50px">
        @endif


      </td>
      <td>{{$item->event_name}}</td>
      <td>
        @if($item->status == 1)
            <span class="badge bg-success">Active</span>
        @elseif($item->status == 2)
            <span class="badge bg-warning">Paused</span>
        @else
            <span class="badge bg-danger">Close</span>
        @endif



      </td>
      <td>{{$item->date}}</td>

        @php
          $application = App\Models\Eventapply::where('id',$item->id)->count();
        @endphp

      <td>

            <a href="{{route('orgadmin.organisation.event.application',$org->id)}}">
                <span class="badge bg-green">{{$application}} </span>
            </a>
      </td>


      <td class="actiontable-dksld">
        <a href="{{route('org.event.single',['eventslug'=>$item->slug,'slug'=>$org->slug])}}" target="_blank" class="view-btn-table">View</a> <span>|</span> <a href="{{route('orgadmin.organisation.event.edit',['eventid'=>$item->id,'id'=>$org->id])}}" class="view-btn-table">Edit</a></span>
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

