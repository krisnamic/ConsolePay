<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ConsolePay | Admin</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

        <nav class="main-header header sticky-top navbar-expand navbar-white navbar-light text-center">
  <!-- Left navbar links -->
  <!-- <ul class="navbar-nav"> -->
      <!-- <div class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </div> -->
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    <!-- </ul> -->

  <div class="d-flex header-child bg-white navbar">
    <div class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars fa-lg"></i></a>
    </div>
    <a class="logo-click" href="{{ route('userHome') }}">
      <img src="{{ asset('img/consolepay/consolepay-horizontal.svg')}}" width="240" type="image/svg+xml">
    </a>
    <div class="ml-auto">
      @if (Route::has('login'))
      @auth
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('logout')}}" class="nav-link">Logout</a>
      </li>
      @if(Session::has('user_id'))
      <li class="nav-item d-none d-sm-inline-block" style="margin-left: 15px; margin-right: 15px;">
        <a href="{{route('viewShoppingCart')}}"><i class="fas fa-shopping-cart"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('viewOrder')}}"><i class="fas fa-truck"></i></a>
      </li>
      @endif
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
    </div>
  </div>

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
            <!-- <ul class="navbar-nav ml-auto"> -->
            <!-- <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                    <div class="media">
                        <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                        <h3 class="dropdown-item-title">
                            Brad Diesel
                            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">Call me whenever you can...</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <div class="media">
                        <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                        <h3 class="dropdown-item-title">
                            John Pierce
                            <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">I got your message bro</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <div class="media">
                        <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                        <h3 class="dropdown-item-title">
                            Nora Silvester
                            <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">The subject goes here</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
                </li> -->
            <!-- Notifications Dropdown Menu -->
            <!-- <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
                </li> -->
            <!-- </li>
                <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                    class="fas fa-th-large"></i></a>
                </li> -->
            <!-- </ul> -->
            </nav>

            @include('Template/left-sidebar')

            <div class="content-wrapper">
            
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Administrator Page</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Administrator Page</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <div class="content">
            <div class="container-fluid">
                <div class="card card-primary card-outline">
                <div class="card-header">
                <h5 class="m-0">Manage Products</h5>
                </div>
                <div class="card-body">
                <div>
                    <div class="d-flex flex-row-reverse" style="margin-right: 1.3em;">
                        <a class="btn btn-primary" href="{{ route('barang.create') }}"><i class="fas fa-plus"></i> <i class="fas fa-gamepad"></i> &nbsp;Add Console</a>
                    </div>
                       
                    
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <table class="table table-bordered" id="datatable-crud">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Price/Day</th>
                                    <th>Stock</th>
                                    <th>Photo</th>
                                    <th>Logo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>

            </div>
            </div>
            </div>
            </div>

            <aside class="control-sidebar control-sidebar-dark">
                <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
                </div>
            </aside>
        </div>
        @include('Template/footer')

        <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
        <script type="text/javascript">
        $(document).ready( function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#datatable-crud').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('barang') }}",
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'namaBarang', name: 'namaBarang' },
                    { data: 'merekBarang', name: 'merekBarang' },
                    { data: 'kategoriBarang', name: 'kategoriBarang' },
                    { data: 'deskripsiBarang', name: 'deskripsiBarang' },
                    { data: 'hargaBarang', name: 'hargaBarang' },
                    { data: 'stokBarang', name: 'stokBarang' },
                    {   data: 'gambarBarang', 
                        name: 'gambarBarang',
                        render: function (data, type, full, meta) {
                            return "<img src=\"img/gambar/" + data + "\" height=\"60\"/>";
                        }
                    },
                    {   data: 'logoBarang', 
                        name: 'logoBarang',
                        render: function (data, type, full, meta) {
                            return "<img src=\"img/logo/" + data + "\" height=\"30\"/>";
                        }
                    },
                    { data: 'action', orderable: false, targets: 0 }
                ]
            });

            $('body').on('click', '.delete', function () {
                if (confirm("Delete Console Record?") == true) {
                    var id = $(this).data('id');
                    // ajax
                    $.ajax({
                        type:"POST",
                        url: "{{ url('delete-barang') }}",
                        data: { id: id},
                        dataType: 'json',
                        success: function(res){
                            var oTable = $('#datatable-crud').dataTable();
                            oTable.fnDraw(false);
                        }
                    });
                }
            });
        });
    </script>
    </body>

    
</html>