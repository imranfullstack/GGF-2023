@extends('orgadmin.master')
@section('style')
    <!-- datatable Style  -->
    @include('orgadmin.asset.datatable-style')
    <!-- datatable Style  -->
@endsection

@section('orgadmin_org_service')
    active-nav
@endsection
@section('org_admin_content')
    <!-- ------ Banner Aria Start ------ -->


    <div class="col-md-10 right-aria-sldksd">
        <div class="content-body-dskd">




            <br>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">DASHBOARD</li>
                    <li class="breadcrumb-item active" aria-current="page"><b>
                            service</b></li>
                </ol>
            </nav>
            <hr>

            <div class="row">
                <div class="add-btn-new">
                    <a href="{{ route('orgadmin.organisation.service.create', $org->id) }}"
                        class="addbtn btn btn-success btn-green"> <i class="fas fa-plus"></i> NEW </a>
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
                                    <th scope="col">Service Name</th>
                                    <th scope="col">Available dates</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Enquiries</th>
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
                                            {{ Carbon\Carbon::parse($item->available_date)->format('d M Y') }}
                                        </td>
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
                                            <a
                                                href="{{ route('orgadmin.organisation.service.application.u.service', ['serviceslug' => $item->slug, 'id' => $org->slug]) }}">
                                                <span class="badge bg-green">{{ $application }} </span>
                                            </a>

                                        </td>
                                        <td class="actiontable-dksld">

                                            @if ($item->status == 4)
                                                <button type="button" class="btn btn-green viewbtn-dksld"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#staticBackdrop_{{ $item->id }}">
                                                    Details
                                                </button>
                                                <!-- Button trigger modal -->


                                                <!-- Modal -->
                                                <div class="modal fade" id="staticBackdrop_{{ $item->id }}"
                                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel_{{ $item->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="staticBackdropLabel_{{ $item->id }}">
                                                                    {{ $item->name }}</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body" style="text-align: left">
                                                                {{ $item->suspended_note }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <a href="{{ route('org.service.index', $org->slug) }}" target="_blank"
                                                    class="view-btn-table">View</a>
                                                <span>|</span>
                                                <a href="{{ route('orgadmin.organisation.service.edit', ['serviceid' => $item->id, 'id' => $org->id]) }}"
                                                    class="view-btn-table">Edit</a></span>
                                            @endif
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
