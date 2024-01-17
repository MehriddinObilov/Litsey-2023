@extends('layouts.siteFront')
@section('content')


<header id="header">
    <div class="swipper_item">
        <div class="swiper mySwiper">
            <div class="carden">
                <span>
                    <h2>
                        Siz bilan Birgalikda <br> Guliston Davlat Pedagogika Instituti <br> Akademik Litseyi tuzilmasini 
                        kuzatamiz
                      
                    </h2>
                    <p>Keling birgalikda <span id="element"></span></p>
                </span>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./img/header img.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/header img 2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/header img 3.png" alt=""></div>
                <div class="swiper-slide"><img src="./img/header img 4.jpg" alt=""></div>
            </div>
            <!-- <div class="swiper-button-next"></div> -->
            <!-- <div class="swiper-button-prev"></div> -->
            <!-- <div class="swiper-pagination"></div> -->
        </div>
    </div>
</header>


<section id="section-ImgBox">
    <div class="container">
        <div class="tops">
            <h1>-AKADEMIK LITSEY TUZILMASI-</h1>
        </div>
        @foreach ($structures as $structure )
        <div class="top">
          
            <img src="{{ asset('/structure/' . $structure->image) }}" alt="">
           
        </div>
        @endforeach
       
    </div>
</section>

@endsection