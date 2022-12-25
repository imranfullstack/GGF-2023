
          <div class="col-md-2 left-menu">
            <div class="nav-menu-left">
              <ul>

                <li class="@yield('orgadmin_org_dash')"><a href="{{route('admin.index')}}"> Dashboard</a></li>
<!-------------------------- Post Nav Item  -------------------------->
                <li class="@yield('orgadmin_org_post')">
                    <a data-bs-toggle="collapse" href="#collapsepost" role="button" aria-expanded="false" aria-controls="collapsepost" class="navwidth"> Post</a>
                    <div class="collapse @yield('post_show')" id="collapsepost">
                      <div class="card card-body">
                        <ul class="dropdownstylenav">
                          <li><a href="{{route('admin.post.index')}}"> <i class="fas fa-circle"></i> Posts</a></li>
                          <li><a href="{{route('admin.post.category.index')}}"> <i class="fas fa-circle"></i> Categories</a></li>
                        </ul>
                      </div>
                    </div>
                </li>
<!-------------------------- Post Nav Item End -------------------------->
<!-------------------------- Projects Nav Item  -------------------------->

                <li class="@yield('orgadmin_org_oparation')">
                  <a data-bs-toggle="collapse" href="#collapseproject" role="button" aria-expanded="false" aria-controls="collapseproject">
                      Projects
                    </a>
                  <div class="collapse @yield('projects_show')" id="collapseproject">
                    <div class="card card-body">
                      <ul class="dropdownstylenav">
                        <li><a href="{{route('admin.project.index')}}"> <i class="fas fa-circle"></i> Projects</a></li>
                        <li><a href="{{route('admin.project.category.index')}}"> <i class="fas fa-circle"></i> Categories</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
<!-------------------------- Projects Nav Item End -------------------------->


<!-------------------------- Experiences & Events Nav Item  -------------------------->
           <li class="@yield('orgadmin_org_event')">
                  <a data-bs-toggle="collapse" href="#collapseevents" role="button" aria-expanded="false" aria-controls="collapseevents">
                      Experiences & Events
                    </a>
                  <div class="collapse @yield('event_show')" id="collapseevents">
                    <div class="card card-body">
                      <ul class="dropdownstylenav">
                        <li><a href="{{route('admin.event.index')}}"> <i class="fas fa-circle"></i> Experiences & Events</a></li>
                        <li><a href="{{route('admin.event.category.index')}}"> <i class="fas fa-circle"></i> Categories</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
<!-------------------------- Experiences & Events Nav Item  -------------------------->



<!-------------------------- Products Nav Item  -------------------------->
           <li class="@yield('orgadmin_org_product')">
                  <a data-bs-toggle="collapse" href="#collapseproducts" role="button" aria-expanded="false" aria-controls="collapseproducts">
                      Products
                    </a>
                  <div class="collapse @yield('product_show')" id="collapseproducts">
                    <div class="card card-body">
                      <ul class="dropdownstylenav">
                        <li><a href="{{route('admin.product.index')}}"> <i class="fas fa-circle"></i> Products</a></li>
                        <li><a href="{{route('admin.product.category.index')}}"> <i class="fas fa-circle"></i> Categories</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
<!-------------------------- Products Nav Item  -------------------------->



<!-------------------------- Projects Nav Item  -------------------------->
           <li class="@yield('orgadmin_org_service')">
                  <a data-bs-toggle="collapse" href="#collapseservice" role="button" aria-expanded="false" aria-controls="collapseservice">
                      Services
                    </a>
                  <div class="collapse  @yield('service_show')" id="collapseservice">
                    <div class="card card-body">
                      <ul class="dropdownstylenav">
                        <li><a href="{{route('admin.service.index')}}"> <i class="fas fa-circle"></i> Services</a></li>
                        <li><a href="{{route('admin.service.category.index')}}"> <i class="fas fa-circle"></i> Categories</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
<!-------------------------- Projects Nav Item  -------------------------->


<!-------------------------- Projects Nav Item  -------------------------->
           <li class="@yield('orgadmin_org_recruit')">
                  <a data-bs-toggle="collapse" href="#collapserecruit" role="button" aria-expanded="false" aria-controls="collapserecruit">
                      Recruit
                    </a>
                  <div class="collapse @yield('recruit_show')" id="collapserecruit">
                    <div class="card card-body">
                      <ul class="dropdownstylenav">
                        <li><a href="{{route('admin.recruit.index')}}"> <i class="fas fa-circle"></i> Recruit</a></li>
                        <li><a href="{{route('admin.recruit.category.index')}}"> <i class="fas fa-circle"></i> Categories</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
<!-------------------------- Projects Nav Item  -------------------------->

                <li class="@yield('orgadmin_org_sprofile')"><a href="#"> Search Profiles</a></li>
                <li class="@yield('orgadmin_org_s_resource')"><a href="#"> Search Resources</a></li>
      


<!-------------------------- Projects Nav Item  -------------------------->
           <li class="@yield('orgadmin_org_contribute')">
                  <a data-bs-toggle="collapse" href="#collapsecontribute" role="button" aria-expanded="false" aria-controls="collapsecontribute">
                      Contribute
                    </a>
                  <div class="collapse @yield('contribute_show')" id="collapsecontribute">
                    <div class="card card-body">
                      <ul class="dropdownstylenav">
                        <li><a href="{{route('admin.contribute.index')}}"> <i class="fas fa-circle"></i> Contribute</a></li>
                        <li><a href="{{route('admin.contribute.category.index')}}"> <i class="fas fa-circle"></i> Categories</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
<!-------------------------- Projects Nav Item  -------------------------->

<!-------------------------- Projects Nav Item  -------------------------->
           <li class="@yield('orgadmin_org_contribute')">
                  <a data-bs-toggle="collapse" href="#keywordset" role="button" aria-expanded="false" aria-controls="keywordset">
                      Set Keyword
                    </a>
                  <div class="collapse @yield('orgtype_show')" id="keywordset">
                    <div class="card card-body">
                      <ul class="dropdownstylenav">
                        <li><a href="{{route('admin.orgtype.index')}}"> <i class="fas fa-circle"></i> Organisation Type</a></li>
                        <li><a href="{{route('admin.focus.index')}}"> <i class="fas fa-circle"></i>Focus</a></li>
                        <li><a href="{{route('admin.provide.index')}}"> <i class="fas fa-circle"></i>Provide</a></li>
                        <!-- Keyskills -->
                        <li><a href="{{route('admin.keyskill.index')}}"> <i class="fas fa-circle"></i>Key SKills</a></li>
                        <!-- Key Interests -->
                        <li><a href="{{route('admin.interests.index')}}"> <i class="fas fa-circle"></i>Interests</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
<!-------------------------- Projects Nav Item  -------------------------->


                <li class="@yield('orgadmin_org_contribute')"><a href="{{route('admin.orgstatus.index')}}"> Users</a></li>

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