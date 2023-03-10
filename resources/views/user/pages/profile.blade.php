@extends('user.master')
<!-- Page Nav -->
@section('pagenav') Profile @endsection

@section('style')



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
</style>



<style type="text/css">
  


  .border-secondary {
      border-color: #6e933e!important;
  }
  .card.mb-3.box-style-dksld {
      padding: 20px;
  }
  .card.mb-3.box-style-dksld {
      border: 1px solid #c1e98c;
      border-bottom: 5px solid #6e933e;
  }
  .card.mb-3.box-style-dksld img {
    width: 80px;
    height: 80px;
}
.card.mb-3.box-style-dksld a {
    color: #84b04a;
    padding-left: 7px;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 14px;
    text-decoration: none;
}
.card.mb-3.box-style-dksld h5.card-title {
    font-size: 19px;
}


.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #84b04a;
}
ul.tab-custom li.nav-item > button {
    font-weight: 700;
    color: #000;
    text-transform: uppercase;
}
.tab-body {
    margin: 50px 0px;
}

.text-center-dlsldkc0 tr td {
    padding: 20px 0;
}

.custom-dd25s3d6cd th{
    font-size: 17px;
}
tr.bg-dark.custom-dd25s3d6cd th:after {
    display: none;
}
.dataTables_paginate {
    float: right;
}
.btn-block {
    width: 100%;
}

.dataTables_paginate.paging_simple_numbers li a {
    padding: 6px 16px;
    color: #000;
    text-decoration: none;
    text-transform: uppercase;
    display: inline-block;
}
div#DataTables_Table_0_paginate ul.pagination li.paginate_button.active a{
    color: #ffffff !important;
    background: #6e933e;
}

.dataTables_length {
    display: none  !important;
}

.dataTables_filter {
    display: none !important;
}
.dataTables_wrapper.form-inline.dt-bootstrap.no-footer .row {
    padding-top: 10px;
}

.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    background-color: #84b04a !important;
}



      <style type="text/css">
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
         .input-body-fieldddd .form-check.form-switch ,input.form-control.field-skdlsd {
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
button.btnb.btn-green.btn-block {
    border: none;
    padding: 8px 0;
}
a.first-title-dksld0c span {
    margin-top: 6px;
}
      </style>




@section('profile-active') active @endsection

<!-- Page Nav End-->



@section('user_content')


<style type="text/css">
  
.title-dkdksldkfdf2.bg-dksld a.first-title-dksld0c {
    width: 38% !important;
}
</style>



<div class="body-aria">
  <div class="container">
  </div>
</div>

@endsection()

