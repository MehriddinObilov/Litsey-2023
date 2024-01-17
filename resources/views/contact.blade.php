@extends('layouts.siteFront')
@section('content')
    <header id="header">
        <div class="swipper_item">
            <div class="swiper mySwiper">
                <div class="carden">
                    <span>
                        <h2>
                            Biz bilan bog`laning <br> Guliston Davlat Pedagogika Instituti <br> Akademik Litseyi
                            sizni kutmoqda
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
    <section>
        <div class="box1">
            <h1>Biz bilan boglaning</h1>
            <div class="container">
                <div class="crad_even">
                    <h2>Foydalanish uchun izohlar</h2>
                    <hr>
                    <div class="one">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>
                            <h2><b>Bizning Litseyga tashrif buyuring</b></h2>
                            <p>Sirdaryo vilovati guliston shahri 2-mavzey Islomobod mahallasi yulduz ko'chasi 1-uy</p>
                        </span>
                    </div>
                    <div class="one">
                        <i class="fa-solid fa-headset"></i>
                        <span>
                            <h2><b>Savollaringiz bormi biz bilan bog'laning</b></h2>
                            <p>+998991234567 Litseyning telefon raqami</p>
                        </span>
                    </div>
                    <div class="one top">
                        <i class="fa-regular fa-clock fa-spin"></i>
                        <span>
                            <h2><b>Ish vaqti</b></h2>
                            <p>Biz siz bilan 24-soat aloqadamiz</p>
                            <p>Har kuni soat 8:00 dan 17:30 gacha</p>
                            <p>Yakshanba: yopiq</p>
                        </span>
                    </div>
                </div>
                <form class="form" action="{{ route('tgContact') }}" method="POST">
                    @csrf
                    <p class="title">Biz bilan bog'laning</p>
                    <div class="flex">
                        <label>
                            <input required="" placeholder="Firstname" type="text" class="input" name="firstname">
                        </label>

                        <label>
                            <input required="" placeholder="Lastname" type="text" class="input" name="lastname">
                        </label>
                    </div>
                    <label>
                        <input required="" placeholder="+998" type="number" class="input" name="phone">
                    </label>
                    <label>
                        <textarea required="" placeholder="Izohlar" type="text" class="input" name="textarea"></textarea>
                    </label>
                    <button class="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
