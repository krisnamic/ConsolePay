<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('Template/head')
</head>

<body>
    @include('Template/navbar')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <h1>Pesanan</h1>
            </div>
            <div class="card-body">
                @if($null_item)
                <h1>Anda Belum Memesan</h1>
                @else
                @foreach($barang as $b)
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <center>
                                <img src="{{asset('img/gambar/'.$b[0]->gambarBarang)}}" alt="..." width="100px" style="padding-top: 30px;">
                            </center>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$b[0]->namaBarang}}</h5>
                                <h5 class="card-title">{{$b[0]->merekBarang}}</h5><br>
                                <h5 class="card-title">{{$b[0]->kategoriBarang}}</h5>
                                <p class="card-text">Harga : {{$b[0]->hargaBarang}}</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <h5 class="card-title">ID Pemesanan : {{$order->id}}</h5>
                <p class="card-text"> Tanggal Pemesanan : {{$order->tanggalPemesanan}}</p>
                <p class="card-text"> Lama Pemesnanan : {{$order->jumlahHari}} hari</p>
                <p class="card-text"> Harga Total : Rp{{$order->hargaTotal}} </p>
                <p class="card-text"> Status Pemesanan : {{$order->statusPemesanan}} </p>
                <form action="" method="post">
                    <a href="#" class="btn btn-primary">Ubah Status Pemesanan</a>
                </form>
                @endif
            </div>
        </div>
    </div>
    @include('Template/script')
</body>

</html>