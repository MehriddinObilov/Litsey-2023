@extends('layouts.siteFront')
@section('content')
    <header id="header">
        <div class="swipper_item">
            <div class="swiper mySwiper">
                <div class="carden">
                    <span>
                        <h2>
                            Keling biz bilan<br> Guliston Davlat Pedagogika Instituti <br> Akademik Litseyining
                            rahbariyatiga
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

    <section id="section-Boss">
        <div class="container">
            <div class="flex">

                @foreach ($ourGoals as $goal )
                <div class="card-slect">
                    <div class="left">
                        <div class="imgBox">
                          
                            <img src="{{ asset('/ourGoal/' . $goal->image) }}" alt="">
                            
                        </div>
                    </div>
                    <div class="right">
                        <h1>{{$goal->title}} </h1>
                        <span>{{$goal->unvoni}}</span>
                        <p>{{$goal->text}}
                          
                        </p>
                    </div>
                </div>
                @endforeach

             

             


            </div>
        </div>
    </section>

    <section id="section-Blackboard">
        <div class="top">
            <h1>Eng Faol Ustozlar burchagi</h1>
        </div>
        <div class="container">
            <div class="df-flex" style="padding-bottom: 150px; margin-bottom: -150px;">
                @foreach ($pupils as $pupil)
                    <div class="card-Teacher none_ef">
                        <div class="top">
                            <div class="img-Box">
                               
                                <img src="{{ asset('/activeteacher/' . $pupil->image) }}" alt="">
                               
                            </div>
                        </div>
                        <div class="midle">
                            <h2>{{ $pupil->title }}<br></h2>
                        </div>
                        <p>{{ $pupil->text }}</p>
                        <hr>
                        <div class="icon">
                            <a href="https://t.me/{{ $pupil->telegram }}"><i class="fa-brands fa-telegram"></i></a>
                            <a href="{{ $pupil->tel }}"><i class="fa-solid fa-phone"></i></a>
                        </div>
                    </div>
                @endforeach





            </div>
        </div>
    </section>
@endsection
