@extends('layouts.guest.app')

@section('content')
    
    <section class="single-product">

        <div class="cover_jumbotron" style="background-image: url({{asset('storage/' .  $comic->jumbocover)}})">
        </div>

        <div class="cover_image">
            <div class="cover_image_footer">   
                <div class="container">
                    <img src="{{asset('storage/' . $comic->img_cover)}}" alt="">
                </div>
            </div>
        </div>

        <div class="single_comic_info">

            <div class="single_comic_title_price_desc">
                <div class="container">
                    <h1>{{$comic->title}}</h1>

                <div class="price_available d-flex">
                    <strong style="color: white">U.S. Price: ${{$comic->price}}</strong>
                    @if ($comic->available == 1)
                        <strong style="color: #BAFD91">AVAILABLE</strong>
                    @else
                        <strong style="color: #BAFD91">NOT AVAILABLE</strong>
                    @endif
                    
                </div>

                <p>{{$comic->description}}</p>
                </div>
            </div>

            <div class="single_comic_talent_spec">
                <div class="container d-flex">
                    <div class="single_comic_talent">
                        <h1>Talent</h1>
                        <div class="spec_row">
                            <strong>Art by: </strong>
                            @foreach ($comic->artists as $artist)
                                <a href="#"><span>{{$artist->name}} {{$artist->lastname}},</span></a>
                            @endforeach
                        </div>
                        <div class="spec_row">
                            <strong>Written by: </strong>
                            @foreach ($comic->writers as $writer)
                                <a href="#"><span>{{$writer->name}} {{$writer->lastname}},</span></a>
                            @endforeach
                        </div>
                    </div>

                    <div class="single_comic_specs">
                        <h1>Specs</h1>
                        <div class="spec_row">
                            <strong>Series: </strong>
                            <a href="#">{{$comic->series}}</a>
                        </div>
                        <div class="spec_row">
                            <strong>U.S. Price: </strong>
                            <span>{{$comic->price}}</span>
                        </div>
                        <div class="spec_row">
                            <strong>On Sale Date: </strong>
                            <span>Mar 2 2021</span>
                        </div>
                        <div class="spec_row">
                            <strong>Volume/Issue #: </strong>
                            <span>{{$comic->volume}}</span>
                        </div>
                        <div class="spec_row">
                            <strong>Trim Size: </strong>
                            <span>6 5/8 x 10 3/16</span>
                        </div>
                        <div class="spec_row">
                            <strong>Page Count: </strong>
                            <span>{{$comic->page_count}}</span>
                        </div>
                        <div class="spec_row">
                            <strong>Rated: </strong>
                            <span>{{$comic->rated}}</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection