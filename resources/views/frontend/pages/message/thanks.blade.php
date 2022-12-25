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
    color: #84b04a;
}
a.btn.btn-green.thank {
    font-size: 20px;
    text-transform: uppercase;
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
			<img src="https://cdn.pixabay.com/photo/2016/03/31/14/37/check-mark-1292787_1280.png">
			<h1>Thank you</h1>
			<h5>Transaction complete</h5>
			<a href="{{route('login')}}" class="btn btn-green thank">go to dashboard</a>
		</div>
	</div>
</section>

@endsection