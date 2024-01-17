@extends('layouts.siteFront')
@section('content')
    <header id="header">
        <div class="swipper_item">
            <div class="swiper mySwiper">
                <div class="carden">
                    <span>
                        <h2>
                            Guliston Davlat Pedagogika Instituti <br> Akademik Litseyidan
                            Lavhalar
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


    <section id="section-gallery">
        <div class="container">
            <div class="top text-center p-5">
                <h1>Galeriya...</h1>
            </div>

            <div class="gallery">
                <ul class="controls">
                    @if(count($categories) > 0)
                    <li class="buttons active" data-filter="*">Barchasi</li>
                    @foreach ($categories as $category )
                    <li class="buttons" data-filter="{{ $category->id }}">{{ $category->name }}</li>
                    @endforeach
                    @endif
                    {{-- <li class="buttons" data-filter="chocolate">Matimatika</li>
                    <li class="buttons" data-filter="coke">Fikzika</li>
                    <li class="buttons" data-filter="juice">Iqtisod</li>
                    <li class="buttons" data-filter="sendwich">Dasturlash</li> --}}
                </ul>
-
                <div class="images-container">
                    <!-- Muz-qaymoq start -->
                    @if(count($gallerys) > 0)
                    @foreach ($gallerys as $gallery )
                    <?php
                        $category = App\Models\category::find($gallery->category_id);
                    ?>
                    <a href="./img/GaleriyaImg/muz1.jpeg" class="image ice-crem">
                        
                        <img src="{{ asset('/gallery/' . $gallery->image) }}" alt="#Eror">
                       
                    </a>
                    @endforeach
                    @endif
                 
                    {{-- <a href="./img/GaleriyaImg/muz2.jpeg" class="image ice-crem">
                        <img src="./img/GaleriyaImg/muz2.jpeg" alt="#Eror">
                    </a>
                    <a href="./img/GaleriyaImg/muz3.jpg" class="image ice-crem">
                        <img src="./img/GaleriyaImg/muz3.jpg" alt="#Eror">
                    </a> --}}

                    <!-- Muz-qaymoq end -->

                    <!-- Choko start -->
                    {{-- <a href="./img/GaleriyaImg/choco1.jpg" class="image chocolate">
                        <img src="./img/GaleriyaImg/choco1.jpg" alt="#Eror">
                    </a>
                    <a href="./img/GaleriyaImg/choco2.jpg" class="image chocolate">
                        <img src="./img/GaleriyaImg/choco2.jpg" alt="#Eror">
                    </a>
                    <a href="./img/GaleriyaImg/choco3.jpg" class="image chocolate">
                        <img src="./img/GaleriyaImg/choco3.jpg" alt="#Eror">
                    </a> --}}
                    <!-- choko end -->

                    <!-- coke start -->

                    {{-- <a href="./img/GaleriyaImg/soc1.jpg" class="image coke">
                        <img src="./img/GaleriyaImg/soc1.jpg" alt="#Eror">
                    </a>
                    <a href="./img/GaleriyaImg/soc2.jpg" class="image coke">
                        <img src="./img/GaleriyaImg/soc2.jpg" alt="#Eror">
                    </a>
                    <a href="./img/GaleriyaImg/soc3.jpg" class="image coke">
                        <img src="./img/GaleriyaImg/soc3.jpg" alt="#Eror">
                    </a> --}}

                    <!-- coke end -->

                    <!-- juice start -->


                    {{-- <a href="./img/GaleriyaImg/tort4.jpeg" class="image juice">
                        <img src="./img/GaleriyaImg/tort4.jpeg" alt="#Eror">
                    </a>
                    <a href="./img/GaleriyaImg/tort5.jpeg" class="image juice">
                        <img src="./img/GaleriyaImg/tort5.jpeg" alt="#Eror">
                    </a>

                    <a href="./img/GaleriyaImg/tort6.jpeg" class="image juice">
                        <img src="./img/GaleriyaImg/tort6.jpeg" alt="#Eror">
                    </a> --}}

                    <!-- juice end -->

                    <!-- sendwich start -->

                    {{-- <a href="./img/GaleriyaImg/send1.jpeg" class="image sendwich">
                        <img src="./img/GaleriyaImg/send1.jpeg" alt="#Eror">
                    </a>

                    <a href="./img/GaleriyaImg/send2.jpg" class="image sendwich">
                        <img src="./img/GaleriyaImg/send2.jpg" alt="#Eror">
                    </a>

                    <a href="./img/GaleriyaImg/send4.jpg" class="image sendwich">
                        <img src="./img/GaleriyaImg/send4.jpg" alt="#Eror">
                    </a> --}}

                    <!-- sendwich end -->

                </div>

            </div>

        </div>
    </section>



   
@endsection


