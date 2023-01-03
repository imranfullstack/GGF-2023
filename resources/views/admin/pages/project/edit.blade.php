@extends('admin.master')
@section('admin_content')
@section('style')
    <!-- datatable Style  -->
    @include('orgadmin.asset.datatable-style')
    <!-- datatable Style  -->
@endsection
@section('projects_show')
    show
@endsection

<div class="col-md-10 right-aria-sldksd">
    <div class="content-body-dskd">

        <br>
        <h4>EDIT PROJECT </h4>
        <hr>

@php
	$org = App\Models\Organisation::where('id',$project->organisation_id)->first();
@endphp


        <div class="table-aria-for-info-section">
            <div class="row">
                <div class="col-md-12">


                 
                        <table class="table table-borderless">
                            <tbody>
                                <!-- ---- single Form Start --- -->
                                <tr>
                                    <th scope="row" width="20%" class="label-dksldc"> Project Name</th>
                                    <td>
                                        <!-- single Form Start-->
                                        <div class="sigle-form-input-sddksldc0sd">
                                            <div class="input-group mb-3">
                                                {{ $project->name }}
                                            </div>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!-- single Form Start-->
                                    </td>
                                </tr>
                                <!-- ---- single Form Start --- -->
                                <!-- ---- single Form Start --- -->
                                <tr>
                                    <th scope="row" width="20%" class="label-dksldc">Categorys</th>
                                    <td>

                                        @php $projectcat = App\Models\Projectcat::orderby('id','desc')->get(); @endphp
                                        <!-- single Form Start-->
                                        <div class="sigle-form-input-sddksldc0sd">
                                            <div class="input-group mb-3">
                                                <div class="category-kdlsdkc">
                                                    @foreach ($category as $item)
                                                        @php
                                                            $catname = App\Models\Projectcat::where('id', $item->projectcat_id)->first();
                                                        @endphp
                                                        <a  class="badge badge-green">{{ $catname->name }}</a>
                                                    @endforeach
                                                </div>

                                            </div>
                                        </div>
                                        <!-- single Form Start-->
                                </tr>
                                <!-- ---- single Form Start --- -->
                                <!-- ---- single Form Start --- -->
                                <tr>
                                    <th scope="row" width="20%" class="label-dksldc">Short Description</th>
                                    <td>
                                        <div class="sigle-form-input-sddksldc0sd">
                                            <div class="input-group mb-3">
                                                {{ $project->short_desc }}
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                                <!-- ---- single Form Start --- -->
                                <!-- ---- single Form Start --- -->
                                <tr>
                                    <th scope="row" width="20%" class="label-dksldc">Long Version </th>
                                    <td>
                                        <div class="sigle-form-input-sddksldc0sd">
                                            <div class="input-group mb-3">

                                                {{ $project->long_version }}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <!-- ---- single Form Start --- -->
                                <!-- ---- single Form Start --- -->
                                <tr>
                                    <th scope="row" width="20%" class="label-dksldc">Start &amp; Finish date</th>
                                    <td>
                                        <!-- single Form Start-->
                                        <div class="sigle-form-input-sddksldc0sd">
                                            <div class="input-group mb-3">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                       {{ $project->start_date }}   TO {{ $project->end_date }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single Form Start-->
                                    </td>
                                </tr>
                                <!-- ---- single Form Start --- -->
                                <!-- ---- single Form Start --- -->
                                <tr>
                                    <th scope="row" width="20%" class="label-dksldc">Contact Person</th>
                                    <td>
                                        <div class="sigle-form-input-sddksldc0sd">
                                            <div class="input-group mb-3">
                                                {{ $project->contact_person }}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <!-- ---- single Form Start --- -->
                                <!-- ---- single Form Start --- -->
                                <tr>
                                    <th scope="row" width="20%" class="label-dksldc">Contact Email</th>
                                    <td>
                                        <div class="sigle-form-input-sddksldc0sd">
                                            <div class="input-group mb-3">
                                                {{ $project->contact_email }}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <!-- ---- single Form Start --- -->
                                <!-- ---- single Form Start --- -->
                                <tr>
                                    <th scope="row" width="20%" class="label-dksldc">Contact Phone</th>
                                    <td>
                                        <div class="sigle-form-input-sddksldc0sd">
                                            <div class="input-group mb-3">
                                                {{ $project->contact_phone }}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <!-- ---- single Form Start --- -->
                                <!-- ---- single Form Start --- -->
                                <tr>
                                    <th scope="row" width="20%" class="label-dksldc">Location</th>
                                    <td>
                                        <div class="sigle-form-input-sddksldc0sd">
                                            <div class="input-group mb-3">
                                                {{ $project->location }}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <!-- ---- single Form Start --- -->
                                <!-- ---- single Form Start --- -->
                                <tr>
                                    <th scope="row" width="20%" class="label-dksldc">Whats's Needed</th>
                                    <td>
                                        <div class="sigle-form-input-sddksldc0sd">
                                            <div class="input-group mb-3">
                                                {{ $project->Whats_needed }}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <!-- ---- single Form Start --- -->
                                <!-- ---- single Form Start --- -->
                                <tr>
                                    <th scope="row" width="20%" class="label-dksldc">Registration form</th>
                                    <td>
                                        <div class="sigle-form-input-sddksldc0sd">
                                            <div class="input-group mb-3">
                                                {{ $project->registration_form }}
                                            </div>
                                            @error('registration_form')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <!-- ---- single Form Start --- -->
                                <!-- ---- single Form Start --- -->
                                <tr>
                                    <th scope="row" width="20%" class="label-dksldc">Upload Images</th>
                                    <td>
                                        <div class="sigle-form-input-sddksldc0sd">
                                            <div class="input-group mb-3">
                                                <img src="{{ asset('img/upload/project/' . $project->image) }}"
                                                    width="80px" style="margin-right: 30px;">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <!-- ---- single Form Start --- -->
<form method="post" action="{{route('admin.project.update',$project->id)}}">
    @csrf
                                <!-- ---- single Form Start --- -->
                                <tr>
                                    <th scope="row" width="20%" class="label-dksldc">Status</th>
                                    <td>
                                        <div class="sigle-form-input-sddksldc0sd">
                                            <div class="input-group mb-3">
                                                <select class="form-select" name="status">
                                                    <option value="1"
                                                        {{ $project->status == 1 ? 'selected' : '' }}>Active</option>
                                                    <option value="2"
                                                        {{ $project->status == 2 ? 'selected' : '' }}>Paused</option>
                                                    <option value="3"
                                                        {{ $project->status == 3 ? 'selected' : '' }}>Closed</option>
                                                    <option value="4"
                                                        {{ $project->status == 4 ? 'selected' : '' }}>Suspended</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <!-- ---- single Form Start --- -->
                                <!-- ---- single Form Start --- -->
                                <tr>
                                    <th scope="row" width="20%" class="label-dksldc">Suspended Note</th>
                                    <td>
                                        <div class="sigle-form-input-sddksldc0sd">
                                            <div class="input-group mb-3">
                                            	<textarea class="form-control" rows="3" name="suspended_note">{{$project->suspended_note}}</textarea>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <!-- ---- single Form Start --- -->
                                <!-- ---- single Form Start --- -->
                                <tr>
                                    <td scope="row" width="20%" class="label-dksldc">
                                        <button class="btn btn-success btn-green" value="submit">Save</button>
                                    </td>
                                </tr>
                                <!-- ---- single Form Start --- -->
</form>
                            </tbody>
                        </table>
                                        <br>
                                        <br>
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
