@extends('admin.master')
@section('admin_content')
@section('post_show')  show @endsection()


  <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">

<br>
<h4>EDIT POST</h4>
<hr>



  

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
                          {{$post->title}}
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
                          {{$post->short_desc}}
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
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Post Category</th>
                  <td>
                      @php 
                            $postcat = App\Models\Postcat::orderby('id','desc')->get(); 
                      @endphp
                      <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        @foreach($cat as $item)  
                        @php
                          $namecat = App\Models\Postcat::where('id',$item->postcat_id)->first();
                        @endphp
                        <span href="" class="btn btn-green">{{$namecat->name}} </span>
                        @endforeach
                      </div>
                      <!-- single Form Start-->
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
<form action="{{route('admin.post.update',$post->slug)}}" method="post">
  @csrf

              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Status</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <select class="form-select" name="status">
                            <option value="1"  {{ ($post->status == 1) ? 'selected' : ''}}>Active</option>
                            <option value="0" {{ ($post->status == 0) ? 'selected' : ''}}>Deactive</option>
                            <option value="4" {{ ($post->status == 4) ? 'selected' : ''}}>Suspended</option>
                          </select>
                        </div>
                      </div>
                  </td>
                </tr>              
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Suspended Note</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <textarea rows="3" class="form-control" name="suspended_note"></textarea>
                        </div>
                      </div>
                  </td>
                </tr>              
              <!-- ---- single Form Start --- -->
                <tr>
                  <td scope="row" width="20%" class="label-dksldc">
                      <button class="btn btn-success btn-green" type="submit">Save</button>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
</form>

              <!-- ---- single Form Start --- -->
            </tbody>
          </table>


        </div>

</div>
</div>
@endsection()