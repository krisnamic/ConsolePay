<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<title>ConsolePay | Home</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Styles
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style> -->

<!-- Head -->
@include('Template/head')

</head>

<body class="antialiased">
    <div id="load"></div>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

        <!-- Navbar -->
        <nav class="main-header header sticky-top navbar-expand navbar-white navbar-light text-center">
        <!-- Left navbar links -->
        <!-- <ul class="navbar-nav"> -->
            <!-- <div class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </div> -->
            <!-- <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li> -->
            <!-- </ul> -->

        <div class="d-flex header-child bg-white navbar">
            <!-- <div class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars fa-lg"></i></a>
            </div> -->
            <a class="logo-click" href="{{ route('userHome') }}">
            <img src="{{ asset('img/consolepay/consolepay-horizontal.svg')}}" width="240" type="image/svg+xml">
            </a>
            <div class="ml-auto">
            @if (Route::has('login'))
            @auth
            @if(Session::has('user_id'))
            <li class="nav-item d-none d-sm-inline-block" style="margin-left: 15px; margin-right: 15px;">
                <a href="{{route('viewShoppingCart')}}"><i class="fas fa-shopping-cart"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('viewOrder')}}"><i class="fas fa-truck"></i></a>
            </li>
            @endif
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('logout')}}" class="nav-link">Logout</a>
            </li>
            @else
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('login') }}" class="nav-link">Login</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('register') }}" class="nav-link">Register</a>
            </li>
            @endif
            @endauth
            @endif
            </div>
        </div>
        </nav>

        <!-- Section 1: Main Logo -->
        <div class="main-section max-w-6xl mx-auto sm:px-6 lg:px-8 bg-section-1">
            <div class="second-section mt-8 dark:bg-gray-800 overflow-hidden sm:rounded-lg text-center" style="padding-bottom: 3em;">
                <!-- ConsolePay Logo -->
                <object class="home-logo" data="img/consolepay/consolepay-logo.svg" style="width: 34em !important;" type="image/svg+xml" data-aos="fade-down" data-aos-duration="1000" data-aos-easing="ease-in-out"></object>
                <!-- Rent Button -->
                <button type="button" onclick="location.href='#displayBarang'" class="btn btn-large btn-light shadow" data-aos="fade-down" data-aos-delay="500" data-aos-anchor-placement="top-bottom">Rent a Video Game Console!</button>
            </div>
        </div>

        <br>

        <!-- Section 2: Console -->
        <div class="main-section max-w-6xl mx-auto sm:px-6 lg:px-8" style="margin: 2%;">
            <div class="second-section flex mt-8 bg-red-home dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="d-flex justify-content-center" style="margin: 0 25%; margin-top: 2%">
                    <img src="img/gambar/psvita.png" class="w-30" alt="" data-aos="zoom-in" data-aos-delay="50">
                    <img src="img/gambar/xbox-one-s.png" class="w-30" alt="" data-aos="zoom-in" data-aos-delay="100">
                    <img src="img/gambar/ps5.png" class="w-30" alt="" data-aos="zoom-in" data-aos-delay="150">
                    <img src="img/gambar/switch.png" class="w-30" alt="" data-aos="zoom-in" data-aos-delay="200">
                </div>
                <div class="text-center" style="margin: 2% 0;" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                    <h1>Choose from a wide collection of <strong style="font-size: 50px;">modern video game consoles!</strong></h1>
                </div>
            </div>
        </div>

        <!-- Section 3: Order Flow -->
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 section-2" style="margin: 2%;">
            <div class="flex mt-8 bg-blue-home dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="d-flex justify-content-center" style="margin: 0 25%; margin-top: 2%">
                    <img src="img/pendukung/courier.svg" class="w-30" alt="" data-aos="zoom-in" data-aos-delay="50">
                    <img src="img/pendukung/arrow.svg" class="w-30" alt="" data-aos="zoom-in" data-aos-delay="100">
                    <img src="img/pendukung/home.svg" class="w-30" alt="" data-aos="zoom-in" data-aos-delay="150">
                </div>
                <div class="text-center" style="margin: 2% 0;" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                    <h1>Order online <strong style="font-size: 50px;">hassle-free</strong>, with trusted courier to deliver your console!</h1>
                </div>
            </div>
        </div>

        <!-- Section 4: Play Console -->
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 section-2" style="margin: 2%;">
            <div class="flex mt-8 bg-green-home dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="d-flex justify-content-center" style="margin: 0; margin-top: 2%; width: 100%;">
                    <img src="{{ asset('img/pendukung/playingGames.png')}}" class="w-30 shadow" alt="" data-aos="zoom-in" data-aos-delay="50">
                </div>
                <div class="text-center" style="margin: 2% 0;" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                    <h1>Have some <strong style="font-size: 50px;">FUN</strong> with your new console!</h1>
                </div>
            </div>
        </div>

        <!-- Section 6: Rent Button 2 -->
        <!-- <div class="text-center" style="margin-top: 10%;">
            <h1 data-aos="fade-down" data-aos-anchor-placement="top-bottom">What are you waiting for?</h1>
            <button type="button" onclick="location.href='#displayBarang'" class="btn btn-large btn-outline-primary shadow" data-aos="fade-down" data-aos-anchor-placement="top-bottom">Rent a Video Game Console!</button>
        </div> -->

        <!-- Section 5: Display list Barang-->
        <div id="displayBarang" class="container mt-5" style="margin-top: 0;">
            <br><br>
            <div class="text-center" style="margin: 2% 0;" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                <h1>Video Game Console Catalogue</h1>
            </div>
            <div class="row row-cols-4">
                @foreach($barang as $b)
                
                @if($b->stokBarang === 0)
                <div class="col-disabled d-flex justify-content-center">
                    <div class="card shadow d-flex" style="width: 18rem; border-radius: 0.4em; opacity: 50%;">
                @else
                <div class="col d-flex justify-content-center">
                    <div class="card shadow d-flex" style="width: 18rem; border-radius: 0.4em;">
                @endif
                        <div class="bg-red-home text-center" style="font-size: 1.2em; border-radius: 0.4em 0.4em 0 0;">
                            {{$b->namaBarang}}
                        </div>
                        <a href="/{{$b->id}}" style="color:black">
                            <img src="{{asset('img/gambar/'.$b->gambarBarang)}}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <img src="{{asset('img/logo/'.$b->logoBarang)}}" class="card-img-top" alt="...">
                                <!-- <h3 class="card-title">{{$b->namaBarang}}</h3> -->
                                <p class="card-text" style="margin-top: 10%;">Rp{{$b->hargaBarang}}</p>
                                <p class="card-text">Available : {{$b->stokBarang}}</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <br><br>

        <!-- Section 7: Brand -->
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex mt-8 bg-white dark:bg-gray-800 overflow-hidden sm:rounded-lg">
                <div class="text-center">
                    <p>Sponsored by :</p>
                </div>
                <div class="d-flex justify-content-center" style="margin: 0 25%;">
                    <img src="img/merek/sony.svg" class="w-30 merek-home" alt="">
                    <img src="img/merek/microsoft.svg" class="w-30 merek-home" alt="">
                    <img src="img/merek/nintendo.svg" class="w-30 merek-home" alt="">
                </div>
            </div>
        </div>

        <br><br>

        <!-- Footer -->
        @include('Template/footer')

    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        document.onreadystatechange = function () {
        var state = document.readyState
        if (state == 'complete') {
                document.getElementById('interactive');
                document.getElementById('load').style.visibility="hidden";
        }
        }
    </script>
    @include('Template/script')
</body>

</html>