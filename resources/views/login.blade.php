<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css')}}">
  <style>
    .alert-success {bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/adminlte.min.css">
    color: #fff;
    background-color: #2fc296 !important;
    border-color: #2fc296 !important;
    }
  </style>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-success">
      <div class="card-header text-center">
        <a href="{{ url('/dashboard') }}" class="h1"><b>NTC</b> LOGIN</a>
      </div>

      <div class="card-body">
      <!--  @if ($message = Session::get('success'))
        <div class="alert alert-success">
          <span>{{ $message }}</span>
        </div>
        @endif
        @if($message = Session::get('error'))
        <div class="alert alert-danger">
          <span>{{ $message }}</span>
        </div>
        @endif-->

        <p class="login-box-msg">Sign in to start your session</p>

        <form action="{{ url('login') }}" method="post">
          @csrf
          <div class="form-group mb-3">
          <div class="input-group">
            <input type="email" name="email" class="form-control" placeholder="Enter userid">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          @if($errors->has('userid'))
          <span class="custom-text-danger"><strong>{{ $errors->first('userid') }}</strong></span>
          @endif
         </div>

         <div class="form-group">
          <div class="input-group">
            <input type="password" name="password" class="form-control" placeholder="Enter Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          @if($errors->has('password'))
          <span class="custom-text-danger"><strong>{{ $errors->first('password') }}</strong></span>
          @endif
         </div>

          <div class="row">
            <!--<div class="col-12">
              <div class="icheck-success">
                <input type="checkbox" name="remember_me" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>-->
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-success btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>


        <!-- <p class="mb-1">

          <a href="forgot-password.html">I forgot my password</a>

        </p>

        <p class="mb-0">

          <a href="{{ url('register') }}" class="text-center">Register a new membership</a>

        </p> -->

      </div>

      <!-- /.card-body -->

    </div>

    <!-- /.card -->

  </div>

  <!-- /.login-box -->



  <!-- jQuery -->

  <script src="{{ asset('assets') }}/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap 4 -->

  <script src="{{ asset('assets') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- AdminLTE App -->

  <script src="{{ asset('assets') }}/dist/js/adminlte.min.js"></script>

</body>



</html>