      <section class="page-nav-aria padding-top-0">
         <div class="container">
            <div class="page-nav-5696dcd">
               <div class="row">
                  <div class="col-md-6">
                     <div class="left-page-nav-dksld0c">
                        <ul>
                           <li>
                              <a href="{{url('/')}}" >
                              <i class="fas fa-home"></i> Home </a>
                           </li>
                           <li>
                              <i class="fas fa-chevron-right"></i>
                           </li>
                           <li>
                              <a href="{{route('user.index')}}" class="dashboardnavd">Dashboard</a>
                           </li>

                           <li class="rightarrow-dksldc0c">
                              <i class="fas fa-chevron-right"></i>
                           </li>                          
                           <li>
                              <a href="{{url()->current()}}">@yield('pagenav')</a>
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
                  <div class="col-md-7">
                     <div class="title-top-dksldlc">

<div class="btnd navbtn click">
  <span class="fas fa-bars"></span><span class="navtext-02"></span>
  <span class="far fa-times"></span><span class="navtext-02"></span>
</div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>



<nav class="sidebar show">
  <div class="text">
    <span style="color:#5b7e2d">Go Back</span>
  </div>
  <ul class="left-nav">

    <li class="@yield('dashboard-active')">
      <a href="{{route('user.index')}}">Dashboard</a>
   </li>
    <li class="@yield('profile-active')">
         <a href="{{route('user.profile')}}">Profile</a>
    </li>
    <li class="@yield('setting-active')">
      <a href="{{route('user.setting')}}">Settings</a>
    </li>
  </ul>
</nav>