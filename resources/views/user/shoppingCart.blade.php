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
    <div class="container">
        <div class="container mt-3 jumbotron">
            <center>
                <h1>Shopping Cart</h1>
            </center>
            <div class="wrap">
                @if(Session::has('outOfStock'))
                <div class="alert alert-danger">
                    <ul>
                        <li>{{Session::get('outOfStock')}}</li>
                    </ul>
                </div>
                @endif
                @if($null_item)
                <h1>Anda Belum Menambahkan Apapun ke dalam Keranjang</h1>
                @else
                @foreach($barang as $b)
                <div class="card mb-3" style="max-width: 540px; flex-direction:column">
                    <div class="row g-0">
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
                                    <input type="hidden" name="itemToDelete" value="{{$b[0]->ID_Barang}}">
                                    <button type="submit" class="btn btn-danger">Delete From Shopping Cart</button>
                                </form>
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
                            <input type="hidden" value="{{$b[0]->ID_Barang}}" id="id_barang{{$loop->iteration}}" name="id_barang[{{$loop->iteration}}]">
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