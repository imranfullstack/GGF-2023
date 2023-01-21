@extends('orgadmin.master')
@section('orgadmin_org_sponsor') active-nav @endsection
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


        <div class="find-people">


<form action="{{route('orgadmin.organisation.sponsor.store',$org->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  
<table class="table table-borderless">
            <tbody>

              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc"> Sponsor Title</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="sponsor_title">
                        </div>
                        @error('sponsor_title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    <!-- single Form Start-->
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Sponsor Description</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <textarea class="form-control" rows="3"  name="sponsor_desc"></textarea>
                        </div>
                        @error('sponsor_desc')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Sponsor Logo</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="file" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="logo">
                        </div>
                        @error('logo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Sponsor URL</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                              <input type="url" class="form-control" name="url" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        @error('url')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
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
            </tbody>
          </table>

</form>
<br>

        </div>
      </div>

              </div>


@endsection()