@extends('layouts.siteFront')
@section('content')
    <section ">
        <div class="container  " style="padding-top: 200px">
            <h1 class="j1">So'ngi yangiliklar</h1> <br>

            <div class="box7" >

                @foreach ($litseyNews as $new)
                   

                    <div class="new" style="width: 800px; height: 800px;">
                        <img src="{{ asset('/news/' . $new->image) }}" alt="" style="width: 800px; height: 600px;"> <br> <br>
                        <p style="color: white;, width: 700px; height: 700px">{{ $new->text }}</p>
                    </div>
                
                @endforeach
            </div>
        </div>
    </section> <br> <br> <br> <br> <br>
@endsection
