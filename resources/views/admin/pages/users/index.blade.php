@extends('admin.master')
@section('admin_content')

@section('style')
    <!-- datatable Style  -->
    @include('orgadmin.asset.datatable-style')
    <!-- datatable Style  -->
@endsection
@section('orgadmin_users')
    show
@endsection()


<div class="col-md-10 right-aria-sldksd">
    <div class="content-body-dskd">
        <br>
        <h4>List of User  </h4>
        <hr>
        <div class="table-aria-for-info-section">
            <div class="row">
                <div class="col-md-12">

                    <table class="table table-hover">
                        <thead>
                            <tr class="bg-green">
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                                <th scope="col" class="float-right">Edit</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php $i = 1 @endphp
                            @foreach ($user as $item)
                         	<tr>
                         		<td>{{$i++}}</td>
                         		<td>
                         			@if($item->image)
                         				<img src="{{asset('/img/upload/pic/'.$item->image)}}" width="50px">
                         			@else
                         				<img src="{{asset('img/default.jpg')}}" width="50px">
                         			@endif
                         		</td>
                         		<td>{{$item->name}}</td>
                         		<td>{{$item->email}}</td>
                         		<td>
                         			@if($item->status == 1)
                         				<span class="badge badge-success">Active</span>
                         			@elseif($item->status == 2)
                         				<span class="badge badge-danger">Suspended</span>
                         			@else
                         				<span class="badge badge-danger">deleted</span>
                         			@endif
                         		</td>
                         		<td class="tt" align="right">
                         			<a href="#" class="view-btn-table">Edit</a>
                         			<span>|</span>
                         			<a href="{{route('admin.user.view',$item->id)}}" class="view-btn-table">view</a>
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
