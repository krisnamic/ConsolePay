<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConsolePay | Orders</title>
    @include('Template/head')
</head>

<body>
    @include('Template/navbar')
    @if(Session::has('ubahStatusPemesananBerhasil'))
    <div class="alert alert-success text-center" style="margin: 0; border-radius: 0;">
        <ul>
            <li>{{Session::get('ubahStatusPemesananBerhasil')}}</li>
        </ul>
    </div>
    @endif
    @if(Session::has('ubahStatusPemesananGagal'))
    <div class="alert alert-danger text-center" style="margin: 0; border-radius: 0;">
        <ul>
            <li>{{Session::get('ubahStatusPemesananGagal')}}</li>
        </ul>
    </div>
    @endif
    <?php $i = 0 ?>

    <div class="d-flex flex-row container mt-3 justify-content-center">
        <div style="margin: 0.5em;">
            <a href="javascript:history.back()"><i class="fas fa-arrow-left" style="font-size: 50px; text-indent: -1em; position: fixed;"></i></a>
        </div>
        <div class="d-flex flex-row row row-cols-2" style="width: 100%;">
            @foreach($barang as $bar)
            <div class="card" style="margin-left: auto; margin-right:auto;">
                @if(!$null_item)
                <div class="card-header">
                    <h1>Orders #{{$order[$i]->id}}</h1>
                </div>
                @endif
                @if($null_item)
                <div class="card-body">
                    <h1>You haven't ordered yet.</h1>
                    @else
                    <div class="card-body">
                        @foreach($bar as $b)
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <center>
                                        <img src="{{asset('img/gambar/'.$b[0]->gambarBarang)}}" alt="..." width="100px" style="padding-top: 30px;">
                                    </center>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-text"><strong>{{$b[0]->namaBarang}}</strong></h6>
                                        <h6 class="card-text"><strong>{{$b[0]->merekBarang}}</strong></h6>
                                        <h6 class="card-text"><strong>{{$b[0]->kategoriBarang}}</strong></h6>
                                        <h6 class="card-text"><strong>Price : Rp{{$b[0]->hargaBarang}}</strong></h6>
                                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <p><strong>ID :</strong> {{$order[$i]->id}}
                        <p class="card-text"><strong>Date :</strong> {{$order[$i]->tanggalPemesanan}}
                        <p class="card-text"><strong>Duration :</strong> {{$order[$i]->jumlahHari}} @if($order[$i]->jumlahHari === 1) day @else days @endif
                        <p class="card-text"><strong>Price :</strong> Rp{{$order[$i]->hargaTotal}} </p>
                        <p class="card-text"><strong>Status :</strong> {{$order[$i]->statusPemesanan}}</p>
                        <form action="{{route('ubahStatusPemesanan')}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="id_pesanan" value="{{$order[$i]->id}}">
                            @if($order[$i]->statusPemesanan == "Sudah Dikirim" )
                            <button type="submit" class="btn btn-primary">Ubah Menjadi Siap di Pickup</button>
                            @else
                            <button type="submit" class="btn btn-danger" disabled><i class="fas fa-lock"></i>&nbsp;&nbsp;Tidak Dapat Mengubah Status</button>
                            @endif
                        </form>
                        <?php $i++; ?>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Footer -->
        @include('Template/footer')

        @include('Template/script')
</body>

</html>