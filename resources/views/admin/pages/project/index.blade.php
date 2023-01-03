@extends('admin.master')
@section('admin_content')
@section('style')
<!-- datatable Style  -->
@include('orgadmin.asset.datatable-style')
<!-- datatable Style  -->
@endsection
@section('projects_show') show @endsection

  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">

<br>
<h4>LIST OF PROJECT </h4>
<hr>



@include('admin.asset.message')
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
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col"> Applicants</th>
      <th scope="col" ></th>
    </tr>
  </thead>
  <tbody>
@php $i = 1  @endphp
    @foreach($project as $item)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>



        @if($item->image)
        <img src="{{asset('img/upload/project/'.$item->image)}}" width="50px">
        @else
        <img src="{{asset('img/default.jpg')}}" width="50px">
        @endif

      </td>
      <td>{{$item->name}}</td>
      <td>
        <a href="{{route('org.index',$item->organisation->slug)}}" target="_blank" class="  view-btn-table">
           {{$item->organisation->org_name}}
         </a>
      </td>
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
      <td> {{ Carbon\Carbon::parse($item->start_date)->format('d M Y') }} </td>
      <td> {{ Carbon\Carbon::parse($item->end_date)->format('d M Y') }} </td>


        @php
          $application = App\Models\Projectapply::where('project_id',$item->id)->count();
          $org = App\Models\Organisation::where('id',$item->organisation_id)->first();
        @endphp
        <td>
              <a href="{{route('admin.project.application',$item->id)}}">
                  <span class="badge bg-green">{{$application}}   </span>
              </a>
        </td>

      <td class="actiontable-dksld">
        <a href="{{route('org.project.single',['projectslug'=>$item->slug,'slug'=>$org->slug])}}" target="_blank" class="view-btn-table">
          View PROJECT
        </a> 
          <span>|</span>
        <a href="{{route('admin.project.edit',$item->id)}}" class="view-btn-table">
          Edit PROJECT
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
