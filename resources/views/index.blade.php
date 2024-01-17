@extends('layouts.siteFront')
@section('content')           
            <header id="header">
                <div class="swipper_item">
                    <div class="swiper mySwiper">
                        <div class="carden">
                            <span>
                                <h2>
                                    Xush kelibsiz <br> Guliston Davlat Pedagogika Instituti <br> Akademik Litseyi
                                    saytiga
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
                         {{-- <div class="swiper-button-next"></div> -->
                        <div class="swiper-button-prev"></div> -->
                        <div class="swiper-pagination"></div> --> --}}
                    </div>
                </div>
            </header>

            <section>
                <div class="constructor_Full bg-white">
                    <div class="container">
                        <div class="construction">
                            <div class="constructionContainer">
                                <div class="constructionText">
                                    <h1>BIZNING ASOSIY MAQSADIMIZ</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias ullam
                                        possimus
                                        architecto
                                        suscipit aliquam praesentium placeat accusamus modi, quia, magnam officia
                                        voluptas
                                        quae
                                        eligendi vitae magni aperiam sequi voluptatum. Itaque.
                                    </p>
                                </div>
                                <div class="constructionCards">

                                    @foreach ($directors as $director )
                                        <div class="card">
                                        <div class="imgBox">
                                            <div class="element">
                                                <p> {{ \Str::limit($director->text, 100) }} </p>
                                                <a href="{{ route('goal', $director->id) }}  ">KO'PROQ MA'LUMOT OLISH</a>
                                            </div>
                                            <img src="{{ asset('/directors/' . $director->image) }}" alt="">
                                        </div>
                                        <div class="widget">
                                            <div class="iconImg">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                    viewBox="0 0 512 512">
                                                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path
                                                        d="M176 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64c-35.3 0-64 28.7-64 64H24c-13.3 0-24 10.7-24 24s10.7 24 24 24H64v56H24c-13.3 0-24 10.7-24 24s10.7 24 24 24H64v56H24c-13.3 0-24 10.7-24 24s10.7 24 24 24H64c0 35.3 28.7 64 64 64v40c0 13.3 10.7 24 24 24s24-10.7 24-24V448h56v40c0 13.3 10.7 24 24 24s24-10.7 24-24V448h56v40c0 13.3 10.7 24 24 24s24-10.7 24-24V448c35.3 0 64-28.7 64-64h40c13.3 0 24-10.7 24-24s-10.7-24-24-24H448V280h40c13.3 0 24-10.7 24-24s-10.7-24-24-24H448V176h40c13.3 0 24-10.7 24-24s-10.7-24-24-24H448c0-35.3-28.7-64-64-64V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H280V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H176V24zM160 128H352c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H160c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32zm192 32H160V352H352V160z" />
                                                </svg>
                                            </div>
                                            <h1>{{$director->title}}</h1>
                                        </div>
                                    </div>
                                    @endforeach
                                  
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="box5">
                        <h1>Statistik malumotlar</h1>
                        <div class="static">
                            <div class="card c1">
                                <span></span>
                            </div>
                            <div class="text">
                                <h2>OTM ga kirishlar </h2>
                                <p>90%</p>
                            </div>
                            <div class="card c2">
                                <span></span>
                            </div>
                            <div class="text">
                                <h2>Milliy Universitedlarga kirganlar </h2>
                                <p>65.7%</p>
                            </div>
                            <div class="card c3">
                                <span></span>
                            </div>
                            <div class="text">
                                <h2>Xorijiy Universitedlarga kirganlar</h2>
                                <p>70%</p>
                            </div>
                            <div class="card c4">
                                <span></span>
                            </div>
                            <div class="text">
                                <h2>O'qishga kira olmaganlar soni</h2>
                                <p>10%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box1">
                    <div class="container">
                        <h2>Litseyimiz haqida</h2>
                        @foreach ($aboutlitseys as $aboutlitsey )
                        <div class="history">
                            <div data-aos="fade-right" class="left">
                                <div class="me_left">
                                </div>
                               
                                <img src="{{ asset('/litsey/' . $aboutlitsey->image) }}" alt="">
                              
                            </div>
                            <div class="right" data-aos="fade-left">
                                <h1>{{$aboutlitsey->title}}</h1> <br>
                                <p style="color: #000">{{$aboutlitsey->text}}</p>
                            </div>
                        </div>
                        @endforeach
                      
                    </div>
                </div>
                <div class="container">
                    <h1 class="j1">So'ngi yangiliklar</h1>
                    <div class="box7">

                        @foreach ($news as $new)
                        <div data-aos="zoom-in-right" class="card">
                            <div class="new">
                                <p>NEW</p>
                            </div>
                         
                            <img src="{{ asset('/news/' . $new->image) }}" alt="">
                           
                            <div class="intro">
                                <p> {{ \Str::limit($new->text, 200) }}</p>
                            </div>
                            <div class="div">
                                <a href="{{ route('batafsil', $new->id) }}">Batafsil ma'lumot
                                </a>
                                <strong></strong>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                </div>
                <div class="box8">
                    <h2 class="text-center mb-4" style="color: #000; font-size: 30px;">Homiy Tashkilotlar</h2>
                    <div style="flex-wrap: wrap;" class="container d-flex align-items-center justify-content-around">
                        <div class="box"><img src="./img/Uzbekistan_coa.png" alt=""></div>
                        <div class="box sa"><img src="./img/Uzbekistan_coa.png" alt=""></div>
                        <div class="box"><img src="./img/Uzbekistan_coa.png" alt=""></div>
                        <div class="box sa"><img src="./img/Uzbekistan_coa.png" alt=""></div>
                        <div class="box sa"><img src="./img/Uzbekistan_coa.png" alt=""></div>
                    </div>
                </div>
            </section>
@endsection