@extends('admin.master')
@section('style')

<style type="text/css">
  .sigle-form-input-sddksldc0sd img {
    width: 100px;
    height: 100px;
}
</style>
<!-- datatable Style  -->
@include('orgadmin.asset.datatable-style')
<!-- datatable Style  -->
@endsection
@section('admin_content')




          <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">




<br>
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">DASHBOARD</li>
    <li class="breadcrumb-item active" aria-current="page"><b> Organisation Info </b></li>
  </ol>
</nav>
<hr>







<br>

@include('admin.asset.message')

<div class="table-aria-for-info-section">
  <div class="row">
    <div class="col-md-12">
          <table class="table table-borderless">
            <tbody>

              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc"> Organisation name</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          {{$org->org_name}}
                        </div>
                      </div>
                    <!-- single Form Start-->
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Organisation email</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                         {{$org->org_email}}
                        </div>
                      </div>
                    <!-- single Form Start-->
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Public facing email</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          {{$org->org_public_email}}
                        </div>
                      </div>
                    <!-- single Form Start-->
              <!-- ---- single Form Start --- -->
                </td></tr>

                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Accounts email</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                         {{$org->account_email}}
                        </div>
                      </div>
                    <!-- single Form Start-->
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">URL ( Web address ) </th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          {{$org->web_url}}
                        </div>
                      </div>
                    <!-- single Form Start-->
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc"> Facebook link</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          {{$org->facebook_url}}
                        </div>
                      </div>
                    <!-- single Form Start-->
              <!-- ---- single Form Start --- -->
                </td></tr><tr>
                  <th scope="row" width="20%" class="label-dksldc"> LinkedIn link</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          {{$org->linkedin_url}}
                        </div>
                      </div>
                    <!-- single Form Start-->
              <!-- ---- single Form Start --- -->
                </td></tr><tr>
                  <th scope="row" width="20%" class="label-dksldc"> Twitter link</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          {{$org->twitter_url}}
                        </div>
                      </div>
                    <!-- single Form Start-->
              <!-- ---- single Form Start --- -->
                </td></tr><tr>
                  <th scope="row" width="20%" class="label-dksldc"> Phone number</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          {{$org->phone}}
                        </div>
                      </div>
                    <!-- single Form Start-->
              <!-- ---- single Form Start --- -->
                </td></tr><tr>
                  <th scope="row" width="20%" class="label-dksldc"> Address </th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          {{$org->address}}
                        </div>
                      </div>
                    <!-- single Form Start-->
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc"> Contact person </th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          {{$org->contact_person}}
                        </div>
                      </div>
                    <!-- single Form Start-->
              <!-- ---- single Form Start --- -->
                </td></tr><tr>
                  <th scope="row" width="20%" class="label-dksldc"> Government registration </th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          {{$org->gov_registration}}
                        </div>
                      </div>
                    <!-- single Form Start-->
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Contact person email </th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          {{$org->contact_person_email}}
                        </div>
                      </div>
                    <!-- single Form Start-->
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Best contact</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          {{$org->best_contact}}
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Summary</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          {{$org->summary}}
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">The long version</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                           {{$org->long_version}}
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Logo</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">

                    <img src="{{asset('img/upload/org/logo/'.$org->logo)}}" width="60px" style="margin:0px 20px">
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Bank account name</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          {{$org->bank_account_name}}
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">BSB</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          {{$org->bsb}}
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Account number</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          {{$org->account_number}}
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Bpay ID</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          {{$org->bpay_id}}
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->


            <!-- ---- single Form Start --- -->
            @php 
            $orgtype = App\Models\Ogranisationtype::orderby('id','desc')->where('status',1)->get();


         
            $orgtypehave = App\Models\Orgtypehave::where('organisation_id',$org->id)->get();

            @endphp   
            <tr>
               <th scope="row" width="20%" class="label-dksldc">Organisation Type </th>
               <td>



                                <!-- single Form Start-->
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">


<div class="category-kdlsdkc">


  @foreach($orgtypehave as $item)


        <a href="#" class="badge badge-green">
{{$item->ogranisationtype->name}}
        </a>
@endforeach

</div>




                  </div>
                </div>



               </td>
            </tr>
            <!-- ---- single Form Start --- -->
            @php 
            $focus = App\Models\Focused::orderby('id','desc')->where('status',1)->get();


            $focushave = App\Models\Orgfocusedhave::where('organisation_id',$org->id)->get();


            @endphp              
            <!-- ---- single Form Start --- -->
            <tr>
               <th scope="row" width="20%" class="label-dksldc">Focus </th>
               <td>





                                <!-- single Form Start-->
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">


<div class="category-kdlsdkc">


  @foreach($focushave as $item)


        <a href="#" class="badge badge-green">
{{$item->focused->name}}
         </a>
@endforeach

</div>




                  </div>
                </div>


               </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            @php 
            $provide = App\Models\Provide::orderby('id','desc')->where('status',1)->get();

            $providehave = App\Models\Orgprovidehave::where('organisation_id',$org->id)->get();
            @endphp  



            <tr>
               <th scope="row" width="20%" class="label-dksldc">Provider 
               </th>
               <td>


                                <!-- single Form Start-->
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">


<div class="category-kdlsdkc">


  @foreach($providehave as $item)


        <a href="#" class="badge badge-green">
{{$item->provide->name}}
         </a>
@endforeach

