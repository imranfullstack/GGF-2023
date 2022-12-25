@extends('orgadmin.master')
@section('style')
<style type="text/css">
.form-check {
    display: block;
    width: 100%;
    margin: 13px 0px;
}
span#basic-addon2 {
    width: 15%;
}
.content-body-dskd {
    padding: 0 10px;
}

.label.ui.selection.fluid.dropdown {
    width: 85%;
}


</style>


  
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.css'>

@endsection()


@section('orgadmin_org_s_resource') active-nav @endsection
@section('org_admin_content')
<!-- ------ Banner Aria Start ------ -->
@php 
  $projectcat = App\Models\Productcat::orderby('id','desc')->get();
@endphp

<!-- ------ Banner Aria Start ------ -->
<div class="col-md-10 right-aria-sldksd">
  <div class="content-body-dskd">
    <br>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">DASHBOARD</li>
        <li class="breadcrumb-item active" aria-current="page"><b>
    Search Resources</b></li>
      </ol>
    </nav>
    <hr>
    <br>


@php 
  
  $contribute = App\Models\Contributecat::get();

@endphp


<form method="get" action="{{route('orgadmin.organisation.s_resource.search',$org->id)}}">
  @csrf

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">Key words</span>
          <input type="text" class="form-control" name="search">
      </div>



      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">Location</span>

              <input  placeholder="Search Location ..." class="form-control" name="location_availability" onFocus="initializeAutocomplete()" id="locality" />
                  
<div style="display: none">
<input type="text" class="form-control" name="city" id="city" placeholder="City" value="" >
<input type="text" class="form-control" name="latitude" id="latitude" placeholder="Latitude" value="" >
<input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude" value="" >
</div>


      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">Category</span>
         <select class="label ui selection fluid dropdown" name="contributecat_id">
              @foreach($contribute as $item)
                      <option value="{{$item->id}}"> {{$item->name}} </option>
              @endforeach                   
          </select>
      </div>


<!-- 
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">Search Keyword</span>
          <input type="text" class="form-control" name="keyword">
      </div> -->

<div class="input-group mb-3">
  <button type="submit" class="btn btn-green">Search</button>
</div>


</form>


                <!-- single Form Start-->
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">

                   

          <!-- single Form Start-->
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<!-- --------------- Explore GGF End----------------- -->
@endsection()



@section('scripts')

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

  @include('orgadmin.asset.location-search')
@endsection
