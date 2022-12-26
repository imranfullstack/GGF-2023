<style type="text/css">
a.subnav {
    background: #fff;
    display: block;
    color: #000;
    text-decoration: none;
    padding: 9px 11px;
    text-transform: uppercase;
    color: #000;
}

</style>
          <div class="col-md-2 left-menu">
            <div class="nav-menu-left">
              <ul>

                <li class="@yield('orgadmin_org_dash')"><a href="{{route('orgadmin.organisation.index',$org->id)}}"> Dashboard</a></li>


                <li class="@yield('orgadmin_org_oparation')"><a href="{{route('orgadmin.organisation.operation.index',$org->id)}}"> Details</a></li>

               <!--  <li class="@yield('orgadmin_org_team')">
                  <a href="{{route('orgadmin.organisation.team.index',$org->id)}}"> Team</a>
                </li> -->





                <li class="@yield('orgadmin_org_post')"><a href="{{route('orgadmin.organisation.post.index',$org->id)}}"> Posts</a></li>




<!-------------------------- Projects Nav Item  -------------------------->

    
                <li class="@yield('orgadmin_org_project')">
                  <a href="{{route('orgadmin.organisation.project.index',$org->id)}}"> Projects</a>

                </li>


                <a href="{{route('orgadmin.organisation.project.application',$org->id)}}" class="subnav projectshow @yield('orgadmin_org_project')">
                  Applicants 
                </a>

<!-------------------------- Experiences & Events Nav Item  -------------------------->

    
                <li class="@yield('orgadmin_org_event')">
                  <a href="{{route('orgadmin.organisation.event.index',$org->id)}}"> Experiences & Events</a>

                </li>


                <a href="{{route('orgadmin.organisation.event.application',$org->id)}}" class="subnav eventshow @yield('orgadmin_org_event')">
                  Applicants 
                </a>

<!-------------------------- Experiences & Events Nav Item End -------------------------->

<!-------------------------- Products Nav Item  -------------------------->

    
                <li class="@yield('orgadmin_org_product')">
                  <a href="{{route('orgadmin.organisation.product.index',$org->id)}}"> Products</a>

                </li>


                <a href="{{route('orgadmin.organisation.product.orders',$org->id)}}" class="subnav productshow @yield('orgadmin_org_product')">
                  Orders 
                </a>

<!-------------------------- Products Nav Item End -------------------------->

<!-------------------------- Products Nav Item  -------------------------->

    
                <li class="@yield('orgadmin_org_service')">
                  <a href="{{route('orgadmin.organisation.service.index',$org->id)}}"> Services</a>

                </li>


                <a href="{{route('orgadmin.organisation.service.orders',$org->id)}}" class="subnav serviceshow @yield('orgadmin_org_service')">
                  Orders 
                </a>

<!-------------------------- Products Nav Item End -------------------------->



<!-------------------------- Experiences & Events Nav Item  -------------------------->

    
                <li class="@yield('orgadmin_org_recruit')">
                  <a href="{{route('orgadmin.organisation.recruit.index',$org->id)}}"> Recruiting</a>

                </li>


                <a href="{{route('orgadmin.organisation.recruit.application',$org->id)}}" class="subnav recruitshow @yield('orgadmin_org_recruit')">
                  Applicants 
                </a>

<!-------------------------- Experiences & Events Nav Item End -------------------------->





                <li class="@yield('orgadmin_org_sprofile')"><a href="{{route('orgadmin.organisation.s_profile.index',$org->id)}}"> Search Profiles</a></li>
                <li class="@yield('orgadmin_org_s_resource')"><a href="{{route('orgadmin.organisation.s_resource.index',$org->id)}}"> Search Resources</a></li>
                <li class="@yield('orgadmin_org_contribute')"><a href="{{route('orgadmin.organisation.contribute.index',$org->id)}}"> Contribute</a></li>
                <li class="@yield('orgadmin_org_sponsor')">
                  <a href="{{route('orgadmin.organisation.sponsor.index',$org->id)}}"> Sponsor </a>
                </li>


                <li class="@yield('orgadmin_org_payment')">
                  <a href="{{route('orgadmin.organisation.payment.index',$org->id)}}">
                    Payment 
                  </a>
                </li>

                <li class="top-nav-border">
                    <a href="{{ route('logout') }}" 
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                    Logout
                    </a>
                 </li>
                <li>
                  <br>
                  <br>
                </li>
              </ul>
            </div>
          </div>