@extends('user.master')

@section('pagenav')
    Settings
@endsection
@section('setting-active')
    active
@endsection

@section('style')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/css/bootstrap-select.css" />


    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.css'>
    <!-- on off switch btn -->
    <link rel="stylesheet" href="{{ asset('frontend/css/on-off-switch.css') }}" />

    <style type="text/css">
        .lookingfor-dksld .form-check {
            margin: 14px 50px;
        }

        .col-md-12.lookingfor-dksld label.form-check-label {
            text-transform: uppercase;
        }


        button.btnb.btn-green.btn-block {
            border: none;
            padding: 11px 0;
            font-weight: 700;
            border-radius: 50px;
        }

        a.first-title-dksld0c {
            font-size: 29px;
            margin: 0;
            padding: 0;
            text-decoration: none;
            color: #fff;
        }

        .title-dkdksldkfdf2.bg-dksld:before {
            background: #6e933e;
        }

        .title-dkdksldkfdf2.bg-dksld a.first-title-dksld0c {
            width: 38% !important;
            display: inline-block;
        }

        .title-dkdksldkfdf2.bg-dksld a.first-title-dksld0c span {
            float: right;
        }

        .input-body-fieldddd input.form-control.field-skdlsd {
            width: 75%;
        }

        .input-body-fieldddd .form-check.form-switch {
            width: 24%;
        }

        .input-body-fieldddd .form-check.form-switch,
        input.form-control.field-skdlsd {
            display: inline-block;
        }

        input.form-control.field-skdlsd {
            border: none;
        }

        .input-body-fieldddd {
            border-bottom: 2px solid #6e933e;
        }

        .single-form-aria-dksld {
            margin: 30px 0px;
        }

        .input-body-fieldddd input:focus {
            box-shadow: none;
        }

        .form-lable-name-dksld0c label {
            font-size: 19px;
            color: #000;
            font-weight: 700;
            text-transform: uppercase;
        }

        .border-dksldc {
            border: 3px solid #6663;
            margin-bottom: 22px;
        }

        ul.toggle-gff-dksld li {
            margin: 0;
            padding: 0;
            list-style: none;
            display: inline-block;
        }

        ul.toggle-gff-dksld {
            margin: 0;
            padding: 0;
            float: right;
        }

        ul.toggle-gff-dksld label {
            font-size: 18px;
            margin-bottom: 0;
            font-weight: 700;
            color: #666;
            text-transform: uppercase;
        }

        .input-body-fieldddd.text {
            border-bottom: none;
        }

        .input-body-fieldddd.text textarea.form-control {
            border: 3px solid #6e933e;
            max-width: 100%;
            min-width: 100%;
        }

        .form-check.form-switch .on-off-switch {
            float: right;
        }

        .btn-block {
            width: 100%;
        }

        .btn-check:checked+label.btn.btn-outline-success.success-avable.btn-block {
            background: #6e933e;
        }

        button.btn.btn-success.btn-green.right-blsdkc,
        a.btn.btn-success.btn-green.right-blsdkc {
            float: right;
            padding: 15px 40px;
            text-transform: uppercase;
            font-weight: 700;
        }

        a.btn.btn-success.btn-green.left-blsdkc {
            padding: 15px 40px;
            text-transform: uppercase;
            font-weight: 700;
        }
    </style>


    <style>
        .uploadOuter {
            text-align: center;
            padding: 20px;
        }

        .uploadOuter strong {
            padding: 0 10px;
        }

        .dragBox {
            width: 100%;
            height: 100px;
            margin: 0 auto;
            position: relative;
            text-align: center;
            font-weight: bold;
            line-height: 95px;
            color: #999;
            border: 2px dashed #ccc;
            display: inline-block;
            transition: transform 0.3s;
        }

        .dragBox input[type="file"] {
            position: absolute;
            height: 100%;
            width: 100%;
            opacity: 0;
            top: 0;
            left: 0;
        }

        .draging {
            transform: scale(1.1);
        }

        #preview {
            text-align: center;
        }

        #preview img {
            max-width: 100%;
        }



        .title-dkdksldkfdf2.bg-dksld a.first-title-dksld0c {
            line-height: 45px;
        }

        .arialeeds .form-switch {
            float: left;
            padding: 0;
            margin: 20px 0;
        }
    </style>
