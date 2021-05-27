<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConsolePay | Shopping Cart</title>
    @include('Template/head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    @include('Template/navbar')
    @if(Session::has('outOfStock'))
    <div class="alert alert-danger text-center" style="margin: 0; border-radius: 0;">
        <ul>
            <li>{{Session::get('outOfStock')}}</li>
        </ul>
    </div>
    @endif
    @if(Session::has('addOrderSuccess'))
    <p class="alert alert-success text-center" style="margin: 0; border-radius: 0;">{{ Session::get('addOrderSuccess') }}<br><a href="/viewOrder">View Order</a></p>
    @endif
    @if(Session::has('addOrderFail'))
    <p class="alert alert-success text-center" style="margin: 0; border-radius: 0;">{{ Session::get('addOrderFail') }}</p>
    @endif
    @if(Session::has('deleteItemFromCart'))
    <p class="alert alert-success text-center" style="margin: 0; border-radius: 0;">{{ Session::get('deleteItemFromCart') }}<br></p>
    @endif

    <div class="d-flex flex-row container">
        <div style="margin: 0.5em">
            <a href="{{ url('/#displayBarang') }}">
                <i class="fas fa-arrow-left" style="font-size: 50px;"></i>
                <p style="color: #448cff;">Back to Menu</p>
            </a>
        </div>
        <div class="d-flex flex-column container jumbotron bg-white shadow text-center" style="border-radius: 1em; padding: 40px;">

        <div id="displayBarang" class="container" style="margin-top: 0;">
            <h1 class="text-center">Shopping Cart</h1>
            <div class="text-center" style="margin: 2% 0;">
                @if($null_item)
                <div class="wrap d-flex flex-column justify-content-center text-center" style="">
                    <h3>You haven't added anything to the shopping cart yet.</h3><br>
                    <a href="/#displayBarang" class="btn btn-outline-primary">Browse for a Console</a>
                </div>
                @else
            </div>
            <div class="d-flex justify-content-center row row-cols-2">
               
                @foreach($barang as $b)
                <div class="col d-flex">
                    <div class="card shadow d-flex flex-column flex-fill align-items-center" style="border-radius: 0.4em;">
                        <div class="d-flex flex-row justify-content-center">
                            <div style="width: 25%; margin-right: 1em;">
                                <img src="{{asset('img/gambar/'.$b[0]->gambarBarang)}}" style="width: 100%;" alt="...">
                            </div>
                            <div class="" style="text-align: justify;">
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
                @endif
            </div>
            @if($null_item)
            @else
            <hr>
            <form action="{{route('addOrder')}}" method="post" class="text-right">
                {{csrf_field()}}
                <h5 class="text-right">Price For 1 day : {{$totalPrice1Day}} </h5>
                <!-- <div class="">
                    <label>Total Price</label>
                    <output id="result">{{$totalPrice1Day}}</output>
                </div> -->
                <div>
                    <h5 class="text-right">Lama Order : <input type="number" min="1" id="day" class="day" name="day" required value="1" style="width: 7.4vw;"></h5>
                    
                </div>
                <input type="hidden" value="{{$totalPrice1Day}}" id="tes" name="totalprice">
                <?php $i = 0 ?>
                @foreach($barang as $b)
                <input type="hidden" value="{{$b[0]->id}}" id="id_barang{{$loop->iteration}}" name="id_barang[{{$loop->iteration}}]">
                <?php $i++; ?>
                @endforeach
                <input type="hidden" value="<?= $i; ?>" name="jumlahBarang">
                <button type="submit" class="btn btn-primary">Order</button>
            </form>
            @endif
        </div>
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