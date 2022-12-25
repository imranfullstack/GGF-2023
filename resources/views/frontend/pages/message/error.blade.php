@extends('frontend.master')
@section('style')
<style type="text/css">
	.confirm-order img {
    width: 75px;
}

.confirm-order {
    text-align: center;
    margin: 100px 0;
}

.confirm-order img {
    margin-bottom: 22px;
}

.confirm-order h1 {
    font-size: 62px;
    text-transform: capitalize;
    color: #d72828;
}
a.btn.btn-green.thank {
    font-size: 20px;
    font-weight: 700;
    margin-top: 18px;
    padding: 15px 60px;
}
.confirm-order h5 {
    text-transform: capitalize;
    color: #666;
}
</style>
@endsection
@section('main_content')


<section class="main-body">
	<div class="container">
		<div class="confirm-order">
			<img src="https://cdn0.iconfinder.com/data/icons/shift-interfaces/32/Error-512.png">
			<h1>Error!</h1>
			<h5>Something went wrong.</h5>
			<a href="{{route('login')}}" class="btn btn-green thank">Go back</a>
		</div>
	</div>
</section>

@endsection