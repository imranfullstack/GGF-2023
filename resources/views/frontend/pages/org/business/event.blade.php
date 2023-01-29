     @if ($org->event == 1)
         <div class="exprience-and-events-section">

             <div class="title-dkdksldkfdf2 bg-dksld">
                 <a data-bs-toggle="collapse" href="#eventdskdc" role="button" aria-expanded="false"
                     aria-controls="eventdskdc" class="first-title-dksld0c collapsed"> EXPERIENCES & EVENTS <span>
                         <i class="fas fa-caret-down"></i>
                     </span>
                 </a>
             </div>


             <div class="accordion-collapse collapse" id="eventdskdc">
                 <div class="tab-body-dksld">
                     <div class="events-expriences-main-section">

                         <br>
                         @foreach ($org->events as $item)
                             <!-- Single Events Sections  -->
                             <div class="single-events-item">
                                 <div class="row">
                                     <div class="col-md-2">
                                         <img src="{{ asset(asset('img/upload/event/' . $item->image)) }}">
                                     </div>
                                     <div class="col-md-7">
                                         <div class="content-box-ddks">
                                             <h4>{{ $item->event_name }}</h4>

                                             <p>{{ $item->short_desc }} </p>
                                             <a
                                                 href="{{ route('org.event.single', ['eventslug' => $item->slug, 'slug' => $org->slug]) }}">Read
                                                 More</a>


                                         </div>
                                     </div>
                                     <div class="col-md-3">


                                         <iframe
                                             src="//maps.google.com/maps?q={{ $item->lat }},{{ $item->long }}&z=15&output=embed"
                                             width="100%" height="200"></iframe>

                                     </div>
                                 </div>
                             </div>
                             <!-- Single Events Sections  End-->
                             <hr>
                         @endforeach
                         <div class="col-md-12">
                             <div class="read-more-section right">
                                 <a href="{{ route('org.event.index', $org->slug) }}"
                                     class="btn-green apply-btn-style-dksld">Read More</a>
                             </div>
                         </div>


                     </div>
                 </div>
             </div>
         </div>

     @endif
