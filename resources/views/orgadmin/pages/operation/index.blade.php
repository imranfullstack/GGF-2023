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
.customer_records_dynamic .remove {
    margin: 25px 0;
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

<style>
.bs-callout { padding: 10px 20px; margin: 20px 0; border: 1px solid #c6eaf5; border-left-width: 5px; border-radius: 3px; background: #ddf6fd; color: #1b809e;}
.form-group.sigle-form-input-sddksldc0sd {
    padding: 10px 0;
}
.bs-callout-info { border-left-color: #1b809e;}



.form-container.sigle-form-input-sddksldc0sd.multiform-dlskdf03 {
    margin-bottom: 20px;
}
  .form-container.sigle-form-input-sddksldc0sd.multiform-dlskdf03 input.form-control {
    width: 90%;
    display: inline-block;
}

</style>


<style type="text/css">

.form-check {

    display: block;

    width: 100%;

    margin: 13px 0px;

}

span#basic-addon2 {

    width: 10%;

}

.content-body-dskd {

    padding: 0 10px;

}





.label.ui.selection.fluid.dropdown {

    padding: 15px 22px;

}

.ui.fluid.dropdown>.dropdown.icon {

    padding: 12px 20px !important;

    font-size: 16px;

}
.form-container.sigle-form-input-sddksldc0sd.multiform-dlskdf03 .multi-field {
    margin-bottom: 25px;
}


</style>

  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.css'>

@endsection()


@section('orgadmin_org_oparation') active-nav @endsection
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




<br>

@include('orgadmin.asset.message')


  

<div class="organization-deltes-dksldc0">


<form action="{{route('orgadmin.organisation.operation.update',$org->id)}}" method="post" enctype="multipart/form-data">
  @csrf
          <table class="table table-borderless">
            <tbody>

              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc"> Organisation name</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" aria-label="Username" name="org_name" value="{{$org->org_name}}" aria-describedby="basic-addon1">
                        </div>
                        @error('org_name') <span class="text-danger"> {{$message}} </span> @enderror
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
                          <input type="email" class="form-control" aria-label="Username" name="org_email" value="{{$org->org_email}}" aria-describedby="basic-addon1">
                        </div>
                        @error('org_email') <span class="text-danger"> {{$message}} </span> @enderror
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
                          <input type="email" class="form-control" aria-label="Username" name="org_public_email" value="{{$org->org_public_email}}" aria-describedby="basic-addon1">
                        </div>
                        @error('org_public_email') <span class="text-danger"> {{$message}} </span> @enderror
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
                          <input type="email" class="form-control" aria-label="Username" name="account_email" value="{{$org->account_email}}" aria-describedby="basic-addon1">
                        </div>
                        @error('account_email') <span class="text-danger"> {{$message}} </span> @enderror
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
                          <input type="url" class="form-control" aria-label="Username" name="web_url" aria-describedby="basic-addon1" value="{{$org->web_url}}">
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
                          <input type="url" class="form-control" aria-label="Username" name="facebook_url" aria-describedby="basic-addon1" value="{{$org->facebook_url}}">
                        </div>
                      </div>
                    <!-- single Form Start-->
              <!-- ---- single Form Start --- -->
                </td>
              </tr>
              <tr>
                  <th scope="row" width="20%" class="label-dksldc"> LinkedIn link</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="url" class="form-control" aria-label="Username" name="linkedin_url" aria-describedby="basic-addon1" value="{{$org->linkedin_url}}">
                        </div>
                      </div>
                    <!-- single Form Start-->
              <!-- ---- single Form Start --- -->
                </td>
              </tr>


        <!-- single Form Start-->
            <tr>
               <th scope="row" width="20%" class="label-dksldc"> Instagram link</th>
               <td>
                  <div class="sigle-form-input-sddksldc0sd">

                     <div class="input-group mb-3">

                        <input type="url" class="form-control" aria-label="Username" name="instagram_url" aria-describedby="basic-addon1" value="{{$org->instagram_url}}">
                     </div>
                  </div>
                  <!-- single Form Start-->
               </td>
            </tr>
         <!-- ---- single Form Start --- -->

              <tr>
                  <th scope="row" width="20%" class="label-dksldc"> Twitter link</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="url" class="form-control" aria-label="Username" name="twitter_url" aria-describedby="basic-addon1" value="{{$org->twitter_url}}">
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
                          <input type="text" class="form-control" aria-label="Username"  name="phone" aria-describedby="basic-addon1" value="{{$org->phone}}">
                        </div>
                        @error('phone') <span class="text-danger"> {{$message}} </span> @enderror
                      </div>
                    <!-- single Form Start-->
              <!-- ---- single Form Start --- -->
                </td></tr><tr>
                  <th scope="row" width="20%" class="label-dksldc"> Address </th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" aria-label="Username" name="address" aria-describedby="basic-addon1" value="{{$org->address}}">
                        </div>
                        @error('address') <span class="text-danger"> {{$message}} </span> @enderror
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
                          <input type="text" class="form-control" aria-label="Username" name="contact_person" aria-describedby="basic-addon1" value="{{$org->contact_person}}">
                        </div>
                        @error('contact_person') <span class="text-danger"> {{$message}} </span> @enderror
                      </div>
                    <!-- single Form Start-->
              <!-- ---- single Form Start --- -->
                </td></tr><tr>
                  <th scope="row" width="20%" class="label-dksldc"> Government registration </th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" aria-label="Username" name="gov_registration" aria-describedby="basic-addon1" value="{{$org->gov_registration}}">
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
                          <input type="email" class="form-control" aria-label="Username" name="contact_person_email" aria-describedby="basic-addon1" value="{{$org->contact_person_email}}">
                        </div>
                        @error('contact_person_email') <span class="text-danger"> {{$message}} </span> @enderror
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
                          <input type="text" class="form-control" aria-label="Username" name="best_contact" aria-describedby="basic-addon1" value="{{$org->best_contact}}">
                        </div>
                        @error('best_contact') <span class="text-danger"> {{$message}} </span> @enderror
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
                          <input type="text" class="form-control" aria-label="Username" maxlength="200" name="summary" aria-describedby="basic-addon1" placeholder="Short description of the organisation, include your key focus (Max: 200 words)" value="{{$org->summary}}">
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
                          <input type="text" class="form-control" aria-label="Username" name="long_version" aria-describedby="basic-addon1" placeholder="Provide a detailed description of your organisation:  goals, achievements, plans, partners, structure etc." value="{{$org->long_version}}">
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
                          <input type="file" class="form-control" name="logo">
                        </div>
                        @error('logo') <span class="text-danger"> {{$message}} </span> @enderror
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


        <a href="{{route('orgadmin.organisation.operation.orgtype.cat',['orgtypeid'=>$item->id,'id'=>$org->id])}}" class="badge badge-green">
{{$item->ogranisationtype->name}}
         <i class="fa fa-trash"></i></a>
@endforeach

</div>




                  </div>
                </div>



                  <div class="sigle-form-input-sddksldc0sd">
                     <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">


   <select class="label ui selection fluid dropdown" name="orgtype[]" multiple>
      @foreach($orgtype as $item) 
         <option value=" {{$item->id}}"> {{$item->name}}</option>
      @endforeach
   </select>
                        </div>
                        <!-- single Form Start-->
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


        <a href="{{route('orgadmin.organisation.operation.focus.cat.remove',['focuscatid'=>$item->id,'id'=>$org->id])}}" class="badge badge-green">
{{$item->focused->name}}
         <i class="fa fa-trash"></i></a>
@endforeach

</div>




                  </div>
                </div>


                  <div class="sigle-form-input-sddksldc0sd">
                     <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                       

   <select class="label ui selection fluid dropdown" name="focused[]" multiple>
                              @foreach($focus as $item) 
                                 <option value=" {{$item->id}}"> {{$item->name}}</option>
                              @endforeach
                           </select>

                           
                        </div>
                        <!-- single Form Start-->
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


        <a href="{{route('orgadmin.organisation.operation.provide.cat.remove',['providecatid'=>$item->id,'id'=>$org->id])}}" class="badge badge-green">
{{$item->provide->name}}
         <i class="fa fa-trash"></i></a>
@endforeach

</div>




                  </div>
                </div>
                <!-- single Form Start-->


                  <div class="sigle-form-input-sddksldc0sd">
                     <div class="input-group mb-3">





   <select class="label ui selection fluid dropdown" name="provide[]" multiple>
      @foreach($provide as $item) 
         <option value=" {{$item->id}}"> {{$item->name}}</option>
      @endforeach
   </select>
                     </div>
                  </div>
               </td>
            </tr>
            <!-- ---- single Form Start --- -->

            <!-- ---- single Form Start --- -->
            <tr class="ksfdsaf0c2ds6f">
               <th scope="row" width="20%" class="label-dksldc ">banner Images</th>
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
                              <input type="file"  class="form-control" name="banner_1" multiple accept="image/*">
                           </div>
                           <div class="col-md-4">
                            @if($org->banner_2)
                            <img src="{{asset('img/upload/org/images/'.$org->banner_2)}}" width="200px" height="200px">
                            @else
                            <img src="{{asset('img/default.jpg')}}" width="200px" height="200px">
                            @endif
                              <input type="file"  class="form-control" name="banner_2" multiple accept="image/*">
                           </div>
                           <div class="col-md-4">
                            @if($org->banner_3)
                            <img src="{{asset('img/upload/org/images/'.$org->banner_3)}}" width="200px" height="200px">
                            @else
                            <img src="{{asset('img/default.jpg')}}" width="200px" height="200px">
                            @endif
                              <input type="file"  class="form-control" name="banner_3" multiple accept="image/*">
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

<button type="button" class="btn btn-green margin-t-50" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Change Location
</button>

       </div>
                      </div>
                  </td>
                </tr>
        <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal  fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Change Location</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <div id="map" style="width: 100%;height: 400px;"></div>
        
            <input name="lat" type="hidden" id="lat" readonly="yes"><br>
            <input name="long" type="hidden" id="lng" readonly="yes">


      </div>
      <div class="modal-footer">
              <button type="submit" class="btn btn-green btn-block btn-color text-upper">Update</button>
      </div>
    </div>
  </div>
</div>      <!-- ---- single Form Start --- -->

            </tbody>
          </table>

              <button type="submit" class="btn btn-green btn-block btn-color text-upper">Update organisation</button>
</form>              
              <br>

@php
  $keyword = App\Models\Keyword::where('organisation_id',$org->id)->get();
@endphp              
<hr>
  <div class="keyword-section">
     <h3>New keywords</h3>
     <hr>
        <div class="category-kdlsdkc">
          @foreach($keyword as $item)
            <a href="{{route('orgadmin.organisation.operation.keyword.remove',['keywordid'=>$item->id,'id'=>$org->id])}}" class="badge badge-green">
              {{$item->keyword}}
                  <i class="fa fa-trash"></i>
            </a>
          @endforeach
        </div>
     <hr>

<form action="{{route('orgadmin.organisation.operation.keyword.update',$org->id)}}" method="post">
  @csrf
     <!-- ---- single Form Start --- -->
     <div class="form-container sigle-form-input-sddksldc0sd  multiform-dlskdf03">
       <div class="multi-field-wrapper">
         <div class="multi-fields">
           <div class="multi-field">
             <input type="text" name="keywords[]" class="form-control" required>
             <button type="button" class="remove-field btn btn-danger">REMOVE</button>
           </div>
         </div>
                 <button type="button" class="add-field btn btn-green width156dc">ADD NEW</button> <br>
                 <button class="btn btn-green width156dc">SAVE</button>
         <br>
       </div>
       <!-- ---- single Form Start --- -->
     </div>
</form>     
     <br>
   </div>
<hr>
  <div class="keyword-section">
     <br>
     <h3>We're looking for</h3>
     <!-- ---- single Form Start --- -->
      <hr>
@php
  $lookingfor = App\Models\Lookingfor::where('organisation_id',$org->id)->get();
@endphp    
          <div class="category-kdlsdkc">
            @foreach($lookingfor as $item)
              <a href="{{route('orgadmin.organisation.operation.lookingfor.remove',['lookingforid'=>$item->id,'id'=>$org->id])}}" class="badge badge-green">
                {{$item->name}}
                    <i class="fa fa-trash"></i>
              </a>
            @endforeach
          </div>
       <hr>

<form action="{{route('orgadmin.organisation.operation.lookingfor.update',$org->id)}}" method="post">
  @csrf
       <div class="form-container sigle-form-input-sddksldc0sd multiform-dlskdf03">
            <div class="multi-field-wrapper">
              <div class="multi-fields">
                <div class="multi-field">
                  <input type="text" name="looking_for[]" class="form-control" required>
                  <button type="button" class="remove-field btn btn-danger">REMOVE</button>
                </div>
              </div>
                 <button type="button" class="add-field btn btn-green width156dc">ADD NEW</button> <br>
                 <button class="btn btn-green width156dc">SAVE</button>
                </div>
             <br>
         </div>
</form>         
     <br>
     <br>
     <br>
   </div>

              </div>
          </div>

<!-- --------------- Explore GGF End----------------- -->
@endsection()



@section('scripts')


@include('orgadmin.asset.map-select-js')

    <script id="rendered-js" >
        $('.multi-field-wrapper').each(function () {
          var $wrapper = $('.multi-fields', this);
          $(".add-field", $(this)).click(function (e) {
            $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
          });
          $('.multi-field .remove-field', $wrapper).click(function () {
            if ($('.multi-field', $wrapper).length > 1)
            $(this).parent('.multi-field').remove();
          });
        });
        //# sourceURL=pen.js
    </script>



<script type="text/javascript">
  
  function initialise() {
    var myLatlng = new google.maps.LatLng({{$org->lat}}, {{$org->long}}); // Add the coordinates
    var mapOptions = {
      zoom: 16, // The initial zoom level when your map loads (0-20)
      minZoom: 6, // Minimum zoom level allowed (0-20)
      maxZoom: 17, // Maximum soom level allowed (0-20)
      zoomControl:true, // Set to true if using zoomControlOptions below, or false to remove all zoom controls.
      zoomControlOptions: {
          style:google.maps.ZoomControlStyle.DEFAULT // Change to SMALL to force just the + and - buttons.
      },
      center: myLatlng, // Centre the Map to our coordinates variable
      mapTypeId: google.maps.MapTypeId.ROADMAP, // Set the type of Map
      scrollwheel: false, // Disable Mouse Scroll zooming (Essential for responsive sites!)
      // All of the below are set to true by default, so simply remove if set to true:
      panControl:false, // Set to false to disable
      mapTypeControl:false, // Disable Map/Satellite switch
      scaleControl:false, // Set to false to hide scale
      streetViewControl:false, // Set to disable to hide street view
      overviewMapControl:false, // Set to false to remove overview control
      rotateControl:false // Set to false to disable rotate control
      }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions); // Render our map within the empty div
    var image = new google.maps.MarkerImage("https://i.pinimg.com/originals/0f/61/ba/0f61ba72e0e12ba59d30a50295964871.png", null, null, null, new google.maps.Size(40,52)); // Create a variable for our marker image.
    var marker = new google.maps.Marker({ // Set the marker
      position: myLatlng, // Position marker to coordinates
      icon:image, //use our image as the marker
      map: map, // assign the market to our map variable
      title: 'Click here for more details' // Marker ALT Text
    });
    //  google.maps.event.addListener(marker, 'click', function() { // Add a Click Listener to our marker
    //    window.location='https://www.snowdonrailway.co.uk/shop_and_cafe.php'; // URL to Link Marker to (i.e Google Places Listing)
    //  });
    var infowindow = new google.maps.InfoWindow({ // Create a new InfoWindow
        content:"This is <strong>Megamall Penang</strong>, <em>one</em> of shopping centres that has a cinema!" // HTML contents of the InfoWindow
      });
    google.maps.event.addListener(marker, 'click', function() { // Add a Click Listener to our marker
        infowindow.open(map,marker); // Open our InfoWindow
      });
    google.maps.event.addDomListener(window, 'resize', function() { map.setCenter(myLatlng); }); // Keeps the Pin Central when resizing the browser on responsive sites
  }
  google.maps.event.addDomListener(window, 'load', initialise); // Execute our 'initialise' function once the page has loaded.


</script>


<script type="text/javascript">
   $('.extra-fields-customer').click(function() {
   $('.customer_records').clone().appendTo('.customer_records_dynamic');
   $('.customer_records_dynamic .customer_records').addClass('single remove');
   $('.single .extra-fields-customer').remove();
   $('.single').append('<a href="#" class="remove-field btn-remove-customer btn btn-danger"><i class="fas fa-minus-circle"></i></a>');
   $('.customer_records_dynamic > .single').attr("class", "remove");
   
   $('.customer_records_dynamic input').each(function() {
     var count = 0;
     var fieldname = $(this).attr("name");
     $(this).attr('name', fieldname);
     count++;
   });
   
   });
   
   $(document).on('click', '.remove-field', function(e) {
   $(this).parent('.remove').remove();
   e.preventDefault();
   });
   
   
</script>
<script src='https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.js'></script>

<script id="rendered-js" >
    $('.label.ui.dropdown').
    dropdown();
    $('.no.label.ui.dropdown').
    dropdown({
      useLabels: false });
    $('.ui.button').on('click', function () {
      $('.ui.dropdown').
      dropdown('restore defaults');
    });
    //# sourceURL=pen.js

</script>

@endsection

