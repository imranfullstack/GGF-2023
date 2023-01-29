      <section class="page-nav-aria">
         <div class="container">
            <div class="page-nav-5696dcd">
               <div class="row">
                  <div class="col-md-6">
                     <div class="left-page-nav-dksld0c">
                        <ul>
                           <li>
                              <a href="{{url('/')}}">
                              <i class="fas fa-home"></i> Home </a>
                           </li>
                           <li>
                              <i class="fas fa-chevron-right"></i>
                           </li>
                           <li>
                              <a href="{{route('org.index',$org->slug)}}">{{$org->org_name}}</a>
                           </li>

                           <li class="rightarrow-dksldc0c">
                              <i class="fas fa-chevron-right"></i>
                           </li>                          
                           <li>
                              <a>@yield('pagenav')</a>
                           </li>


                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6"></div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="container">
            <div class="business-name-title-dksld">
               <div class="row">
                  <div class="col-md-12">
                     <div class="title-top-dksldlc">
                        <h3>{{$org->org_name}}</h3>
                        <hr>
                     </div>
                  </div>

<!-- Hide For Now -->

<!--                   <div class="col-md-3">
                     <div class="business-name-title-buttuon-right-dksld0c">
                        <ul>
                           <li>
                              <a href="#" class="btn-green">Claim This Organisation</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-2">
                     <div class="business-name-title-buttuon-right-dksld0c">
                        <ul>
                           <li>
                              <a href="#" class="btn-green">FeedBack</a>
                           </li>
                        </ul>
                     </div>
                  </div> -->


<!-- Hide For Now End-->

               </div>
            </div>
         </div>
      </section>