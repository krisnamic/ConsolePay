<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ConsolePay</title>
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

            @include('Template/navbar')
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
                <h5 class="m-0">Data of ConsolePay</h5>
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