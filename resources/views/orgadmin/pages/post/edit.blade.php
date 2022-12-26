@extends('orgadmin.master')

@section('orgadmin_org_post') active-nav @endsection

@section('style')
<style type="text/css">
	img.img-dsldf {
    margin-right: 25px;
    height: 40px;
    width: 77px;
}
a.trash-btn {
    color: #fff;
    background: #ef1313;
    text-decoration: none;
    padding: 9px 19px;
    display: inline-block;
    margin: 0px 3px 10px 0;
    font-size: 11px;
    border-radius: 9px;
    font-weight: 700;
    text-transform: uppercase;
}
</style>
@endsection
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

<form action="{{route('orgadmin.organisation.post.update',['slug'=>$post->slug,'id'=>$org->id])}}" method="post" enctype="multipart/form-data">
  @csrf
  

        <div class="find-people">




<table class="table table-borderless">
            <tbody>

              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Post Title</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" name="title" value="{{$post->title}}">
                        </div>
                      </div>
                    <!-- single Form Start-->






                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Short Description</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <textarea class="form-control" rows="3" name="short_desc">{{$post->short_desc}}</textarea>
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Post Image</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                        	<img src="{{asset('img/upload/post/'.$post->image)}}" width="10%" class="img-dsldf">
                          <input type="file" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="image">
                        </div>
                      </div>
                  </td>
                </tr>



              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Status</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                        	<select class="form-select" name="status">
                        		<option value="1"  {{ ($post->status == 1) ? 'selected' : ''}}>Active</option>
                        		<option value="0" {{ ($post->status == 0) ? 'selected' : ''}}>Deactive</option>
                        	</select>
                        </div>
                      </div>
                  </td>
                </tr>



              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Post Category</th>
                  <td>
                    @php 
                      $postcat = App\Models\Postcat::orderby('id','desc')->where('status',1)->get(); 
                    @endphp
                      <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                      	@foreach($cat as $item)  
@php
	$namecat = App\Models\Postcat::where('id',$item->postcat_id)->first();
@endphp



                      	<a href="{{route('orgadmin.organisation.post.cat.remove',['catid'=>$item->id,'id'=>$org->id])}}" class="trash-btn">{{$namecat->name}} <i class="fa fa-trash"></i></a>
                      	@endforeach
                        <div class="input-group mb-3">

                          <select  id="mounth" multiple class="form-select" aria-label="Default select example" name="postcat_id[]">
                              @foreach($postcat as $cat) 
                                <option value=" {{$cat->id}}"> {{$cat->name}}</option> 
                               @endforeach
                          </select>


                        </div>
                      </div>
                      <!-- single Form Start-->

                  </td>
                </tr>
              <!-- ---- single Form Start --- -->

              
              <!-- ---- single Form Start --- -->
                <tr>
                  <td scope="row" width="20%" class="label-dksldc">
                      <button class="btn btn-success btn-green" type="submit">Save</button>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->


              <!-- ---- single Form Start --- -->
            </tbody>
          </table>


        </div>
</form>
      </div>

              </div>


@endsection()