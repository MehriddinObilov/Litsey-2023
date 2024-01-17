@extends('layouts.siteFront')
@section('content')

<header id="header">
    <div class="swipper_item">
        <div class="swiper mySwiper">
            <div class="carden">
                <span>
                    <h2>
                        Xush kelibsiz <br> Toshkent Davlat Axborot Texnalogiyalar <br> Universitedining
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
            <!-- <div class="swiper-button-next"></div> -->
            <!-- <div class="swiper-button-prev"></div> -->
            <!-- <div class="swiper-pagination"></div> -->
        </div>
    </div>
</header>

<section id="section-structure">

    <div class="box1">
        <div class="container">
            <h2 class="p-3">LITSEYIMIZNING MODDIY-TEXNIKV BAZASI</h2>
            <div class="history">
                <div data-aos="fade-right" class="left">
                    <div class="me_left">
                    </div>
                    <img src="./img/Litsey/litsety.4.jpg" alt="">
                </div>
                <div class="right bir" data-aos="fade-left">
                    <h1>Аkademik litseyning o’quvchilarni qabul qilish bo’yicha ichki quvvati 540 o’ringa
                        mo’ljallangan..</h1> <br>
                    <p>Аkademik litseyning o’quvchilarni qabul qilish bo’yicha ichki quvvati 540 o’ringa
                        mo’ljallangan.
                        Аkademik litseyning o’quvchilarni qabul qilish bo’yicha ichki quvvati 540 o’ringa
                        mo’ljallangan.Аkademik litseyning o’quvchilarni qabul qilish bo’yicha ichki quvvati 540 o’ringa
                        mo’ljallangan.Аkademik litseyning o’quvchilarni qabul qilish bo’yicha ichki quvvati 540 o’ringa
                        mo’ljallangan.Аkademik litseyning o’quvchilarni qabul qilish bo’yicha ichki quvvati 540 o’ringa
                        mo’ljallangan.</p>
                </div>
            </div>
        </div>
    </div>
</section>




<div class="container d-flex flex-wrap justify-content-between p-5  " >
    <h1 class="asd">AKADEMIK LITSEY MODDIY-TEXNIK BAZASI BO‘YICHA MA’LUMOTLAR</h1>
        <div class="left col-6   " >
            {{-- <div class="rang">
               
            </div> --}}
            <img src="./img/Litsey/litsety.5.jpg" alt="#Eror">
        </div>
        <div class="right col-6" >
            <h2>Аkademik litseyning o’quvchilarni qabul qilish bo’yicha ichki quvvati 540 o’ringa
                mo’ljallangan.</h2>
            <h2>Jami 28 ta o’quv xonalari, sport zali, sport ochiq maydoni, 2 ta kompyuter o’quv xonalari, 3
                ta laboratoriya xonalari mavjud.</h2>
            <p>Akademik litseyda yetarli shart-sharoitlar yaratish maqsadida yordamchi binoda joriy
                ta’mirlash ishlari amalga oshirildi, bunda zamonaviy kutubxona, namunaviy sud zali va barcha
                qulayliklarga ega litsey oshxonasi tashkil etildi.</p>
            <p>Shuningdek, ushbu binoning issiqlik tizimi tubdan yangilandi, yordamchi binoda eskirgan va
                yaroqiz holga kelgan tovar-moddiy boyliklar utilizatsiya qilinganligi, bundan tashqari
                akademik litseyning ma’muriy binosida ta’mirlash ishlari amalga oshirildi</p>
            <p>Yong‘in xavfsizligi qoidariga rioya etish yuzasidan akademik litseyning o‘quv va yordamchi
                binolarida yong‘indan xabar beruvchi uskunalarni o‘rnatish va joriy ta’mirlash ishlarini
                bajarish uchun davlat xaridlari elektron tizimi orqali shartnoma rasmiylashtirib, yong‘indan
                xabar beruchi uskunalar yangisiga almashtirildi hamda joriy ta’mirlandi.</p>
            <p>Akademik litseyning barcha o‘quv xonalariga <span>20 dona zamonaviy sensor doskali smart
                    monitorlari</span> shuningdek <span>Rahbariyat hamda pedagog- xodimlarga qulay
                    sharoitlar yaratish maqsadida yangi zamonaviy kompyuter texnika vositalari </span> o‘rnatildi.</p>
            <p>Bundan tashqari akademik litsey o‘quvchilari sport turlari bilan doimiy shug‘ullanishlari
                uchun kerakli sport anjomlari (stol tennisi, raketkalar, futbol, voleybol, basketbol
                to‘plari, o‘quvchi formasi va boshqalar) xarid qilingan.</p>
        </div>
    </div> 

    @endsection

    