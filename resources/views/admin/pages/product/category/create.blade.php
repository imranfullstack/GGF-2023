@extends('admin.master')
@section('admin_content')
@section('product_show') show @endsection()



  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">
<br>
<h2>Add New Categorys</h2>
<hr>


	
<br>



	<section class="form-aria56d-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<form method="post" action="{{route('admin.product.category.store')}}">
				@csrf
					<div class="form-dlsdkc">
						<input type="text" name="name" class="form-control" placeholder="Enter Category">
						<button class="btn btn-green btn-block" type="submit">ADD NEW</button>

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