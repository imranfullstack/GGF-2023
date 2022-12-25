@extends('admin.master')
@section('style')
<!-- datatable Style  -->
@include('orgadmin.asset.datatable-style')
<!-- datatable Style  -->
@endsection
@section('admin_content')



          <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">




<br>
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">DASHBOARD</li>
    <li class="breadcrumb-item active" aria-current="page"><b> New Organisation’ list </b></li>
  </ol>
</nav>
<hr>

<div class="row">
  <div class="add-btn-new">

<!-- Button trigger modal -->
<button type="button" class=" addbtn btn btn-success btn-green" data-bs-toggle="modal" data-bs-target="#exampleModal">
  <i class="fas fa-plus"></i> NEW
</button>
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
      <th scope="col">Logo</th>
      <th scope="col">Organisatin Name</th>
      <th scope="col">Status</th>
      <th scope="col" ></th>
    </tr>
  </thead>
  <tbody>
    @php
    $i = 1;
    @endphp
    @foreach($org as $item)
      <tr>
        <td>{{$i++}}</td>
        <td>
          <img src="{{asset('img/upload/org/logo/'.$item->logo)}}" style="height: 50px;width: 50px">
        </td>
        <td>{{$item->org_name}}</td>
        <td>


                      

        @if($item->status == 2)
          <span class="badge-danger">Cancel</span>
        @elseif($item->status == 1)   
          <span class="badge-success">Approve</span>
        @else
          <span class="badge-warn">Pendding</span>
        @endif                        

        </td>
        <td>
          <a href="{{route('admin.orgstatus.single.org',$item->id)}}" class="btn btn-green">
              <i class="fa fa-eye"></i>
          </a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
    </div>
  </div>

</div>
<br><br>
              </div>
          </div>



@endsection()


@section('scripts')
  @include('orgadmin.asset.datatable-script')



<script src='https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js'></script>
<script src='https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js'></script>

@endsection

