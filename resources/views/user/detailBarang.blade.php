<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('Template/head')
    <style>
        .wrapper {
            width: 700px;
            margin: 0 auto;
        }

        .zoom-effect {
            position: relative;
            width: 100%;
            height: 360px;
            margin: 0 auto;
            overflow: hidden;
        }

        .kotak {
            position: absolute;
            top: 0;
            left: 0;

        }

        .kotak img {
            -webkit-transition: 0.4s ease;
            transition: 0.4s ease;
            width: 700px;
        }

        .zoom-effect:hover .kotak img {
            -webkit-transform: scale(1.08);
            transform: scale(1.08);
        }
    </style>
</head>

<body>
    @include('Template/navbar')
    <div class="container">
        <div class="row no-gutters bg-light position-relative">
            <div class="col-md-6 mb-md-0 p-md-4">
                <div class="zoom-effect">
                    <div class="kotak">
                        <img src="{{asset('img/gambar/'.$barang->gambarBarang)}}" class="w-100" alt="...">
                    </div>
                </div>
                {{$barang->ID_Barang}}
            </div>
            <div class="col-md-6 position-static p-4 pl-md-0">
                <h3 class="mt-0">{{$barang->namaBarang}}</h3>
                <p>{{$barang->merekBarang}}</p>
                <p>Category : {{$barang->kategoriBarang}}</p>
                <p>{{$barang->deskripsiBarang}}</p>
                <p>Price : {{$barang->hargaBarang}}</p>
                <p>Available stock : {{$barang->stokBarang}}</p>
                <!-- @if(Session::has('user_id'))
                <a class="btn btn-primary" href="#" role="button">owjewojo</a>
                @elseif(Session::missing('user_id'))
                <a class="btn btn-primary" href="#" role="button">lalala</a>
                @endif -->
                @if(Session::has('user_id'))
                <form action="{{route('addToShoppingCart')}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" value="{{$barang->ID_Barang}}" name="id_barang">
                    <button type="submit" class="btn btn-primary">Add To Shopping Cart</button>
                </form>

                <!-- <form action="route('addToShoppingCart') " method="POST"> -->
                @elseif(Session::missing('user_id'))
                <a class="btn btn-primary" href="/login" role="button">Add To Shopping Cart</a>
                @endif
                <!-- <a class="btn btn-@if(Session::has('user_id'))primary @elseif(Session::missing('user_id'))danger @endif" href="#" role="button">Add To Shopping Cart</a> -->
                <!-- <a class="btn btn-primary" href="@if(Session::has('user_id')) /addToShoppingCart/{{$barang->ID_Barang}} @elseif(Session::missing('user_id'))/login @endif" role="button">Add To Shopping Cart</a> -->
                <!-- <p class="font-size:12px; color:red;">{{ Session::get('user_id') }}</p> -->
            </div>
        </div>
        <!-- <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    @include('Template/script')
</body>

</html>