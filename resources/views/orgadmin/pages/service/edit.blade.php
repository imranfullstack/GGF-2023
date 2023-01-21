@extends('orgadmin.master')

@section('orgadmin_org_service')
    active-nav
@endsection
@section('org_admin_content')
    <!-- ------ Banner Aria Start ------ -->



    <div class="col-md-10 right-aria-sldksd">
        <div class="content-body-dskd">




            <br>
            <br>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">DASHBOARD</li>
                    <li class="breadcrumb-item">service</li>
                    <li class="breadcrumb-item active" aria-current="page"><b>
                            Edit</b></li>
                </ol>
            </nav>
            <hr>
            <hr>


            <div class="find-people">




                <form method="post"
                    action="{{ route('orgadmin.organisation.service.update', ['id' => $org->id, 'serviceid' => $service->id]) }}"
                    enctype="multipart/form-data">
                    @csrf




                    <table class="table table-borderless">
                        <tbody>

                            <!-- ---- single Form Start --- -->
                            <tr>
                                <th scope="row" width="20%" class="label-dksldc"> Services Name</th>
                                <td>

                                    <!-- single Form Start-->
                                    <div class="sigle-form-input-sddksldc0sd">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control"
                                                placeholder="Enter organization details" aria-label="Username"
                                                aria-describedby="basic-addon1" name="name" value="{{ $service->name }}">
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

                                    @php $servicecat = App\Models\Servicecat::orderby('id','desc')->where('status',1)->get(); @endphp
                                    <!-- single Form Start-->
                                    <!-- single Form Start-->
                                    <div class="sigle-form-input-sddksldc0sd">
                                        <div class="input-group mb-3">
                                            <div class="category-kdlsdkc">
                                                @foreach ($service->servicehavecategory as $item)
                                                    @foreach ($item->servicecat as $cat)
                                                        <a href="{{ route('orgadmin.organisation.service.remove.cat', ['catid' => $cat->id, 'id' => $org->id, 'serviceid' => $service->id]) }}"
                                                            class="badge badge-green">{{ $cat->name }} <i
                                                                class="fa fa-trash"></i></a>
                                                    @endforeach
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single Form Start-->



                                    <div class="sigle-form-input-sddksldc0sd">
                                        <div class="input-group mb-3">

                                            <select id="mounth" multiple class="form-select"
                                                aria-label="Default select example" name="servicecat_id[]">
                                                @foreach ($servicecat as $cat)
                                                    <option value=" {{ $cat->id }}"> {{ $cat->name }}</option>
                                                @endforeach
                                            </select>


                                        </div>
                                    </div>
                                    <!-- single Form Start-->




                                </td>
                            </tr>
                            <!-- ---- single Form Start --- -->
                            <!-- ---- single Form Start --- -->
                            <tr>
                                <th scope="row" width="20%" class="label-dksldc">Short Description</th>
                                <td>
                                    <div class="sigle-form-input-sddksldc0sd">
                                        <div class="input-group mb-3">
                                            <textarea class="form-control" rows="2" name="short_desc">{{ $service->short_desc }}</textarea>
                                        </div>
                                        @error('short_desc')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <!-- ---- single Form Start --- -->
                            <!-- ---- single Form Start --- -->
                            <tr>
                                <th scope="row" width="20%" class="label-dksldc">Long Version</th>
                                <td>
                                    <div class="sigle-form-input-sddksldc0sd">
                                        <div class="input-group mb-3">

                                            <textarea class="form-control" rows="4" name="long_version">{{ $service->long_version }}</textarea>


                                        </div>
                                        @error('long_version')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <!-- ---- single Form Start --- -->
                            <!-- ---- single Form Start --- -->
                            <tr>
                                <th scope="row" width="20%" class="label-dksldc">Available dates</th>
                                <td>

                                    <!-- single Form Start-->
                                    <div class="sigle-form-input-sddksldc0sd">
                                        <div class="input-group mb-3">
                                            <input type="date" class="form-control"
                                                placeholder="Enter organization details" aria-label="Username"
                                                aria-describedby="basic-addon1" name="date"
                                                value="{{ $service->available_date }}">
                                        </div>
                                        @error('date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!-- single Form Start-->
                                </td>
                            </tr>
                            <!-- ---- single Form Start --- -->


                            <!-- ---- single Form Start --- -->
                            <tr>
                                <th scope="row" width="20%" class="label-dksldc">Price</th>
                                <td>
                                    <div class="sigle-form-input-sddksldc0sd">
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control"
                                                placeholder="Enter organization details" aria-label="Username"
                                                aria-describedby="basic-addon1" name="price"
                                                value="{{ $service->price }}">
                                        </div>
                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <!-- ---- single Form Start --- -->

                            <!-- ---- single Form Start --- -->
                            <tr>
                                <th scope="row" width="20%" class="label-dksldc">Contact Person</th>
                                <td>
                                    <div class="sigle-form-input-sddksldc0sd">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control"
                                                placeholder="Enter organization details" aria-label="Username"
                                                aria-describedby="basic-addon1" name="contact_parson"
                                                value="{{ $service->contact_person }}">
                                        </div>
                                        @error('contact_parson')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
                                            <input type="text" class="form-control"
                                                placeholder="Enter organization details" aria-label="Username"
                                                aria-describedby="basic-addon1" name="contact_email"
                                                value="{{ $service->contact_email }}">
                                        </div>
                                        @error('contact_email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
                                            <input type="text" class="form-control"
                                                placeholder="Enter organization details" aria-label="Username"
                                                aria-describedby="basic-addon1" name="contact_no"
                                                value="{{ $service->contact_phone }}">
                                        </div>
                                        @error('contact_no')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
                                            <input type="text" class="form-control"
                                                placeholder="Enter organization details" aria-label="Username"
                                                aria-describedby="basic-addon1" name="location"
                                                value="{{ $service->location }}">
                                        </div>
                                        @error('location')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <!-- ---- single Form Start --- -->
                            <!-- ---- single Form Start --- -->
                            <tr>
                                <th scope="row" width="20%" class="label-dksldc">keyword</th>
                                <td>
                                    <div class="sigle-form-input-sddksldc0sd">
                                        <div class="input-group mb-3">
                                            <textarea class="form-control" rows="3" name="keyword"></textarea>
                                        </div>
                                        @error('keyword')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <!-- ---- single Form Start --- -->
                            <tr>
                                <th scope="row" width="20%" class="label-dksldc">Status</th>
                                <td>
                                    <div class="sigle-form-input-sddksldc0sd">
                                        <div class="input-group mb-3">
                                            <select class="form-select" name="status">
                                                <option value="1" {{ $service->status == 1 ? 'selected' : '' }}>
                                                    Active</option>
                                                <option value="2" {{ $service->status == 2 ? 'selected' : '' }}>
                                                    Paused</option>
                                                <option value="3" {{ $service->status == 3 ? 'selected' : '' }}>
                                                    Closed</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- ---- single Form Start --- -->
                            <tr>
                                <th scope="row" width="20%" class="label-dksldc">Enable Enquiry Form</th>
                                <td>
                                    <div class="sigle-form-input-sddksldc0sd">
                                        <div class="input-group mb-3">
                                            <select class="form-select" name="enquiry_form">
                                                <option value="1"
                                                    {{ $service->enquiry_form == 1 ? 'selected' : '' }}>Yes</option>
                                                <option value="0"
                                                    {{ $service->enquiry_form == 0 ? 'selected' : '' }}>No</option>
                                            </select>
                                        </div>
                                        @error('enquiry_form')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <!-- ---- single Form Start --- -->
                            <tr>
                                <th scope="row" width="20%" class="label-dksldc">Upload Images</th>
                                <td>
                                    <div class="sigle-form-input-sddksldc0sd">
                                        <div class="input-group mb-3">

                                            @if ($service->image)
                                                <img src="{{ asset('img/upload/service/' . $service->image) }}"
                                                    width="50px">
                                            @else
                                                <img src="{{ asset('img/default.jpg') }}" width="50px">
                                            @endif
                                            <input type="file" class="form-control"
                                                placeholder="Enter organization details" aria-label="Username"
                                                aria-describedby="basic-addon1" name="image">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- ---- single Form Start --- -->
                            <tr>
                                <td scope="row" width="20%" class="label-dksldc">
                                    <button class="btn btn-success btn-green" type="submit">UPDATE</button>
                                </td>
                            </tr>
                            <!-- ---- single Form Start --- -->
                        </tbody>
                    </table>

                </form>
                <br>

            </div>
        </div>

    </div>
@endsection()
