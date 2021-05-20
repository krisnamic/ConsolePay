<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ConsolePay</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    </head>
    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>ConsolePay Administration</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('barang.create') }}"> Add Console</a>
                    </div>
                </div>
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
                            <th>ID</th>
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
    </body>

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
                    { data: 'gambarBarang', name: 'gambarBarang' },
                    { data: 'logoBarang', name: 'logoBarang' },
                    { data: 'action', orderable: false, targets: 0 }
                ], order: [[0, 'desc']]
            });

            $('body').on('click', '.delete', function () {
                if (confirm("Delete Record?") == true) {
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
</html>