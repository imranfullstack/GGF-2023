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
    <li class="breadcrumb-item">recruit</li>
    <li class="breadcrumb-item active" aria-current="page"><b>
    Application</b></li>
  </ol>
</nav>
<hr>


        <div class="find-people">


<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover">
  <thead>
    <tr class="bg-green">
      <th scope="col">#</th>
      <th scope="col">Job</th>
      <th scope="col">Applicant Person</th>
      <th scope="col">Applicant Email</th>
      <th scope="col">Status</th>
      <th scope="col" width=""></th>
    </tr>
  </thead>
  <tbody>
@php 
  $i = 1;
@endphp     
@foreach($apply as $item)    
  <tr>
    <td>{{$i++}}</td>
    <td>
      @if($item->job)      
      {{$item->job->title}}
      @else
       <span class="text-danger">POST REMOVED</span>
      @endif
    
    </td>
    <td>{{$item->name}}</td>
    <td>{{$item->email}}</td>
    <td>

    @if($item->status == 0)
      <span class="badge bg-primary">Pendding</span>
    @elseif($item->status == 1)
      <span class="badge bg-success">Approve</span>

    @elseif($item->status == 2)
      <span class="badge bg-info">Contacted</span>
    @elseif($item->status == 3)
      <span class="badge bg-danger">Closed</span>
    @endif
    </td>
    <td>
      <a href="{{route('orgadmin.organisation.recruit.single.application',['applicationid'=>$item->id,'id'=>$org->id])}}" class="btn btn-green">
        <i class="fa fa-eye"></i>
      </a>
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

              </div>


@endsection()

@section('scripts')

@include('orgadmin.asset.datatable-script')


@endsection