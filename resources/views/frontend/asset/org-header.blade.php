

      <header class="header desktop fix">
         <div class="container">
         	<div class="row">
         		<div class="col-md-2">
         			
                  <a class="navbar-brand header-logo" href="{{URL('/')}}">
                    <img src="{{asset('frontend/img/logo/logo.png')}}">
                  </a>
         		</div>
<!-- Header Nav Aria Start                -->
		<div class="col-md-4 header-middle">
       <!--   <div class="input-group mb-3">
           <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
           <input type="text" class="form-control" placeholder="Search Organisation ..." aria-label="Username" aria-describedby="basic-addon1">
         </div> -->
		</div>
<!-- Header Nav Aria End       -->
         		<div class="col-md-4 header-middle">
         			

                     <div class="right-top-social-dksldkc">
                        <ul>
                           @if($org->web_url)
                           <li>
                              <a href="{{$org->web_url}}" target="_blank">
                              <i class="fas fa-globe"></i>
                              </a>
                           </li>
                           @endif
                           @if($org->phone)
                           <li>
                              <a href="tel:{{$org->phone}}" target="_blank">
                              <i class="fas fa-phone-alt"></i>
                              </a>
                           </li>
                           @endif
                           @if($org->org_public_email)
                           <li>
                              <a href="mailto:{{$org->org_public_email}}">
                              <i class="fas fa-envelope"></i>
                              </a>
                           </li>
                           @endif
                           @if($org->facebook_url)
                           <li>
                              <a href="{{$org->facebook_url}}" target="_blank">
                              <i class="fab fa-facebook-f"></i>
                              </a>
                           </li>
                           @endif
                           @if($org->instagram_url)
                           <li>
                              <a href="{{$org->instagram_url}}" target="_blank">
                              <i class="fab fa-instagram"></i>
                              </a>
                           </li>
                           @endif
                           @if($org->linkedin_url)
                           <li>
                              <a href="{{$org->linkedin_url}}" target="_blank">
                              <i class="fab fa-linkedin-in"></i>
                              </a>
                           </li>
                           @endif
                           @if($org->twitter_url)
                           <li>
                              <a href="{{$org->twitter_url}}" target="_blank">
                              <i class="fab fa-twitter"></i>
                              </a>
                           </li>
                           @endif
                        </ul>
                     </div>


         		</div>
         		<div class="col-md-2">
         			
                  <a class="navbar-brand header-logo org-logo" href="{{route('org.index',$org->slug)}}">
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
                                 <a class="dropdown-item" href="#">Dashboard</a>
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
            </nav>
         </div>
      </header>