@endsection()

@section('user_content')
    <!-- ------ Banner Aria Start ------ -->


    <div class="body-aria">

        <div class="container">

            <br><br>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="first-collaps-part">
                                <div class="service-aria-business-dkskdf0c23d">
                                    <div class="title-dkdksldkfdf2 bg-dksld">
                                        <a data-bs-toggle="collapse" href="#profile-edit" role="button"
                                            aria-expanded="true" aria-controls="collapseExample"
                                            class="first-title-dksld0c"> PROFILE<span>
                                                <i class="fas fa-caret-down"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accordion-collapse collapse " id="profile-edit">
                                    <div class="tab-body-dksld">
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <form action="{{ route('user.profile.update', Auth::user()->id) }}"
                                                    method="post" enctype="multipart/form-data"> @csrf <div
                                                        class="profile-update-table">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <td>
                                                                        <input type="text" class="form-control"
                                                                            name="name" value="{{ Auth::user()->name }}"
                                                                            required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Email</th>
                                                                    <td>
                                                                        <input type="email" class="form-control"
                                                                            name="email" value="{{ Auth::user()->email }}"
                                                                            required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Profile Picture</th>
                                                                    <td>
                                                                        <input type="file" class="form-control"
                                                                            name="pic">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <br>
                                                                        <button type="submit"
                                                                            class="btnb btn-green btn-block">UPDATE
                                                                            PROFILE</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="first-collaps-part">
                                <div class="service-aria-business-dkskdf0c23d">
                                    <div class="title-dkdksldkfdf2 bg-dksld">
                                        <a data-bs-toggle="collapse" href="#password-edit" role="button"
                                            aria-expanded="true" aria-controls="collapseExample"
                                            class="first-title-dksld0c"> PASSWORD<span>
                                                <i class="fas fa-caret-down"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse" id="password-edit">


                                    <form action="{{ route('user.password.update', Auth::user()->id) }}" method="post">
                                        @csrf
                                        <div class="tab-body">
                                            <div class="container">
                                                <div class="row">

                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-8">

                                                        <div class="profile-update-table">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Current password</th>
                                                                        <td>
                                                                            <input type="password" class="form-control"
                                                                                name="old_pass">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>New password</th>
                                                                        <td>
                                                                            <input type="password" class="form-control"
                                                                                name="new_pass">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Confirm new password</th>
                                                                        <td>
                                                                            <input type="password" class="form-control"
                                                                                name="confirm_pass">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">
                                                                            <br>
                                                                            <button type="submit"
                                                                                class="btnb btn-green btn-block">UPDATE
                                                                                PASSWORD</button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="first-collaps-part">


                                <div class="service-aria-business-dkskdf0c23d">
                                    <div class="title-dkdksldkfdf2 bg-dksld">
                                        <a data-bs-toggle="collapse" href="#collapseExample" role="button"
                                            aria-expanded="true" aria-controls="collapseExample"
                                            class="first-title-dksld0c">
                                            Personal details
                                            <span>
                                                <i class="fas fa-caret-down"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>


                                @php
                                    
                                    $register = App\Models\Individualinfo::where('user_id', Auth::user()->id)->first();
                                    
                                @endphp

                                @if ($register)
                                    <form action="{{ route('user.register.update', $register->id) }}" method="post">
                                        @csrf
                                        <div class="accordion-collapse collapse show" id="collapseExample">
                                            <div class="tab-body-dksld">
                                                <div class="offset-md-2 col-md-8">
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Given Name</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="text" value="{{ Auth::user()->name }}"
                                                                        class="form-control field-skdlsd" name="name">
                                                                    <div class="form-check form-switch">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>SURNAME</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="text"
                                                                        class="form-control field-skdlsd" name="surname"
                                                                        value="{{ $register->surname }}">
                                                                    <div class="form-check form-switch">
                                                                        <input type="checkbox" id="on-off-switch"
                                                                            name="surname_status" value="1"
                                                                            {{ $register->surname_status == 1 ? 'checked' : '' }}>
                                                                    </div>
                                                                </div>




                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>EMAIL</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="text"
                                                                        value="{{ Auth::user()->email }}"
                                                                        class="form-control field-skdlsd" name="email">
                                                                    <div class="form-check form-switch">
                                                                        <input type="checkbox" id="on-off-switchs"
                                                                            name="email_status" value="1"
                                                                            {{ $register->email_status == 1 ? 'checked' : '' }}>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>PHONE</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="text"
                                                                        class="form-control field-skdlsd" name="phone"
                                                                        value="{{ $register->phone }}">
                                                                    <div class="form-check form-switch">
                                                                        <input type="checkbox" id="on-off-switch1"
                                                                            name="phone_status" value="1"
                                                                            {{ $register->phone_status == 1 ? 'checked' : '' }}>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>E-Commerce</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="text"
                                                                        class="form-control field-skdlsd" name="ecommerce"
                                                                        value="{{ $register->ecommerce }}">
                                                                    <div class="form-check form-switch">
                                                                        <input type="checkbox" id="on-off-switch2"
                                                                            name="ecommerce_status" value="1"
                                                                            {{ $register->ecommerce_status == 1 ? 'checked' : '' }}>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Other INFO</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="text"
                                                                        class="form-control field-skdlsd"
                                                                        name="other_info"
                                                                        value="{{ $register->other_info }}">
                                                                    <div class="form-check form-switch">
                                                                        <input type="checkbox" id="on-off-switch3"
                                                                            name="other_info_status" value="1"
                                                                            {{ $register->other_info_status == 1 ? 'checked' : '' }}>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="btn-save-dksldkf">
                                                                    <button type="submit">UPDATE</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <div class="border-dksldc"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    <form action="{{ route('user.register.store') }}" method="post">
                                        @csrf
                                        <div class="accordion-collapse collapse show" id="collapseExample">
                                            <div class="tab-body-dksld">
                                                <div class="offset-md-2 col-md-8">
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Given Name</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="text"
                                                                        value="{{ Auth::user()->name }}"
                                                                        class="form-control field-skdlsd" name="name">
                                                                    <div class="form-check form-switch">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>SURNAME</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="text"
                                                                        class="form-control field-skdlsd" name="surname">
                                                                    <div class="form-check form-switch">
                                                                        <input type="checkbox" id="on-off-switch"
                                                                            name="surname_status" value="1" checked>
                                                                    </div>
                                                                </div>




                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>EMAIL</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="text"
                                                                        value="{{ Auth::user()->email }}"
                                                                        class="form-control field-skdlsd" name="email">
                                                                    <div class="form-check form-switch">
                                                                        <input type="checkbox" id="on-off-switchs"
                                                                            name="email_status" value="1" checked>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>PHONE</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="text"
                                                                        class="form-control field-skdlsd" name="phone">
                                                                    <div class="form-check form-switch">
                                                                        <input type="checkbox" id="on-off-switch1"
                                                                            name="phone_status" value="1" checked>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>E-Commerce</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="text"
                                                                        class="form-control field-skdlsd"
                                                                        name="ecommerce">
                                                                    <div class="form-check form-switch">
                                                                        <input type="checkbox" id="on-off-switch2"
                                                                            name="ecommerce_status" value="1"
                                                                            checked>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Other INFO</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="text"
                                                                        class="form-control field-skdlsd"
                                                                        name="other_info">
                                                                    <div class="form-check form-switch">
                                                                        <input type="checkbox" id="on-off-switch3"
                                                                            name="other_info_status" value="1"
                                                                            checked>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="btn-save-dksldkf">
                                                                    <button type="submit">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <div class="border-dksldc"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </section>


            @php
                $befound = App\Models\Befound::where('user_id', Auth::user()->id)->first();
            @endphp

            @if ($befound)
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="first-collaps-part">
                                    <div class="service-aria-business-dkskdf0c23d">
                                        <div class="title-dkdksldkfdf2 bg-dksld">
                                            <a data-bs-toggle="collapse" href="#collapseExampledds" role="button"
                                                aria-expanded="false" aria-controls="collapseExample"
                                                class="first-title-dksld0c"> Be found on GGF <span>
                                                    <i class="fas fa-caret-down"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <form action="{{ route('user.befound.update', $befound->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="collapse" id="collapseExampledds">
                                            <div class="tab-body-dksld">
                                                <div class="offset-md-2 col-md-8">
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Volunteer Or Find a Job Through GGF</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            name="volunteer_oppertunity" type="checkbox"
                                                                            value="1" id="flexCheckDefault"
                                                                            {{ $befound->volunteer_oppertunity == 1 ? 'checked' : '' }}>
                                                                        <label class="form-check-label"
                                                                            for="flexCheckDefault"> Volunteer opportunities
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <ul class="toggle-gff-dksld">
                                                                    <li>
                                                                        <div class="form-check form-switch">
                                                                            <input type="checkbox" id="on-off-switch12"
                                                                                name="volunteer_oppertunity_status"
                                                                                value="1"
                                                                                {{ $befound->volunteer_oppertunity_status == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <input class="form-check-input" name="paid_work"
                                                                        type="checkbox" value="1"
                                                                        id="flexCheckDefault1"
                                                                        {{ $befound->paid_work == 1 ? 'checked' : '' }}>
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault1"> Paid Work </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <ul class="toggle-gff-dksld">
                                                                    <li>
                                                                        <div class="form-check form-switch">
                                                                            <input type="checkbox" id="on-off-switch13"
                                                                                name="paid_work_status" value="1"
                                                                                {{ $befound->paid_work_status == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Short Description</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd text">
                                                                    <textarea class="form-control" rows="3" name="short_desc">{{ $befound->short_desc }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    @php
                                                        $keyskill = App\Models\Keyskill::where('status', 1)->get();
                                                        $interest = App\Models\Interest::where('status', 1)->get();
                                                    @endphp
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Key Skills / Knowledge </label>
                                                                </div>
                                                            </div>
                                                            @php
                                                                $keyskillget = App\Models\Befoundkeyskill::where('user_id', Auth::user()->id)->get();
                                                            @endphp
                                                            <div class="col-md-9">
                                                                @foreach ($keyskillget as $item)
                                                                    <a class="badge bg-green"
                                                                        href="{{ route('user.befound.remove.keyskill', $item->id) }}">{{ $item->name }}
                                                                        <i class="fas fa-trash"></i> </a>
                                                                @endforeach
                                                                <hr>


                                                                <div class="input-body-fieldddd">
                                                                    <select multiple=""
                                                                        class="label ui selection fluid dropdown"
                                                                        name="keyskill[]">
                                                                        <option value=""> Select
                                                                        </option>
                                                                        @foreach ($keyskill as $item)
                                                                            <option value="{{ $item->id }}">
                                                                                {{ $item->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Key Interests</label>
                                                                </div>
                                                            </div>
                                                            @php
                                                                $interestget = App\Models\Befoundkeyinterest::where('user_id', Auth::user()->id)->get();
                                                            @endphp
                                                            <div class="col-md-9">
                                                                @foreach ($interestget as $item)
                                                                    <a class="badge bg-green"
                                                                        href="{{ route('user.befound.remove.interest', $item->id) }}">{{ $item->name }}
                                                                        <i class="fas fa-trash"></i> </a>
                                                                @endforeach
                                                                <hr>
                                                                <div class="input-body-fieldddd">
                                                                    <select multiple=""
                                                                        class="label ui selection fluid dropdown"
                                                                        name="interests[]">
                                                                        <option value=""> Select
                                                                        </option>
                                                                        @foreach ($interest as $item)
                                                                            <option value="{{ $item->id }}">
                                                                                {{ $item->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld arialeeds">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Key Skills / Knowledge Status</label>
                                                                </div>
                                                                <div class="form-check form-switch">
                                                                    <input type="checkbox" id="on-off-switch15"
                                                                        name="key_skill_status" value="1"
                                                                        {{ $befound->key_skill_status == 1 ? 'checked' : '' }}>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Key Interests Status</label>
                                                                </div>
                                                                <div class="form-check form-switch">
                                                                    <input type="checkbox" id="on-off-switch16"
                                                                        name="key_interests_status" value="1"
                                                                        {{ $befound->key_interests_status == 1 ? 'checked' : '' }}>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Resume</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">

                                                                    @if ($befound->resume)
                                                                        <a href="{{ asset('img/upload/resume/' . $befound->resume) }}"
                                                                            target="_blank"><b>Download CV</b></a>
                                                                        <hr>
                                                                    @endif

                                                                    <input type="file"
                                                                        class="form-control field-skdlsd" name="resume"
                                                                        accept="application/pdf">
                                                                    <div class="form-check form-switch">
                                                                        <input type="checkbox" id="on-off-switch69"
                                                                            name="resume_status" value="1"
                                                                            {{ $befound->resume_status == 1 ? 'checked' : '' }}>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Location</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="text"
                                                                        class="form-control field-skdlsd" name="location"
                                                                        value="{{ $befound->location }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Availability</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="text" placeholder="INPUT PLACEHOLDER"
                                                                        class="form-control field-skdlsd"
                                                                        name="availabitity"
                                                                        value="{{ $befound->availabitity }}">
                                                                    <div class="form-check form-switch"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Auto Pause Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="date" placeholder="INPUT PLACEHOLDER"
                                                                        class="form-control field-skdlsd"
                                                                        name="auto_pause_date"
                                                                        value="{{ $befound->auto_pause_date }}">
                                                                    <div class="form-check form-switch">
                                                                        <input type="checkbox" id="on-off-switch17"
                                                                            name="auto_pause_date_status" value="1"
                                                                            {{ $befound->auto_pause_date_status == 1 ? 'checked' : '' }}>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Status Control</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddddd">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check"
                                                                                value="1" name="status_control"
                                                                                id="success-outlined" autocomplete="off"
                                                                                {{ $befound->status_control == 1 ? 'checked' : '' }}>
                                                                            <label
                                                                                class="btn btn-outline-success success-avable btn-block"
                                                                                for="success-outlined">Available</label>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check"
                                                                                value="2" name="status_control"
                                                                                id="danger-outlined" autocomplete="off"
                                                                                {{ $befound->status_control == 2 ? 'checked' : '' }}>
                                                                            <label
                                                                                class="btn btn-outline-danger btn-bause-skdlsd btn-block"
                                                                                for="danger-outlined">Pause</label>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check"
                                                                                value="3" name="status_control"
                                                                                id="danger-test" autocomplete="off"
                                                                                {{ $befound->status_control == 3 ? 'checked' : '' }}>
                                                                            <label
                                                                                class="btn btn-outline-danger remove-dlsdkd btn-block"
                                                                                for="danger-test">Remove</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <br>
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="continue-btn-sld">
                                                                    <a href="#"
                                                                        class="btn btn-success btn-green  left-blsdkc">Contiribute</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="continue-btn-sld">
                                                                    <button type="submit"
                                                                        class="btn btn-success btn-green right-blsdkc">Update</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <div class="border-dksldc"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @else
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="first-collaps-part">
                                    <div class="service-aria-business-dkskdf0c23d">
                                        <div class="title-dkdksldkfdf2 bg-dksld">
                                            <a data-bs-toggle="collapse" href="#collapseExampledds" role="button"
                                                aria-expanded="false" aria-controls="collapseExample"
                                                class="first-title-dksld0c"> Be Found on GGF <span>
                                                    <i class="fas fa-caret-down"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <form action="{{ route('user.befound.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="collapse" id="collapseExampledds">
                                            <div class="tab-body-dksld">
                                                <div class="offset-md-2 col-md-8">
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-lable-name-dksld0c text-center">
                                                                    <label>Volunteer Or Find a Job Through GGF</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <div class="form-check">
                                                                        <label class="form-check-label" for="dd">
                                                                            Looking For
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 lookingfor-dksld">


                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="flexCheckDefault"
                                                                        name="volunteer_oppertunity_status"
                                                                        value="1">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <b>Volunteer opportunities</b>
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="paidwork" name="paid_work_status"
                                                                        value="1">
                                                                    <label class="form-check-label" for="paidwork">
                                                                        <b>Paid Work</b>
                                                                    </label>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Details</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd text">
                                                                    <textarea class="form-control" rows="3" name="short_desc"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body --> @php
                                                        $keyskill = App\Models\Keyskill::where('status', 1)->get();
                                                        $interest = App\Models\Interest::where('status', 1)->get();
                                                    @endphp
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Key Skills / Knowledge </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <select multiple=""
                                                                        class="label ui selection fluid dropdown"
                                                                        name="keyskill[]">
                                                                        <option value=""> Select
                                                                        </option>
                                                                        @foreach ($keyskill as $item)
                                                                            <option value="{{ $item->id }}">
                                                                                {{ $item->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Key Interests</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <select multiple=""
                                                                        class="label ui selection fluid dropdown"
                                                                        name="interests[]">
                                                                        <option value=""> Select
                                                                        </option>
                                                                        @foreach ($interest as $item)
                                                                            <option value="{{ $item->id }}">
                                                                                {{ $item->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld arialeeds">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Key Skills / Knowledge Status</label>
                                                                </div>
                                                                <div class="form-check form-switch">
                                                                    <input type="checkbox" id="on-off-switch15" checked
                                                                        name="key_skill_status" value="1">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Key Interests Status</label>
                                                                </div>
                                                                <div class="form-check form-switch">
                                                                    <input type="checkbox" id="on-off-switch16" checked
                                                                        name="key_interests_status" value="1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>résumé</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="file"
                                                                        class="form-control field-skdlsd" name="resume"
                                                                        accept="application/pdf">
                                                                    <div class="form-check form-switch">
                                                                        <input type="checkbox" id="on-off-switch69"
                                                                            name="resume_status" checked value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Location</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="text"
                                                                        class="form-control field-skdlsd" name="location">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Availability</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="text" placeholder="INPUT PLACEHOLDER"
                                                                        class="form-control field-skdlsd"
                                                                        name="availabitity">
                                                                    <div class="form-check form-switch"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Status Control</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddddd">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check"
                                                                                value="1" name="status_control"
                                                                                id="success-outlined" autocomplete="off"
                                                                                checked>
                                                                            <label
                                                                                class="btn btn-outline-success success-avable btn-block"
                                                                                for="success-outlined">Available</label>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check"
                                                                                value="2" name="status_control"
                                                                                id="danger-outlined" autocomplete="off">
                                                                            <label
                                                                                class="btn btn-outline-danger btn-bause-skdlsd btn-block"
                                                                                for="danger-outlined">Pause</label>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check"
                                                                                value="3" name="status_control"
                                                                                id="danger-test" autocomplete="off">
                                                                            <label
                                                                                class="btn btn-outline-danger remove-dlsdkd btn-block"
                                                                                for="danger-test">Remove</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->

                                                    
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Availability Auto Pause Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="date" placeholder="INPUT PLACEHOLDER"
                                                                        class="form-control field-skdlsd"
                                                                        name="auto_pause_date">
                                                                    <div class="form-check form-switch">
                                                                        <input type="checkbox" id="on-off-switch17"
                                                                            name="auto_pause_date_status" checked
                                                                            value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->

                                                    
                                                    <br>
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="continue-btn-sld">
                                                                    <a href="#"
                                                                        class="btn btn-success btn-green  left-blsdkc">Contiribute</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="continue-btn-sld">
                                                                    <button type="submit"
                                                                        class="btn btn-success btn-green right-blsdkc">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <div class="border-dksldc"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif



            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="first-collaps-part">


                                <div class="service-aria-business-dkskdf0c23d">
                                    <div class="title-dkdksldkfdf2 bg-dksld">
                                        <a data-bs-toggle="collapse" href="#fdsafdsaf" role="button"
                                            aria-expanded="false" aria-controls="collapseExample"
                                            class="first-title-dksld0c">
                                            Contribute
                                            <span>
                                                <i class="fas fa-caret-down"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>



                                <form action="" method="post">
                                    @csrf



                                    <div class="collapse" id="fdsafdsaf">
                                        <div class="tab-body-dksld">

                                            <div class="offset-md-2 col-md-8">
                                                <!-- single form body -->
                                                <div class="single-form-aria-dksld">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-lable-name-dksld0c">
                                                                <label>INVITATION CODE</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="input-body-fieldddd">
                                                                <input type="text" placeholder="INPUT PLACEHOLDER"
                                                                    class="form-control field-skdlsd"
                                                                    name="invitation_code" value="">
                                                                <div class="form-check form-switch">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single form body -->


                                                <!-- single form body -->
                                                <div class="single-form-aria-dksld">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="btn-save-dksldkf">
                                                                <button type="submit" class="btn-block">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single form body -->
                                                <div class="border-dksldc"></div>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="first-collaps-part">


                                <div class="service-aria-business-dkskdf0c23d">
                                    <div class="title-dkdksldkfdf2 bg-dksld">
                                        <a data-bs-toggle="collapse" href="#collapseExampledd" role="button"
                                            aria-expanded="false" aria-controls="collapseExample"
                                            class="first-title-dksld0c">
                                            Join a GGF organisation
                                            <span>
                                                <i class="fas fa-caret-down"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>


                                @php
                                    
                                    $org = App\Models\Organisation::orderby('id', 'desc')
                                        ->where('status', 1)
                                        ->get();
                                    $apply = App\Models\Userjoin::where('user_id', Auth::user()->id)->first();
                                    
                                @endphp


                                @if ($apply)
                                    <form action="{{ route('user.join.update', $apply->id) }}" method="post">
                                        @csrf



                                        <div class="collapse" id="collapseExampledd">
                                            <div class="tab-body-dksld">

                                                <div class="offset-md-2 col-md-8">
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>ORGANISATION</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">


                                                                    <select class="selectpicker" data-show-subtext="true"
                                                                        data-live-search="true">
                                                                        <option disabled selected>-- Select Orgnisation --
                                                                        </option>
                                                                        @foreach ($org as $item)
                                                                            <option value="{{ $item->id }}"
                                                                                {{ $item->id == $apply->organisation_id ? 'selected' : '' }}>
                                                                                {{ $item->org_name }}</option>
                                                                        @endforeach
                                                                    </select>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>INVITATION CODE</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="text" placeholder="INPUT PLACEHOLDER"
                                                                        class="form-control field-skdlsd"
                                                                        name="invitation_code"
                                                                        value="{{ $apply->invitation_code }}">
                                                                    <div class="form-check form-switch">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->


                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="btn-save-dksldkf">
                                                                    <button type="submit">Update</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <div class="border-dksldc"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                @else
                                    <form action="{{ route('user.join.store') }}" method="post">
                                        @csrf



                                        <div class="collapse" id="collapseExampledd">
                                            <div class="tab-body-dksld">

                                                <div class="offset-md-2 col-md-8">
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>ORGANISATION</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="">
                                                                    <select class="selectpicker form-control"
                                                                        data-show-subtext="true" data-live-search="true">
                                                                        <option disabled selected>-- Select Orgnisation --
                                                                        </option>
                                                                        @foreach ($org as $item)
                                                                            <option value="{{ $item->id }}">
                                                                                {{ $item->org_name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>INVITATION CODE</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="text" placeholder="INPUT PLACEHOLDER"
                                                                        class="form-control field-skdlsd"
                                                                        name="invitation_code">
                                                                    <div class="form-check form-switch">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->


                                                    <!-- single form body -->
                                                    <div class="single-form-aria-dksld">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="btn-save-dksldkf">
                                                                    <button>Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single form body -->
                                                    <div class="border-dksldc"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <br><br>

        </div>
    </div>


    <!-- --------------- Explore GGF End----------------- -->
@endsection()

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/js/bootstrap-select.js"></script>



    <!-- --- switch Off on JS----- -->
    <script type="text/javascript" src="{{ asset('frontend/js/on-off-switch.js') }}"></script>
    <script type="text/javascript">
        new DG.OnOffSwitch({
            el: '#on-off-switch',
            textOn: 'Share',
            textOff: 'Private',
        });
        new DG.OnOffSwitch({
            el: '#on-off-switchs',
            textOn: 'Share ',
            textOff: 'Private',
        });
        new DG.OnOffSwitch({
            el: '#on-off-switch1',
            textOn: 'Share',
            textOff: 'Private',
        });
        new DG.OnOffSwitch({
            el: '#on-off-switch2',
            textOn: 'Share',
            textOff: 'Private',
        });
        new DG.OnOffSwitch({
            el: '#on-off-switch3',
            textOn: 'Share',
            textOff: 'Private',
        });
        new DG.OnOffSwitch({
            el: '#on-off-switch13',
            textOn: 'Share',
            textOff: 'Private',
        });
        new DG.OnOffSwitch({
            el: '#on-off-switch12',
            textOn: 'Share',
            textOff: 'Private',
        });
        new DG.OnOffSwitch({
            el: '#on-off-switch15',
            textOn: 'Share',
            textOff: 'Private',
        });
        new DG.OnOffSwitch({
            el: '#on-off-switch16',
            textOn: 'Share',
            textOff: 'Private',
        });
        new DG.OnOffSwitch({
            el: '#on-off-switch17',
            textOn: 'Share',
            textOff: 'Private',
        });
        new DG.OnOffSwitch({
            el: '#on-off-switch69',
            textOn: 'Share',
            textOff: 'Private',
        });
    </script>


    <script id="rendered-js">
        "use strict";

        function dragNdrop(event) {
            var fileName = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("preview");
            var previewImg = document.createElement("img");
            previewImg.setAttribute("src", fileName);
            preview.innerHTML = "";
            preview.appendChild(previewImg);
        }

        function drag() {
            document.getElementById('uploadFile').parentNode.className = 'draging dragBox';
        }

        function drop() {
            document.getElementById('uploadFile').parentNode.className = 'dragBox';
        }
        //# sourceURL=pen.js
    </script>


    <script src='https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.js'></script>
    <script id="rendered-js">
        $('.label.ui.dropdown').
        dropdown();

        $('.no.label.ui.dropdown').
        dropdown({
            useLabels: false
        });


        $('.ui.button').on('click', function() {
            $('.ui.dropdown').
            dropdown('restore defaults');
        });
        //# sourceURL=pen.js
    </script>
@endsection()
