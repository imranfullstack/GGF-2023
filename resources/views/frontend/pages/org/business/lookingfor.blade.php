@php 


$lookingfor = App\Models\Lookingfor::orderby('id','desc')->where('status',1)->where('organisation_id',$org->id)->get();
   

$providehave = App\Models\Orgprovidehave::where('organisation_id',$org->id)->get();


@endphp

<div class="bus-item-ddksld">
   <label>We're looking for </label>
   <ul>
      @foreach($lookingfor as $item)
         <li>* {{$item->name}}</li>
      @endforeach
   </ul>
</div>

<div class="bus-item-ddksld">
   <label>We provide </label>
   <ul>
      @foreach($providehave as $item)
         <li>{{$item->provide->name}}</li>
      @endforeach
   </ul>
</div>