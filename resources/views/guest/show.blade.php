@extends('layouts.guest.app')

@section('content')
    
    <section class="single-product">

        <div class="cover_jumbotron" style="background-image: url({{asset('storage/cover_images/jumbo_BATMAN_Cv106.jpg')}})">
        </div>

        <div class="cover_image">
            <div class="cover_image_footer">   
                <div class="container">
                    <img src="{{asset('storage/' . $comic->img_cover)}}" alt="">
                </div>
            </div>
        </div>

        <div class="single_comic_info">
            <div class="container">
                <h1>{{$comic->title}}</h1>

                <div class="price_available d-flex">
                    <strong>U.S. Price: ${{$comic->price}}</strong>
                </div>
            </div>
        </div>

    </section>

@endsection