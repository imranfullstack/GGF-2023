@extends('orgadmin.master')
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
div#ID_myMultiInput {
    border: none;
    border-bottom: 3px solid #84b04a;
}
.kyewordstyle .bootstrap-tagsinput {
    border: none;
    border-bottom: 3px solid #84b04a;
}
.single-social ul {
    margin: 0;
    padding: 0;
}

.single-social ul li {
    display: inline;
    padding: 0px 11px;
}
</style>



  
<link rel='stylesheet' href='https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css'>
  
<style>
@charset "UTF-8";
.bootstrap-tagsinput {
  margin: 0;
  width: 100%;
  padding: 0.5rem 0.75rem 0;
  font-size: 1rem;
  line-height: 1.25;
  transition: border-color 0.15s ease-in-out;
}
.bootstrap-tagsinput.has-focus {
  background-color: #fff;
  border-color: #5cb3fd;
}
.bootstrap-tagsinput .label-info {
  display: inline-block;
  background-color: #84B04A;
  padding: 0 0.4em 0.15em;
  border-radius: 0.25rem;
  margin-bottom: 0.4em;
}
.bootstrap-tagsinput input {
  margin-bottom: 0.5em;
}

.bootstrap-tagsinput .tag [data-role=remove]:after {
  content: "×";
}
.single-social span {
    padding: 0px 10px;
}
.single-social {
    padding: 15px 0;
}

.title-heading-dlsd a{
  color: #000;
  text-decoration: none;
}
</style>



@endsection()


@section('orgadmin_org_post') active-nav @endsection
@section('org_admin_content')
<!-- ------ Banner Aria Start ------ -->


          <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">




<br>
<h2>
    @if($org->logo)
      <img src="{{asset('img/upload/org/logo/'.$org->logo)}}" width="60px" height="60px" style="margin:0px 20px">
         <span>  {{$org->org_name}} </span> 
    @else
        <span>  {{$org->org_name}} </span> 
    @endif                    
</h2>
<hr>

<div class="row">
  <div class="add-btn-new">
    <a href="{{route('orgadmin.organisation.post.create',$org->id)}}" class="addbtn btn btn-success btn-green"> <i class="fas fa-plus"></i>  NEW </a>
  </div>
</div>


<br>


@include('orgadmin.asset.message')




<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover">
  <thead>
    <tr class="bg-green">
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Project name</th>
      <th scope="col">Status</th>
      <th scope="col">Description</th>
      <th scope="col" width="30%"></th>
    </tr>
  </thead>
  <tbody>

    @php $i = 1 @endphp
    @foreach($post as $item)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>
        @if($item->image)
        <img class="img-small-ds0d" src="{{asset('img/upload/post/'.$item->image)}}" width="50px">
        @else
        <img class="img-small-ds0d" src="{{asset('img/default.jpg')}}" width="50px">
        @endif
      </td>
      <td>{{$item->title}}</td>
      <td>
        @if($item->status == 1)
          <span class="badge-success">Active</span>
        @else($item->status == 0)
          <span class="badge-danger">Deactive</span>
        @endif
      </td>

      <td>

        {{ Str::limit($item->short_desc, 50) }}


      </td>
      <td class="actiontable-dksld">
        <a href="{{route('org.post.single',['postslug'=>$item->slug,'slug'=>$org->slug])}}" target="_blank" class="view-btn-table">View</a> <span>|</span> <a href="{{route('orgadmin.organisation.post.edit',['slug'=>$item->slug,'id'=>$org->id])}}" class="view-btn-table">Edit</a>|</span> <a href="{{route('orgadmin.organisation.post.delete',['slug'=>$item->slug,'id'=>$org->id])}}" class="view-btn-table danger-skd">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
  </div>

</div>

              </div>
          </div>

<!-- --------------- Explore GGF End----------------- -->
@endsection()

