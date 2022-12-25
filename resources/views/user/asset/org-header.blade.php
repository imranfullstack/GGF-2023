

      <header class="header desktop fix">
         <div class="container">
         	<div class="row">
         		<div class="col-md-2">
         			
                  <a class="navbar-brand header-logo" href="{{URL('/')}}">
                    <img src="{{asset('frontend/img/logo/logo.png')}}">
                  </a>
         		</div>
         		<div class="col-md-4 header-middle">
         			<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
  <input type="text" class="form-control" placeholder="Search Organisation ..." aria-label="Username" aria-describedby="basic-addon1">
</div>
         		</div>
         		<div class="col-md-4 header-middle">
         			

                     <div class="right-top-social-dksldkc">
                        <ul>
                           <li>
                              <a href="#">
                              <i class="fas fa-globe"></i>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="fas fa-phone-alt"></i>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="fas fa-envelope"></i>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="fab fa-facebook-f"></i>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="fab fa-facebook-messenger"></i>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="fab fa-linkedin-in"></i>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="fab fa-twitter"></i>
                              </a>
                           </li>
                        </ul>
                     </div>


         		</div>
         		<div class="col-md-2">
         			
                  <a class="navbar-brand header-logo org-logo" href="{{URL('/')}}">
                    <img src="{{asset('img/upload/org/logo/'.$org->logo)}}">
                  </a>
         		</div>
         	</div>
         </div>
     </header>


<!-- -------Header END ------- -->
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
                                 <a class="dropdown-item" href="{{route('user.index')}}">Dashboard</a>
                              </li>
                              <li>
                                 <a class="dropdown-item" href="{{route('user.profile')}}">Profile</a>
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
            </nav>
         </div>
      </header>


