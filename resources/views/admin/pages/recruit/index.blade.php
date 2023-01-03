@extends('admin.master')
@section('admin_content')
@section('style')
  <!-- datatable Style  -->
     @include('orgadmin.asset.datatable-style')
  <!-- datatable Style  -->
@endsection
@section('recruit_show') show @endsection()


  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">

<br>
<h4>List Of Jobs </h4>
<hr>


@include('admin.asset.message')

<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">

      <table class="table table-hover">
  <thead>
    <tr class="bg-green">
      <th scope="col">#</th>
      <th scope="col">Job Title</th>
      <th scope="col">Organisation</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Status</th>
      <th scope="col">Application</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

    @php $i = 1 @endphp
    @foreach($recruit as $item)

      <tr>
        <th scope="row">{{$i++}}</th>
        <td title="{{$item->title}}"> {{ Str::limit($item->title, 12, $end = '...') }} </td>
        <td>
          <a href="{{route('org.index',$item->organisation->slug)}}" target="_blank" class="view-btn-table">
            {{$item->organisation->org_name}}
          </a>
        </td>
            
      <td> {{ Carbon\Carbon::parse($item->start_date)->format('d M Y') }} </td>
      <td> {{ Carbon\Carbon::parse($item->end_date)->format('d M Y') }} </td>

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

@php
  $application_count = App\Models\Jobapply::where('recruit_id',$item->id)->count();
@endphp

      <td>
        <a href="{{route('admin.recruit.application',$item->id)}}">
          <span class="badge badge-green">{{$application_count}}</span>
        </a>
      </td>
        <td class="actiontable-dksld">
          <a href="{{route('org.recruit.index',$item->organisation->slug)}}" target="_blank" class="view-btn-table">View recruit</a> 
              <span>|</span> 
          <a href="{{route('admin.recruit.edit',$item->id)}}" class="view-btn-table">Edit recruit</a></span> 
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
