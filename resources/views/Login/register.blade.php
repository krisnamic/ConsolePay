<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ConsolePay | Register</title>
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
</head>

<body class="hold-transition register-page overflow-hidden">

  <!-- Head -->
  @include('Template/head')

  <div class="bg-container">

    <div style="z-index: 1080;">
    <div  class="register-box">
      <!-- ConsolePay Logo -->
      <div class="login-logo">
        <object class="home-login" data="img/consolepay/consolepay-horizontal.svg" type="image/svg+xml"></object>
      </div>

      <!-- Register Card -->
      <div class="card shadow">
        <div class="card-body register-card-body" style="border-radius: 50px;">
          <form  action="{{route('savedata')}}" method="post">
            {{csrf_field()}}
            @csrf
            <div>
              <h5>Register a new membership</h5>
              <input type="hidden" name="role" value="user" \>
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="name" placeholder="Full name">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <p class="errorMsg" style="font-size:12px; color:red;">@error('name')
                {{ $message }}
                @enderror
              </p>
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="email" placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <p class="errorMsg" style="font-size:12px; color:red;">@error('email')
                {{ $message }}
                @enderror
              </p>
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="noTelepon" placeholder="Phone number">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-phone"></span>
                  </div>
                </div>
              </div>
              <p class="errorMsg" style="font-size:12px; color:red;">@error('noTelepon')
                {{ $message }}
                @enderror
              </p>
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="alamat" placeholder="Address">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-home"></span>
                  </div>
                </div>
              </div>
              <p class="errorMsg" style="font-size:12px; color:red;">@error('alamat')
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
              <p class="errorMsg" style="font-size:12px; color:red;">@error('password')
                {{ $message }}
                @enderror
              </p>
              <div class="input-group mb-3">
              </div>
              <div class="d-flex justify-content-between" style="margin-top: 0.5em;">
                <!-- <div class="col-8">
                  <div class="icheck-primary">
                  </div>
                </div> -->
                <div class="d-flex flex-column mb-0">
                  <a href="{{route('login')}}" class="text-left" style="vertical-align:middle;">< I already have an account</a>
                  <a href="/" class="text-left" style="vertical-align:middle;">< Back to main page</a>
                </div>
                
                <!-- captcha -->
                <!-- /.col -->
                <div class="ml-auto">
                  <button type="submit" id="login-btn" class="btn btn-primary btn-block">Register</button>
                </div>

                <!-- /.col -->
                <!-- <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div> -->
                <!-- /.col -->
              </div>
          </form>


          <!-- <a href="{{route('login')}}" class="text-center">I already have an account</a> -->
        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
    </div>
    
  <div>
    
  </div>
  
  <div class="sliding-background" style="position: relative !important; z-index: -1080;"></div>
  </div>

  @include('Template/script')
</body>

</html>