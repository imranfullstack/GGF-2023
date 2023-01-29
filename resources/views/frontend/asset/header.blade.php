<header class="header desktop">

    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light">

            <div class="container-fluid">

                <a class="navbar-brand header-logo" href="{{ URL('/') }}">

                    <img src="{{ asset('frontend/img/logo/logo.png') }}">

                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 form-top-style">

                        <li class="nav-item search-form">

                            <!--         <form class="d-flex top-search-aria">

                              <button class="search-btn-top-1560cdc" type="submit">Search</button>

                              <input class="form-control me-2 search-input-top-dksld0c" type="search" aria-label="Search">

                           </form> -->

                        </li>

                    </ul>

                    @if (Auth::user())

                        <ul class="navbar-nav mb-2 mb-lg-0 right-btn-top-026dc">

                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle profile2599" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                    @if (Auth::user()->image)
                                        <img src="{{ asset('img/upload/pic/' . Auth::user()->image) }}">
                                    @else
                                        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png">
                                    @endif
                                </a>

                                <ul class="dropdown-menu item-skdld" aria-labelledby="navbarDropdown">

                                    <li>

                                        <a class="dropdown-item" href="{{ route('login') }}">Dashboard</a>

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





                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

                            @csrf

                        </form>
                    @else
                        <ul class="navbar-nav mb-2 mb-lg-0 right-btn-top-026dc">

                            <li class="nav-item">

                                <a class="nav-link login-d0c3d6sd" href="{{ route('login') }}">Login</a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link login-d0c3d6sd" href="{{ route('register') }}">Register</a>

                            </li>

                        </ul>

                    @endif

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

                    <img src="{{ asset('frontend/img/logo/logo.png') }}">

                </a>







                <ul class="navbar-nav mb-2 mb-lg-0 right-btn-top-026dc">

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle profile2599" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">

                            @if (Auth::user())

                                @if (Auth::user()->image)
                                    <img src="{{ asset('img/upload/pic/' . Auth::user()->image) }}">
                                @endif

                            @endif





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
