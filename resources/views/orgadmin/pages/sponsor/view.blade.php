@extends('orgadmin.master')
@section('orgadmin_org_sponsor')
    active-nav
@endsection
@section('org_admin_content')
    <!-- ------ Banner Aria Start ------ -->



    <div class="col-md-10 right-aria-sldksd">
        <div class="content-body-dskd">




            <br>
            <h2>
                @if ($org->logo)
                    <img src="{{ asset('img/upload/org/logo/' . $org->logo) }}" width="60px" height="60px"
                        style="margin:0px 20px">
                    <span> {{ $org->org_name }} </span>
                @else
                    <span> {{ $org->org_name }} </span>
                @endif
            </h2>
            <hr>


            <div class="find-people">




                <table class="table table-borderless">
                    <tbody>

                        <!-- ---- single Form Start --- -->
                        <tr>
                            <th scope="row" width="20%" class="label-dksldc"> Sponsor Title</th>
                            <td>

                                <!-- single Form Start-->
                                <div class="sigle-form-input-sddksldc0sd">
                                    <div class="input-group mb-3">
                                        <input type="text" disabled class="form-control" aria-label="Username"
                                            aria-describedby="basic-addon1" name="sponsor_title"
                                            value="{{ $sponsor->sponsor_title }}">
                                    </div>
                                </div>
                                <!-- single Form Start-->
                            </td>
                        </tr>
                        <!-- ---- single Form Start --- -->
                        <!-- ---- single Form Start --- -->
                        <tr>
                            <th scope="row" width="20%" class="label-dksldc">Sponsor Description</th>
                            <td>
                                <div class="sigle-form-input-sddksldc0sd">
                                    <div class="input-group mb-3">
                                        {{ $sponsor->sponsor_desc }}
                                    </div>
                                    @error('sponsor_desc')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </td>
                        </tr>
                        <!-- ---- single Form Start --- -->
                        <!-- ---- single Form Start --- -->
                        <tr>
                            <th scope="row" width="20%" class="label-dksldc">Sponsor Logo</th>
                            <td>
                                <div class="sigle-form-input-sddksldc0sd">
                                    <div class="input-group mb-3">
                                        <img src="{{ asset('/img/upload/sponsor/' . $sponsor->sponsor_logo) }}"
                                            width="300px">

                                    </div>
                                    @error('logo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </td>
                        </tr>
                        <!-- ---- single Form Start --- -->
                        <!-- ---- single Form Start --- -->
                        <tr>
                            <th scope="row" width="20%" class="label-dksldc">Sponsor URL</th>
                            <td>

                                <!-- single Form Start-->
                                <div class="sigle-form-input-sddksldc0sd">
                                    <div class="input-group mb-3">
                                        <input type="url" class="form-control" name="url" aria-label="Username"
                                            aria-describedby="basic-addon1" disabled value="{{ $sponsor->sponsor_url }}">
                                    </div>
                                    @error('url')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- single Form Start-->
                            </td>
                        </tr>
                        <!-- ---- single Form Start --- -->



                        <!-- ---- single Form Start --- -->
                        <tr>
                            <td scope="row" width="20%" class="label-dksldc" colspan="2">
                                <a href="{{ route('orgadmin.organisation.sponsor.index', $org->id) }}"
                                    class="btn btn-green btn-block">Go Back</a>
                            </td>
                        </tr>
                        <!-- ---- single Form Start --- -->
                    </tbody>
                </table>
                <br>

            </div>
        </div>

    </div>
@endsection()
