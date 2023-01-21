@extends('orgadmin.master')

@section('orgadmin_org_post') active-nav @endsection
@section('org_admin_content')
<!-- ------ Banner Aria Start ------ -->



          <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">




<br>
<h4>
    @if($org->logo)
      <img src="{{asset('img/upload/org/logo/'.$org->logo)}}" width="60px" height="60px" style="margin:0px 20px">
         <span>  {{$org->org_name}} </span> 
    @else
        <span>  {{$org->org_name}} </span> 
    @endif                    
</h4>
<hr>

<form action="{{route('orgadmin.organisation.post.store',$org->id)}}" method="post" enctype="multipart/form-data">
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
                          <input type="text" class="form-control" name="title">
                          @error('title') <<span style="width: 100%" class="text-danger">{{$message}}</span>@enderror
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
                          <textarea class="form-control" rows="3" name="short_desc"></textarea>
                          @error('short_desc') <<span style="width: 100%" class="text-danger">{{$message}}</span>@enderror
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
                          <input type="file" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="image">
                          @error('image') <<span style="width: 100%" class="text-danger">{{$message}}</span>@enderror
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