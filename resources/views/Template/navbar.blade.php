<nav class="main-header navbar navbar-expand navbar-white navbar-light text-center">
    <!-- Left navbar links -->
    <!-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul> -->

    <object data="img/consolepay/consolepay-horizontal.svg" width="240" type="image/svg+xml"></object>

    @if (Route::has('login'))
            @auth
                <li class="nav-item d-none d-sm-inline-block">
                  <a href="{{ url('/home') }}" class="nav-link">Home</a>
                </li>
            @else
                <li class="nav-item d-none d-sm-inline-block">
                  <a href="{{ route('login') }}" class="nav-link">Login</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="{{ route('register') }}" class="nav-link">Register</a>
                    </li>
                @endif
            @endauth
    @endif

    <!-- SEARCH FORM 
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>-->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="{{ route('logout')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>Logout</p>
          </a>
        </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>