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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">

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
              <p class="errorMsg" style="font-size:12px; color:red;">@error('email')
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

              <!-- captcha -->
              <div class="input-group mb-3" style="margin-top: 10px !important;">
                <div class="captcha">
                  <span>{!! captcha_img() !!}</span>
                  <button type="button" class="btn btn-danger" class="refresh-captcha" id="refresh-captcha">
                    &#x21bb;
                  </button>
                </div>
              </div>

              <div class="input-group mb-3" style="margin-top: 10px !important;">
                <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-recycle"></span>
                  </div>
                </div>
              </div>

              <p class="errorMsg" style="font-size:12px; color:red;">@error('captcha')
                {{ $message }}
                @enderror
              </p>

              @if(Session::has('error'))
              <p class="errorMsg" style="font-size:12px; color:red;">{{ Session::get('error') }}</p>
              @endif

              <div class="d-flex justify-content-between" style="margin-top: 1em;">

                <div class="d-flex flex-column mb-0" style="">
                  <a href="{{route('register')}}" class="text-left" style="vertical-align:middle;">> I don't have an account</a>
                  <a href="/" class="text-left" style="vertical-align:middle;">> Back to main page</a>
                </div>

                <div class="ml-auto">
                  <button type="submit" id="login-btn" class="btn btn-primary btn-block">Sign In</button>
                </div>

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

  <!-- <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    // (function() {
    //   'use strict';
    //   window.addEventListener('load', function() {
    //     document.getElementById("login-btn").disabled = true;
    //     // Fetch all the forms we want to apply custom Bootstrap validation styles to
    //     var forms = document.getElementsByClassName('needs-validation');
    //     // Loop over them and prevent submission
    //     var validation = Array.prototype.filter.call(forms, function(form) {
    //       form.addEventListener('submit', function(event) {
    //         if (form.checkValidity() === false) {
    //           event.preventDefault();
    //           event.stopPropagation();
    //         }
    //         form.classList.add('was-validated');
    //       }, false);
    //     });
    //   }, false);
    // })();
  </script> -->
  <script type="text/javascript">
    $('#refresh-captcha').click(function() {
      $.ajax({
        type: 'GET',
        url: 'refresh-captcha',
        success: function(data) {
          $(".captcha span").html(data.captcha);
        }
      });
    });
  </script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script> -->
  <!-- <script src="../../js/captcha.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script> -->


</body>

</html>