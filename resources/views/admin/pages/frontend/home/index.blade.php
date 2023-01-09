@extends('admin.master')
@section('admin_content')
@section('style')
<!-- datatable Style  -->
@include('orgadmin.asset.datatable-style')
<!-- datatable Style  -->
@endsection

@section('show_edit_pages')  show @endsection()


  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">

<br>
<h4>Edit Home Page</h4>
<hr>



@include('admin.asset.message')
<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">
 	<br>

 		<div class="section-part-dsd">
 			<h5>BANNER EDIT</h5>
 			<hr>
 		</div>
<form method="post" action="{{route('admin.pages.home.banner.store')}}" enctype="multipart/form-data">
	@csrf

<table class="table">
  <tbody>
    <tr>
      <th width="35%">Banner Title</th>
      <td>
      	<input type="text" class="form-control" name="title" value="{{$banner->title}}">
      </td>
    </tr>
    <tr>
      <th width="35%">Banner Description</th>
      <td>
      	<textarea class="form-control" rows="3" name="desc">{{$banner->desc}}</textarea>
      </td>
    </tr>
    <tr>
      <th width="35%">Select Banner Image</th>
      <td>
      	<img src="{{asset('/img/upload/home/banner/'.$banner->banner_image)}}" width="50px"><hr>

      	<input type="file" class="form-control" name="banner_image" accept="image/*">
      </td>
    </tr>
    <tr>
      <th width="35%">Banner Button Text</th>
      <td>
      	<input type="text" class="form-control" name="button_text" value="{{$banner->button_text}}">
      </td>
    </tr>
    <tr>
      <th width="35%">Banner Background Color</th>
      <td>
      	<input type="color" class="form-control" name="banner_bg" value="{{$banner->banner_bg}}">
      </td>
    </tr>
    <tr>
      <th width="35%">Banner Button Color</th>
      <td>
      	<input type="color" class="form-control" name="banner_btn_bg" value="{{$banner->banner_btn_bg}}">
      </td>
    </tr>
    <tr>
      <th colspan="2">
      	<button class="btn btn-green btn-block">SAVE BANNER SETTINGS</button>
      </th>
    </tr>
  </tbody>
</table>


</form>
    </div>
  </div>

</div>


<br>
</div>
</div>
@endsection()


@section('scripts')
  @include('orgadmin.asset.datatable-script')



<script src='https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js'></script>
<script src='https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js'></script>

@endsection
