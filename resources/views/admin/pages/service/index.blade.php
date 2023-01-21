@extends('admin.master')
@section('admin_content')

@section('style')
    <!-- datatable Style  -->
    @include('orgadmin.asset.datatable-style')
    <!-- datatable Style  -->
@endsection
@section('service_show')
    show
@endsection()


<div class="col-md-10 right-aria-sldksd">
    <div class="content-body-dskd">
        <br>
        <h4>List of Service </h4>
        <hr>
        <div class="table-aria-for-info-section">
            <div class="row">
                <div class="col-md-12">

                    <table class="table table-hover">
                        <thead>
                            <tr class="bg-green">
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Service Name</th>
                                <th scope="col">Organisation</th>
                                <th scope="col">Available dates</th>
                                <th scope="col">Status</th>
                                <th scope="col">Price</th>
                                <th scope="col">Application</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>

                            @php $i = 1 @endphp
                            @foreach ($service as $item)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>

                                        @if ($item->image)
                                            <img src="{{ asset('img/upload/service/' . $item->image) }}" width="50px">
                                        @else
                                            <img src="{{ asset('img/default.jpg') }}" width="50px">
                                        @endif


                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>

                                        <a href="{{ route('org.index', $item->organisation->slug) }}" target="_blank"
                                            class="view-btn-table"> {{ $item->organisation->org_name }}
                                        </a>
                                    </td>
                                    <td>{{ Carbon\Carbon::parse($item->available_date)->format('d M Y') }}</td>
                                    <td>
                                        @if ($item->status == 1)
                                            <span class="badge bg-success">Active</span>
                                        @elseif($item->status == 2)
                                            <span class="badge bg-warning">Paused</span>
                                        @elseif($item->status == 4)
                                            <span class="badge bg-danger">Suspended</span>
                                        @else
                                            <span class="badge bg-danger">Close</span>
                                        @endif
                                    </td>
                                    <td> {{ $item->price }} AUD </td>

                                    @php
                                        $application = App\Models\Serviceapply::where('id', $item->id)->count();
                                    @endphp
                                    <td>
                                        <a href="{{ route('admin.service.application', $item->id) }}">
                                            <span class="badge bg-green">{{ $application }} </span>
                                        </a>
                                    </td>
                                    <td class="actiontable-dksld">
                                        <a href="{{ route('org.service.index', $item->organisation->slug) }}"
                                            target="_blank" class="view-btn-table">
                                            View
                                        </a>

                                        <span>|</span>

                                        <a href="{{ route('admin.service.edit', $item->id) }}"
                                            class="view-btn-table">Edit</a></span>
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
