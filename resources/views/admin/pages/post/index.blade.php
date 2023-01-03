@extends('admin.master')
@section('admin_content')
@section('style')
<!-- datatable Style  -->
@include('orgadmin.asset.datatable-style')
<!-- datatable Style  -->
@endsection

@section('post_show')  show @endsection()


  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">

<br>
<h4>POST LIST</h4>
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
      <th scope="col">Post name</th>
      <th scope="col">Description</th>
      <th scope="col">Organisation</th>
      <th scope="col">Status</th>
      <th scope="col" width="30%"></th>
    </tr>
  </thead>
  <tbody>

    @php $i = 1 @endphp
    @foreach($post as $item)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>
        @if($item->image)
        <img class="img-small-ds0d" src="{{asset('img/upload/post/'.$item->image)}}" width="50px">
        @else
        <img class="img-small-ds0d" src="{{asset('img/default.jpg')}}" width="50px">
        @endif
      </td>
      <td>{{$item->title}}</td>
      <td>{{ Str::limit($item->short_desc, 25) }}</td>

@php
  $org = App\Models\Organisation::where('id',$item->organisation_id)->first();
@endphp

      <td> 
        <a href="{{route('org.index',$org->slug)}}" target="_blank" class="view-btn-table">{{$org->org_name}}</a>
      </td>
      <td>
        @if($item->status == 1)
          <span class="badge-success">Active</span>
        @elseif($item->status == 0)
          <span class="badge-danger">Deactive</span>
        @elseif($item->status == 4)
          <span class="badge-danger">Suspended</span>
        @endif
      </td>

      <td class="actiontable-dksld">
        <a href="{{route('org.post.single',['postslug'=>$item->slug,'slug'=>$org->slug])}}" target="_blank" class="view-btn-table">VIEW POST</a> 

          <span>|</span>
        
        <a href="{{route('admin.post.edit',$item->slug)}}" class="view-btn-table">EDIT POST</a>

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
