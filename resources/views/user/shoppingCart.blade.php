<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('Template/head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    @include('Template/navbar')
    <div class="d-flex flex-row container">
        <div style="margin: 0.5em">
            <a href="javascript:history.back()"><i class="fas fa-arrow-left" style="font-size: 50px;"></i></a>
        </div>
        <div class="d-flex flex-column container mt-3 jumbotron bg-white shadow text-center" style="border-radius: 1em;">
            <h1 class="text-center">Shopping Cart</h1>
            <div class="wrap">
                @if(Session::has('outOfStock'))
                <div class="alert alert-danger">
                    <ul>
                        <li>{{Session::get('outOfStock')}}</li>
                    </ul>
                </div>
                @endif
                @if(Session::has('addOrderSuccess'))
                <p class="alert alert-success">{{ Session::get('addOrderSuccess') }}<br><a href="/viewOrder">View Order</a></p>
                @endif
                @if(Session::has('addOrderFail'))
                <p class="alert alert-success">{{ Session::get('addOrderFail') }}</p>
                @endif
                @if(Session::has('deleteItemFromCart'))
                <p class="alert alert-success">{{ Session::get('deleteItemFromCart') }}<br></p>
                @endif
                @if($null_item)
                <h3>You haven't added anything to the shopping cart yet.</h3><br>
                <a href="/#displayBarang" class="btn btn-outline-primary">Browse for a Console</a>
                @else
                @foreach($barang as $b)
                <div class="card d-flex flex-column mb-3" style="">
                    <div class="col g-0">
                        <div class="col-md-4">
                            <center>
                                <img src="{{asset('img/gambar/'.$b[0]->gambarBarang)}}" alt="..." width="100px" style="padding-top: 30px;">
                            </center>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$b[0]->namaBarang}}</h5><br>
                                <h5 class="card-title">{{$b[0]->merekBarang}}</h5><br>
                                <h5 class="card-title">{{$b[0]->kategoriBarang}}</h5>
                                <p class="card-text">Price : {{$b[0]->hargaBarang}}</p>
                                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                <form action="{{route('deleteItemFromCart')}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="itemToDelete" value="{{$b[0]->id}}">
                                    <button type="submit" class="btn btn-danger">Delete From Shopping Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="displayBarang" class="container mt-5" style="margin-top: 0;">
                <div class="row row-cols-2">
                    <div class="col d-flex">
                        <div class="card shadow d-flex flex-column" style="width: 18rem;">

                        </div>
                    </div>
                </div>
                </div>
                @endforeach
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <form action="{{route('addOrder')}}" method="post">
                            {{csrf_field()}}
                            <h5 class="card-title">Total Price For 1 day : {{$totalPrice1Day}} </h5>
                            <div class="col-lg-1">
                                <label>Total Price</label>
                                <output id="result">{{$totalPrice1Day}}</output>
                            </div>
                            <p class="card-text">Lama Order : </p>
                            <input type="number" min="1" id="day" class="day" name="day" required value="1">
                            <input type="hidden" value="{{$totalPrice1Day}}" id="tes" name="totalprice">
                            <?php $i = 0 ?>
                            @foreach($barang as $b)
                            <input type="hidden" value="{{$b[0]->id}}" id="id_barang{{$loop->iteration}}" name="id_barang[{{$loop->iteration}}]">
                            <?php $i++; ?>
                            @endforeach
                            <input type="hidden" value="<?= $i; ?>" name="jumlahBarang">
                            <button type="submit" class="btn btn-primary">Order</button>
                        </form>
                    </div>
                </div>
                @endif
            </div>

        </div>
    </div>

    <!-- Testing -->

    <div class="d-flex flex-column container mt-3 bg-white shadow" style="border-radius: 1em; margin-bottom: 2em;">

        <div id="displayBarang" class="container mt-5" style="margin-top: 0;">
            <br><br>
            <div class="text-center" style="margin: 2% 0;">
                <h1>Shopping Cart</h1>
            </div>
            <div class="row row-cols-3">
            
                @foreach($barang as $b)
                <div class="col d-flex">
                    <div class="card shadow d-flex flex-column flex-fill align-items-center" style="border-radius: 0.4em;">
                        <div class="d-flex flex-row justify-content-center">
                            <div style="width: 25%; margin-right: 1em;">
                                <img src="{{asset('img/gambar/'.$b[0]->gambarBarang)}}" style="width: 100%;" alt="...">
                            </div>
                            <div class="">
                                <p>
                                    {{$b[0]->namaBarang}}<br>
                                    {{$b[0]->merekBarang}}<br>
                                    {{$b[0]->kategoriBarang}}<br>
                                    Price : {{$b[0]->hargaBarang}}
                                </p>
                            </div>
                        </div>
                        <form action="{{route('deleteItemFromCart')}}" method="post" style="margin: 1em;">
                            {{csrf_field()}}
                            <input type="hidden" name="itemToDelete" value="{{$b[0]->id}}">
                            <button type="submit" class="btn btn-danger">Delete From Shopping Cart</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
            <hr>
            
        </div>

    </div>

    <!-- Footer -->
    @include('Template/footer')

    @include('Template/script')
    <script>
        const $inputs = $('input[type="number"]')
        $inputs.change(function() {
            var total = 0;
            var grandtotal = $('#tes').val();
            $inputs.each(function() {
                if ($(this).val() != '') {
                    total += parseInt($(this).val());
                }
            });
            grandtotal *= total;
            $('#result').html(grandtotal);
        });
    </script>
</body>

</html>