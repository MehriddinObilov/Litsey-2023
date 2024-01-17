@extends('layouts.siteFront')
@section('content') 
          
            <header id="header">
                <div class="swipper_item">
                    <div class="swiper mySwiper">
                        <div class="carden">
                            <span>
                                <h2>
                                   Guliston Davlat Pedagogika Instituti <br> Akademik Litseyi
                                    haqida
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

            <section id="section-about">

                @foreach ($aboutlitseys as $about )
                <div class="container d-flex justify-content-between align-items-center p-5 flex-wrap">
                    <div class="left">
                      <img src="{{ asset('/litsey/' . $about->image) }}" alt="">
                       
                        
                    </div>
                    <div class="right">
                        <div class="top d-flex align-items-center p-2 flex-wrap">

                            <h2> <span>Litseyimiz</span> haqida Qisqacha Ma`lumot</h2>
                        </div>
                        <div class="bottom top d-flex align-items-center p-2 flex-wrap">
                            <h1> <span>O'rganishning</span> Innovatsion Usuli bu</h1>
                            <p>
                                {{$about->text}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </section>

            <section id="section-card">
                <div class="box6 ozgar">
                    <h1>Litseyimizdan lavhalar</h1>
                    <div class="container">
                        <div class="boxent">
                            @foreach ($plates as $plate )
                            <div data-aos="flip-down" class="card">
                                <div class="imgBx">
                                    
                                    <img src="{{ asset('/plate/' . $plate->image) }}" alt="">
                                </div> 
                                <div class="contenter">
                                    <h2>{{$plate->title}}</h2>
                                    <p>{{$plate->text}}</p>
                                </div>
                            </div>  
                            @endforeach
                       

                        </div>
                    </div>
                </div>
            </section>

            <!-- ыфвв -->
            <section id="section-vedio">
                <div class="container d-flex flex-wrap justify-content-between">
                    <div class="left">
                        <div class="top">
                            <video controls class="ved">
                                <source src="./img/vaediolar/1.mp4" type="video/mp4" class="ved">
                            </video>
                        </div>
                    </div>
                </div>
            </section>
@endsection