@extends('orgadmin.master')
@section('style')
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
    width: 85%;
}


</style>


  
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.css'>

@endsection()


@section('orgadmin_org_sprofile') active-nav @endsection
@section('org_admin_content')
<!-- ------ Banner Aria Start ------ -->
<div class="col-md-10 right-aria-sldksd">
  <div class="content-body-dskd">
    <br>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">DASHBOARD</li>
        <li class="breadcrumb-item active" aria-current="page">
          <b> Search Profile</b>
        </li>
      </ol>
    </nav>
    <hr>
    <br>
    <form action="{{route('orgadmin.organisation.s_profile.search.result',$org->id)}}" method="get"> 
      @csrf <div class="input-group mb-3">
        <!-- single Form Start-->
        <div class="sigle-form-input-sddksldc0sd">
          <div class="input-group mb-3">
            <!-- single  -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="type" value="1" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1"> Volunteer </label>
            </div>
            <!-- single  -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="paid_work" value="1" id="flexRadioDefault2" checked>
              <label class="form-check-label" for="flexRadioDefault2"> Employee </label>
            </div>
          </div>
        </div>
        <!-- single Form Start-->
      </div>
@php 
  $skill = App\Models\Keyskill::orderby('id','desc')->get();
  $interest = App\Models\Interest::orderby('id','desc')->get();
@endphp      
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">Skills</span>
                <select  class="label ui selection fluid dropdown" name="keyskill_id">
                  @foreach($skill as $item)
                    <option value="{{$item->id}}"> {{$item->name}} </option> 
                  @endforeach
                </select>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">interests</span>
         <select class="label ui selection fluid dropdown" name="interest_id">
                @foreach($interest as $item)
                  <option value="{{$item->id}}"> {{$item->name}} </option> 
                @endforeach
          </select>
      </div>
<!--       <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">Location</span>
        <input type="text" class="form-control">
      </div> -->
      <br>
      <div class="input-group mb-3">
        <button type="submit" class="btn btn-green">Search</button>
      </div>
    </form>
    <!-- single Form Start-->
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

@endsection
