<div class="mobile-header-dash">
   <header class="header desktop">
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
               <a class="navbar-brand header-logo" href="#">
               <img src="{{asset('frontend/img/logo/logo.png')}}">
               </a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0 form-top-style">
                     <li class="nav-item search-form">
                        <form class="d-flex top-search-aria">
                           <button class="search-btn-top-1560cdc" type="submit">Searchs</button>
                           <input class="form-control me-2 search-input-top-dksld0c" type="search" aria-label="Search">
                        </form>
                     </li>
                  </ul>
                  <ul class="navbar-nav mb-2 mb-lg-0 right-btn-top-026dc">
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle profile2599" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png">
                        </a>
                        <ul class="dropdown-menu item-skdld" aria-labelledby="navbarDropdown">
                           <li>
                              <a class="dropdown-item" href="{{route('orgadmin.index')}}">Dashboard</a>
                           </li>
                           <li>
                              <a class="dropdown-item" href="#">Profile</a>
                           </li>
                           <li>
                              <hr class="dropdown-divider">
                           </li>
                           <li>
                              <a class="dropdown-item" href="#">Logout</a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>
   </header>
   <header class="header mobile">
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
               <a class="navbar-brand header-logo" href="#">
               <img src="{{asset('frontend/img/logo/logo.png')}}">
               </a>
               <ul class="navbar-nav mb-2 mb-lg-0 right-btn-top-026dc">
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle profile2599" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png">
                     </a>
                     <ul class="dropdown-menu item-skdld" aria-labelledby="navbarDropdown">
                        <li>
                           <a class="dropdown-item" href="{{route('orgadmin.index')}}">Dashboard</a>
                        </li>
                        <li>
                           <a class="dropdown-item" href="#">Profile</a>
                        </li>
                        <li>
                           <hr class="dropdown-divider">
                        </li>
                        <li>
                           <a class="dropdown-item" href="{{ route('logout') }}" 
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                           Logout
                           </a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                           </form>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
   </header>
</div>


<header class="header-aria">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-2">
            <div class="logo">
               <img src="{{asset('frontend/img/logo/logo.png')}}" class="dashbaord-logo-css">
            </div>
         </div>
         <div class="col-md-7">
            <li class="nav-item dropdown">
               <a class="btn btn-success btn-green btn-top-style" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Select Your Organisation <i class="fas fa-sort-down"></i> </a>


               <ul class="dropdown-menu width-dksldfc">
                  @php 
                  $orglist = App\Models\Organisation::where('user_id',Auth::user()->id)->get();
                  @endphp
                  @foreach($orglist as $item)
                  <li><a class="dropdown-item" href="{{route('orgadmin.organisation.index',$item->id)}}">{{$item->org_name}}</a></li>
                  @endforeach
               </ul>
            </li>
         </div>
         <div class="col-md-3">
            <ul class="navbar-nav mb-2 mb-lg-0 right-btn-top-026dc float-right">
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle profile2599" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png">
                  </a>
                  <ul class="dropdown-menu item-skdld" aria-labelledby="navbarDropdown">
                     <li>
                        <a class="dropdown-item" href="{{route('orgadmin.index')}}">Dashboard</a>
                     </li>
                     <li>
                        <a class="dropdown-item" href="#">Profile</a>
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" 
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        Logout
                        </a>
                     </li>
                  </ul>
               </li>
            </ul>
         </div>
      </div>
   </div>
</header>