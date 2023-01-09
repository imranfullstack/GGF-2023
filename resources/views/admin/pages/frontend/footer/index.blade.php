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
<form method="post" action="{{route('admin.pages.footer.store')}}" enctype="multipart/form-data">
	@csrf

<table class="table">
  <tbody>
    <tr>
      <th width="35%">Select Footer Logo</th>
      <td>
                                <img src="{{asset('img/upload/footer/'.$footer->footer_logo)}}" width="50px">
                                <hr>
      	<input type="file" class="form-control" name="footer_logo" accept="image/*">
      </td>
    </tr>
    <tr>
      <th width="35%">URL ( LOGO ) </th>
      <td>
      	<input type="url" class="form-control" name="logo_url" required value="{{$footer->logo_url}}">
      </td>
    </tr>
    <tr>
      <th width="35%">Footer Description</th>
      <td>
      	<textarea class="form-control" rows="3" name="desc" required>{{$footer->desc}}</textarea>
      </td>
    </tr>
    <tr>
      <th width="35%">Footer Copyright Text</th>
      <td>
      	<input type="text" class="form-control" name="copyright_text" required value="{{$footer->copyright_text}}">
      </td>
    </tr>
    <tr>
      <th width="35%">Footer Color </th>
      <td>
      	<input type="color" name="bg_color" required value="{{$footer->bg_color}}">
      </td>
    </tr>
    <tr>
      <th colspan="2">
      	<button class="btn btn-green btn-block">SAVE FOOTER SETTINGS </button>
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
