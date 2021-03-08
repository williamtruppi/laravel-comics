@extends('layouts.guest.app')

@section('content')

    <section class="comics-graphics d-flex">
        <div class="comics-graphics-title">
            <h1>COMICS & GRAPHIC NOVELS</h1>
        </div>
        @foreach ($comics as $comic)
            <div class="comics-card-container">
                <div class="comics-card">
                    <div class="comic_type">
                        <h5>COMIC BOOK</h5>
                    </div>
                    <a href="{{route('guest.show', ['comic' => $comic->slug])}}">
                        <img src="{{asset('storage/' . $comic->img_cover)}}" alt="">
                    </a>
                    <h5>{{$comic->title}}</h5>
                    @if ($comic->available == 1)
                        <h5 id="available_comics">AVAILABLE NOW</h5>
                    @else
                        <h5 id="available_comics">NOT AVAILABLE</h5>
                    @endif   
                </div>
            </div>
        @endforeach
    </section>
    

    <section class="must_reads">
        <h1>MUST READS</h1>
        <div class="must_reads_wrapper">
            <div class="container d-flex">
                @foreach ($musts as $must)
                <div class="single_must">
                    <a href="{{-- {{route('guest.show', ['must' => $must->slug])}} --}}">
                        <img src="{{asset('storage/' . $must->img)}}" alt="">
                    </a>
                    <h5 id="subtitle_must"><strong>{{$must->subtitle}}</strong></h5>
                    <h5><strong>{{$must->title}}</strong></h5>
                    <p>{{$must->content}}</p>
                </div>
            @endforeach
            </div>
        </div>
    </section>

    <section class="comics-graphics d-flex" id="series-list">
        <div class="comics-graphics-title" id="series-list-title">
            <h1>CURRENT SERIES</h1>
        </div>
        <div class="series-list-wrapper d-flex">
            @foreach ($series as $serie)
            <div class="comics-card-container d-flex" id="series-card-container">
                <div class="comics-card" id="serie-card">

                    <a href="{{-- {{route('guest.show', ['serie' => $comic->slug])}} --}}">
                        <img src="{{asset('storage/' . $serie->img)}}" alt="">
                    </a>
                    <h5><small>{{$serie->title}}</small></h5>
                </div>
            </div>
        @endforeach
        </div>
    </section>

@endsection
        
         

