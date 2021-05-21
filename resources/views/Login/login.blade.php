<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ConsolePay | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- <link rel="stylesheet" href="../../css/captcha.css"> -->
  <!-- <script src="../../js/captcha.js"></script> -->
  <link href="https://fonts.googleapis.com/css?family=Kanit:300,300i,400,400i,600,600i,700,700i|Varela:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>

<body class="hold-transition login-page overflow-hidden">

  <!-- Head -->
  @include('Template/head')

  <div class="bg-container">

    <div style="z-index: 1080;">
      <div class="login-box">
      <!-- ConsolePay Logo -->
      <div class="login-logo">
        <object class="home-login" data="img/consolepay/consolepay-horizontal.svg" type="image/svg+xml"></object>
      </div>
      <!-- Login Card -->
      <div class="card shadow">
        <div class="card-body login-card-body" style="border-radius: 50px;">
          <h5>Sign in to start your session</h5>
          <form action="{{ route('postlogin') }}" method="post">
            {{csrf_field()}}
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="email" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <p style="font-size:12px; color:red;">@error('email')
              {{ $message }}
              @enderror
            </p>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <p style="font-size:12px; color:red;">@error('password')
              {{ $message }}
              @enderror
            </p>
            @if(Session::has('error'))
            <p class="font-size:12px; color:red;">{{ Session::get('error') }}</p>
            @endif
            <div class="row">
              <!-- <div class="col-8">
                <div class="icheck-primary">
                </div>
              </div> -->

              <div class="d-flex flex-column justify-content-start align-items-left mb-0" style="">
                <a href="{{route('register')}}" class="text-left" style="vertical-align:middle;">> I don't have an account</a>
                <a href="/" class="text-left" style="vertical-align:middle;">> Back to main page</a>
              </div>
              

              <!-- captcha -->
              <!-- /.col -->
              <div class="ml-auto">
                <button type="submit" id="login-btn" class="btn btn-primary btn-block">Sign In</button>
              </div>
              <!-- /.col -->

              <br>

              
            </div>
          </form>

          <!-- <p class="mb-1">
          </p> -->
          
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->

    @include('Template/script')

    </div>
    <div class="sliding-background" style="position: relative !important; z-index: -1080;"></div>
  </div>

</body>

</html>