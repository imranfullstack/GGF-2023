@extends('orgadmin.pages.nonorg.master')
@section('style')
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
.content-body-dskd tr td {
    font-size: 16px;
    line-height: 38px;
    font-weight: 500;
}
.hover-color:hover {
    color: #fff;
    background: #415a20 !important;
    transition: .3s;
}
.title-heading-dlsd a{
  color: #000;
  text-decoration: none;
}
span.btn-design-Pendding {
    background: #b19221;
    padding: 0px 15px;
    display: inline-block;
    color: #fff;
    font-size: 14px;
    border-radius: 29px;
}
span.btn-design-active {
    background: #4d8307;
    padding: 0px 15px;
    display: inline-block;
    color: #fff;
    font-size: 14px;
    border-radius: 29px;
}

span.btn-design-cancel {
    background: #c10000;
    padding: 0px 15px;
    display: inline-block;
    color: #fff;
    font-size: 14px;
    border-radius: 29px;
}
</style>


@include('orgadmin.asset.datatable-style')
@endsection()


@section('orgadmin_org_list') active-nav @endsection
@section('main_aria_content')
<!-- ------ Banner Aria Start ------ -->




<br>
<h2 class="title-heading-dlsd"> ORGANISATION LIST</h2>
<hr>
<br>
<div class="row">



<div class="col-md-12">

      <table class="table table-hover">
        <thead>
            <tr>
                <th>SL</th>
                <th>Organisation Name</th>
                <th>Status</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
@php
  $i = 1;
@endphp
@foreach($org as $item)         
            <tr>
                <td>{{$i++}}</td>
                <td>{{$item->org_name}}</td>
                <td>
                  @if($item->status == 0)
                  <span class="btn-design-Pendding">Pendding</span>
                  @elseif($item->status == 1)
                  <span class="btn-design-active">Active</span>
                  @elseif($item->status == 2)
                  <span class="btn-design-cancel">cancel</span>
                  @endif
                </td>
                <td>
                  <a href="{{route('orgadmin.view',$item->id)}}" class="btn btn-green btn-block hover-color">VIEW INFO</a>
                </td>
            </tr>
@endforeach        
        </tbody>
    </table>

  
</div>


  <!-- /// Single Count Item  -->

</div>


<br>
<br>



<!-- --------------- Explore GGF End----------------- -->
@endsection()


@section('scripts')

@include('orgadmin.asset.datatable-script')


@endsection
