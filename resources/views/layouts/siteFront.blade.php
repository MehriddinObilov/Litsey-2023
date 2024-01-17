<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootsrap link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- swipper js link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Css link  -->
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/aloqa.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bizhaqimizda.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/galeriya.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/litsey.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/litseyTu.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/news.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/onlineBook.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/rahbariyat.css') }}">


    <title>GSPI Akademik Litseyi</title>
</head>

<body>
    <div class="up">
        <a href="#header"><i class="fa-solid fa-chevron-up"></i>
            <i class="fa-solid fa-chevron-up"></i>
        </a>
    </div>
    <div class="background_image">
        <div class="balck_curtain">
            <nav class="d-flex align-items-center">
                <div class="container">
                    <!-- <marquee
                        style="text-transform: uppercase; color: white; font-size: 15px; background-color: red; font-family: Arial, Helvetica, sans-serif;">
                        <span style="margin:0 50px;">sayt test rejimida</span> <span style="margin:0 50px;">sayt test
                            rejimida</span>
                        <span style="margin:0 50px;">sayt test rejimida</span></marquee> -->
                    <div style="padding-bottom: 10px;"
                        class="top_nav d-flex justify-content-between align-items-center ">
                        <div class="logo d-flex">
                            <div class="img"></div>
                            <img src="{{asset('/img/guldpi_logo.png')}}" alt="">
                            <span>
                                <a href="{{ route('index') }}">
                                    <h2>Akademik litsey</h2>
                                </a>
                                <p>Guliston Davlat Pedagogika Instituti qoshidagi </p>
                            </span>
                        </div>
                        <div class="icon_add d-flex ">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            <div class="div">
                                <a href="{{ route('admin.dashboard') }}">Tizimga Kirish
                                </a>

                            </div>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-bars"></i>
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                    </div>
                    <div class="bottom_nav">
                        <nav style="background: #fff; border-top-right-radius: 15px; border-top-left-radius: 15px;"
                            class="navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('index') }}">Bosh sahifa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('about') }}">Biz haqimizda</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('management') }}">Bizning jamoa</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Ta`lim
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item"
                                                        href="{{ route('pupils') }}">O`quvchilar</a></li>
                                                <li><a class="dropdown-item" href="{{ route('litseytuzilma') }}">Litsey
                                                        tuzilmasi</a></li>
                                                <li><a class="dropdown-item" href="#">Imtihondagi qaydnomalar</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="{{ route('technicalstructure') }}">Litseyning moddiy -
                                                        texnik <br>
                                                        bazasi</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('gallerylitsey') }}">Galareya</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('newslitsey') }}">Yangiliklar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('onlinebook') }}">Elektron kutubxona</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('contact') }}">Qabul</a>
                                        </li>
                                    </ul>


                                    <!-- <form class="d-flex">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form> -->
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </nav>

            <div class="menu">
                <div class="bottom_na">
                    <nav class="navbar navbar-expand-lg navbar-light" style="background: transparent;">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="flex-direction: column;">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('index') }}">Bosh sahifa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('about') }}">Biz haqimizda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('management') }}">Bizning jamoa</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Ta`lim
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="{{ route('pupils') }}">O`quvchilar</a></li>
                                            <li><a class="dropdown-item" href="{{ route('litseytuzilma') }}">Litsey tuzilmasi</a></li>
                                            <li><a class="dropdown-item" href="">Imtihondagi qaydnomalar</a></li>
                                            <li><a class="dropdown-item" href="{{ route('technicalstructure') }}">Litseyning moddiy - texnik <br>
                                                    bazasi</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('gallerylitsey') }}">Galareya</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('newslitsey') }}">Yangiliklar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('onlinebook') }}">Elektron kutubxona</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contact') }}">Qabul</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>


            @yield('content')

            <footer>
                <div class="waves">
                    <div class="wave" id="wave1"></div>
                    <div class="wave" id="wave2"></div>
                    <div class="wave" id="wave3"></div>
                    <div class="wave" id="wave4"></div>
                </div>
                <ul class="social_icon">
                    <li><a href="#!">
                            <i class="fa-brands fa-facebook"></i>
                        </a></li>
                    <li><a href="#!">
                            <i class="fa-brands fa-telegram"></i>
                        </a></li>
                    <li><a href="#1">
                            <i class="fa-brands fa-instagram"></i>
                        </a></li>
                    <li><a href="#!">
                            <i class="fa-solid fa-square-phone"></i>
                        </a></li>
                </ul>
                <p>GulDPI Akademik Litseyi</p>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Load library from the CDN -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="{{ asset('/js/index.js') }}"></script>
</body>

</html>
