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
    font-size: 40px;
    color: #000;
}
a.btn.btn-green.thank {
    font-size: 20px;
    text-transform: uppercase;
    font-weight: 700;
    margin-top: 18px;
    padding: 15px 60px;
}
</style>
@endsection
@section('main_content')


<section class="main-body">
    <div class="container">
        <div class="confirm-order">

            <h1>Payment cancelled</h1>
            <a href="{{route('login')}}" class="btn btn-green thank">go to dashboard</a>
        </div>
    </div>
</section>

@endsection