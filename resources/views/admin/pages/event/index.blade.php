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
<h2>Events </h2>
<hr>



<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover">
  <thead>
    <tr class="bg-green">
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Project name</th>
      <th scope="col">Organisation</th>
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
      <td>{{$item->organisation->org_name}}</td>
      <td>
        @if($item->status == 1)
            <span class="badge bg-success">Active</span>
        @elseif($item->status == 2)
            <span class="badge bg-warning">Paused</span>
        @elseif($item->status == 4)
            <span class="badge bg-danger">Suspended</span>
        @else
            <span class="badge bg-danger">Close</span>
        @endif



      </td>
        <td>{{ Carbon\Carbon::parse($item->start_date)->format('d M Y') }}</td>
          @php
            $application = App\Models\Eventapply::where('event_id',$item->id)->count();
            $org =  App\Models\Organisation::where('id',$item->organisation_id)->first();
          @endphp
        <td>
        <a href="{{route('admin.event.apply',$item->id)}}">
            <span class="badge bg-green">{{$application}} </span>
        </a>
      </td>

      <td class="actiontable-dksld">
        <!-- single Button -->
        <a href="{{route('org.event.single',['eventslug'=>$item->slug,'slug'=>$org->slug])}}"  class="view-btn-table" target="_blank">
          View Event
        </a>   
        <span>|</span>
        <!-- single Button -->
        <a href="{{route('admin.event.edit',$item->id)}}"  class="view-btn-table">
          Edit Event
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
