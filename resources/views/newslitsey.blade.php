@extends('layouts.siteFront')
@section('content')

  
<header id="header">
    <div class="swipper_item">
        <div class="swiper mySwiper">
            <div class="carden">
                <span>
                    <h2>
                        Keling birgalikda <br> Guliston Davlat Pedagogika Instituti <br> Akademik Litseyini 
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

<section class="news">
    <div class="container d-flex align-items-center justify-content-around " >

        @foreach ($news as $new )
        <div class="new_box" style=" background: white; margin: 20px 0">
            <div class="top_img">
                <img src="{{ asset('/news/' . $new->image) }}" alt="" >
               
            </div>
            <div class="text_card">
                <b style="color: rgb(25, 85, 175);"> {{$new->created_at->format('d - M Y')}}  </b> <br>
                <b style="color: black;">{{$new->title}} </b>
                {{-- <h4>{{$new->text}}</h4> --}}
                <span>
                    <h5></h5>
                    {{-- <a href="{{ route('batafsil', $new->id) }}">Batafsil ma'lumot
                    </a> --}}
                    <a href="{{route('batafsil' ,  $new->id)}}" style="background: blue; margin-top: 100px;">Batafsil</a>
                </span>
            </div>
        </div>
        @endforeach
        
      
        
    </div>
</section>

@endsection