@extends('admin.layout.auth')
@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>&nbsp;Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{ url('/admin/login')}}" method="post">
        {{ csrf_field()}}
        <div class="row">
          <div class="col-12">
            @if(count($errors)>0)
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss='alert' area-hidden='true' >x</button>

                  @if ($errors->has('email'))
                  <li>
                    {{$errors->first('email')}}
                  </li>
                 @endif
                 @if( $errors->has('password'))
                  <li>
                    {{$errors->first('password')}}
                  </li>
                 @endif
              </div>
              @endif
           
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name='email' class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <br>
          
        </div>
        <div class="row">
          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <!-- <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div> -->
          <!-- /.col -->
        </div>
        <div class="row">

          <div class='col-12' align="center">
            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-sign-in mr-2"></i>Sign In</button>
          </div>
          
        </div>
      </form>

      

      <div class="social-auth-links text-center mb-3">
        <!-- <p>- OR -</p> -->
        <!-- <a href="#" class="btn btn-block btn-primary">
          <i class="fa fa-sign-in mr-2"></i> Login
        </a> -->
       <!--  <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a> -->
      </div>
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      <!-- <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
@endsection