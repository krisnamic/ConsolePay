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
    <?php $i = 0 ?>
    <div class="container mt-3">
        <a href="javascript:history.back()"><i class="fas fa-arrow-left" style="font-size: 50px;"></i></a>
        @foreach($barang as $bar)
        <div class="card">
            <div class="card-header">
                <h1>Orders #{{$order[$i]->id}}</h1>
            </div>
            <div class="card-body">
                @if($null_item)
                <h1>You haven't ordered yet.</h1>
                @else

                @foreach($bar as $b)
                <div class="card mb-3" style="max-width: 540px;">
                    @if(Session::has('ubahStatusPemesananBerhasil'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{{Session::get('ubahStatusPemesananBerhasil')}}</li>
                        </ul>
                    </div>
                    @endif
                    @if(Session::has('ubahStatusPemesananGagal'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{Session::get('ubahStatusPemesananGagal')}}</li>
                        </ul>
                    </div>
                    @endif
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
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <p>ID : {{$order[$i]->id}}
                <p class="card-text">Date : {{$order[$i]->tanggalPemesanan}}
                <p class="card-text">Duration : {{$order[$i]->jumlahHari}} @if($order[$i]->jumlahHari === 1) day @else days @endif
                <p class="card-text">Price : Rp{{$order[$i]->hargaTotal}} </p>
                <p class="card-text">Status : @if($order[$i]->statusPemesanan === "Sudah Dikirim") Delivered @else Delivering @endif</p>
                <form action="{{route('ubahStatusPemesanan')}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="id_pesanan" value="{{$order[$i]->id}}">
                    @if($order[$i]->statusPemesanan == "Sudah Dikirim" )
                    <button type="submit" class="btn btn-primary">Change Order Status</button>
                    @else
                    <button type="submit" class="btn btn-primary" disabled>Change Order Status</button>
                    @endif
                </form>
                <?php $i++; ?>
                @endif
            </div>
        </div>
        @endforeach
    </div>

    <!-- Footer -->
    @include('Template/footer')
    
    @include('Template/script')
</body>

</html>