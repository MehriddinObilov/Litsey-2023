@extends('layouts.siteFront')
@section('content')
    <section>
        <div class="container  " style="padding-top: 200px">
            <h1 class="j1">BIZNING ASOSIY MAQSADIMIZ</h1> <br>

            <div class="box7" style="display: flex;" >

                @foreach ($directorBatafsil as $director)
                  

                    <img src="{{ asset('/directors/' . $director->image) }}" alt=""  style="width: 600px; height: 500px;">


                    <div class="element"  style=" width: 500px;">
                        <p style="color: white; ,width: 500px;"> {{ ($director->text) }} </p>

                    </div>

                    @endforeach



            </div>
          




        </div>
    </section>
@endsection