</div>




                  </div>
                </div>
                <!-- single Form Start-->


               </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
               <th scope="row" width="20%" class="label-dksldc">Project </th>
               <td>
                  <div class="sigle-form-input-sddksldc0sd">
                     <div class="input-group mb-3">
                        <select class="form-select" name="project" disabled>
                           <option value="1" {{ ($org->project == 1) ? 'selected' : ''}}>YES</option>
                           <option value="0" {{ ($org->project == 0) ? 'selected' : ''}}>NO</option>
                        </select>
                     </div>
                  </div>
               </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
               <th scope="row" width="20%" class="label-dksldc">Offering Experiences / Events </th>
               <td>
                  <div class="sigle-form-input-sddksldc0sd">
                     <div class="input-group mb-3">
                        <select class="form-select" name="event" disabled>
                           <option value="1" {{ ($org->event == 1) ? 'selected' : ''}}>YES</option>
                           <option value="0" {{ ($org->event == 0) ? 'selected' : ''}}>NO</option>
                        </select>
                     </div>
                  </div>
               </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
               <th scope="row" width="20%" class="label-dksldc">Offer Products </th>
               <td>
                  <div class="sigle-form-input-sddksldc0sd">
                     <div class="input-group mb-3">
                        <select class="form-select" name="products" disabled>
                           <option value="1" {{ ($org->products == 1) ? 'selected' : ''}}>YES</option>
                           <option value="0" {{ ($org->products == 0) ? 'selected' : ''}}>NO</option>
                        </select>
                     </div>
                  </div>
               </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
               <th scope="row" width="20%" class="label-dksldc">Offer Service </th>
               <td>
                  <div class="sigle-form-input-sddksldc0sd">
                     <div class="input-group mb-3">
                        <select class="form-select" name="our_service" disabled>
                           <option value="1" {{ ($org->our_service == 1) ? 'selected' : ''}}>YES</option>
                           <option value="0" {{ ($org->our_service == 0) ? 'selected' : ''}}>NO</option>
                        </select>
                     </div>
                  </div>
               </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
               <th scope="row" width="20%" class="label-dksldc">Hiring </th>
               <td>
                  <div class="sigle-form-input-sddksldc0sd">
                     <div class="input-group mb-3">
                        <select class="form-select" name="hiring" disabled>
                           <option value="1" {{ ($org->hiring == 1) ? 'selected' : ''}}>YES</option>
                           <option value="0" {{ ($org->hiring == 0) ? 'selected' : ''}}>NO</option>
                        </select>
                     </div>
                  </div>
               </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
               <th scope="row" width="20%" class="label-dksldc">Events Planned</th>
               <td>
                  <div class="sigle-form-input-sddksldc0sd">
                     <div class="input-group mb-3">
                        <select class="form-select" name="events_planned" disabled>
                           <option value="1" {{ ($org->events_planned == 1) ? 'selected' : ''}}>YES</option>
                           <option value="0" {{ ($org->events_planned == 0) ? 'selected' : ''}}>NO</option>
                        </select>
                     </div>
                  </div>
               </td>
            </tr>
            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->
            <tr>
               <th scope="row" width="20%" class="label-dksldc">banner Images</th>
               <td>
                  <div class="sigle-form-input-sddksldc0sd">
                     <div class="input-group mb-3">
                        <div class="row width100">
                           <div class="col-md-4">

                            @if($org->banner_1)
                            <img src="{{asset('img/upload/org/images/'.$org->banner_1)}}" width="200px" height="200px">
                            @else
                            <img src="{{asset('img/default.jpg')}}" width="200px" height="200px">
                            @endif
                           </div>
                           <div class="col-md-4">
                            @if($org->banner_2)
                            <img src="{{asset('img/upload/org/images/'.$org->banner_2)}}" width="200px" height="200px">
                            @else
                            <img src="{{asset('img/default.jpg')}}" width="200px" height="200px">
                            @endif
                           </div>
                           <div class="col-md-4">
                            @if($org->banner_3)
                            <img src="{{asset('img/upload/org/images/'.$org->banner_3)}}" width="200px" height="200px">
                            @else
                            <img src="{{asset('img/default.jpg')}}" width="200px" height="200px">
                            @endif
                           </div>
                        </div>
                     </div>
                     @error('image') <span class="text-danger"> {{$message}} </span> @enderror
                  </div>
               </td>
            </tr>
            <!-- ---- single Form Start --- -->



              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Map Location </th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">



                       <iframe src="//maps.google.com/maps?q={{$org->lat}},{{$org->long}}&z=10&output=embed" width="100%" height="400px"></iframe>


       </div>
                      </div>
                  </td>



                </tr>
        <!-- Button trigger modal -->



<form method="post" action="{{route('admin.orgstatus.update.org',$org->id)}}">
  @csrf
  
            <!-- ---- single Form Start --- -->
            <tr>
               <th scope="row" width="20%" class="label-dksldc">Organisation Status</th>
               <td>
                  <div class="sigle-form-input-sddksldc0sd">
                     <div class="input-group mb-3">
                        <select class="form-select" name="status">
                           <option value="1" {{ ($org->status == 1) ? 'selected' : ''}}>Approve</option>
                           <option value="0" {{ ($org->status == 0) ? 'selected' : ''}}>Penddding</option>
                           <option value="2" {{ ($org->status == 2) ? 'selected' : ''}}>Cancel</option>
                        </select>
                     </div>
                  </div>
               </td>
            </tr>
            <!-- ---- single Form Start --- -->


            <!-- ---- single Form Start --- -->
            <tr>
               <th colspan="2">
                <button type="submit" class="btn btn-green btn-block">UPDATE ORGANISATION</button>
               </th>
            </tr>
            <!-- ---- single Form Start --- -->


</form>

            </tbody>
          </table>
    </div>
  </div>

</div>
<br><br>
              </div>
          </div>



@endsection()



