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
    <h1>Tes User</h1>
    <div class="container">
        <div class="row row-cols-3">
            @foreach($barang as $b)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <a href="/userHome/{{$b->ID_Barang}}" style="color:black">
                        <img src="{{asset('img/gambar/'.$b->gambarBarang)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">{{$b->namaBarang}}</h3>
                            <p class="card-text">Rp{{$b->hargaBarang}}</p>
                            <p class="card-text">Available : {{$b->stokBarang}}</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include('Template/script')

</body>

</html>