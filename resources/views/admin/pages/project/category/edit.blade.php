@extends('admin.master')
@section('admin_content')

@section('projects_show') show @endsection


  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">
<br>
<h4>update Category</h4>
<hr>


	
<br>



	<section class="form-aria56d-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">

			<form method="post" action="{{route('admin.project.category.update',$projectcat->id)}}">
				@csrf
					<div class="form-dlsdkc">
						<input type="text" name="name" class="form-control" placeholder="Enter Category" value="{{$projectcat->name}}" required>
						<button class="btn btn-green btn-block" type="submit">UPDATE</button>

						<a  href="{{route('admin.post.category.index')}}" class="btn btn-green btn-block">GO BACK</a>
					</div>
			</form>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</section>


</div>
</div>
@endsection