<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
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

<body class="hold-transition login-page bg-img">

  <!-- Head -->
  @include('Template/head')

  <div class="login-box">
    <div class="login-logo">
      <a href="{{url('/')}}"><b>Console</b>Pay</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
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

          <div class="row">
            <!-- <div class="col-8">
              <div class="icheck-primary">
              </div>
            </div> -->

            <p class="mb-0">
              <a href="{{route('register')}}" class="text-center">I don't have an account</a>
            </p>

            <!-- captcha -->
            <div class="form-group mt-3 mb-3">
              <div class="captcha">
                <span>{!! captcha_img('mini') !!}</span>
                <button type="button" class="btn btn-danger" class="refresh-captcha" id="refresh-captcha">
                  &#x21bb;
                </button>
              </div>
            </div>

            <div class="form-group mb-4">
              <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
            </div>
            <p style="font-size:12px; color:red;">@error('captcha')
              {{ $message }}
              @enderror
            </p>


            </p>
            @if(Session::has('error'))
            <p class="font-size:12px; color:red;">{{ Session::get('error') }}</p>
            @endif
            <!-- /.col -->
            <div class="ml-auto">
              <button type="submit" id="login-btn" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <!-- <p class="mb-1">
        </p> -->

      </div>
      </form>

      <p class="mb-1">
      </p>
      <p class="mb-0">
        <a href="{{route('register')}}" class="text-center">I don't have an account</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
  </div>
  <!-- /.login-box -->

  @include('Template/script')
  <!-- Vendor JS Files -->
  <!-- <script src="../../../vendor/"></script>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

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