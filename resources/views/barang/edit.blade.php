<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ConsolePay</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('Template/head')
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
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Edit Console</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('barang.index') }}" enctype="multipart/form-data"> Back</a>
                            </div>
                        </div>
                    </div>
                    @if(session('status'))
                    <div class="alert alert-success mb-1 mt-1">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ route('barang.update',$barang->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" value="{{ $barang->namaBarang }}" class="form-control" placeholder="Name">
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Company:</strong>
                                    <input type="text" name="company" value="{{ $barang->merekBarang }}" class="form-control" placeholder="Company">
                                    @error('company')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Type</strong>
                                    <input type="text" name="type" value="{{ $barang->kategoriBarang }}" class="form-control" placeholder="Type">
                                    @error('type')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Description</strong>
                                    <input type="text" name="description" value="{{ $barang->deskripsiBarang }}" class="form-control" placeholder="Description">
                                    @error('description')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Price</strong>
                                    <input type="number" name="price" value="{{ $barang->hargaBarang }}" class="form-control" placeholder="Price">
                                    @error('price')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Stock</strong>
                                    <input type="number" name="stock" value="{{ $barang->stokBarang }}" class="form-control" placeholder="Stock">
                                    @error('stock')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Photo</strong>
                                    <input type="file" name="photo" class="form-control" accept="image/*">
                                    
                                    @error('photo')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror

                                    <!-- <input type="text" name="photo_lama" value="{{ $barang->gambarBarang }}" hidden> -->
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Logo</strong>
                                    <input type="file" name="logo" class="form-control" accept="image/*">
                                    
                                    @error('logo')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror

                                    <!-- <input type="text" name="logo_lama" value="{{ $barang->logoBarang }}" hidden> -->
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary ml-3">Submit</button>
                        </div>
                    </form>
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
    </body>

    
</html>