@extends('orgadmin.master') @section('orgadmin_org_project') active-nav @endsection @section('org_admin_content')
<!-- ------ Banner Aria Start ------ -->
<div class="col-md-10 right-aria-sldksd">
  <div class="content-body-dskd">
    <br>

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">DASHBOARD</li>
    <li class="breadcrumb-item active" aria-current="page">PROJECT</li>
    <li class="breadcrumb-item active" aria-current="page"><b>{{$project->name}}</b></li>
  </ol>
</nav>

    <hr>
    <div class="find-people">
      <div class="find-people">
    <form action="{{route('orgadmin.organisation.project.update',['id'=>$org->id,'projectid'=>$project->id])}}" method="post" enctype="multipart/form-data">
      @csrf
        <table class="table table-borderless">
          <tbody>
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc"> Project Name</th>
              <td>
                <!-- single Form Start-->
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="name" value="{{$project->name}}">
                  </div>
                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <!-- single Form Start-->
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Categorys</th>
              <td>





               @php $projectcat = App\Models\Projectcat::orderby('id','desc')->get(); @endphp
                <!-- single Form Start-->
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <div class="category-kdlsdkc">
                      @foreach($category as $item)
@php
  $catname = App\Models\Projectcat::where('id',$item->projectcat_id)->first();
@endphp                      
                         <a href="{{route('orgadmin.organisation.project.remove.cat',['catid'=>$catname->id,'id'=>$org->id,'projectid'=>$project->id])}}" class="badge badge-green">{{$catname->name}} 
                          <i class="fa fa-trash"></i>
                         </a>
                      @endforeach
                    </div>

                  </div>
                </div>
                <!-- single Form Start-->
                <!-- single Form Start-->
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">




                    <select  id="mounth" multiple class="form-select" aria-label="Default select example" name="projectcat_id[]">
                        @foreach($projectcat as $cat) 
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
              <th scope="row" width="20%" class="label-dksldc">Short Description</th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <textarea class="form-control" rows="3" name="short_desc" maxlength="500" placeholder="Max 500 characters">{{$project->short_desc}}</textarea>
                  </div>

                    @error('short_desc') <span class="text-danger">{{$message}}</span> @enderror
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Long Version </th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">

                    <textarea class="form-control" rows="3" name="long_version" maxlength="10000">{{$project->long_version}}</textarea>
                  </div>
                    @error('long_version') <span class="text-danger">{{$message}}</span> @enderror
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Start &amp; Finish date</th>
              <td>
                <!-- single Form Start-->
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <div class="row">
                      <div class="col-md-6">
                        <input type="date" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="start_date" value="{{$project->start_date}}">
                        @error('start_date') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                      <div class="col-md-6">
                        <input type="date" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="end_date"  value="{{$project->end_date}}">
                        @error('end_date') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                    </div>
                  </div>
                </div>
                <!-- single Form Start-->
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Contact Person</th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="contact_person" value="{{$project->contact_person}}">
                  </div>
                        @error('contact_person') <span class="text-danger">{{$message}}</span> @enderror
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Contact Email</th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="contact_email" value="{{$project->contact_email}}">
                  </div>
                        @error('contact_email') <span class="text-danger">{{$message}}</span> @enderror
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Contact Phone</th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="contact_phone" value="{{$project->contact_phone}}">
                  </div>
                        @error('contact_phone') <span class="text-danger">{{$message}}</span> @enderror
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Location</th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="location" value="{{$project->location}}">
                  </div>
                        @error('location') <span class="text-danger">{{$message}}</span> @enderror
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Whats's Needed</th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="Whats_needed" value="{{$project->Whats_needed}}">
                  </div>
                        @error('Whats_needed') <span class="text-danger">{{$message}}</span> @enderror
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Registration form</th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="registration_form" value="{{$project->registration_form}}">
                  </div>
                        @error('registration_form') <span class="text-danger">{{$message}}</span> @enderror
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Upload Images</th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <img src="{{asset('img/upload/project/'.$project->image)}}" width="80px" style="margin-right: 30px;">
                    <input type="file" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="image">
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
                      <option value="1" {{ ($project->status == 1) ? 'selected' : ''}}>Active</option>
                      <option value="2" {{ ($project->status == 2) ? 'selected' : ''}}>Paused</option>
                      <option value="3" {{ ($project->status == 3) ? 'selected' : ''}}>Closed</option>
                    </select>
                  </div>
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
              <td scope="row" width="20%" class="label-dksldc">
                <button class="btn btn-success btn-green" value="submit">Save</button>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->
          </tbody>
        </table>
    </form>        
      </div>
      <br>
    </div>
  </div>
</div> @endsection()