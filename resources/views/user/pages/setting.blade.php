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



    <link rel='stylesheet'
    href='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/responsive/1.0.4/css/dataTables.responsive.css'>



    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.css'>
    <!-- on off switch btn -->
    <link rel="stylesheet" href="{{ asset('frontend/css/on-off-switch.css') }}" />

    <style type="text/css">
        .input-body-fieldddd.selectwidth-d03675d .label.ui.selection.fluid.dropdown.multiple {
            width: 75%;
            display: inline-block;
            border: none;
        }
        .single-line-form {
            margin: 20px 0;
        }

        footer.footer {
            margin-left: -30px !important;
        }

        .single-selection-dks {
            margin-bottom: 32px;
        }

        .width-dls03697d textarea.form-control {
            display: inline-block;
            border: 2px solid #84b04a;
        }

        .width-dls03697d {
            display: inline-flex;
            width: 100%;
            align-content: space-between;
        }

        .input-body-fieldddd.checksection-dol0 {
            border-bottom: none;
        }

        .lookingfor-dksld .form-check {
            margin: 14px 50px;
        }

        .col-md-12.lookingfor-dksld label.form-check-label {
            text-transform: uppercase;
        }

        .input-body-fieldddd.checksection-dol0 .form-check.form-switch {
            float: right;
        }

        .profile-update-table th {
            font-size: 16px;
        }

        button.btnb.btn-green.btn-block {
            border: none;
            padding: 11px 0;
            font-weight: 700;
            border-radius: 50px;
        }

        a.first-title-dksld0c {
            font-size: 24px;
            margin: 0;
            line-height: 41px;
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
            font-size: 16px;
            color: #000;
            font-weight: 700;
            text-transform: uppercase;
        }

        .border-dksldc {
            border: 3px solid #6663;
            margin-bottom: 22px;
        }

        button.btn.dropdown-toggle.btn-light {
            margin-left: -45px;
            padding: 10px 23px;
            border-bottom: 2px solid #6e933e;
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

        td.widthcskd2d {
            width: 75%;
        }
    </style>
@endsection()

@section('user_content')
    <!-- ------ Banner Aria Start ------ -->


    <div class="body-aria">

        <div class="ss">

            <br><br>

            <section>
                <div class="content-aria-dksd">
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
                                <div class="accordion-collapse collapse show" id="profile-edit">
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
                                                                        <div class="input-body-fieldddd">

                                                                            <input type="text"
                                                                                class="form-control field-skdlsd"
                                                                                name="name"
                                                                                value="{{ Auth::user()->name }}" required>

                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Email</th>
                                                                    <td class="widthcskd2d">
                                                                        <div class="input-body-fieldddd">
                                                                            <input type="email"
                                                                                class="form-control field-skdlsd"
                                                                                name="email"
                                                                                value="{{ Auth::user()->email }}" required>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Profile Picture</th>
                                                                    <td>
                                                                        <div class="input-body-fieldddd">
                                                                            <input type="file"
                                                                                class="form-control field-skdlsd"
                                                                                name="pic">
                                                                        </div>
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
                <div class="content-aria-dksd">
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
                                            <div class="">
                                                <div class="row">

                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-8">

                                                        <div class="profile-update-table">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Current password</th>
                                                                        <td class="widthcskd2d">
                                                                            <div class="input-body-fieldddd">
                                                                                <input type="password"
                                                                                    class="form-control field-skdlsd"
                                                                                    name="old_pass">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>New password</th>
                                                                        <td>
                                                                            <div class="input-body-fieldddd">
                                                                                <input type="password"
                                                                                    class="form-control  field-skdlsd"
                                                                                    name="new_pass">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Confirm new password</th>
                                                                        <td>
                                                                            <div class="input-body-fieldddd">
                                                                                <input type="password"
                                                                                    class="form-control field-skdlsd"
                                                                                    name="confirm_pass">
                                                                            </div>
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
                <div class="content-aria-dksd">
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
                                        <div class="collapse" id="collapseExample">
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
                                        <div class="collapse" id="collapseExample">
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
                    <div class="content-aria-dksd">
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
                    <div class="content-aria-dksd">
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
                                                            <div class="col-md-3">
                                                                <div class="form-lable-name-dksld0c">
                                                                    <label>Looking For</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                {{-- single Field --}}
                                                                <div class="single-selection-dks">
                                                                    <div class="input-body-fieldddd checksection-dol0">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="flexCheckDefault"
                                                                            name="volunteer_oppertunity_status"
                                                                            value="1">
                                                                        <label class="form-check-label"
                                                                            for="flexCheckDefault">
                                                                            <b>Volunteer opportunities</b>
                                                                        </label>


                                                                        <div class="form-check form-switch">
                                                                            <input type="checkbox" id="on-off-switch12"
                                                                                name="other_info_status" value="1"
                                                                                checked>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- single Field End --}}
                                                                {{-- single Field --}}
                                                                <div class="single-selection-dks">
                                                                    <div class="input-body-fieldddd checksection-dol0">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="paidwork" name="paid_work_status"
                                                                            value="1">
                                                                        <label class="form-check-label" for="paidwork">
                                                                            <b>Paid Work</b>
                                                                        </label>


                                                                        <div class="form-check form-switch">
                                                                            <input type="checkbox" id="on-off-switch13"
                                                                                name="paid_work_status" value="1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- single Field End --}}
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
                                                                <div class=" width-dls03697d">
                                                                    <textarea class="form-control" rows="2" name="short_desc"></textarea>
                                                                    <div class="form-check form-switch">
                                                                        <input type="checkbox" id="on-off-switch70"
                                                                            name="dfdd" checked value="1">
                                                                    </div>
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
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd selectwidth-d03675d">
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
                                                                    <div class="form-check form-switch">


                                                                        <input type="checkbox" id="on-off-switch15"
                                                                            checked name="key_skill_status"
                                                                            value="1">
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
                                                                    <label>Key Interests</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd selectwidth-d03675d">
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
                                                                    <div class="form-check form-switch">

                                                                        <input type="checkbox" id="on-off-switch16"
                                                                            checked name="key_interests_status"
                                                                            value="1">
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
                                                                    <div class="form-check form-switch">
                                                                        <input type="checkbox" id="on-off-switch71"
                                                                            name="dd" checked value="1">
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
                                                                    <label>Availability</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">
                                                                    <input type="text" placeholder="INPUT PLACEHOLDER"
                                                                        class="form-control field-skdlsd"
                                                                        name="availabitity">


                                                                    <div class="form-check form-switch">
                                                                        <input type="checkbox" id="on-off-switch72"
                                                                            name="dd" checked value="1">
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
                <div class="content-aria-dksd">
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







                                <div class="collapse" id="fdsafdsaf">
                                    <div class="tab-body-dksld">

                                        <div class="offset-md-2 col-md-8">
                                            <!-- single form body -->

                                            @php
                                            $contributecat = App\Models\Contributecat::orderby('id', 'desc')->get();
                                        @endphp
                                            <table class="table table-striped text-center-dlsldkc0">
                                                <thead>
                                                    <th>Date</th>
                                                    <th>Title</th>
                                                    <th>Location</th>
                                                    <th>View</th>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $contribute = App\Models\Contribute::orderby('id', 'desc')
                                                            ->where('user_id', Auth::user()->id)
                                                            ->get();
                                                    @endphp

                                                    @foreach ($contribute as $item)
                                                        <tr>
                                                            <td>{{ $item->created_at }}</td>
                                                            <td>{{ $item->title }}</td>
                                                            <td>{{ $item->location_availability }}</td>
                                                            <td>
                                                                <a href="#" class="btn btn-green"
                                                                    data-toggle="modal"
                                                                    data-target="#view_{{ $item->id }}"><i
                                                                        class="fa fa-eye"></i></a>
                                                                <a href="#" class="btn btn-primary"
                                                                    data-toggle="modal"
                                                                    data-target="#edit_{{ $item->id }}"><i
                                                                        class="fa fa-edit"></i></a>
                                                                <a href="{{route('user.contribute.delete',$item->id)}}" class="btn btn-danger"><i
                                                                        class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>

                                                        {{-- Edit Start --}}
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="view_{{ $item->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h2 class="modal-title" id="exampleModalLabel">
                                                                            CONTRIBUTE INFORMATION
                                                                        </h2>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                  
                                                                    <div class="modal-body">
                                                                        {{-- table row --}}
                                                                        <div class="tablerow">
                                                                            {{-- single line form --}}                                                                            
                                                                                <div class="single-line-form">                                                                                
                                                                                    <div class="row">
                                                                                        <div class="col-md-3"> 
                                                                                            <label><b>Contribute Title</b></label>
                                                                                        </div>
                                                                                        <div class="col-md-9"> 
                                                                                            <input type="" value="{{$item->title}}" class="form-control" disabled>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>                                                                            
                                                                            {{-- single line form --}}
                                                                            {{-- single line form --}}                                                                            
                                                                                <div class="single-line-form">                                                                                
                                                                                    <div class="row">
                                                                                        <div class="col-md-3"> 
                                                                                            <label><b>Category Of Offering</b></label>
                                                                                        </div>
                                                                                        <div class="col-md-9"> 
                                                                                           multiple information
                                                                                        </div>
                                                                                    </div>
                                                                                </div>                                                                            
                                                                            {{-- single line form --}}

                                                                      
                                                                            
                                                                            {{-- single line form --}}                                                                            
                                                                            <div class="single-line-form">                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-3"> 
                                                                                        <label><b>Short Description</b></label>
                                                                                    </div>
                                                                                    <div class="col-md-9"> 
                                                                                        {{$item->short_desc}}


                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                            
                                                                        {{-- single line form --}}

                                                                            
                                                                            {{-- single line form --}}                                                                            
                                                                            <div class="single-line-form">                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-3"> 
                                                                                        <label><b>Long Version </b></label>
                                                                                    </div>
                                                                                    <div class="col-md-9"> 
                                                                                        {{$item->long_version}}
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                            
                                                                        {{-- single line form --}}

                                                                            {{-- single line form --}}                                                                            
                                                                            <div class="single-line-form">                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-3"> 
                                                                                        <label><b>Location Availability </b></label>
                                                                                    </div>
                                                                                    <div class="col-md-9"> 
                                                                                        <div class="sigle-form-input-sddksldc0sd">
                                                                                            <div class="input-group mb-3">
        
        
                                                                                                <input
                                                                                                    placeholder="Search Location ..."
                                                                                                    class="form-control"
                                                                                                    name="location_availability"
                                                                                                    onFocus="initializeAutocomplete()"
                                                                                                    id="locality" 
                                                                                                    disabled
                                                                                                    />
        
                                                                                                <div>
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        name="city"
                                                                                                        id="city"
                                                                                                        placeholder="City"
                                                                                                        value=""
                                                                                                        disabled
                                                                                                        >
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        name="latitude"
                                                                                                        id="latitude"
                                                                                                        placeholder="Latitude"
                                                                                                        value=""
                                                                                                        disabled
                                                                                                        >
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        name="longitude"
                                                                                                        id="longitude"
                                                                                                        placeholder="Longitude"
                                                                                                        value=""
                                                                                                        disabled
                                                                                                        />
                                                                                                </div>
        
        
        
        
        
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                            
                                                                        {{-- single line form --}}
                                                                            {{-- single line form --}}                                                                            
                                                                            <div class="single-line-form">                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-3"> 
                                                                                        <label><b>File Name </b></label>
                                                                                    </div>
                                                                                    <div class="col-md-9"> 
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            aria-label="Username"
                                                                                            aria-describedby="basic-addon1"
                                                                                            name="file_name"
                                                                                            value="{{$item->file_name}}"
                                                                                            disabled
                                                                                            >
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                            
                                                                        {{-- single line form --}}
                                                                            {{-- single line form --}}                                                                            
                                                                            <div class="single-line-form">                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-3"> 
                                                                                        <label><b>File Upload</b></label>
                                                                                    </div>
                                                                                    <div class="col-md-9"> 
                                                                                        @if($item->file)
                                                                                            
                                                                                            <a href="#">File has beed found</a>
                                                                                        @else
                                                                                        <a href="#">File not found</a>
                                                                                        @endif

                                                                                        
                                                                                        


                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                            
                                                                        {{-- single line form --}}

                                                                            {{-- single line form --}}                                                                            
                                                                            <div class="single-line-form">                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-3"> 
                                                                                        <label><b>Upload date</b></label>
                                                                                    </div>
                                                                                    <div class="col-md-9"> 
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            aria-label="Username"
                                                                                            aria-describedby="basic-addon1"
                                                                                            name="contact_parson"
                                                                                            value="{{ Carbon\Carbon::parse($item->created_at)->format('d M Y') }}"
                                                                                            disabled
                                                                                            >
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                            
                                                                        {{-- single line form --}}
                                                                            {{-- single line form --}}                                                                            
                                                                            <div class="single-line-form">                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-3"> 
                                                                                        <label><b>Contact parson</b></label>
                                                                                    </div>
                                                                                    <div class="col-md-9"> 
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            aria-label="Username"
                                                                                            aria-describedby="basic-addon1"
                                                                                            name="contact_parson"
                                                                                            value="{{$item->contact_parson}}"
                                                                                            disabled
                                                                                            >
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                            
                                                                        {{-- single line form --}}

                                                                            {{-- single line form --}}                                                                            
                                                                            <div class="single-line-form">                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-3"> 
                                                                                        <label><b>Contact Email</b></label>
                                                                                    </div>
                                                                                    <div class="col-md-9"> 
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            aria-label="Username"
                                                                                            aria-describedby="basic-addon1"
                                                                                            name="contact_email"
                                                                                            value="{{$item->contact_email}}"
                                                                                            disabled
                                                                                            >
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                            
                                                                        {{-- single line form --}}

                                                                            {{-- single line form --}}                                                                            
                                                                            <div class="single-line-form">                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-3"> 
                                                                                        <label><b>Contact Phone</b></label>
                                                                                    </div>
                                                                                    <div class="col-md-9"> 
                                                                                   
                                                                                        <input type="text"
                                                                                        class="form-control"
                                                                                        aria-label="Username"
                                                                                        aria-describedby="basic-addon1"
                                                                                        name="contact_phone"
                                                                                        value="{{$item->contact_phone}}"
                                                                                        disabled
                                                                                        >


                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                            
                                                                        {{-- single line form --}}

                                                                            {{-- single line form --}}                                                                            
                                                                            <div class="single-line-form">                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-3"> 
                                                                                        <label><b>Keywords</b></label>
                                                                                    </div>
                                                                                    <div class="col-md-9"> 
                                                                                        keyword
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                            
                                                                        {{-- single line form --}}





                                                                        </div>
                                                                        {{-- table row End--}}
                                                                    </div>
                                                               
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- Edit End --}}
                   
                                                        {{-- Edit Start --}}
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="edit_{{ $item->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h2 class="modal-title" id="exampleModalLabel">
                                                                            EDIT CONTRIBUTE
                                                                        </h2>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        {{-- table row --}}
                                                                        <div class="tablerow">
                                                                            {{-- single line form --}}                                                                            
                                                                                <div class="single-line-form">                                                                                
                                                                                    <div class="row">
                                                                                        <div class="col-md-3"> 
                                                                                            <label><b>Contribute Title</b></label>
                                                                                        </div>
                                                                                        <div class="col-md-9"> 
                                                                                            <input type="" value="{{$item->title}}" class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>                                                                            
                                                                            {{-- single line form --}}
                                                                            {{-- single line form --}}                                                                            
                                                                                <div class="single-line-form">                                                                                
                                                                                    <div class="row">
                                                                                        <div class="col-md-3"> 
                                                                                            <label><b>Contribute Title</b></label>
                                                                                        </div>
                                                                                        <div class="col-md-9"> 
                                                                                            <select id="mounth"
                                                                                            class="form-select"
                                                                                            aria-label="Default select example"
                                                                                            name="contributecat_id[]">
                                                                                            @foreach ($contributecat as $cat)
                                                                                                <option
                                                                                                    value="{{ $cat->id }}">
                                                                                                    {{ $cat->name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>                                                                            
                                                                            {{-- single line form --}}

                                                                      
                                                                            
                                                                            {{-- single line form --}}                                                                            
                                                                            <div class="single-line-form">                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-3"> 
                                                                                        <label><b>Short Description</b></label>
                                                                                    </div>
                                                                                    <div class="col-md-9"> 

                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            placeholder="Max 500 carector"
                                                                                            maxlength="500"
                                                                                            aria-label="Username"
                                                                                            aria-describedby="basic-addon1"
                                                                                            name="short_desc"
                                                                                            value="{{$item->short_desc}}"
                                                                                            >


                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                            
                                                                        {{-- single line form --}}

                                                                            
                                                                            {{-- single line form --}}                                                                            
                                                                            <div class="single-line-form">                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-3"> 
                                                                                        <label><b>Long Version </b></label>
                                                                                    </div>
                                                                                    <div class="col-md-9"> 
                                                                                        <textarea class="form-control" rows="3" name="long_version">{{$item->long_version}}</textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                            
                                                                        {{-- single line form --}}

                                                                            {{-- single line form --}}                                                                            
                                                                            <div class="single-line-form">                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-3"> 
                                                                                        <label><b>Location Availability </b></label>
                                                                                    </div>
                                                                                    <div class="col-md-9"> 
                                                                                        <div class="sigle-form-input-sddksldc0sd">
                                                                                            <div class="input-group mb-3">
        
        
                                                                                                <input
                                                                                                    placeholder="Search Location ..."
                                                                                                    class="form-control"
                                                                                                    name="location_availability"
                                                                                                    onFocus="initializeAutocomplete()"
                                                                                                    id="locality" 
                                                                                                    value="{{$item->location_availability}}"
                                                                                                    />
        
                                                                                                <div>
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        name="city"
                                                                                                        id="city"
                                                                                                        placeholder="City"
                                                                                                        value="{{$item->city}}"
                                                                                                    >
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        name="latitude"
                                                                                                        id="latitude"
                                                                                                        placeholder="Latitude"
                                                                                                        value="{{$item->latitude}}"
                                                                                                    >
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        name="longitude"
                                                                                                        id="longitude"
                                                                                                        placeholder="Longitude"
                                                                                                        value="{{$item->latitude}}"
                                                                                                    />
                                                                                                </div>
        
        
        
        
        
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                            
                                                                        {{-- single line form --}}
                                                                            {{-- single line form --}}                                                                            
                                                                            <div class="single-line-form">                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-3"> 
                                                                                        <label><b>File Name </b></label>
                                                                                    </div>
                                                                                    <div class="col-md-9"> 
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            aria-label="Username"
                                                                                            aria-describedby="basic-addon1"
                                                                                            name="file_name"
                                                                                            value="{{$item->file_name}}"
                                                                                            >
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                            
                                                                        {{-- single line form --}}
                                                                            {{-- single line form --}}                                                                            
                                                                            <div class="single-line-form">                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-3"> 
                                                                                        <label><b>File Upload</b></label>
                                                                                    </div>
                                                                                    <div class="col-md-9"> 
                                                                                        @if($item->file)
                                                                                            
                                                                                            <a href="#">File has beed found</a>
                                                                                        @else
                                                                                        <a href="#">File not found</a>
                                                                                        @endif

                                                                                        
                                                                                        <input type="file"
                                                                                            class="form-control"
                                                                                            placeholder="Enter organization details"
                                                                                            aria-label="Username"
                                                                                            aria-describedby="basic-addon1"
                                                                                            name="file_upload">


                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                            
                                                                        {{-- single line form --}}

                                                                            {{-- single line form --}}                                                                            
                                                                            <div class="single-line-form">                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-3"> 
                                                                                        <label><b>Upload date</b></label>
                                                                                    </div>
                                                                                    <div class="col-md-9"> 
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            aria-label="Username"
                                                                                            aria-describedby="basic-addon1"
                                                                                            name="contact_parson"
                                                                                            value="{{ Carbon\Carbon::parse($item->created_at)->format('d M Y') }}"
                                                                                            >
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                            
                                                                        {{-- single line form --}}
                                                                            {{-- single line form --}}                                                                            
                                                                            <div class="single-line-form">                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-3"> 
                                                                                        <label><b>Contact parson</b></label>
                                                                                    </div>
                                                                                    <div class="col-md-9"> 
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            aria-label="Username"
                                                                                            aria-describedby="basic-addon1"
                                                                                            name="contact_parson"
                                                                                            value="{{$item->contact_parson}}"
                                                                                            >
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                            
                                                                        {{-- single line form --}}

                                                                            {{-- single line form --}}                                                                            
                                                                            <div class="single-line-form">                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-3"> 
                                                                                        <label><b>Contact Email</b></label>
                                                                                    </div>
                                                                                    <div class="col-md-9"> 
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            aria-label="Username"
                                                                                            aria-describedby="basic-addon1"
                                                                                            name="contact_email"
                                                                                            value="{{$item->contact_email}}"
                                                                                            >
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                            
                                                                        {{-- single line form --}}

                                                                            {{-- single line form --}}                                                                            
                                                                            <div class="single-line-form">                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-3"> 
                                                                                        <label><b>Contact Phone</b></label>
                                                                                    </div>
                                                                                    <div class="col-md-9"> 
                                                                                   
                                                                                        <input type="text"
                                                                                        class="form-control"
                                                                                        aria-label="Username"
                                                                                        aria-describedby="basic-addon1"
                                                                                        name="contact_phone"
                                                                                        value="{{$item->contact_phone}}"
                                                                                        >


                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                            
                                                                        {{-- single line form --}}

                                                                            {{-- single line form --}}                                                                            
                                                                            <div class="single-line-form">                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-3"> 
                                                                                        <label><b>Keywords</b></label>
                                                                                    </div>
                                                                                    <div class="col-md-9"> 
                                                                                        keyword
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                            
                                                                        {{-- single line form --}}





                                                                        </div>
                                                                        {{-- table row End--}}
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-green btn-block"
                                                                            data-dismiss="modal">UPDATE</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- Edit End --}}
                                                    @endforeach


                                                    <tr>
                                                        <td colspan="4">
                                                            <br>
                                                            <button type="button" class="btnb btn-green btn-block"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#contributepopup">Add
                                                                New</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- single form body -->
                                            {{-- popup Start --}}
                                            <!-- Button trigger modal -->


                                            <!-- Modal -->
                                            <div class="modal fade" id="contributepopup" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add new
                                                                contribute</h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">


                                                            <form action="{{ route('user.contribute.store') }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf

                                                                <table class="table table-borderless">
                                                                    <tbody>


                                                                        <!-- ---- single Form Start --- -->
                                                                        <tr>
                                                                            <th scope="row" width="20%"
                                                                                class="label-dksldc">Contribute Title</th>
                                                                            <td>
                                                                                <div class="sigle-form-input-sddksldc0sd">
                                                                                    <div class="input-group mb-3">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            aria-label="Username"
                                                                                            aria-describedby="basic-addon1"
                                                                                            name="title">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <!-- ---- single Form Start --- -->

                                                                        <!-- ---- single Form Start --- -->
                                                                        <tr>
                                                                            <th scope="row" width="20%"
                                                                                class="label-dksldc">Category Of Offering
                                                                            </th>
                                                                            <td>
                                                                             
                                                                                <!-- single Form Start-->
                                                                                <div class="sigle-form-input-sddksldc0sd">
                                                                                    <div class="input-group mb-3">

                                                                                        <select id="mounth"
                                                                                            class="form-select"
                                                                                            aria-label="Default select example"
                                                                                            name="contributecat_id[]">
                                                                                            @foreach ($contributecat as $cat)
                                                                                                <option
                                                                                                    value="{{ $cat->id }}">
                                                                                                    {{ $cat->name }}
                                                                                                </option>
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
                                                                            <th scope="row" width="20%"
                                                                                class="label-dksldc">Short Description</th>
                                                                            <td>
                                                                                <div class="sigle-form-input-sddksldc0sd">
                                                                                    <div class="input-group mb-3">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            placeholder="Max 500 carector"
                                                                                            maxlength="500"
                                                                                            aria-label="Username"
                                                                                            aria-describedby="basic-addon1"
                                                                                            name="short_desc">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <!-- ---- single Form Start --- -->
                                                                        <!-- ---- single Form Start --- -->
                                                                        <tr>
                                                                            <th scope="row" width="20%"
                                                                                class="label-dksldc">Long Version </th>
                                                                            <td>
                                                                                <div class="sigle-form-input-sddksldc0sd">
                                                                                    <div class="input-group mb-3">
                                                                                        <textarea class="form-control" rows="3" name="long_version"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <!-- ---- single Form Start --- -->
                                                                        <!-- ---- single Form Start --- -->
                                                                        <tr>
                                                                            <th scope="row" width="20%"
                                                                                class="label-dksldc">Location Availability
                                                                            </th>
                                                                            <td>
                                                                                <div class="sigle-form-input-sddksldc0sd">
                                                                                    <div class="input-group mb-3">


                                                                                        <input
                                                                                            placeholder="Search Location ..."
                                                                                            class="form-control"
                                                                                            name="location_availability"
                                                                                            onFocus="initializeAutocomplete()"
                                                                                            id="locality"
                                                                                            />

                                                                                        <div>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                name="city"
                                                                                                id="city"
                                                                                                placeholder="City"
                                                                                                value="">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                name="latitude"
                                                                                                id="latitude"
                                                                                                placeholder="Latitude"
                                                                                                value="">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                name="longitude"
                                                                                                id="longitude"
                                                                                                placeholder="Longitude"
                                                                                                value="">
                                                                                        </div>





                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <!-- ---- single Form Start --- -->







                                                                        <!-- ---- single Form Start --- -->
                                                                        <!-- ---- single Form Start --- -->
                                                                        <tr>
                                                                            <th scope="row" width="20%"
                                                                                class="label-dksldc">File Name</th>
                                                                            <td>
                                                                                <div class="sigle-form-input-sddksldc0sd">
                                                                                    <div class="input-group mb-3">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            aria-label="Username"
                                                                                            aria-describedby="basic-addon1"
                                                                                            name="file_name">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <!-- ---- single Form Start --- -->
                                                                        <!-- ---- single Form Start --- -->
                                                                        <tr>
                                                                            <th scope="row" width="20%"
                                                                                class="label-dksldc">File Upload</th>
                                                                            <td>
                                                                                <div class="sigle-form-input-sddksldc0sd">
                                                                                    <div class="input-group mb-3">
                                                                                        <input type="file"
                                                                                            class="form-control"
                                                                                            placeholder="Enter organization details"
                                                                                            aria-label="Username"
                                                                                            aria-describedby="basic-addon1"
                                                                                            name="file_upload">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <!-- ---- single Form Start --- -->
                                                                        <!-- ---- single Form Start --- -->
                                                                        <tr>
                                                                            <th scope="row" width="20%"
                                                                                class="label-dksldc">Upload date</th>
                                                                            <td>
                                                                                <div class="sigle-form-input-sddksldc0sd">
                                                                                    <div class="input-group mb-3">
                                                                                        <input type="date"
                                                                                            class="form-control"
                                                                                            aria-label="Username"
                                                                                            aria-describedby="basic-addon1"
                                                                                            name="contact_parson">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <!-- ---- single Form Start --- -->
                                                                        <!-- ---- single Form Start --- -->
                                                                        <tr>
                                                                            <th scope="row" width="20%"
                                                                                class="label-dksldc">Contact parson</th>
                                                                            <td>
                                                                                <div class="sigle-form-input-sddksldc0sd">
                                                                                    <div class="input-group mb-3">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            aria-label="Username"
                                                                                            aria-describedby="basic-addon1"
                                                                                            name="contact_parson">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <!-- ---- single Form Start --- -->
                                                                        <!-- ---- single Form Start --- -->
                                                                        <tr>
                                                                            <th scope="row" width="20%"
                                                                                class="label-dksldc">Contact Email</th>
                                                                            <td>
                                                                                <div class="sigle-form-input-sddksldc0sd">
                                                                                    <div class="input-group mb-3">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            aria-label="Username"
                                                                                            aria-describedby="basic-addon1"
                                                                                            name="contact_email">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <!-- ---- single Form Start --- -->
                                                                        <!-- ---- single Form Start --- -->
                                                                        <tr>
                                                                            <th scope="row" width="20%"
                                                                                class="label-dksldc">Contact Phone</th>
                                                                            <td>
                                                                                <div class="sigle-form-input-sddksldc0sd">
                                                                                    <div class="input-group mb-3">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            aria-label="Username"
                                                                                            aria-describedby="basic-addon1"
                                                                                            name="contact_phone">
                                                                                    </div>
                                                                                </div>


                                                                            </td>
                                                                        </tr>
                                                                        <!-- ---- single Form Start --- -->
                                                                        <!-- ---- single Form Start --- -->
                                                                        <tr>
                                                                            <th scope="row" width="20%"
                                                                                class="label-dksldc">Keywords</th>
                                                                            <td>
                                                                                <div
                                                                                    class="sigle-form-input-sddksldc0sd keyword-dksld0c3">
                                                                                    <div class="id">
                                                                                        <input type="text"
                                                                                            id="tag-input1"
                                                                                            name="keywords[]"
                                                                                            class="form-control">
                                                                                    </div>
                                                                                </div>


                                                                            </td>
                                                                        </tr>
                                                                        <!-- ---- single Form Start --- -->


                                                                    </tbody>
                                                                </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btnb btn-green btn-block">SAVE
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            </form>

                                            {{-- popup End --}}
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="content-aria-dksd">
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
                                                                <div class="form-lable-name-dksld0c kfdsalfdsa">
                                                                    <label>ORGANISATION</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-body-fieldddd">


                                                                    <div class="input-body-fieldddd">
                                                                        <select class="selectpicker field-skdlsd"
                                                                            data-show-subtext="true" name="organisation"
                                                                            data-live-search="true">
                                                                            <option disabled selected>-- Select Orgnisation
                                                                                --
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
                                                                    <input type="text"
                                                                        placeholder="INPUT PLACEHOLDER"
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
                                                                        data-show-subtext="true"
                                                                        data-live-search="true">
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
                                                                    <input type="text"
                                                                        placeholder="INPUT PLACEHOLDER"
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
    @include('user.asset.map-location-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/js/bootstrap-select.js"></script>


    <script id="rendered-js">
        (function() {

            "use strict";


            // Plugin Constructor
            var TagsInput = function(opts) {
                this.options = Object.assign(TagsInput.defaults, opts);
                this.init();
            };

            // Initialize the plugin
            TagsInput.prototype.init = function(opts) {
                this.options = opts ? Object.assign(this.options, opts) : this.options;

                if (this.initialized)
                    this.destroy();

                if (!(this.orignal_input = document.getElementById(this.options.selector))) {
                    console.error("tags-input couldn't find an element with the specified ID");
                    return this;
                }

                this.arr = [];
                this.wrapper = document.createElement('div');
                this.input = document.createElement('input');
                init(this);
                initEvents(this);

                this.initialized = true;
                return this;
            };

            // Add Tags
            TagsInput.prototype.addTag = function(string) {

                if (this.anyErrors(string))
                    return;

                this.arr.push(string);
                var tagInput = this;

                var tag = document.createElement('span');
                tag.className = this.options.tagClass;
                tag.innerText = string;

                var closeIcon = document.createElement('a');
                closeIcon.innerHTML = '&times;';

                // delete the tag when icon is clicked
                closeIcon.addEventListener('click', function(e) {
                    e.preventDefault();
                    var tag = this.parentNode;

                    for (var i = 0; i < tagInput.wrapper.childNodes.length; i++) {
                        if (window.CP.shouldStopExecution(0)) break;
                        if (tagInput.wrapper.childNodes[i] == tag)
                            tagInput.deleteTag(tag, i);
                    }
                    window.CP.exitedLoop(0);
                });


                tag.appendChild(closeIcon);
                this.wrapper.insertBefore(tag, this.input);
                this.orignal_input.value = this.arr.join(',');

                return this;
            };

            // Delete Tags
            TagsInput.prototype.deleteTag = function(tag, i) {
                tag.remove();
                this.arr.splice(i, 1);
                this.orignal_input.value = this.arr.join(',');
                return this;
            };

            // Make sure input string have no error with the plugin
            TagsInput.prototype.anyErrors = function(string) {
                if (this.options.max != null && this.arr.length >= this.options.max) {
                    console.log('max tags limit reached');
                    return true;
                }

                if (!this.options.duplicate && this.arr.indexOf(string) != -1) {
                    console.log('duplicate found " ' + string + ' " ');
                    return true;
                }

                return false;
            };

            // Add tags programmatically 
            TagsInput.prototype.addData = function(array) {
                var plugin = this;

                array.forEach(function(string) {
                    plugin.addTag(string);
                });
                return this;
            };

            // Get the Input String
            TagsInput.prototype.getInputString = function() {
                return this.arr.join(',');
            };


            // destroy the plugin
            TagsInput.prototype.destroy = function() {
                this.orignal_input.removeAttribute('hidden');

                delete this.orignal_input;
                var self = this;

                Object.keys(this).forEach(function(key) {
                    if (self[key] instanceof HTMLElement)
                        self[key].remove();

                    if (key != 'options')
                        delete self[key];
                });

                this.initialized = false;
            };

            // Private function to initialize the tag input plugin
            function init(tags) {
                tags.wrapper.append(tags.input);
                tags.wrapper.classList.add(tags.options.wrapperClass);
                tags.orignal_input.setAttribute('hidden', 'true');
                tags.orignal_input.parentNode.insertBefore(tags.wrapper, tags.orignal_input);
            }

            // initialize the Events
            function initEvents(tags) {
                tags.wrapper.addEventListener('click', function() {
                    tags.input.focus();
                });


                tags.input.addEventListener('keydown', function(e) {
                    var str = tags.input.value.trim();

                    if (!!~[9, 13, 188].indexOf(e.keyCode)) {
                        e.preventDefault();
                        tags.input.value = "";
                        if (str != "")
                            tags.addTag(str);
                    }

                });
            }


            // Set All the Default Values
            TagsInput.defaults = {
                selector: '',
                wrapperClass: 'tags-input-wrapper',
                tagClass: 'tag',
                max: null,
                duplicate: false
            };


            window.TagsInput = TagsInput;

        })();

        var tagInput1 = new TagsInput({
            selector: 'tag-input1',
            duplicate: false,
            max: 10
        });

        //# sourceURL=pen.js
    </script>
    <script src='https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js'></script>
    <script src='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js'></script>
    <script src='https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js'></script>
    <script id="rendered-js">
        $('table').DataTable();
    </script>
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
        new DG.OnOffSwitch({
            el: '#on-off-switch70',
            textOn: 'Share',
            textOff: 'Private',
        });
        new DG.OnOffSwitch({
            el: '#on-off-switch71',
            textOn: 'Share',
            textOff: 'Private',
        });
        new DG.OnOffSwitch({
            el: '#on-off-switch72',
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
