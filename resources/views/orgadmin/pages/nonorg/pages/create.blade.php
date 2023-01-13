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

   div#ID_myMultiInput {

   border: none;

   border-bottom: 3px solid #84b04a;

   }

   .kyewordstyle .bootstrap-tagsinput {

   border: none;

   border-bottom: 3px solid #84b04a;

   }

   .hover-color:hover {

   color: #fff;

   background: #415a20 !important;

   transition: .3s;

   }

   .row.width100 {

   width: 100%;

   }

   .row.looking input {

   width: 94%;

   display: inline-block;

   }

   .row.looking .customer_records {

   margin: 19px 0;

   }

   .row.looking .remove {

   padding: 12px 0;

   }



</style>

<link rel="stylesheet" href="https://rawgit.com/pbauerochse/searchable-option-list/master/sol.css">

<style type="text/css">

   .sol-container.form-control.sol-selection-bottom , .sol-container.form-control {

   margin: 0;

   padding: 0;

   border: none;

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

   .title-heading-dlsd a{

   color: #000;

   text-decoration: none;

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


<style>
.bs-callout { padding: 10px 20px; margin: 20px 0; border: 1px solid #c6eaf5; border-left-width: 5px; border-radius: 3px; background: #ddf6fd; color: #1b809e;}
.form-group.sigle-form-input-sddksldc0sd {
    padding: 10px 0;
}
.bs-callout-info { border-left-color: #1b809e;}



.form-container.sigle-form-input-sddksldc0sd.multiform-dlskdf03 {
    margin-bottom: 20px;
}
h4.title-heading-dlsd {
    font-weight: 700;
    color: #000;
    font-size: 24px;
    margin: 0;
}


</style>



  

  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.css'>





@endsection()





@section('orgadmin_org_create') active-nav @endsection

@section('main_aria_content')

<!-- ------ Banner Aria Start ------ -->

<br>

<h4 class="title-heading-dlsd"> <a href="{{route('orgadmin.list')}}"> <i class="fas fa-angle-left"></i> </a>Create New Organisation </h4>



<form action="{{route('orgadmin.store')}}" method="POST" enctype="multipart/form-data">

   @csrf

   <div class="organization-deltes-dksldc0">

      <table class="table table-borderless">

         <tbody>

            <!-- ---- single Form Start --- -->

            <tr>

               <th scope="row" width="20%" class="label-dksldc"> Organisation name</th>

               <td>

                  <!-- single Form Start-->

                  <div class="sigle-form-input-sddksldc0sd">

                     <div class="input-group mb-3">

                        <input type="text" class="form-control" aria-label="Username" name="org_name" aria-describedby="basic-addon1">

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

                        <input type="email" class="form-control" aria-label="Username" name="org_email" aria-describedby="basic-addon1">

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

                        <input type="email" class="form-control" aria-label="Username" name="org_public_email" aria-describedby="basic-addon1">

                     </div>

                     @error('org_public_email') <span class="text-danger"> {{$message}} </span> @enderror

                  </div>

                  <!-- single Form Start-->

                  <!-- ---- single Form Start --- -->

               </td>

            </tr>

            <tr>

               <th scope="row" width="20%" class="label-dksldc">Accounts email</th>

               <td>

                  <!-- single Form Start-->

                  <div class="sigle-form-input-sddksldc0sd">

                     <div class="input-group mb-3">

                        <input type="email" class="form-control" aria-label="Username" name="account_email" value="{{Auth::user()->email}}" aria-describedby="basic-addon1">

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

                        <input type="url" class="form-control" aria-label="Username" name="web_url" aria-describedby="basic-addon1">

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

                        <input type="url" class="form-control" aria-label="Username" name="facebook_url" aria-describedby="basic-addon1">

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

                        <input type="url" class="form-control" aria-label="Username" name="linkedin_url" aria-describedby="basic-addon1">

                     </div>

                  </div>

                  <!-- single Form Start-->

                  <!-- ---- single Form Start --- -->

               </td>

            </tr>

            <tr>

               <th scope="row" width="20%" class="label-dksldc"> Twitter link</th>

               <td>

                  <!-- single Form Start-->

                  <div class="sigle-form-input-sddksldc0sd">

                     <div class="input-group mb-3">

                        <input type="url" class="form-control" aria-label="Username" name="twitter_url" aria-describedby="basic-addon1">

                     </div>

                  </div>

                  <!-- single Form Start-->

                  <!-- ---- single Form Start --- -->

               </td>

            </tr>

            <tr>

               <th scope="row" width="20%" class="label-dksldc"> Instagram link</th>

               <td>

                  <!-- single Form Start-->

                  <div class="sigle-form-input-sddksldc0sd">

                     <div class="input-group mb-3">

                        <input type="url" class="form-control" aria-label="Username" name="instagram_url" aria-describedby="basic-addon1">

                     </div>

                  </div>

                  <!-- single Form Start-->

                  <!-- ---- single Form Start --- -->

               </td>

            </tr>

            <tr>

               <th scope="row" width="20%" class="label-dksldc"> Phone number</th>

               <td>

                  <!-- single Form Start-->

                  <div class="sigle-form-input-sddksldc0sd">

                     <div class="input-group mb-3">

                        <input type="text" class="form-control" aria-label="Username"  name="phone" aria-describedby="basic-addon1">

                     </div>

                     @error('phone') <span class="text-danger"> {{$message}} </span> @enderror

                  </div>

                  <!-- single Form Start-->

                  <!-- ---- single Form Start --- -->

               </td>

            </tr>

            <tr>

               <th scope="row" width="20%" class="label-dksldc"> Address </th>

               <td>

                  <!-- single Form Start-->

                  <div class="sigle-form-input-sddksldc0sd">

                     <div class="input-group mb-3">

                        <input type="text" class="form-control" aria-label="Username" name="address" aria-describedby="basic-addon1">

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

                        <input type="text" class="form-control" aria-label="Username" name="contact_person" aria-describedby="basic-addon1">

                     </div>

                     @error('contact_person') <span class="text-danger"> {{$message}} </span> @enderror

                  </div>

                  <!-- single Form Start-->

                  <!-- ---- single Form Start --- -->

               </td>

            </tr>


            <!-- ---- single Form Start --- -->

            <tr>

               <th scope="row" width="20%" class="label-dksldc">Best contact</th>

               <td>

                  <div class="sigle-form-input-sddksldc0sd">

                     <div class="input-group mb-3">

                        <input type="text" class="form-control" aria-label="Username" name="best_contact" aria-describedby="basic-addon1">

                     </div>

                     @error('best_contact') <span class="text-danger"> {{$message}} </span> @enderror

                  </div>

               </td>

            </tr>

            <!-- ---- single Form Start --- -->

            <tr>

               <th scope="row" width="20%" class="label-dksldc">Contact person email </th>

               <td>

                  <!-- single Form Start-->

                  <div class="sigle-form-input-sddksldc0sd">

                     <div class="input-group mb-3">

                        <input type="email" class="form-control" aria-label="Username" name="contact_person_email" aria-describedby="basic-addon1">

                     </div>

                     @error('contact_person_email') <span class="text-danger"> {{$message}} </span> @enderror

                  </div>

                  <!-- single Form Start-->

               </td>

            </tr>

            <!-- ---- single Form Start --- -->


            <!-- ---- single Form Start --- -->
            <tr>

               <th scope="row" width="20%" class="label-dksldc"> Government registration </th>

               <td>

                  <!-- single Form Start-->

                  <div class="sigle-form-input-sddksldc0sd">

                     <div class="input-group mb-3">

                        <input type="text" class="form-control" aria-label="Username" name="gov_registration" aria-describedby="basic-addon1">

                     </div>

                  </div>

                  <!-- single Form Start-->

               </td>

            </tr>

            <!-- ---- single Form Start --- -->
            <!-- ---- single Form Start --- -->

            <tr>

               <th scope="row" width="20%" class="label-dksldc"> Organisation Summary</th>

               <td>

                  <div class="sigle-form-input-sddksldc0sd">

                     <div class="input-group mb-3">

                        <textarea class="form-control" rows="2" placeholder="Short description of the organisation, include your key focus (Max: 200 words)" maxlength="200" name="summary"></textarea>

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

                        <textarea class="form-control" rows="4"  name="long_version" placeholder="Provide a detailed description of your organisation:  goals, achievements, plans, partners, structure etc."></textarea>

                     </div>

                  </div>

               </td>

            </tr>

            <!-- ---- single Form Start --- -->

            <!-- ---- single Form Start --- -->


            <tr>

               <th scope="row" width="20%" class="label-dksldc">Keywords 

               
               </th>

               <td>



      <!-- Start -->
         <!-- <div id="textboxDiv"></div>   -->
         <div class="form-container sigle-form-input-sddksldc0sd  multiform-dlskdf03">




    <div class="multi-field-wrapper">
      <div class="multi-fields">
        <div class="multi-field">
          <input type="text" name="keywords[]" class="form-control" required>
          <button type="button" class="remove-field btn btn-danger">REMOVE</button>
        </div>
      </div>
    <button type="button" class="add-field btn btn-green">ADD NEW</button>

<br>
         </div>
      

      <!-- End -->

               </td>

            </tr>





            <!-- ---- single Form Start --- -->

            <tr class="logo-dksld">

               <th scope="row" width="20%" class="label-dksldc">Organisation  logo</th>

               <td>

                  <div class="sigle-form-input-sddksldc0sd">

                     <div class="input-group mb-3">

                        <input type="file" class="form-control" name="logo" accept="image/*">

                     </div>

                     @error('logo') <span class="text-danger"> {{$message}} </span> @enderror

                  </div>

               </td>

            </tr>

            <!-- ---- single Form Start --- -->


            <!-- ---- single Form Start --- -->

            <tr class="marginkdlsdf-top">

               <th scope="row" width="20%" class="label-dksldc">banner Images</th>

               <td>

                  <div class="sigle-form-input-sddksldc0sd">

                     <div class="input-group mb-3">

                        <div class="row width100">

                           <div class="col-md-4">

                              <input type="file"  class="form-control" name="banner_1" multiple accept="image/*">

                           </div>

                           <div class="col-md-4">

                              <input type="file"  class="form-control" name="banner_2" multiple accept="image/*">

                           </div>

                           <div class="col-md-4">

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




            <!-- ---- single Form Start --- -->
            <tr>
               <th scope="row" width="20%" class="label-dksldc">
                  Organisation Type 
               </th>
               <td>
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

            @endphp              

            <!-- ---- single Form Start --- -->
            <tr>
               <th scope="row" width="20%" class="label-dksldc">Focus </th>
               <td>
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

            @endphp                  

            <tr>

               <th scope="row" width="20%" class="label-dksldc">Provide </th>

               <td>

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

            <tr>

               <th scope="row" width="20%" class="label-dksldc">Looking For 

               
               </th>

               <td>



      <!-- Start -->
         <!-- <div id="textboxDiv"></div>   -->
         <div class="form-container sigle-form-input-sddksldc0sd multiform-dlskdf03">
                


    <div class="multi-field-wrapper">
      <div class="multi-fields">
        <div class="multi-field">
          <input type="text" name="looking_for[]" class="form-control" required>
          <button type="button" class="remove-field btn btn-danger">REMOVE</button>
        </div>
      </div>
    <button type="button" class="add-field btn btn-green">ADD NEW</button>
  </div>
  


               <br>
         </div>
      

      <!-- End -->

               </td>

            </tr>
            <hr>

            <!-- ---- single Form Start --- -->

            <!-- ---- single Form Start --- -->

            <tr>

               <th scope="row" width="20%" class="label-dksldc">Select Location </th>

               <td>

                  <div class="sigle-form-input-sddksldc0sd">

                     <div class="input-group mb-3">

                        <!--map div-->

                        <div id="map" style="width: 100%;height: 400px;"></div>

<form method="post">

<input name="lat" type="hidden" id="lat" readonly="yes"><br>

<input name="long" type="hidden" id="lng" readonly="yes">

</form>


                     @error('lat') <span class="text-danger"> Please Select Location. </span> @enderror

</div>

</div>

</td>

</tr>

<!-- ---- single Form Start --- -->

</tbody>

</table>

<button type="submit" class="btn btn-green btn-block btn-color text-upper">Create organisation</button>

<br>

<br>

<br>

<br>

</div>

</form>

<!-- --------------- Explore GGF End----------------- -->

@endsection()

@section('scripts')

@include('orgadmin.asset.map-select-js')

<script type="text/javascript" src="https://rawgit.com/pbauerochse/searchable-option-list/master/sol.js"></script>

<script type="text/javascript">

   $(function() {

       $('#demonstration').searchableOptionList({ maxHeight: '150px', showSelectAll: true });

       $('#focus').searchableOptionList({ maxHeight: '150px', showSelectAll: true });

       $('#provider').searchableOptionList({ maxHeight: '150px', showSelectAll: true });

             

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



<!-- Start  -->

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


<!-- End -->

      <script id="rendered-js" >
$(document).ready(function () {

  $("#addContact").on("click", function () {
    $("#more-contact").append("<div class='form-group sigle-form-input-sddksldc0sd'><input type='text' class='form-control' id='' name='looking_for[]' placeholder='Type what you are looking for ... ' required></div>");
  });
  $("#removeContact").on("click", function () {
    $("#more-contact").children().last().remove();
  });
});
//# sourceURL=pen.js
    </script>
      <script id="rendered-js" >
$(document).ready(function () {

  $("#addkeyword").on("click", function () {
    $("#more-keyword").append("<div class='form-group sigle-form-input-sddksldc0sd'><input type='text' class='form-control' id='' name='keywords[]' placeholder='Type keyword ... ' required></div>");
  });
  $("#removekeyword").on("click", function () {
    $("#more-keyword").children().last().remove();
  });
});
//# sourceURL=pen.js
    </script>


@endsection

