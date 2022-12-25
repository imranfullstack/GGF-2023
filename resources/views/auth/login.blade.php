@extends('frontend.master')
@section('style')
    <style type="text/css">

          header.header {
              position: absolute;
              width: 100%;
          }
        footer.footer {
                display: none;
        }
        input#exampleCheck1 {
            border: 1px solid #000;
            margin-top: 10px;
            margin-right: 10px;
        }

        .auth-right {
            background: url(img/glob.png)no-repeat center center;
        }

      </style>
@endsection
@section('main_content')











<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content width-dksld">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reset Your Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
                  <div class="single-form-form-ds">
                    <label>Email Address</label>
                    <input type="email" required name="email" class="form-control" placeholder="example@yourmail.com">
                  </div>

                  <div class="single-form-form-ds">
                    <button class="btn-auth-full">
                      SUBMIT
                    </button>
                  </div>
      </div>
    </div>
  </div>
</div>





      <div class="auth-body">
        <div class="container-fluid fullwidth-ds">
          <div class="row center-content-dksld">
            <div class="col-md-6">
              <div class="auth-left">
              <br>
              <br>
              <br>
              <br>
                <h1>Login</h1>
                <br>

    <form method="POST" action="{{ route('login') }}">
        @csrf

                <div class="form-body-dks">
                  <!-- - Single form - -->
                  <div class="single-form-form-ds">
                    <label>Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <!-- - Single form - -->
                  <!-- - Single form - -->
                  <div class="single-form-form-ds except-dksld">
                    <label>
                      Password 
                      <span>
                        <!-- Button trigger modal -->
                        <a  data-bs-toggle="modal" data-bs-target="#exampleModal">
                          Forgot Your Password
                        </a>
                      </span>
                    </label>







                    <div class="password-dksld">
                         <input id="password" type="password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                    </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                  <!-- - Single form - -->
                  <!-- - Single form - -->
                  <div class="single-form-form-ds">


                                    <input class="form-check-input" type="checkbox" name="remember" id="exampleCheck1" {{ old('remember') ? 'checked' : '' }}>


                        <label  for="exampleCheck1">Keep me logged in</label>


                  </div>
                  <!-- - Single form - -->
                  <!-- - Single form - -->
                  <div class="single-form-form-ds">
                    <button type="submit" class="btn-auth-full">
                      Login
                    </button>
                  </div>
                  <!-- - Single form - -->
                  <!-- - Single form - -->
                  <div class="single-form-form-ds">
                    <a href="{{route('register')}}" class="secendery-auth-btn">
                      Register
                    </a>
                  </div>
                  <!-- - Single form - -->

                </div>

            </form>
              </div>
            </div>
            <div class="col-md-6 right-bd-dksld">
              <div class="auth-right">
              </div>
            </div>
          </div>
        </div>
      </div>



      @section('scripts')

         <!-- Optional JavaScript; choose one of the two! -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      
 
      <!-- -------- -->
      <script type="text/javascript">
        $(".toggle-password").click(function() {
          $(this).toggleClass("fa-eye fa-eye-slash");
          input = $(this).parent().find("input");
          if (input.attr("type") == "password") {
              input.attr("type", "text");
          } else {
              input.attr("type", "password");
          }
      });
      </script>
 

      @endsection
@endsection
