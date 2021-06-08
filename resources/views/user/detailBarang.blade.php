<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConsolePay | {{$barang->namaBarang}}</title>
    @include('Template/head')
    <style>
        /* .wrapper {
            width: 700px;
            margin: 0 auto;
        } */

        .zoom-effect {
            position: relative;
            width: 100%;
            margin: 0 auto;
            overflow: hidden;
        }

        /* .kotak {
            position: absolute;
            top: 0;
            left: 0;
        }*/

        .kotak img {
            -webkit-transition: 0.4s ease;
            transition: 0.4s ease;
        } 

        .zoom-effect:hover .kotak img {
            -webkit-transform: scale(1.08);
            transform: scale(1.08);
        }
    </style>
</head>

<body>
    @include('Template/navbar')
    @if(Session::has('addToShoppingCartSuccess'))
        <p class="alert alert-success text-center" style="margin: 0; border-radius: 0;">{{ Session::get('addToShoppingCartSuccess') }}<br><a href="/viewShoppingCart">View Shopping Cart</a></p>
    @endif
    <div class="d-flex flex-row container" style="margin-bottom: 1em; margin-top: 1em;">
        <div style="margin: 0.5em;">
            <a href="javascript:history.back()"><i class="fas fa-arrow-left" style="font-size:50px;"></i></a>
        </div>
        <!-- <i class="far fa-chevron-circle-left"></i> -->
        <div class="d-flex align-items-center row no-gutters bg-white position-relative shadow">
            <div class="col-md-6 mb-md-0 p-md-4">
                <div class="zoom-effect">
                    <div class="d-flex kotak">
                        <img src="{{secure_asset('img/gambar/'.$barang->gambarBarang)}}" class="w-100" alt="...">
                    </div>
                </div>
                <!-- {{$barang->id}} -->
            </div>
            <div class="col-md-6 position-static p-4 pl-md-0">
                <div class="d-flex flex-row align-items-center" style="margin-right: 1em;">
                    <img src="{{secure_asset('img/logo/'.$barang->logoBarang)}}" alt="..." style="margin-right: 2em; width: 46%;">
                    <img src="{{secure_asset('img/merek/'.$barang->merekBarang.'.svg')}}" alt="..." style="width: 46%;">
                </div>
                <br>
                <div class="desc">
                    <p><strong>Category :</strong><br>{{$barang->kategoriBarang}}</p>
                    <p><strong>Description :</strong><br>{{$barang->deskripsiBarang}}</p>
                    <p><strong>Price :</strong><br>Rp{{$barang->hargaBarang}}</p>
                    @if($barang->stokBarang === 0)
                    <p style="color: red;"><strong>Available Stock :</strong><br>{{$barang->stokBarang}}</p>
                    @else
                    <p><strong>Available Stock :</strong><br>{{$barang->stokBarang}}</p>
                    @endif
                    
                </div>
                <!-- @if(Session::has('user_id'))
                <a class="btn btn-primary" href="#" role="button">owjewojo</a>
                @elseif(Session::missing('user_id'))
                <a class="btn btn-primary" href="#" role="button">lalala</a>
                @endif -->
                @if(Session::has('user_id'))
                <form action="{{route('addToShoppingCart')}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" value="{{$barang->id}}" name="id_barang">
                    @if($barang->stokBarang === 0)
                    <button type="submit" class="btn btn-danger" disabled><i class="fas fa-lock"></i>&nbsp;&nbsp;Out of Stock</button>
                    @else
                    <button type="submit" class="btn btn-primary">Add To Shopping Cart</button>
                    @endif
                    <a href="javascript:history.back()" class="btn btn-default" role="button">Back to Catalogue</a>

                    
                </form>
                    @elseif(Session::missing('user_id'))
                    <a class="btn btn-primary" href="/login" role="button">Add To Shopping Cart</a>
                    <a href="javascript:history.back()" class="btn btn-default" role="button">Back to Catalogue</a>
                    @endif
                    
                <!-- <form action="route('addToShoppingCart') " method="POST"> -->
                <!-- <a class="btn btn-@if(Session::has('user_id'))primary @elseif(Session::missing('user_id'))danger @endif" href="#" role="button">Add To Shopping Cart</a> -->
                <!-- <a class="btn btn-primary" href="@if(Session::has('user_id')) /addToShoppingCart/{{$barang->id}} @elseif(Session::missing('user_id'))/login @endif" role="button">Add To Shopping Cart</a> -->
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

    <!-- Footer -->
    @include('Template/footer')

    @include('Template/script')
</body>

</html>