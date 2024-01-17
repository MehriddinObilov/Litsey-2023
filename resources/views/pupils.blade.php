@extends('layouts.siteFront')
@section('content')



<header id="header">
    <div class="swipper_item">
        <div class="swiper mySwiper">
            <div class="carden">
                <span>
                    <h2>
                     Guliston Davlat Pedagogika Instituti Akademik Litseyi  <br>
                        O‘quvchilari bilan tanishing!
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

<section id="section-student">
    <div class="top">
        <h1>AKADEMIK LITSEYNING 2022-2023 O'QUV YILI 1-KURS VA 2-KURS O'QUVCHILARI HAQIDA MA'LUMOT</h1>
    </div>
    <table border="2" width="100%">
        <tr>
            <td>
                <h1>Kurs</h1>
            </td>
            <td>
                <h1>O’g’il</h1>
            </td>
            <td>
                <h1>Qiz</h1>
            </td>
            <td>
                <h1>JAMI</h1>
            </td>
        </tr>
        <tr>
            <td>
                <h2>1-kurs</h2>
            </td>
            <td>120</td>
            <td>100</td>
            <td>220</td>
        </tr>
        <tr>
            <td>
                <h2>2-kurs</h2>
            </td>
            <td>340</td>
            <td>160</td>
            <td>500</td>
        </tr>
        <tr>
            <td>
                <h1>UMUMIY</h1>
            </td>
            <td>460</td>
            <td>260</td>
            <td>720</td>
        </tr>
    </table>
</section>

<section id="section-Blackboard">
    <div class="top">
        <h1>O'quvchilar</h1>
    </div>
    <div class="container">
        <div class="df-flex">
            @foreach ($pupils as $pupil)
                
           
            <div class="card-Teacher">
                <div class="top">
                    <div class="img-Box">
                       

                        <img src="{{ asset('/activeteacher/' . $pupil->image) }}" alt="">

                        
                    </div>
                </div>
                <div class="midle">
                    <h2>{{$pupil->title}}</h2>
                </div>     
               <p>{{$pupil->text}}</p>

                
                
            </div>
 @endforeach
        </div>
    </div>
</section>

@endsection