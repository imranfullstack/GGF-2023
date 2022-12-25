@extends('frontend.master')
@section('style')
      <style type="text/css">
          header.header {
              position: absolute;
              width: 100%;
          }
          .form-body-dks {
                    overflow: auto;
                }
          .auth-left{
            height: 100%;
          }
          footer.footer {
                display: none;
            }
label.btn.btn-green {
    border: 3px solid #84b04a;
    padding: 6px 15px;
    text-transform: uppercase;
    margin-right: 6px;
    font-size: 14px;
}


 .btn-check:checked+.btn-outline-success{
    color: #fff;
    background-color: #84b04a;
    border-color: #84b04a;
}
.btn-outline-success:hover {
    color: #fff;
    background-color: #84b04a;
    border-color: #84b04a;
}

.btn-check:checked+.btn-outline-danger{
    color: #fff;
    background-color: #84b04a;
    border-color: #84b04a;
}

.btn-check:active+.btn-outline-danger:focus, .btn-check:checked+.btn-outline-danger:focus, .btn-outline-danger.active:focus, .btn-outline-danger.dropdown-toggle.show:focus, .btn-outline-danger:active:focus {
    box-shadow: 0 0 0 0.25rem rgb(132 176 74 / 38%);
}

.btn-outline-danger:hover {
    color: #fff;
    background-color: #84b04a;
    border-color: #84b04a;
}
.btn-check:active+.btn-outline-danger, .btn-check:checked+.btn-outline-danger, .btn-outline-danger.active, .btn-outline-danger.dropdown-toggle.show, .btn-outline-danger:active {
    color: #fff;
    background-color: #84b04a;
    border-color: #84b04a;
}

.single-form-form-ds {
    margin: 15px 0;
}
 .auth-right {
            background: url(img/glob.png)no-repeat center center;
        }

label.btn.btn-green-register {
    padding: 11px 38px;
}
      </style>

@endsection
@section('main_content')









<form method="POST" action="{{ route('register') }}">
    @csrf

      <div class="auth-body">
        <div class="container-fluid fullwidth-ds">
          <div class="row center-content-dksld">
            <div class="col-md-6">
              <div class="auth-left">
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
                <h1>Register</h1>
                <br>
                <div class="form-body-dks">
                  <!-- - Single form - -->
                  <div class="single-form-form-ds">
                    <label>Join as</label>
                    <br>

<input type="radio" class="btn-check"  id="success-outlined" value="6" autocomplete="off" checked name="roleid">
<label class="btn btn-outline-success btn-green-register" for="success-outlined">Individual Account</label>

<input type="radio" class="btn-check"  id="danger-outlined" autocomplete="off" value="3"  name="roleid">
<label class="btn btn-outline-danger btn-green-register" for="danger-outlined" title="Setup admin person's details here first, then setup organisation details once logged in">Organisation Account</label>

<br>
                    
                



                  </div>
                  <!-- - Single form - -->
                  <div class="single-form-form-ds">
                    <label>User Name</label>
                    
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter User Name">
                      
                      @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                  </div>
                  <!-- - Single form - -->
                  <div class="single-form-form-ds">
                    <label>Email Address</label>
                        
                         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="example@yourmail.com">
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
                      Create Password 
                    </label>

                    <div class="password-dksld">
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password" name="password" placeholder="Enter Password">
                        <i class="toggle-password fa fa-fw fa-eye-slash"></i>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror



                    </div>
                  </div>
                  <!-- - Single form - -->
                  <!-- - Single form - -->
                  <div class="single-form-form-ds except-dksld">
                    <label>
                      Confirm Password 
                    </label>

                    <div class="password-dksld">


                                <input id="password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">


                        <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                    </div>
                  </div>
                  <!-- - Single form - -->
                  <!-- - Single form - -->
                  <div class="single-form-form-ds">
                    <button class="btn-auth-full" type="submit">
                      Submit
                    </button>
                  </div>
                  <!-- - Single form - -->
                  <!-- - Single form - -->
                  <div class="single-form-form-ds">
                    <a href="{{url('/')}}" class="secendery-auth-btn">
                      Cancel
                    </a>
                  </div>
                  <!-- - Single form - -->
                  <!-- - Single form - -->
                  <div class="single-form-form-ds">
                    <br>
                  </div>
                  <!-- - Single form - -->

                </div>
              </div>
            </div>
            <div class="col-md-6 right-bd-dksld">
              <div class="auth-right">
              </div>
            </div>
          </div>
        </div>
      </div>

</form>


@endsection



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